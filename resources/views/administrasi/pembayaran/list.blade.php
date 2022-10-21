@extends('templates.admin.master')

@section('content')
    @php
        $is_selesai = $model->status != 9 && $model->status != 5;
        $can_insert = auth_can(h_prefix('insert', 2)) && $is_selesai;
        $can_delete = auth_can(h_prefix('delete', 2)) && $is_selesai;
        $can_batalkan = auth_can(h_prefix('batalkan', 2)) && $is_selesai;
        $can_simpan_status = auth_can(h_prefix('simpan_status', 2)) && $is_selesai;
        $can_action = $can_delete || $can_batalkan;
    @endphp

    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">Detail Pembayaran Penyewaan
                @if ($model->status == 9)
                    <span class="badge bg-danger">Dibatalkan</span>
                @endif
            </h3>
            <div>
                <a href="{{ route(h_prefix(null, 2)) }}" class="btn btn-rounded btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                @if ($can_simpan_status)
                    <button type="submit" form="DetailForm" class="btn btn-rounded btn-success btn-sm">
                        <i class="fas fa-save"></i> Simpan Status Pembayaran
                    </button>
                @endif
            </div>
        </div>
        <div class="card-body">
            <form action="javascript:void(0)" id="DetailForm" name="DetailForm" method="POST"
                enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label">Status Pembayaran
                                (Disimpan: <span id="status_pembayaran_disimpan" class="badge"></span>)
                            </div>
                            <div class="custom-controls-stacked d-flex flex-row">
                                <label class="custom-control custom-radio-md" style="display: set">
                                    <input type="radio" class="custom-control-input" name="status_pembayaran"
                                        value="0">
                                    <span class="custom-control-label badge bg-danger">Belum Lunas</span>
                                </label>
                                <label class="custom-control custom-radio-md ms-3" style="display: unset">
                                    <input type="radio" class="custom-control-input" name="status_pembayaran"
                                        value="1">
                                    <span class="custom-control-label  badge bg-success">Lunas</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Total Harga</label>
                        <p>Rp <span id="detail_total_harga"></span></p>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Dibayar</label>
                        <p>Rp <span id="detail_dibayar"></span></p>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Sisa</label>
                        <p>Rp <span id="detail_sisa"></span></p>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Kepada, Lokasi </label>
                        <p id="detail_customer"></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">{{ $page_attr['title'] }} Table List</h3>
            <div>
                <a href="{{ route(h_prefix(null, 2)) }}" class="btn btn-rounded btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                @if ($can_insert)
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
                                    <label for="dibatalkan">Dibatalkan</label>
                                    <br>
                                    <select class="form-control" id="dibatalkan" name="dibatalkan" style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
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
            <div class="table-responsive table-striped">
                <table class="table table-bordered table-hover border-bottom" id="tbl_main">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Nominal</th>
                            <th>Keterangan</th>
                            <th>Faktur</th>
                            <th>Diubah</th>
                            {!! $can_batalkan ? '<th>Aksi</th>' : '' !!}
                        </tr>
                    </thead>
                    <tbody> </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-batalkan">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-batalkan-title">Batalkan Pembayaran</h6>
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

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-default-title"></h6><button aria-label="Tutup" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="MainForm" name="MainForm" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="penyewaan" id="penyewaan" value="{{ $model->id }}">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="nama">Nama
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Contoh: DP, Pelunasan Dan lain-lain." required="" />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="tanggal">Tanggal
                                        <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control date-input-str" id="tanggal"
                                        name="tanggal" required="" />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="nominal">Nominal <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp </span>
                                        <input type="number" min="1" class="form-control" placeholder="Nominal"
                                            aria-label="Nominal" id="nominal" name="nominal"
                                            aria-describedby="basic-addon1" required>
                                    </div>
                                    <small id="nominal_terbilang" class="fst-italic"></small>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="keterangan">Keterangan</label>
                                    <textarea type="text" class="form-control" rows="3" id="keterangan" name="keterangan"
                                        placeholder="Keterangan"> </textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4>Informasi</h4>
                                <div class="form-group">
                                    <label class="form-label" for="total_yang_harus_dibayar">Total yang harus di bayar
                                        <div class="input-group">
                                            <span class="input-group-text">Rp </span>
                                            <input type="text" min="1" readonly class="form-control"
                                                id="total_yang_harus_dibayar">
                                        </div>
                                        <small id="total_yang_harus_dibayar_terbilang" class="fst-italic"></small>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="total_yang_sudah_dibayar">Total yang sudah di bayar
                                        <div class="input-group">
                                            <span class="input-group-text">Rp </span>
                                            <input type="text" min="1" readonly class="form-control"
                                                id="total_yang_sudah_dibayar">
                                        </div>
                                        <small id="total_yang_sudah_dibayar_terbilang" class="fst-italic"></small>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="total_sisa">Sisa Pembayaran
                                        <div class="input-group">
                                            <span class="input-group-text">Rp </span>
                                            <input type="text" min="1" readonly class="form-control"
                                                id="total_sisa">
                                        </div>
                                        <small id="total_sisa_terbilang" class="fst-italic"></small>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-save" form="MainForm">
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
        const can_insert = {{ $can_insert ? 'true' : 'false' }};
        const can_batalkan = {{ $can_batalkan ? 'true' : 'false' }};
        const can_delete = {{ $can_delete ? 'true' : 'false' }};
        const can_action = {{ $can_action ? 'true' : 'false' }};
        const table_html = $('#tbl_main');
        let isEdit = true;

        let pembayaran_total = '{{ $model->total_harga }}';
        let pembayaran_dibayar = '{{ $model->dibayar }}';
        let pembayaran_kepada = '{{ $model->kepada }}';
        let pembayaran_lokasi = '{{ $model->lokasi }}';
        let pembayaran_status = '{{ $model->status_pembayaran }}';

        const today = "{{ date('Y-m-d') }}";

        let recent_nominal = 0;

        $(document).ready(function() {
            $('#DetailForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                setBtnLoading('button[form=DetailForm][type=submit]', 'Simpan Status Pembayaran');
                $.ajax({
                    type: "POST",
                    url: "{{ route(h_prefix('simpan_status', 2), $model->id) }}",
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
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        pembayaran_total = data.total_harga;
                        pembayaran_dibayar = data.dibayar;
                        pembayaran_kepada = data.kepada;
                        pembayaran_lokasi = data.lokasi;
                        pembayaran_status = data.status_pembayaran;
                        refreshDetailPembayaran();
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
                        setBtnLoading('button[form=DetailForm][type=submit]',
                            '<i class="fas fa-save"></i> Simpan Status Pembayaran',
                            false);
                    }
                });
            });

            // Pembayaran list ========================================================================================
            $('#dibatalkan').select2();
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
                        d['filter[penyewaan]'] = $('#penyewaan').val();
                        d['filter[updated_by]'] = $('#updated_by').val();
                        d['filter[created_by]'] = $('#created_by').val();
                        d['filter[dibatalkan]'] = $('#dibatalkan').val();
                    },
                    complete: (res) => {
                        if (res.status == 200) {
                            const data = res.responseJSON;
                            const penyewaan = data.penyewaan;
                            pembayaran_total = penyewaan.total_harga;
                            pembayaran_dibayar = penyewaan.dibayar;
                            pembayaran_kepada = penyewaan.kepada;
                            pembayaran_lokasi = penyewaan.lokasi;
                            pembayaran_status = penyewaan.status_pembayaran;
                            refreshDetailPembayaran();
                        }
                    }
                },
                columns: [{
                        data: null,
                        name: 'id',
                        orderable: false,
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        render(data, type, full, meta) {
                            const batal = full.batal_tanggal != null;
                            return `<span class="${batal ?'text-danger' : '' }">${data} ${batal ?'(Dibatalkan)' : '' }</span>`;
                        },
                        className: 'text-nowrap'
                    },
                    {
                        data: 'tanggal_str',
                        name: 'tanggal',
                        className: 'text-nowrap'
                    },
                    {
                        data: 'nominal',
                        name: 'nominal',
                        render(data, type, full, meta) {
                            return 'Rp. ' + format_rupiah(data);
                        },
                        className: 'text-nowrap text-right'
                    },
                    {
                        data: 'keterangan',
                        name: 'keterangan',
                        className: 'text-nowrap'
                    },
                    {
                        data: 'id',
                        name: 'id',
                        render(data, type, full, meta) {
                            return `<a href="{{ url(h_prefix_uri('faktur', 2)) }}/${data}" target="_blank" class="btn btn-rounded btn-primary btn-sm me-1" title="Cetak Faktur">
                                <i class="fas fa-file-alt"></i> Cetak
                                </a>`;
                        },
                        orderable: false,
                        className: 'text-nowrap',
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
                    ...((can_action) ? [{
                        data: 'id',
                        name: 'id',
                        render(data, type, full, meta) {
                            const btn_batalkan = can_batalkan && full.batal_tanggal == null ? `<button type="button" class="btn btn-rounded btn-warning btn-sm me-1" title="Batalkan" onClick="batalFunc('${data}')">
                                <i class="fas fa-times"></i> Batalkan
                                </button>` : '';

                            const btn_delete = can_delete ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1" title="Delete Data" onClick="deleteFunc('${data}')">
                                <i class="fas fa-trash"></i> Hapus
                                </button>` : '';
                            return btn_batalkan + btn_delete;
                        },
                        orderable: false,
                        className: 'text-nowrap'
                    }] : [])
                ],
                order: [
                    [2, 'desc']
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

            $('#nominal').change(refreshNominal);
            $('#nominal').keyup(refreshNominal);
            $('#nominal').click(refreshNominal);

            // insertForm ===================================================================================
            $('#MainForm').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('#btn-save', 'Save Changes');
                $.ajax({
                    type: "POST",
                    url: "{{ route(h_prefix('insert', 2)) }}",
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

            $('#BatalkanForm').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('button[form=BatalkanForm]', 'Save Changes');
                $.ajax({
                    type: "POST",
                    url: "{{ route(h_prefix('batalkan', 2)) }}",
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


        function add() {
            if (!isEdit) return false;
            $('#MainForm').trigger("reset");
            $('#modal-default-title').html("Tambah Pembayaran");
            $('#modal-default').modal('show');
            $('#id').val('');
            $('#tanggal').val(today);
            render_tanggal($('#tanggal'));
            resetErrorAfterInput();
            isEdit = false;
            refreshNominal();
            return true;
        }

        function editFunc(id) {
            $.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: `{{ route(h_prefix('find', 2)) }}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id
                },
                success: (data) => {
                    console.log(data);
                    isEdit = true;
                    recent_nominal = data.nominal;
                    $('#modal-default-title').html("Ubah Pembayaran");
                    $('#modal-default').modal('show');
                    $('#id').val(data.id);
                    $('#nama').val(data.nama);
                    $('#tanggal').val(data.tanggal);
                    $('#nominal').val(data.nominal);
                    $('#keterangan').val(data.keterangan);
                    render_tanggal($('#tanggal'));
                    refreshNominal();
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

        function batalFunc(id) {
            $('#modal-batalkan').modal('show');
            $('#batalkan_id').val(id);
            $('#alasan').val('');
        }

        function setStatusPembayaran(value) {
            if (value == '0' || value == '1') {
                $("input[name=status_pembayaran][value=" + value + "]").prop('checked', true);
                const ele = $('#status_pembayaran_disimpan');
                ele.html(value == '0' ? 'Belum Lunas' : 'Lunas');
                ele.removeClass('bg-danger');
                ele.removeClass('bg-success');
                ele.addClass(value == '0' ? 'bg-danger' : 'bg-success');
            }
        }

        function refreshDetailPembayaran() {
            setStatusPembayaran(pembayaran_status);
            $('#detail_dibayar').html(format_rupiah(pembayaran_dibayar));
            $('#detail_total_harga').html(format_rupiah(pembayaran_total));
            const sisa = pembayaran_total - pembayaran_dibayar;
            $('#detail_sisa').html(format_rupiah(sisa));
            $('#detail_customer').html(`<span class="fw-bold">${pembayaran_kepada}</span>, ${pembayaran_lokasi}`);
        }
        refreshDetailPembayaran();


        function refreshNominal() {
            const nominal = $('#nominal').val();
            $('#nominal_terbilang').html(nominal > 0 ? (terbilang(nominal) + ' Rupiah') : "");
            refresh_form();
        }

        function refresh_form() {
            let terbilang_str = '';
            const nominal = Number($('#nominal').val());
            let dibayar_sekarang = nominal == '' ? 0 : nominal;

            let dibayar = pembayaran_dibayar - (isEdit ? recent_nominal : 0) + dibayar_sekarang;
            const sisa = pembayaran_total - dibayar;

            $('#total_yang_sudah_dibayar').val(format_rupiah(dibayar));
            terbilang_str = dibayar > 0 ? (terbilang(dibayar) + ' Rupiah') : "";
            $('#total_yang_sudah_dibayar_terbilang').html(terbilang_str);

            $('#total_sisa').val(format_rupiah(sisa));
            terbilang_str = sisa > 0 ? (terbilang(sisa) + ' Rupiah') : "";
            $('#total_sisa_terbilang').html(terbilang_str);

            $('#total_yang_harus_dibayar').val(format_rupiah(pembayaran_total));
            terbilang_str = pembayaran_total > 0 ? (terbilang(pembayaran_total) + ' Rupiah') : "";
            $('#total_yang_harus_dibayar_terbilang').html(terbilang_str);
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
                        url: `{{ url(h_prefix_uri(null, 2)) }}/${id}`,
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
    </script>
@endsection
