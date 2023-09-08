@extends('templates.admin.master')

@section('content')
    @php
        $can_insert = auth_can(h_prefix('insert'));
        $can_update = auth_can(h_prefix('update'));
        $can_delete = auth_can(h_prefix('delete'));
        $can_status = auth_can(h_prefix('status'));
        $can_detail = auth_can(h_prefix('detail'));
    @endphp

    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">{{ $page_attr['title'] }}</h3>
            @if ($can_insert)
                <button type="button" class="btn btn-rounded btn-success btn-sm" data-bs-effect="effect-scale"
                    data-bs-toggle="modal" href="#modal-default" onclick="addPesanan()" data-target="#modal-default">
                    <i class="fas fa-plus"></i> Tambah Pesanan
                </button>
            @endif
        </div>
        <div class="card-body">
            <table class="table table-hover" id="tbl_main">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>Tanggal Sewa</th>
                        <th>Total Harga</th>
                        <th>Ubah Data</th>
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-default-title"></h6><button aria-label="Tutup" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="BarangForm" name="BarangForm" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="">

                        <div class="row mb-4">
                            <label for="inputName" class="col-lg-3 form-label">Nama Customer</label>
                            <div class="col-lg-9">
                                <select class="form-control select2" id="customer_id" name="customer_id"
                                    style="width: 100%;" required>
                                    <option value="">Pilih Customer</option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}">
                                            {{ $customer->nama }} | {{ $customer->alamat }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="inputName" class="col-lg-3 form-label">Tanggal Pakai</label>
                            <div class="col-lg-9 d-lg-flex flex-row">
                                <div class="w-100">
                                    <input type="date" class="form-control date-input-str" id="tanggal_pakai_dari"
                                        name="tanggal_pakai_dari" required>
                                </div>
                                <span class="py-1 mx-2">s/d</span>
                                <div class="w-100">
                                    <input type="date" class="form-control date-input-str" id="tanggal_pakai_sampai"
                                        name="tanggal_pakai_sampai" required>
                                </div>
                            </div>
                        </div>


                        <table class="table" id="table-modal">
                            <thead>
                                <tr>
                                    <th style="min-width: 200px">Nama Barang</th>
                                    <th>Jumlah Barang</th>
                                    <th style="min-width: 100px">Harga Barang</th>
                                    <th>Total Stok</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                        <select class="form-control select2" id="barang_id" name="barang_id">
                                            <option value="">Pilih Barang</option>
                                            @foreach ($barangs as $barang)
                                                <option value="{{ $barang->id }}">
                                                    {{ $barang->nama }} | {{ $barang->kode }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>

                                    <td>
                                        <input type="number" class="form-control" id="qty">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="harga">
                                    </td>
                                    <td id="stok" class="fw-bold">

                                    </td>
                                    <td>
                                        <button class="btn btn-primary" type="button" onclick="addBarang()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                        <p>
                            <span class="fw-bold">Total Harga</span> :
                            <span id="total_harga"></span>
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-save" form="BarangForm">
                        <li class="fas fa-save mr-1"></li> Simpan
                    </button>
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i> Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
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
        const can_update = {{ $can_update ? 'true' : 'false' }};
        const can_delete = {{ $can_delete ? 'true' : 'false' }};
        const can_status = {{ $can_status ? 'true' : 'false' }};
        const can_detail = {{ $can_detail ? 'true' : 'false' }};
        const table_html = $('#tbl_main');
        let stores = [];
        let isEdit = true;
        const barangs = JSON.parse(`{!! str_replace('`', '\\`', $barangs->toJson()) !!}`);
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            const new_table = table_html.DataTable({
                searchDelay: 500,
                processing: true,
                serverSide: true,
                // responsive: false,
                scrollX: true,
                aAutoWidth: false,
                bAutoWidth: false,
                type: 'GET',
                ajax: {
                    url: "{{ route(h_prefix()) }}",
                    data: function(d) {
                        d['filter[status]'] = $('#filter_status').val();
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        orderable: false,
                    },
                    {
                        data: 'customer_nama',
                        name: 'customer_nama',
                        className: `to-link`
                    },
                    {
                        data: 'tanggal',
                        name: 'tanggal_pakai_dari',
                        className: `to-link`
                    },
                    {
                        data: 'total_harga',
                        name: 'total_harga',
                        render(data, type, full, meta) {
                            return 'Rp. ' + format_rupiah(data ?? 0);
                        },
                        className: `to-link`
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render(data, type, full, meta) {
                            const status_text =
                                `<span class="text-nowrap"><i class="fas fa-circle me-1 text-${full.status_class}"></i> ${full.status_str}</span><br>`;
                            const btn_status = can_status && full.status == 1 ? `<button type="button" data-toggle="tooltip" class="btn btn-rounded btn-success btn-sm me-1" title="Terima Pesanan" onClick="setStatus('${full.id}', 2)">
                                <i class="fas fa-check"></i>
                                </button>` : '';
                            const btn_update = can_update ? `<button type="button" data-toggle="tooltip" class="btn btn-rounded btn-primary btn-sm me-1" title="Ubah Data" onClick="editFunc('${full.id}')">
                                <i class="fas fa-edit"></i>
                                </button>` : '';
                            const btn_delete = can_delete ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1" data-toggle="tooltip" title="Hapus Data" onClick="deleteFunc('${full.id}')">
                                <i class="fas fa-trash"></i> </button>` : '';
                            return status_text + btn_status + btn_update + btn_delete;
                        },
                        className: 'text-nowrap'
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
                    if (can_detail) {
                        var link =
                            `window.location.href = '{{ url(h_prefix_uri('detail')) }}/${id}'`
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

            $('.select2').select2({
                dropdownParent: $('#BarangForm'),
            });

            $('#barang_id').on('select2:select', function(e) {
                const barang = barangs.find(e => e.id == this.value);
                if (barang == undefined) {
                    $('#stok').html(``);
                    $('#harga').val('');
                    return;
                }
                $('#stok').html(`${barang.qty_ada} ${barang.get_satuan.nama}`);
                $('#harga').val(barang.harga);
            });

            // insertForm ===================================================================================
            $('#BarangForm').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                if (stores.length < 1) {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        text: 'Silahkan pilih barang terlebih dahulu',
                        showConfirmButton: false,
                        timer: 3500
                    });
                }

                var formData = new FormData(this);
                formData.append('datas', JSON.stringify(stores));
                formData.append('total_harga', total_harga);
                setBtnLoading('#btn-save', 'Simpan');
                const route = ($('#id').val() == '') ?
                    "{{ route(h_prefix('insert')) }}" :
                    "{{ route(h_prefix('update')) }}";
                $.ajax({
                    type: "POST",
                    url: route,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#modal-default").modal('hide');
                        var oTable = table_html.dataTable();
                        oTable.fnDraw(false);
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })

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
                        setBtnLoading('#btn-save', '<li class="fas fa-save mr-1"></li> Simpan',
                            false);
                    }
                });
            });
        });

        function addPesanan() {
            if (!isEdit) return;
            $('#MainForm').trigger("reset");
            $('#id').val('');
            $('#tanggal_pakai_dari').val('');
            $('#tanggal_pakai_sampai').val('');
            $('#total_harga').val('');
            $('#customer_id').val('').trigger('change');
            stores = [];
            isEdit = false;
            renderTableBody();
            $('#modal-default-title').html("Tambah {{ $page_attr['title'] }}");
        }

        function addBarang() {
            const barang_id = $('#barang_id').val();
            const barang = barangs.find(e => e.id == barang_id);
            if (barang == undefined) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    text: 'Silahkan pilih barang terlebih dahulu',
                    showConfirmButton: false,
                    timer: 3500
                });
                return;
            }

            const qty = Number($('#qty').val());
            const harga = Number($('#harga').val());
            // validasi =========================================

            // cek apakah barang sudah ada
            if (stores.find(e => e.id == barang_id) != undefined) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    text: 'Barang sudah di tambahkan',
                    showConfirmButton: false,
                    timer: 3500
                });
                return;
            }

            if (qty < 1) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    text: 'Jumlah barang minimal 1',
                    showConfirmButton: false,
                    timer: 3500
                });
                return;
            }

            if (qty < 1) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    text: 'Harga barang minimal 1',
                    showConfirmButton: false,
                    timer: 3500
                });
                return;
            }

            stores.push({
                id: barang.id,
                stok: barang.qty_ada,
                qty,
                harga,
            });

            // kosongkan
            $('#barang_id').val('').trigger('change');
            $('#stok').html('');
            $('#harga').val('');
            $('#qty').val('');
            renderTableBody();
        }

        function renderTableBody() {
            const table = $('#table-modal');
            let html = '';
            total_harga = 0;
            stores.forEach((e) => {
                const barang = barangs.find(f => f.id == e.id);
                total_harga += e.qty * e.harga;
                html += `<tr>
                            <td>${barang.nama}</td>
                            <td>${e.qty} ${barang.get_satuan.nama}</td>
                            <td>${format_rupiah(e.harga)}</td>
                            <td>${e.stok} ${barang.get_satuan.nama}</td>
                            <td><button class="btn btn-danger btn-sm" type="button" onclick="deleteBarang(${e.id})"><i class="fas fa-trash"></i></button></td>
                        </tr>`;
            });

            table.find('tbody').html(html);

            $('#total_harga').html(total_harga > 0 ? format_rupiah(total_harga) : '');
        }

        function deleteBarang(barang_id) {
            swal.fire({
                title: 'Apakah anda yakin?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes'
            }).then(function(result) {
                if (result.value) {
                    stores = stores.filter(e => e.id != barang_id);
                    renderTableBody();
                }
            });
        };

        function editFunc(id) {
            $.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: `{{ route(h_prefix('find')) }}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id
                },
                success: (data) => {
                    isEdit = true;
                    $('#modal-default-title').html("Ubah {{ $page_attr['title'] }}");
                    $('#modal-default').modal('show');
                    $('#id').val(data.id);
                    $('#tanggal_pakai_dari').val(data.tanggal_pakai_dari);
                    $('#tanggal_pakai_sampai').val(data.tanggal_pakai_sampai);
                    $('#total_harga').val(data.total_harga);
                    $('#customer_id').val(data.customer_id).trigger('change');
                    stores = [];
                    data.barangs.forEach(e => {
                        stores.push({
                            id: e.barang_id,
                            stok: e.stok,
                            qty: e.qty,
                            harga: e.harga,
                        });
                    });
                    renderTableBody();
                },
                error: function(data) {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Something went wrong',
                        showConfirmButton: false,
                        timer: 1500
                    })
                },
                complete: function() {
                    $.LoadingOverlay("hide");
                }
            });

        }

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
                            swal.hideLoading();
                            swal.fire("!Opps ", "Something went wrong, try again later", "error");
                        }
                    });
                }
            });
        }

        function setStatus(id, status) {
            swal.fire({
                title: 'Apakah anda yakin?',
                text: "Apakah anda yakin akan menerima pesanan ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes'
            }).then(function(result) {
                if (result.value) {
                    const formData = new FormData();
                    formData.append('id', id);
                    formData.append('status', status);
                    $.ajax({
                        url: `{{ route(h_prefix('status')) }}`,
                        type: 'POST',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
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
                                title: 'Data berhasil disimpan',
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
                            swal.hideLoading();
                            swal.fire("!Opps ", "Something went wrong, try again later", "error");
                        }
                    });
                }
            });
        }
    </script>
@endsection
