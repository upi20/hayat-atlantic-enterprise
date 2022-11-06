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
            <h3 class="card-title">{{ $page_attr['title'] }} Table List</h3>
            <button class="btn btn-rounded btn-success btn-sm" type="button" onclick="cetak_laporan()">
                <i class="fas fa-print"></i> Cetak Laporan
            </button>
        </div>
        <div class="card-body">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default active mb-2">
                    <div class="panel-heading " role="tab" id="headingOne1">
                        <h4 class="panel-title">
                            <a role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse1"
                                aria-expanded="true" aria-controls="collapse1">
                                Filter Data
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne1">
                        <div class="panel-body">
                            <form action="javascript:void(0)" class="ml-md-3 mb-md-3" id="FilterForm">
                                {{-- <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="filter_status_pembayaran">Status Pembayaran</label>
                                    <br>
                                    <select class="form-control" id="filter_status_pembayaran"
                                        name="filter_status_pembayaran" style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                        <option value="1">Lunas</option>
                                        <option value="0">Belum Lunas</option>
                                    </select>
                                </div> --}}

                                {{-- <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="filter_status">Status Penyewaan</label>
                                    <br>
                                    <select class="form-control" id="filter_status" name="filter_status"
                                        style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                        <option value="1">Penyewaan Dibuat</option>
                                        <option value="2">Faktur Dibuat</option>
                                        <option value="3">Barang Diambil</option>
                                        <option value="4">Barang Dikembalikan</option>
                                        <option value="5">Selesai</option>
                                        <option value="9">Dibatalkan</option>
                                    </select>
                                </div> --}}

                                {{-- <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="customer">Customer</label>
                                    <br>
                                    <select class="form-control" id="customer" name="customer" style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                    </select>
                                </div> --}}

                                <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="dari_tanggal">Dari Tanggal <small>(Tanggal Order)</small></label>
                                    <br>
                                    <input type="date" class="form-control date-input-str" id="dari_tanggal"
                                        name="dari_tanggal"value="{{ $date_start }}">
                                </div>

                                <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="sampai_tanggal">Sampai Tanggal <small>(Tanggal Order)</small></label>
                                    <br>
                                    <input type="date" class="form-control date-input-str" id="sampai_tanggal"
                                        name="sampai_tanggal" value="{{ $date_end }}">
                                </div>

                            </form>
                            <div style="clear: both"></div>
                            <button type="submit" form="FilterForm" class="btn btn-rounded btn-md btn-info"
                                data-toggle="tooltip" title="Refresh Filter Table">
                                <i class="bi bi-arrow-repeat"></i> Terapkan filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-hover" id="tbl_main">
                <thead>
                    <tr>
                        <th rowspan="2" class="align-middle text-center">Nomor</th>
                        <th rowspan="2" class="align-middle text-center">Customer</th>
                        <th class="text-center" colspan="3">Tanggal</th>
                        <th class="text-center" colspan="3">Pembayaran</th>
                    </tr>
                    <tr>
                        <th>Order</th>
                        <th>Kirim</th>
                        <th>Pakai</th>
                        <th>Total</th>
                        <th>Dibayar</th>
                        <th>Sisa</th>
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
        const prefix_url = '{{ url(h_prefix_uri()) }}';
        const can_batalkan = {{ $can_batalkan ? 'true' : 'false' }};
        const can_reciving_order = {{ $can_reciving_order ? 'true' : 'false' }};
        const can_selesai = {{ $can_selesai ? 'true' : 'false' }};
        const can_delete = {{ $can_delete ? 'true' : 'false' }};
        const table_html = $('#tbl_main');
        let isEdit = true;
        let global_datatable_params;
        $(document).ready(function() {
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
                        d['filter[sampai_tanggal]'] = $('#sampai_tanggal').val();
                        d['filter[dari_tanggal]'] = $('#dari_tanggal').val();
                        d['filter[updated_by]'] = $('#updated_by').val();
                        d['filter[created_by]'] = $('#created_by').val();
                        d['filter[customer]'] = $('#customer').val();
                        d['filter[status]'] = $('#filter_status').val();
                        d['filter[status_pembayaran]'] = $('#filter_status_pembayaran').val();
                    }
                },
                columns: [{
                        data: 'number',
                        name: 'number',
                        render(data, type, full, meta) {
                            const btn_detail = `<button type="button" data-toggle="tooltip" class="btn btn-rounded btn-info btn-sm me-1 mt-1" title="Detail Data" onClick="detailFunc('${full.id}')">
                                <i class="fas fa-file-alt"></i> Detail
                                </button>`;
                            return `${data}<br>${btn_detail}`;
                        },
                    },
                    {
                        data: 'customer_nama',
                        name: 'customer_nama',
                        render(data, type, full, meta) {
                            return `<span data-toggle="tooltip" title="${data}">${data}</span><br>
                            <small data-toggle="tooltip" title="${full.lokasi}">${full.lokasi}</small>`;
                        },
                    },
                    {
                        data: 'tanggal_order_str',
                        name: 'tanggal_order_str',
                        className: 'text-nowrap'
                    },
                    {
                        data: 'tanggal_kirim_str',
                        name: 'tanggal_kirim_str',
                        className: 'text-nowrap'
                    },
                    {
                        data: 'tanggal_pakai_dari',
                        name: 'tanggal_pakai_dari',
                        render(data, type, full, meta) {
                            if (full.tanggal_pakai_dari_str == full.tanggal_pakai_sampai_str) {
                                return full.tanggal_pakai_dari_str;
                            } else {
                                return `${full.tanggal_pakai_dari_str ?? ''} s/d <br> ${full.tanggal_pakai_sampai_str ?? ''}`;
                            }
                        },
                        className: 'text-nowrap'
                    },
                    {
                        data: 'total_harga',
                        name: 'total_harga',
                        render(data, type, full, meta) {
                            return 'Rp. ' + format_rupiah(data);
                        },
                        className: 'text-nowrap text-right'
                    },
                    {
                        data: 'dibayar',
                        name: 'dibayar',
                        render(data, type, full, meta) {
                            return 'Rp. ' + format_rupiah(data);
                        },
                        className: 'text-nowrap text-right'
                    },
                    {
                        data: 'sisa',
                        name: 'sisa',
                        render(data, type, full, meta) {
                            const sisa = 'Rp. ' + format_rupiah(data);
                            return `${sisa}`;
                        },
                        className: 'text-nowrap text-right'
                    },
                ],
                order: [
                    [5, 'desc']
                ],
                language: {
                    url: datatable_indonesia_language_url
                }
            });

            new_table.on('draw.dt', function() {
                tooltip_refresh();
            });

            $('#FilterForm').submit(function(e) {
                e.preventDefault();
                var oTable = table_html.dataTable();
                oTable.fnDraw(false);
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

        function statusClass(status) {
            if (status == 1) return 'primary';
            else if (status == 2) return 'info';
            else if (status == 3) return 'secondary';
            else if (status == 4) return 'warning';
            else if (status == 5) return 'success';
            else return 'danger';
        }

        function cetak_laporan() {
            const data_table = table_html.DataTable();
            const params = data_table.ajax.params();
            const customer = params['filter[customer]'] ?? '';
            const dari_tanggal = params['filter[dari_tanggal]'] ?? '';
            const sampai_tanggal = params['filter[sampai_tanggal]'] ?? '';
            const status = params['filter[status]'] ?? '';
            const status_pembayaran = params['filter[status_pembayaran]'] ?? '';
            const order = params['order'][0] ?? '';
            const order_column = order['column'];
            const order_dir = order['dir'];
            const search = params['search']['value'] ?? '';
            const search_value = encodeURIComponent(search);

            // column
            const columns = params['columns'];
            let columns_str = '';
            Object.keys(columns).map(function(key) {
                const column = columns[key];
                columns_str += `&columns[${key}][data]=${column.data}`;
                columns_str += `&columns[${key}][name]=${column.name}`;
                console.log(columns[key]);
            })

            const url =
                `${prefix_url}/cetak_laporan?&filter[sampai_tanggal]=${sampai_tanggal}&filter[dari_tanggal]=${dari_tanggal}&filter[customer]=${customer}&filter[status]=${status}&filter[status_pembayaran]=${status_pembayaran}&search[value]=${search_value}${columns_str}&order[0][column]=${order_column}&order[0][dir]=${order_dir}`;
            window.open(url, '_blank');
        }
    </script>
    @include('component.penyewaan_detail_js')
@endsection
