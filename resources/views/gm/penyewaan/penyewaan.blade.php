@extends('templates.admin.master')

@section('content')
    @php
        $can_reciving_order = auth_can(h_prefix('reciving_order'));
        $can_delete = auth_can(h_prefix('delete'));
        $can_selesai = auth_can(h_prefix('selesai'));
        $can_batalkan = auth_can(h_prefix('batalkan'));
    @endphp

    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">{{ $page_attr['title'] }}</h3>
            @if ($can_reciving_order)
                <a class="btn btn-rounded btn-success btn-sm" href="{{ route('admin.penyewaan.reciving_order') }}">
                    <i class="fas fa-plus"></i> Tambah Penyewaan
                </a>
            @endif
        </div>
        <div class="card-body">
            {{-- <li class="nav-item">
                <a class="nav-link py-3 px-5 border active show me-1" id="tab3" data-bs-toggle="tab"
                    href="#tabs_2_3" role="tab" aria-selected="true">
                    <span class="nav-link-icon d-block"><i class="fe fe-play"></i>
                        Videos</span>
                </a>
            </li> --}}

            <ul class="nav nav-pills nav-pills-circle mb-2" role="tablist">
                <input type="hidden" id="bulan" value="{{ date('m') }}">
                @php
                    $bulans = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                @endphp
                @foreach ($bulans as $k => $bulan)
                    <li class="nav-item">
                        <button type="button"
                            class="nav-link border py-1 px-3 me-2 mb-2 tabs {{ date('m') == $k + 1 ? 'active' : '' }}"
                            id="tab{{ $k + 1 }}" data-bs-toggle="tab" role="tab"
                            onclick="gantiBulan({{ $k + 1 }})">
                            <span class="nav-link-icon d-block">
                                {{ $bulan }}
                            </span>
                        </button>
                    </li>
                @endforeach
                <li>
                    <select id="tahun" class="form-control form-select form-select-sm select2 float-start me-2"
                        style="min-width: 100px">
                        @foreach ($years as $year)
                            <option value="{{ $year->year }}" {{ $year->year == date('Y') ? 'selected' : '' }}>
                                {{ $year->year }}
                            </option>
                        @endforeach
                    </select>
                </li>
            </ul>

            <table class="table table-hover" id="tbl_main">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Faktur Penyewaan</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Tanggal Kirim</th>
                        <th>Tanggal Pengambilan Barang</th>
                        <th>Total Pembayaran</th>
                        <th>Sisa Pembayaran</th>
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modal-batalkan">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-batalkan-title">Batalkan Penyewaan</h6>
                    <button aria-label="Tutup" class="btn-close" data-bs-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="BatalkanForm" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="batalkan_id">
                        <div class="form-group">
                            <label class="form-label" for="alasan">Alasan pembatalan
                                <span class="text-danger">*</span>
                            </label>
                            <textarea type="text" class="form-control" rows="3" id="alasan" name="alasan"
                                placeholder="Alasan pembatalan" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="BatalkanForm">
                        <li class="fas fa-save mr-1"></li> Simpan
                    </button>
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    @include('component.penyewaan_detail_html')
@endsection

@section('javascript')
    <!-- DATA TABLE JS-->
    <script src="{{ asset('assets/templates/admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/templates/admin/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/templates/admin/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/templates/admin/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/templates/admin/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    {{-- loading --}}
    <script src="{{ asset('assets/templates/admin/plugins/loading/loadingoverlay.min.js') }}"></script>

    {{-- sweetalert --}}
    <script src="{{ asset('assets/templates/admin/plugins/sweet-alert/sweetalert2.all.js') }}"></script>
    <script src="{{ asset('assets/templates/admin/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        const can_batalkan = {{ $can_batalkan ? 'true' : 'false' }};
        const can_reciving_order = {{ $can_reciving_order ? 'true' : 'false' }};
        const can_selesai = {{ $can_selesai ? 'true' : 'false' }};
        const can_delete = {{ $can_delete ? 'true' : 'false' }};
        const table_html = $('#tbl_main');
        let isEdit = true;
        $(document).ready(function() {
            $('#tahun').select2();
            // clear child
            $('#tahun').on('select2:select', function(e) {
                var oTable = table_html.dataTable();
                oTable.fnDraw(false);
            });
            $('#created_by').select2({
                ajax: {
                    url: "{{ route('member_select2') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: function(params) {
                        var query = {
                            search: params.term,
                        }
                        return query;
                    }
                }
            });
            $('#updated_by').select2({
                ajax: {
                    url: "{{ route('member_select2') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: function(params) {
                        var query = {
                            search: params.term,
                        }
                        return query;
                    }
                }
            });
            $('#customer').select2({
                ajax: {
                    url: "{{ route(h_prefix('customer_select2')) }}",
                    type: "GET",
                    data: function(params) {
                        var query = {
                            search: params.term,
                            semua: 1
                        }
                        return query;
                    }
                },
            })
            $('#filter_status').select2();
            $('#filter_status_pembayaran').select2();

            // datatable ====================================================================================
            const new_table = table_html.DataTable({
                searchDelay: 500,
                processing: true,
                serverSide: true,
                // responsive: true,
                scrollX: true,
                aAutoWidth: false,
                bAutoWidth: false,
                type: 'GET',
                ajax: {
                    url: "{{ route(h_prefix()) }}",
                    data: function(d) {
                        d['filter[tahun]'] = $('#tahun').val();
                        d['filter[bulan]'] = $('#bulan').val();
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        orderable: false,
                        className: 'to-link',
                        render(data, type, full, meta) {
                            return (can_reciving_order && full.status <= 2) ? data : '';
                        },
                        className: 'to-link'
                    },
                    {
                        data: 'number',
                        name: 'number',
                        render(data, type, full, meta) {
                            const btn_detail = `<br><button type="button" data-toggle="tooltip" class="btn btn-rounded btn-info btn-sm me-1 mt-1" title="Detail Data" onClick="detailFunc('${full.id}')">
                                <i class="fas fa-file-alt"></i> </button>`;
                            return data + btn_detail;
                        },
                    },
                    {
                        data: 'tanggal_order_str',
                        name: 'tanggal_order_str',
                        className: 'text-nowrap to-link'
                    },
                    {
                        data: 'tanggal_kirim_str',
                        name: 'tanggal_kirim',
                        className: ' to-link'
                    },
                    {
                        data: 'tanggal_pengambilan_str',
                        name: 'tanggal_pengambilan',
                        className: ' to-link'
                    },
                    {
                        data: 'total_harga',
                        name: 'total_harga',
                        render(data, type, full, meta) {
                            return 'Rp. ' + format_rupiah(data);
                        },
                        className: ' text-right to-link'
                    },
                    {
                        data: 'sisa',
                        name: 'sisa',
                        render(data, type, full, meta) {
                            const sisa = 'Rp. ' + format_rupiah(data);
                            const status =
                                `<i class="fas fa-circle me-1 text-${full.status_pembayaran == 1 ? 'success':'danger'}"></i>${full.status_pembayaran_str}`;
                            return `${sisa}<br>${status}`;
                        },
                        className: ' text-right to-link'
                    },
                ],
                order: [
                    [2, 'desc']
                ],
                language: {
                    url: datatable_indonesia_language_url
                }
            });

            new_table.on('draw.dt', function() {
                tooltip_refresh();
                var PageInfo = table_html.DataTable().page.info();
                new_table.column(0, {
                    page: 'current'
                }).nodes().each(function(cell, i) {
                    var id = cell.innerHTML;
                    cell.innerHTML = i + 1 + PageInfo.start;
                    var link =
                        `window.location.href = '{{ route('admin.penyewaan.reciving_order') }}/${id}'`


                    if (id != '') {
                        var ele = $(cell).parent().find('.to-link');
                        ele.css('cursor', 'pointer');
                        ele.attr("onclick", link);
                    }
                });
            });

            $('#FilterForm').submit(function(e) {
                e.preventDefault();
                var oTable = table_html.dataTable();
                oTable.fnDraw(false);
            });

            $('#BatalkanForm').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('button[form=BatalkanForm]', 'Simpan');
                $.ajax({
                    type: "POST",
                    url: "{{ route(h_prefix('batalkan')) }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#modal-batalkan").modal('hide');
                        var oTable = table_html.dataTable();
                        oTable.fnDraw(false);
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        isEdit = true;
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        setBtnLoading('button[form=BatalkanForm]',
                            '<li class="fas fa-save mr-1"></li> Simpan',
                            false);
                    }
                });
            });
        });

        function deleteFunc(id) {
            swal.fire({
                title: 'Apakah anda yakin?',
                text: "Apakah anda yakin akan menghapus data ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes'
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: `{{ url(h_prefix_uri()) }}/${id}`,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function() {
                            swal.fire({
                                title: 'Please Wait..!',
                                text: 'Is working..',
                                onOpen: function() {
                                    Swal.showLoading()
                                }
                            })
                        },
                        success: function(data) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: '{{ $page_attr['title'] }} berhasil dihapus',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            var oTable = table_html.dataTable();
                            oTable.fnDraw(false);
                        },
                        complete: function() {
                            swal.hideLoading();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            let error = null;
                            if (jqXHR.responseJSON) {
                                error = jqXHR.responseJSON.message;
                            }
                            swal.hideLoading();
                            swal.fire("!Opps ", error ?? "Something went wrong, try again later",
                                "error");
                        }
                    });
                }
            });
        }

        function selesaiFunc(id) {
            swal.fire({
                title: 'Apakah anda yakin?',
                text: "Untuk menyelesaikan data penyewaan ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes'
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: `{{ url(h_prefix_uri('selesai')) }}/${id}`,
                        type: 'POST',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function() {
                            swal.fire({
                                title: 'Please Wait..!',
                                text: 'Is working..',
                                onOpen: function() {
                                    Swal.showLoading()
                                }
                            })
                        },
                        success: function(data) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Penyewaan berhasil diselesaikan.',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            var oTable = table_html.dataTable();
                            oTable.fnDraw(false);
                        },
                        complete: function() {
                            swal.hideLoading();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            let error = null;
                            if (jqXHR.responseJSON) {
                                error = jqXHR.responseJSON.message;
                            }
                            swal.hideLoading();
                            swal.fire("!Opps ", error ?? "Something went wrong, try again later",
                                "error");
                        }
                    });
                }
            });
        }

        function statusClass(status) {
            if (status == 1) return 'primary';
            else if (status == 2) return 'info';
            else if (status == 3) return 'secondary';
            else if (status == 4) return 'warning';
            else if (status == 5) return 'success';
            else return 'danger';
        }

        function batalFunc(id) {
            $('#modal-batalkan').modal('show');
            $('#batalkan_id').val(id);
            $('#alasan').val('');
        }

        function gantiBulan(bulan) {
            $('#bulan').val(bulan);
            var oTable = table_html.dataTable();
            oTable.fnDraw(false);
        }
    </script>
    @include('component.penyewaan_detail_js')
@endsection
