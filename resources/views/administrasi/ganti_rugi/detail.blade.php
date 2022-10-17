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
            <h3 class="card-title">Informasi Ganti Rugi</h3>
            <div>
                <a href="{{ route(h_prefix(null, 2)) }}" class="btn btn-rounded btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                @if ($can_simpan_status)
                    <button type="submit" form="DetailForm" class="btn btn-rounded btn-success btn-sm">
                        <i class="fas fa-save"></i> Simpan Status Ganti Rugi
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
                            <div class="form-label">Status Ganti Rugi
                                (Disimpan: <span id="detail_status_disimpan" class="badge"></span>)
                            </div>
                            <div class="custom-controls-stacked d-flex flex-row">
                                <label class="custom-control custom-radio-md" style="display: none;">
                                    <input type="radio" class="custom-control-input" name="detail_status" value="0">
                                    <span class="custom-control-label badge bg-danger">Data Dibuat</span>
                                </label>
                                <label class="custom-control custom-radio-md">
                                    <input type="radio" class="custom-control-input" name="detail_status" value="1">
                                    <span class="custom-control-label badge bg-warning">Diproses</span>
                                </label>
                                <label class="custom-control custom-radio-md ms-3">
                                    <input type="radio" class="custom-control-input" name="detail_status" value="2">
                                    <span class="custom-control-label  badge bg-success">Selesai</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Total Ganti Rugi</label>
                        <p class="pb-0 mb-0">Rp <span id="detail_total_harga"></span></p>
                        <small id="detail_total_harga_terbilang" class="fst-italic"></small>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Ganti Rugi Uang</label>
                        <p class="pb-0 mb-0">Rp <span id="detail_dibayar"></span></p>
                        <small id="detail_dibayar_terbilang" class="fst-italic"></small>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Ganti Rugi Barang</label>
                        <p class="pb-0 mb-0">Rp <span id="detail_dibayar_barang"></span></p>
                        <small id="detail_dibayar_barang_terbilang" class="fst-italic"></small>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Sisa</label>
                        <p class="pb-0 mb-0">Rp <span id="detail_sisa"></span></p>
                        <small id="detail_sisa_terbilang" class="fst-italic"></small>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Customer</label>
                        <p id="detail_customer"></p>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Keterangan</label>
                        <p id="detail_keterangan"></p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">Ganti Rugi Uang</h3>
            <div>
                @if ($can_insert)
                    <button type="button" class="btn btn-rounded btn-success btn-sm" data-bs-effect="effect-scale"
                        data-bs-toggle="modal" href="#modal-uang" onclick="uangAdd()" data-target="#modal-uang">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
                @endif
            </div>
        </div>
        <div class="card-body">
            <div class="panel-group" id="uang_accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default active mb-2">
                    <div class="panel-heading " role="tab" id="uang_heading_filter">
                        <h4 class="panel-title">
                            <a role="button" data-bs-toggle="collapse" data-bs-parent="#uang_accordion" href="#uang_filter"
                                aria-expanded="true" aria-controls="uang_filter">
                                Filter Data
                            </a>
                        </h4>
                    </div>
                    <div id="uang_filter" class="panel-collapse collapse" role="tabpanel"
                        aria-labelledby="uang_heading_filter">
                        <div class="panel-body">
                            <form action="javascript:void(0)" class="ml-md-3 mb-md-3" id="UangFilterForm">

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
                                    <label for="uang_created_by">Dibuat Oleh</label>
                                    <br>
                                    <select class="form-control" id="uang_created_by" name="uang_created_by"
                                        style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                    </select>
                                </div>

                                <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="uang_updated_by">Diubah Oleh</label>
                                    <br>
                                    <select class="form-control" id="uang_updated_by" name="uang_updated_by"
                                        style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                    </select>
                                </div>

                            </form>
                            <div style="clear: both"></div>
                            <button type="submit" form="UangFilterForm" class="btn btn-rounded btn-md btn-info"
                                data-toggle="tooltip" title="Refresh Filter Table">
                                <i class="bi bi-arrow-repeat"></i> Terapkan filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive table-striped">
                <table class="table table-bordered table-hover border-bottom" id="tbl_uang">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Nominal</th>
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


    {{-- model --}}
    <div class="modal fade" id="modal-uang">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-uang-title"></h6><button aria-label="Tutup" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="UangMainForm" name="UangMainForm" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="ganti_rugi" id="uang_ganti_rugi" value="{{ $model->id }}">
                        <div class="form-group">
                            <label class="form-label" for="uang_nama">Nama Pembayaran
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="uang_nama" name="nama"
                                placeholder="Contoh: Ganti Rugi Pertama" required="" />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="uang_oleh">Pembayaran Oleh
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="uang_oleh" name="oleh"
                                placeholder="Contoh: Bpk. Adi Permana" required="" />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="uang_tanggal">Tanggal
                                <span class="text-danger">*</span></label>
                            <input type="date" class="form-control date-input-str" id="uang_tanggal" name="tanggal"
                                required="" />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="uang_nominal">Nominal <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">Rp </span>
                                <input type="number" min="1" class="form-control" placeholder="Nominal"
                                    aria-label="Nominal" id="uang_nominal" name="nominal"
                                    aria-describedby="basic-addon1" required>
                            </div>
                            <small id="uang_nominal_terbilang" class="fst-italic"></small>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="uang_keterangan">Keterangan</label>
                            <textarea type="text" class="form-control" rows="3" id="uang_keterangan" name="keterangan"
                                placeholder="Keterangan"> </textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="UangMainForm">
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
        const today = "{{ date('Y-m-d') }}";
        const oleh = "{{ $customer->nama }}";
        const ganti_rugi_id = "{{ $model->id }}";

        let detail_status_disimpan = '{{ $model->status }}';
        let detail_total_harga = '{{ $model->nominal }}';
        let detail_dibayar = '{{ $model->dibayar }}';
        let detail_dibayar_barang = '{{ $model->dibayar_barang }}';
        let detail_sisa = '{{ $model->sisa }}';
        let detail_customer = '{!! "$customer->nama<br><small>$customer->alamat</small>" !!}';
        let detail_keterangan = '{!! "$model->nama<br><small>$model->keterangan</small>" !!}';

        // Ganti rugi uang ============================================================================================
        let uangIsEdit = true;
        const table_uang = $('#tbl_uang');
        // Ganti rugi uang ============================================================================================
        // ============================================================================================================

        $(document).ready(() => {
            // Ganti rugi uang ========================================================================================
            $('#uang_nominal').change(UangRefreshNominal);
            $('#uang_nominal').keyup(UangRefreshNominal);
            $('#uang_nominal').click(UangRefreshNominal);

            $('#UangMainForm').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('[form=UangMainForm][type=submit]', 'Save Changes');
                $.ajax({
                    type: "POST",
                    url: "{{ route(h_prefix('uang.insert', 2)) }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#modal-uang").modal('hide');
                        var oTable = table_uang.dataTable();
                        oTable.fnDraw(false);
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        // simpan detail
                        detail_status_disimpan = data.ganti_rugi.status;
                        detail_total_harga = data.ganti_rugi.nominal;
                        detail_dibayar = data.ganti_rugi.dibayar;
                        detail_dibayar_barang = data.ganti_rugi.dibayar_barang;
                        detail_sisa = data.ganti_rugi.sisa;
                        detail_customer = `${data.customer.nama}<br>
                        <small>${data.customer.alamat}</small>`;
                        detail_keterangan = `${data.ganti_rugi.nama}<br>
                        <small>${data.ganti_rugi.keterangan}</small>`;

                        setStatus(detail_status_disimpan);
                        refreshDetail();

                        uangIsEdit = true;
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
                        setBtnLoading('[form=UangMainForm][type=submit]',
                            '<li class="fas fa-save mr-1"></li> Simpan',
                            false);
                    }
                });
            });

            const new_table_uang = table_uang.DataTable({
                searchDelay: 500,
                processing: true,
                serverSide: true,
                responsive: true,
                scrollX: true,
                aAutoWidth: false,
                bAutoWidth: false,
                type: 'GET',
                ajax: {
                    url: "{{ route(h_prefix('uang', 2)) }}",
                    data: function(d) {
                        d['filter[ganti_rugi_id]'] = ganti_rugi_id;
                        d['filter[updated_by]'] = $('#uang_updated_by').val();
                        d['filter[created_by]'] = $('#uang_created_by').val();
                        d['filter[dibatalkan]'] = $('#uang_dibatalkan').val();
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
                            return `${data??''}<br><small>${full.keterangan??''}</small> <span class="${batal ?'text-danger' : '' }">${batal ?'(Dibatalkan)' : '' }</span>`;
                        },
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
                            return `${oleh??''}<br><small>${tanggal}</small>`;
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
                            return btn_batalkan;
                        },
                        orderable: false,
                        className: 'text-nowrap'
                    }] : [])
                ],
                order: [
                    [2, 'desc']
                ]
            });

            new_table_uang.on('draw.dt', function() {
                var PageInfo = table_uang.DataTable().page.info();
                new_table_uang.column(0, {
                    page: 'current'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1 + PageInfo.start;
                });
            });

            $('#FilterForm').submit(function(e) {
                e.preventDefault();
                var oTable = table_uang.dataTable();
                oTable.fnDraw(false);
            });

            // Ganti rugi uang ========================================================================================
            // ========================================================================================================



        });
        // Ganti rugi uang ============================================================================================
        function uangAdd() {
            if (!uangIsEdit) return false;
            $('#UangMainForm').trigger("reset");
            $('#modal-uang-title').html("Tambah Pembayaran");
            $('#modal-uang').modal('show');
            $('#uang_id').val('');
            $('#uang_tanggal').val(today);
            $('#uang_oleh').val(oleh);
            render_tanggal($('#uang_tanggal'));
            resetErrorAfterInput();
            uangIsEdit = false;
            UangRefreshNominal();
            return true;
        }

        function UangRefreshNominal() {
            const nominal = $('#uang_nominal').val();
            $('#uang_nominal_terbilang').html(nominal > 0 ? (terbilang(nominal) + ' Rupiah') : "");
        }
        // Ganti rugi uang ============================================================================================
        // ============================================================================================================



        // informasi ganti rugi =======================================================================================
        function setStatus(value) {
            if (value == '0' || value == '1' || value == '2') {
                $("input[name=detail_status][value=" + value + "]").prop('checked', true);
                const ele = $('#detail_status_disimpan');
                ele.html(value == '1' ? 'Diproses' : (value == '2' ? 'Selesai' : 'Data Dibuat'));
                ele.removeClass('bg-danger');
                ele.removeClass('bg-success');
                ele.removeClass('bg-warning');
                ele.addClass(value == '1' ? 'bg-warning' : (value == '2' ? 'bg-success' : 'bg-danger'));
            }
        }

        function refreshDetail() {
            setStatus(detail_status_disimpan);

            $('#detail_total_harga').html(format_rupiah(detail_total_harga));
            $('#detail_total_harga_terbilang').html(terbilang(detail_total_harga));
            $('#detail_dibayar').html(format_rupiah(detail_dibayar));
            $('#detail_dibayar_terbilang').html(terbilang(detail_dibayar));
            $('#detail_dibayar_barang').html(format_rupiah(detail_dibayar_barang));
            $('#detail_dibayar_barang_terbilang').html(terbilang(detail_dibayar_barang));
            $('#detail_sisa').html(format_rupiah(detail_sisa));
            $('#detail_sisa_terbilang').html(terbilang(detail_sisa));

            $('#detail_customer').html(detail_customer);
            $('#detail_keterangan').html(detail_keterangan);
        }
        // informasi ganti rugi =======================================================================================
        // ============================================================================================================

        // initial ====================================================================================================
        setStatus(detail_status_disimpan);
        refreshDetail();
        // initial ====================================================================================================
        // ============================================================================================================
    </script>
@endsection
