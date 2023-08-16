@extends('templates.admin.master')

@section('content')
    @php
        $pre = $is_edit ? 1 : 0;
        $can_save = auth_can(h_prefix('save', $pre));
        $can_barang = auth_can(h_prefix('barang', $pre));
        $can_barang_insert = auth_can(h_prefix('barang.insert', $pre));
        $can_barang_update = auth_can(h_prefix('barang.update', $pre));
        $can_barang_delete = auth_can(h_prefix('barang.delete', $pre));
    @endphp

    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">Faktur Penyewaan</h3>
            <div>
                <a href="{{ route(h_prefix(null, $is_edit ? 2 : 1)) }}" class="btn btn-rounded btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                @if ($can_save)
                    <button type="submit" form="MainForm" class="btn btn-rounded btn-success btn-sm">
                        <i class="fas fa-save"></i> Simpan Reciving Order
                    </button>
                @endif
            </div>
        </div>
        <div class="card-body">
            <form action="javascript:void(0)" id="MainForm" name="MainForm" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <input type="hidden" name="id" id="id" value="{{ $model->id }}">
                    <input type="hidden" name="is_edit" id="is_edit" value="{{ $is_edit ? 1 : 0 }}">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="form-label" for="customer">Customer
                                <span class="text-danger">*</span></label>
                            <select class="form-control" id="customer" name="customer" style="width: 100%;" required>
                                @if ($model->customer)
                                    <option value="{{ $model->customer }}" selected>{{ $model->customer_nama }}
                                    </option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="number">Nomor Faktur Penyewaan
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" placeholder="Nomor Penyewaan" class="form-control" id="number"
                                name="number" value="{{ $model->number }}" required="" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="tanggal_pakai_dari">Tanggal Sewa
                                <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="date-input-str form-control" id="tanggal_pakai_dari"
                                name="tanggal_pakai_dari" value="{{ $model->tanggal_pakai_dari }}" required="" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="durasi_pakai">Jangka Waktu Sewa</label>
                            <div class="input-group">
                                <input type="number" min="1" class="form-control" placeholder="Berapa hari ?"
                                    aria-label="Berapa hari ?" id="durasi_pakai" name="durasi_pakai"
                                    value="{{ $model->durasi_pakai }}" aria-describedby="basic-addon1" required="">
                                <span class="input-group-text">Hari</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="tanggal_pakai_sampai">Tanggal Selesai Sewa
                                <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="date-input-str form-control tanggal-refresh"
                                data-id_str="tanggal_pakai_sampai_str" id="tanggal_pakai_sampai" name="tanggal_pakai_sampai"
                                value="{{ $model->tanggal_pakai_sampai }}" required="" />
                            <small id="tanggal_pakai_sampai_str"></small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="tanggal_kirim">Tanggal Kirim
                                <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="date-input-str form-control" id="tanggal_kirim"
                                name="tanggal_kirim" value="{{ $model->tanggal_kirim }}" required="" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="tanggal_order">Tanggal Pesan
                                <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="form-control date-input-str" id="tanggal_order"
                                name="tanggal_order" value="{{ $model->tanggal_order }}" required="" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="kepada">Kepada
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control"id="kepada" name="kepada"
                                placeholder="Kepada" value="{{ $model->kepada }}" required="" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="lokasi">Lokasi
                                <span class="text-danger">*</span></label>
                            <textarea type="text" class="form-control" rows="3" id="lokasi" name="lokasi"
                                placeholder="Lokasi untuk pengiriman barang" required="">{{ $model->lokasi }}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="total_harga">Total Harga Penyewaan
                                <span id="total_harga_disimpan"></span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">Rp.</span>
                                <input type="number" class="form-control" placeholder="Total Harga Penyewaan"
                                    aria-label="Total Harga Penyewaan" id="total_harga_head" name="total_harga"
                                    value="{{ $model->total_harga }}" aria-describedby="basic-addon1"
                                    {{ $model->status == 0 ? '' : 'min="1" required=""' }}>
                            </div>
                            <small id="total_harga_terbilang" class="fst-italic"></small>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if ($can_barang)
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h3 class="card-title">Daftar Barang
                    <span id="total"></span>
                </h3>
                <div>
                    <a href="{{ route(h_prefix(null, $is_edit ? 2 : 1)) }}" class="btn btn-rounded btn-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    @if ($can_barang_insert)
                        <button type="button" class="btn btn-rounded btn-success btn-sm" data-bs-effect="effect-scale"
                            data-bs-toggle="modal" href="#modal-default" onclick="add()" data-target="#modal-default">
                            <i class="fas fa-plus"></i> Tambah
                        </button>
                    @endif
                </div>
            </div>

            <div class="card-body">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default active mb-2">
                        <div class="panel-heading " role="tab" id="headingOne1">
                            <h4 class="panel-title">
                                <a role="button" data-bs-toggle="collapse" data-bs-parent="#accordion"
                                    href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Filter Data
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingOne1">
                            <div class="panel-body">
                                <form action="javascript:void(0)" class="ml-md-3 mb-md-3" id="FilterForm">

                                    <div class="form-group float-start me-2" style="min-width: 300px">
                                        <label for="created_by">Dibuat Oleh</label>
                                        <br>
                                        <select class="form-control" id="created_by" name="created_by"
                                            style="width: 100%;">
                                            <option value="" selected>Semua</option>
                                        </select>
                                    </div>

                                    <div class="form-group float-start me-2" style="min-width: 300px">
                                        <label for="updated_by">Diubah Oleh</label>
                                        <br>
                                        <select class="form-control" id="updated_by" name="updated_by"
                                            style="width: 100%;">
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
                <table class="table table-hover" id="tbl_main">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Harga Barang</th>
                            <th>Total Harga Barang</th>
                            <th>Oleh</th>
                            {!! $can_barang_delete || $can_barang_update ? '<th>Ubah</th>' : '' !!}
                        </tr>
                    </thead>
                    <tbody> </tbody>

                </table>
            </div>
        </div>

        <!-- End Row -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-default-title"></h6><button aria-label="Tutup"
                            class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:void(0)" id="BarangForm" name="BarangForm" method="POST"
                            enctype="multipart/form-data">
                            <input type="hidden" name="id" id="barang_id">
                            <input type="hidden" name="penyewaan" id="penyewaan" value="{{ $model->id }}">
                            <div class="form-group">
                                <label class="form-label" for="nama">Nama Barang <span
                                        class="text-danger">*</span></label>
                                <select class="form-control" id="barang" name="barang" style="width: 100%;"
                                    required>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="harga">Harga Barang<span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp </span>
                                    <input type="number" min="1" class="form-control" placeholder="Harga"
                                        aria-label="Harga" id="harga" name="harga" aria-describedby="basic-addon1"
                                        required>
                                </div>
                                <small id="harga_terbilang" class="fst-italic"></small>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="qty">Jumlah Barang
                                    <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="number" min="1" class="form-control"
                                        placeholder="Quantity/Jumlah" aria-label="Quantity/Jumlah" id="qty"
                                        name="qty" aria-describedby="basic-addon1" required>
                                    <span class="input-group-text satuan"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" placeholder="Keterangan"
                                    aria-label="Keterangan" id="keterangan" name="keterangan">
                            </div>

                            <hr>
                            <h6 class="fw-bold h5">Total</h6>
                            <div class="form-group">
                                <label class="form-label" for="total_harga">Total Harga Barang</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp </span>
                                    <input type="text" class="form-control" placeholder="Total Harga"
                                        aria-label="Harga" id="total_harga" aria-describedby="basic-addon1" readonly>
                                </div>
                            </div>
                            <small id="total_harga_terbilang" class="fst-italic"></small>
                            <div class="form-group">
                                <label class="form-label" for="qty_total" id="pada_tanggal"></label>
                                <div class="input-group">
                                    <input type="number" min="1" class="form-control"
                                        placeholder="Total Quantity/Jumlah Menjadi"
                                        aria-label="Total Quantity/Jumlah Menjadi" id="qty_total" name="qty_total"
                                        aria-describedby="basic-addon1" readonly>
                                    <span class="input-group-text satuan"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btn-save" form="BarangForm">
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
    @endif
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
        const can_update = {{ $can_barang_update ? 'true' : 'false' }};
        const can_delete = {{ $can_barang_delete ? 'true' : 'false' }};
        let isEdit = true;
        let qty_total = 0;
        let qty_total_edit = 0;
        let harga_edit = 0;
        let qty_total_edit_id = 0;
        const table_html = $('#tbl_main');
        let total_harga_current = 0;
        $(document).ready(() => {
            $('#customer').select2({
                ajax: {
                    url: "{{ route(h_prefix('customer_select2', $pre + 1)) }}",
                    type: "GET",
                    data: function(params) {
                        var query = {
                            search: params.term,
                        }
                        return query;
                    },
                },
                placeholder: "Masukan nama atau alamat dari customer."
            }).on('select2:select', function(e) {
                const data = e.params.data;
                const lokasi = $('#lokasi');
                if (lokasi.val() == '') {
                    lokasi.val(data.alamat);
                }
                const kepada = $('#kepada');
                if (kepada.val() == '') {
                    kepada.val(data.nama);
                }
            });

            $('#tanggal_pakai_dari').change(refresh_dari);
            $('#tanggal_pakai_dari').keyup(refresh_dari);
            $('#tanggal_pakai_dari').click(refresh_dari);

            $('#durasi_pakai').change(refresh_dari);
            $('#durasi_pakai').keyup(refresh_dari);
            $('#durasi_pakai').click(refresh_dari);

            $('#tanggal_pakai_sampai').change(refresh_sampai);
            $('#tanggal_pakai_sampai').keyup(refresh_sampai);
            $('#tanggal_pakai_sampai').click(refresh_sampai);

            // SubmitForm =============================================================================================
            $('#MainForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                setBtnLoading('button[type=submit][form=MainForm]', 'Simpan Reciving Order');
                $.ajax({
                    type: "POST",
                    url: "{{ route(h_prefix('save', $pre)) }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data Berhasil Disimpan',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        set_total_harga_disimpan(data.total_harga);
                    },
                    error: function(data) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: ((data.responseJSON) ? data.responseJSON.message :
                                'Something went wrong'),
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        setBtnLoading('button[type=submit][form=MainForm]',
                            '<i class="fas fa-save"></i> Simpan Reciving Order',
                            false);
                    }
                });
            });

            // data barang ============================================================================================
            $('#total_harga_head').change(refresh_terbilang);
            $('#total_harga_head').keyup(refresh_terbilang);
            $('#total_harga_head').click(refresh_terbilang);

            $('#created_by').select2({
                ajax: {
                    url: "{{ route('member_select2') }}",
                    type: "POST",
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
                    data: function(params) {
                        var query = {
                            search: params.term
                        }
                        return query;
                    }
                }
            });


            $('#barang').select2({
                ajax: {
                    url: "{{ route(h_prefix('barang_select2', $pre)) }}",
                    type: "GET",
                    data: function(params) {
                        var query = {
                            search: params.term,
                            penyewaan: '{{ $model->id }}',
                            list_id: $('#id').val()
                        }
                        return query;
                    }
                },
                placeholder: "Nama, Kode, Jenis atau Satuan Barang",
                dropdownParent: $('#modal-default'),
            }).on('select2:select', function(e) {
                const data = e.params.data;
                $('.satuan').html(data.satuan);
                $('#pada_tanggal').html(`Total stok pada tanggal: ${data.pada_tanggal}`);

                const harga = (isEdit && data.id == qty_total_edit_id) ? harga_edit : data
                    .harga;
                $('#harga').val(harga);

                qty_total = (isEdit && data.id == qty_total_edit_id) ? qty_total_edit : data
                    .barang_qty_total;
                refresh_total();
                refresh_terbilang();
            });

            $('#harga').keyup(e => {
                refresh_total();
                refresh_terbilang()
            })

            $('#qty').keyup(e => {
                refresh_total();
                refresh_terbilang()
            })

            $('#harga').change(e => {
                refresh_total();
                refresh_terbilang()
            })

            $('#qty').change(e => {
                refresh_total();
                refresh_terbilang()
            })

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
                    url: "{{ url(h_prefix_uri()) }}",
                    data: function(d) {
                        d['filter[updated_by]'] = $('#updated_by').val();
                        d['filter[created_by]'] = $('#created_by').val();
                        d['filter[penyewaan]'] = '{{ $model->id }}';
                    },
                    complete: (res) => {
                        if (res.status == 200) {
                            const data = res.responseJSON;
                            $('#total').html(
                                `(Total: Rp. ${format_rupiah(data.total)}) | 
                                <span class="badge bg-primary"
                                onclick="set_total_harga(${data.total})"
                                style="cursor: pointer">
                                Set Total Harga</span> `
                            );

                            const total_harga = $('#total_harga_head').val();

                            if (total_harga == '' ||
                                total_harga == 0 ||
                                total_harga == total_harga_current) {
                                set_total_harga(data.total);
                            }

                            total_harga_current = data.total;

                        }
                    }
                },
                columns: [{
                        data: null,
                        name: 'id',
                        orderable: false,
                    },
                    {
                        data: 'barang_nama',
                        name: 'barang_nama',
                        className: 'text-nowrap',
                        render(data, type, full, meta) {
                            const keterangan = full.keterangan ?
                                `<br><small>${full.keterangan}</small>` : '';
                            return `<span class="fw-bold">${data}</span><br><small>${full.barang_kode}</small>${keterangan}`;
                        },
                    },
                    {
                        data: 'qty',
                        name: 'qty',
                        className: 'text-nowrap text-right'
                    },
                    {
                        data: 'harga',
                        name: 'harga',
                        render(data, type, full, meta) {
                            return 'Rp. ' + format_rupiah(data);
                        },
                        className: 'text-nowrap text-right'
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
                        data: 'updated',
                        name: 'updated_by_str',
                        render(data, type, full, meta) {
                            const tanggal = data ?? full.created;
                            const oleh = full.updated_by_str ?? full.created_by_str
                            return `${oleh}<br><small>${tanggal}</small>`;
                        },
                        className: 'text-nowrap'
                    },
                    ...(can_update || can_delete ? [{
                        data: 'id',
                        name: 'id',
                        render(data, type, full, meta) {
                            const btn_update = can_update ? `<button type="button" data-toggle="tooltip" class="btn btn-rounded btn-primary btn-sm me-1" title="Edit Data" onClick="editFunc('${data}')">
                                <i class="fas fa-edit"></i>
                                </button>` : '';
                            const btn_delete = can_delete ? `<button type="button" data-toggle="tooltip" class="btn btn-rounded btn-danger btn-sm me-1" title="Delete Data" onClick="deleteFunc('${data}')">
                                <i class="fas fa-trash"></i>
                                </button>` : '';
                            return btn_update + btn_delete;
                        },
                        orderable: false,
                        className: 'text-nowrap',
                    }] : []),
                ],
                order: [
                    [1, 'asc']
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
                    cell.innerHTML = i + 1 + PageInfo.start;
                });
            });

            $('#FilterForm').submit(function(e) {
                e.preventDefault();
                var oTable = table_html.dataTable();
                oTable.fnDraw(false);
            });


            // insertForm ===================================================================================
            $('#BarangForm').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('#btn-save', 'Save Changes');
                const route = ($('#barang_id').val() == '') ?
                    "{{ url(h_prefix_uri('barang/insert', $pre)) }}" :
                    "{{ url(h_prefix_uri('barang/update', $pre)) }}";
                $.ajax({
                    type: "POST",
                    url: route,
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
                        });
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
                        setBtnLoading('#btn-save',
                            '<li class="fas fa-save mr-1"></li> Simpan',
                            false);
                    }
                });
            });
        })


        function refresh_dari() {
            const dari = $('#tanggal_pakai_dari').val();
            const kirim = $('#tanggal_kirim');
            if (dari) {
                const durasi = $('#durasi_pakai').val();
                const result = date_calc(dari, (durasi - 1)).toISOString().split('T')[0];
                const sampai = $('#tanggal_pakai_sampai');
                sampai.attr('min', dari);
                sampai.val(result);
                kirim.attr('max', dari);
                if (kirim.val() == '') {
                    kirim.val(date_calc(dari, -1).toISOString().split('T')[0]);
                }
            }
            refresh_tanggal_str();
        }

        function refresh_sampai() {
            const sampai = $('#tanggal_pakai_sampai').val();
            const dari = $('#tanggal_pakai_dari').val();
            const durasi = $('#durasi_pakai');
            if (dari && sampai) {
                const result = date_diff(sampai, dari);
                durasi.val(result + 1);
            }
            refresh_tanggal_str()
        }

        function refresh_tanggal_str() {
            render_tanggal('#tanggal_pakai_dari');
            render_tanggal('#tanggal_pakai_sampai');
            render_tanggal('#tanggal_kirim');
        }

        function date_calc(from, val) {
            const day = 86400000;
            const date_from = new Date(from);
            const from_timestamp = date_from.getTime();
            return new Date(from_timestamp + (day * val));
        }

        function date_diff(date1, date2) {
            const day = 86400000;

            const date_from1 = new Date(date1);
            const date_from2 = new Date(date2);
            const operate = date_from1.getTime() - date_from2.getTime();

            return operate / day;
        }

        // datatable ====================================================================================
        function add() {
            if (!isEdit) return false;
            $('#BarangForm').trigger("reset");
            $('#modal-default-title').html("Tambah Barang {{ $page_attr['title'] }}");
            $('#modal-default').modal('show');
            $('#barang_id').val('');
            $('.satuan').html('');
            $('#barang')
                .append((new Option('', '', true, true)))
                .trigger('change');
            qty_total = 0;
            resetErrorAfterInput();
            isEdit = false;
            return true;
        }

        function editFunc(id) {
            $.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: `{{ route(h_prefix('barang.find', $pre)) }}`,
                data: {
                    id
                },
                success: (data) => {
                    isEdit = true;
                    $('#modal-default-title').html("Ubah Barang {{ $page_attr['title'] }}");
                    $('#modal-default').modal('show');
                    qty_total = data.barang_qty_total;
                    qty_total_edit = data.barang_qty_total;
                    qty_total_edit_id = data.barang_id;
                    harga_edit = data.harga;

                    $('#pada_tanggal').html(`Total stok pada tanggal: ${data.pada_tanggal}`);
                    $('#barang_id').val(data.id);
                    $('.satuan').html(data.satuan);
                    $('#harga').val(data.harga);
                    $('#qty').val(data.qty);
                    $('#keterangan').val(data.keterangan);
                    $('#barang')
                        .append((new Option(data.barang_nama, data.barang_id, true, true)))
                        .trigger('change');

                    refresh_total();
                    refresh_terbilang();
                },
                error: function(data) {
                    Swal.fire({
                        position: 'top-end',
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
                        url: `{{ url(h_prefix_uri('barang', $pre)) }}/${id}`,
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

        function refresh_total() {
            const harga = Number($('#harga').val());
            const qty = Number($('#qty').val());
            const total = harga * qty;
            $('#total_harga').val(format_rupiah(total));
            $('#qty_total').val(qty_total - qty);
        }


        function refresh_terbilang() {
            const harga = Number($('#total_harga_head').val());
            $('#total_harga_terbilang').html(harga > 0 ? (terbilang(harga) + ' Rupiah') : "");
        }
        refresh_terbilang();

        function set_total_harga(harga) {
            $('#total_harga_head').val(harga);
            refresh_terbilang();
        }

        function set_total_harga_disimpan(harga) {
            $('#total_harga_disimpan').html(`(Disimpan: Rp. ${format_rupiah(harga)})`);
        }

        set_total_harga_disimpan('{{ $model->total_harga }}');
    </script>
@endsection
