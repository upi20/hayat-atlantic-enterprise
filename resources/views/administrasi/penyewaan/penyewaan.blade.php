@extends('templates.admin.master')

@section('content')
    @php
        $can_insert = auth_can(h_prefix('insert'));
        $can_update = auth_can(h_prefix('update'));
        $can_delete = auth_can(h_prefix('delete'));
        $can_batalkan = auth_can(h_prefix('batalkan'));
    @endphp

    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">{{ $page_attr['title'] }} Table List</h3>
            @if ($can_insert)
                <a class="btn btn-rounded btn-success btn-sm" href="{{ route('admin.penyewaan.reciving_order') }}">
                    <i class="fas fa-plus"></i> Reciving Order
                </a>
            @endif
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
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
                        <div class="panel-body">
                            <form action="javascript:void(0)" class="ml-md-3 mb-md-3" id="FilterForm">
                                <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="filter_status_pembayaran">Status Pembayaran</label>
                                    <br>
                                    <select class="form-control" id="filter_status_pembayaran"
                                        name="filter_status_pembayaran" style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                        <option value="1">Lunas</option>
                                        <option value="0">Belum Lunas</option>
                                    </select>
                                </div>
                                <div class="form-group float-start me-2" style="min-width: 300px">
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
                                </div>

                                <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="customer">Customer</label>
                                    <br>
                                    <select class="form-control" id="customer" name="customer" style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                    </select>
                                </div>

                                <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="created_by">Dibuat Oleh</label>
                                    <br>
                                    <select class="form-control" id="created_by" name="created_by" style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                    </select>
                                </div>

                                <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="updated_by">Diubah Oleh</label>
                                    <br>
                                    <select class="form-control" id="updated_by" name="updated_by" style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                    </select>
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
            <table class="table text-nowrap text-md-nowrap table-hover table-bordered border-bottom" id="tbl_main">
                <thead>
                    <tr>
                        <th rowspan="2" class="align-middle text-center">No</th>
                        <th rowspan="2" class="align-middle text-center">Aksi</th>
                        <th rowspan="2" class="align-middle text-center">Customer</th>
                        <th rowspan="2" class="align-middle text-center">Status</th>
                        <th class="text-center" colspan="3">Tanggal</th>
                        <th class="text-center" colspan="4">Pembayaran</th>
                        <th rowspan="2" class="align-middle text-center">Diubah</th>
                    </tr>
                    <tr>
                        <th>Order</th>
                        <th>Kirim</th>
                        <th>Pakai</th>
                        <th>Total</th>
                        <th>Dibayar</th>
                        <th>Sisa</th>
                        <th>Status</th>
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
                    <h6 class="modal-title" id="modal-default-title">Detail Penyewaan</h6><button aria-label="Tutup"
                        class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h3 class="card-title mb-2">Customer</h3>
                    <div class="row"id="detail_data_customer">

                    </div>
                    <hr>
                    <h3 class="card-title mb-2">Data Penyewaan</h3>
                    <div class="row" id="detail_data_penyewaan">

                    </div>
                    <hr>
                    <h3 class="card-title mb-2">Daftar Barang</h3>
                    <table class="table table-bordered table-hover border-bottom" id="tbl_detail">
                        <thead>
                            <tr>
                                <th class="text-nowrap">No</th>
                                <th class="text-nowrap">Kode | Barang</th>
                                <th class="text-nowrap">Qty</th>
                                <th class="text-nowrap">Harga</th>
                                <th class="text-nowrap">Total Harga</th>
                                <th class="text-nowrap">Keterangan</th>
                                <th class="text-nowrap">Diubah Oleh</th>
                                <th class="text-nowrap">Diubah Tgl.</th>
                            </tr>
                        </thead>
                        <tbody id="tbl_detail_body">

                        </tbody>
                    </table>
                    <hr>
                    <h3 class="card-title mb-2">Daftar Pembayaran</h3>
                    <table class="table table-bordered table-hover border-bottom" id="tbl_pembayaran">
                        <thead>
                            <tr>
                                <th class="text-nowrap">No</th>
                                <th class="text-nowrap">Nama</th>
                                <th class="text-nowrap">Tanggal</th>
                                <th class="text-nowrap">Nominal</th>
                                <th class="text-nowrap">Keterangan</th>
                                <th class="text-nowrap">Diubah Oleh</th>
                                <th class="text-nowrap">Diubah Tgl.</th>
                            </tr>
                        </thead>
                        <tbody id="tbl_pembayaran_body">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        Tutup
                    </button>
                </div>
            </div>
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
        const can_update = {{ $can_update ? 'true' : 'false' }};
        const can_delete = {{ $can_delete ? 'true' : 'false' }};
        const table_html = $('#tbl_main');
        let isEdit = true;
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
                        d['filter[updated_by]'] = $('#updated_by').val();
                        d['filter[created_by]'] = $('#created_by').val();
                        d['filter[customer]'] = $('#customer').val();
                        d['filter[status]'] = $('#filter_status').val();
                        d['filter[status_pembayaran]'] = $('#filter_status_pembayaran').val();
                    }
                },
                columns: [{
                        data: null,
                        name: 'id',
                        orderable: false,
                    },
                    {
                        data: 'id',
                        name: 'id',
                        render(data, type, full, meta) {
                            let br_counter = 0;
                            const btn_detail = `<button type="button" class="btn btn-rounded btn-info btn-sm me-1 mt-1" title="Detail Data" onClick="detailFunc('${data}')">
                                <i class="fas fa-file-alt"></i> Deatail
                                </button> ${(++br_counter %2==0)? '<br>':''}`;

                            const btn_batalkan = (full.status <= 2) && can_batalkan ? `<button type="button" class="btn btn-rounded btn-warning btn-sm me-1 mt-1" title="Batalkan" onClick="batalFunc('${data}')">
                                <i class="fas fa-times"></i> Batalkan
                                </button>${(++br_counter %2==0)? '<br>':''}` : '';

                            const btn_update = (can_update && full.status <= 2) ? `<a href="{{ route('admin.penyewaan.reciving_order') }}/${data}" class="btn btn-rounded btn-primary btn-sm me-1 mt-1" title="Edit Data">
                                <i class="fas fa-edit"></i> Ubah
                                </a>${(++br_counter %2==0)? '<br>':''}` : '';

                            const btn_delete = (can_delete && full.status <= 2) ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1 mt-1" title="Delete Data" onClick="deleteFunc('${data}')">
                                <i class="fas fa-trash"></i> Hapus
                                </button>${(++br_counter %2==0)? '<br>':''}` : '';

                            return btn_detail + btn_batalkan + btn_update + btn_delete;
                        },
                        orderable: false,
                        className: 'text-nowrap'
                    },
                    {
                        data: 'customer_nama',
                        name: 'customer_nama',
                        render(data, type, full, meta) {
                            return `${data}<br><small>${full.lokasi}</small>`;
                        }
                    },
                    {
                        data: 'status',
                        name: 'status_str',
                        render(data, type, full, meta) {
                            return `<span class="badge ${statusClass(data)}">${full.status_str}</span>`;
                        },
                        className: 'text-nowrap'
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
                                return data;
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
                            return 'Rp. ' + format_rupiah(data);
                        },
                        className: 'text-nowrap text-right'
                    },
                    {
                        data: 'status_pembayaran_str',
                        name: 'status_pembayaran_str',
                        render(data, type, full, meta) {
                            return `<span class="badge bg-${full.status_pembayaran == 1 ? 'success':'danger'}">${data}</span>`;
                        },
                        className: 'text-nowrap'
                    },
                    {
                        data: 'updated',
                        name: 'updated_by_str',
                        render(data, type, full, meta) {
                            const tanggal = data ?? full.created;
                            const oleh = full.updated_by_str ?? full.created_by_str
                            return `${oleh}<br><small>${tanggal}</small>`;
                        },
                        className: 'text-nowrap'
                    }
                ],
                order: [
                    [6, 'desc']
                ]
            });

            new_table.on('draw.dt', function() {
                var PageInfo = table_html.DataTable().page.info();
                new_table.column(0, {
                    page: 'current'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1 + PageInfo.start;
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
                setBtnLoading('button[form=BatalkanForm]', 'Save Changes');
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
                            position: 'top-end',
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

        function statusClass(status) {
            if (status == 1) return 'bg-primary';
            else if (status == 2) return 'bg-info';
            else if (status == 3) return 'bg-secondary';
            else if (status == 4) return 'bg-warning';
            else if (status == 5) return 'bg-success';
            else return 'bg-danger';
        }

        function detailFunc(id) {
            $.LoadingOverlay("show");
            $.ajax({
                method: 'get',
                url: `{{ route(h_prefix('detail')) }}`,
                data: {
                    id: id
                }
            }).done((data) => {
                $('#modal-default').modal('show');
                const data_customer = $('#detail_data_customer');
                const data_penyewaan = $('#detail_data_penyewaan');
                const table = $('#tbl_detail');
                const table_body = $('#tbl_detail_body');

                const table_pembayaran = $('#tbl_pembayaran');
                const table_pembayaran_body = $('#tbl_pembayaran_body');

                // data customer
                data_customer.html(` <div class="col-md-6">
                            <p><i class="fas fa-user me-2"></i>${data.customer}</p>
                            <p><i class="fas fa-map-marker-alt me-2"></i>${data.customer_alamat}</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-phone me-2"></i> ${data.customer_no_telepon}</p>
                            <p><i class="fab fa-whatsapp me-2"></i> ${data.customer_no_whatsapp}</p>
                        </div> `);

                // data penyewaan
                const status_pembayaran =
                    `<span class="badge bg-${data.status_pembayaran == 1 ? 'success':'danger'}">${data.status_pembayaran_str}</span>`;
                const status_penyewaan =
                    `<span class="badge ${statusClass(data.status)}">${data.status_str}</span>`;

                const tanggal_pakai = data.tanggal_pakai_dari == data.tanggal_pakai_sampai ? data
                    .tanggal_pakai_dari :
                    `${data.tanggal_pakai_dari} s/d ${data.tanggal_pakai_sampai} 
                    (${data.tanggal_pakai_lama} Hari)`;

                const created_at =
                    `<div class="col-md-6 mb-2"><span class="fw-bold">Ditambahkan Oleh:</span> <br> ${data.created_by_str} | ${data.created_at_str}</div>`;
                const updated_at =
                    `<div class="col-md-6 mb-2"><span class="fw-bold">Diubah Oleh:</span> <br> ${data.updated_by_str} | ${data.updated_at_str}</div>`;
                const timestamp = created_at + (data.updated_by_str ? updated_at : '')


                data_penyewaan.html(`
                <div class="col-md-6 mb-2"><span class="fw-bold">Tanggal Order:</span> <br> ${data.tanggal_order}</div>
                <div class="col-md-6 mb-2"><span class="fw-bold">Tanggal Kirim:</span> <br> ${data.tanggal_kirim}</div>
                <div class="col-md-6 mb-2"><span class="fw-bold">Tanggal Pakai:</span> <br> ${tanggal_pakai}</div>
                <div class="col-md-6 mb-2"><span class="fw-bold">Kepada, Lokasi:</span> <br> <span class="fw-bold">${data.kepada}</span>, ${data.lokasi}</div>
                <div class="col-md-6 mb-2"><span class="fw-bold">Status Pembayaran:</span> <br> ${status_pembayaran}</div>
                <div class="col-md-6 mb-2"><span class="fw-bold">Status Penyewaan:</span> <br> ${status_penyewaan}</div>
                ${timestamp}
                `);


                // data barang
                table_body.html('');
                $(table).dataTable().fnDestroy();
                let table_body_html = '';
                let number = 1;
                data.barangs.forEach(e => {
                    table_body_html += `
                            <tr>
                                <td class="text-nowrap">${number}</td>
                                <td class="text-nowrap">${e.barang_kode} | ${e.barang_nama}</td>
                                <td class="text-nowrap text-right">${e.qty}</td>
                                <td class="text-nowrap text-right">Rp. ${format_rupiah(e.harga)}</td>
                                <td class="text-nowrap text-right">Rp. ${format_rupiah(e.harga_total)}</td>
                                <td class="text-nowrap">${e.keterangan ??''}</td>
                                <td class="text-nowrap">${e.updated_by_str ?? e.created_by_str}</td>
                                <td class="text-nowrap">${e.updated_at_str ?? e.created_at_str}</td>
                            </tr>
                    `;
                });
                table_body.html(table_body_html);
                renderDataTable(table);

                // data pembayaran
                table_pembayaran_body.html('');
                $(table_pembayaran).dataTable().fnDestroy();
                let table_pembayaran_body_html = '';
                number = 1;
                data.pembayarans.forEach(e => {
                    table_pembayaran_body_html += `<tr>
                                <td class="text-nowrap">${number}</td>
                                <td class="text-nowrap">${e.nama}</td>
                                <td class="text-nowrap">${e.tanggal}</td>
                                <td class="text-nowrap text-right">Rp. ${format_rupiah(e.nominal)}</td>
                                <td class="text-nowrap">${e.keterangan ?? ''}</td>
                                <td class="text-nowrap">${e.updated_by_str ?? e.created_by_str}</td>
                                <td class="text-nowrap">${e.updated_at_str ?? e.created_at_str}</td>
                            </tr>`;
                });
                table_pembayaran_body.html(table_pembayaran_body_html);
                renderDataTable(table_pembayaran);
                $.LoadingOverlay("hide");
            }).fail(($xhr) => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Something went wrong, try again later',
                    showConfirmButton: false,
                    timer: 3500
                })
                $.LoadingOverlay("hide");
            })
        }

        function batalFunc(id) {
            $('#modal-batalkan').modal('show');
            $('#batalkan_id').val(id);
            $('#alasan').val('');
        }
    </script>
@endsection
