@extends('templates.admin.master')

@section('content')
    @php
        $is_proses = $penyewaan->status != 9 && $penyewaan->status != 5;
        // detail
        $can_simpan_status = auth_can(h_prefix('simpan_status', 2)) && $is_proses;
        $can_faktur = auth_can(h_prefix('faktur', 2));
        $can_surat_terima = auth_can(h_prefix('surat_terima', 2));
        
        // uang
        $can_uang = auth_can(h_prefix('uang', 2));
        $can_uang_insert = auth_can(h_prefix('uang.insert', 2)) && $is_proses;
        $can_uang_batalkan = auth_can(h_prefix('uang.batalkan', 2)) && $is_proses;
        
        // barang
        $can_barang = auth_can(h_prefix('barang', 2));
        $can_barang_insert = auth_can(h_prefix('barang.insert', 2)) && $is_proses;
        $can_barang_batalkan = auth_can(h_prefix('barang.batalkan', 2)) && $is_proses;
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
                                    <span class="custom-control-label badge bg-warning">Data Dibuat</span>
                                </label>
                                <label class="custom-control custom-radio-md">
                                    <input type="radio" class="custom-control-input" name="detail_status" value="1">
                                    <span class="custom-control-label badge bg-primary">Diproses</span>
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
                    <div class="col-12">
                        <label class="form-label">List data barang yang rusak dan hilang</label>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Barang</th>
                                    <td class="text-right">Rusak</th>
                                    <td class="text-right">Hilang</th>
                                    <td class="text-right">Diganti</th>
                                    <td class="text-right">Harga</th>
                                    <td class="text-right">Total Harga</th>
                                </tr>
                            </thead>
                            <tbody id="detail-list-barang">
                                @foreach ($barangs as $key => $list)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            {{ $list->barang_nama }}
                                            <br>
                                            <small>{{ $list->barang_kode }}</small>
                                        </td>
                                        <td class="text-right">{{ $list->qty_rusak }} {{ $list->satuan }}</td>
                                        <td class="text-right">{{ $list->qty_hilang }} {{ $list->satuan }}</td>
                                        <td class="text-right">
                                            {{ $list->qty_diganti }} {{ $list->satuan }}
                                            <br>
                                            <small>Rp. {{ format_rupiah($list->harga * $list->qty_diganti) }}</small>

                                        </td>
                                        <td class="text-right">Rp. {{ format_rupiah($list->harga) }}</td>
                                        <td class="text-right">Rp.
                                            {{ format_rupiah(($list->qty_rusak + $list->qty_hilang) * $list->harga) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if ($can_uang)
        {{-- lsit uang =================================================================================================== --}}
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h3 class="card-title">Ganti Rugi Uang</h3>
                <div>
                    @if ($can_uang_insert)
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
                                <a role="button" data-bs-toggle="collapse" data-bs-parent="#uang_accordion"
                                    href="#uang_filter" aria-expanded="true" aria-controls="uang_filter">
                                    Filter Data
                                </a>
                            </h4>
                        </div>
                        <div id="uang_filter" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="uang_heading_filter">
                            <div class="panel-body">
                                <form action="javascript:void(0)" class="ml-md-3 mb-md-3" id="UangFilterForm">

                                    <div class="form-group float-start me-2" style="min-width: 300px">
                                        <label for="uang_dibatalkan">Dibatalkan</label>
                                        <br>
                                        <select class="form-control" id="uang_dibatalkan" name="uang_dibatalkan"
                                            style="width: 100%;">
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

                <table class="table table-hover" id="tbl_uang">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pembayaran Oleh</th>
                            <th>Tanggal</th>
                            <th>Nominal</th>
                            {!! $can_faktur ? '<th>Faktur</th>' : '' !!}
                            <th>Diubah</th>
                            <th>Batalkan</th>
                        </tr>
                    </thead>
                    <tbody> </tbody>
                </table>

            </div>
        </div>
        {{-- lsit uang =================================================================================================== --}}

        {{-- modal uang =================================================================================================== --}}
        {{-- modal --}}
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
                                <input type="date" class="form-control date-input-str" id="uang_tanggal"
                                    name="tanggal" required="" />
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

        <div class="modal fade" id="uang-modal-batalkan">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Batalkan Pembayaran</h6>
                        <button aria-label="Tutup" class="btn-close" data-bs-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:void(0)" id="UangBatalkanForm" method="POST"
                            enctype="multipart/form-data">
                            <input type="hidden" name="id" id="uang-batalkan_id">
                            <div class="form-group">
                                <label class="form-label" for="alasan">Alasan pembatalan
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea type="text" class="form-control" rows="3" id="uang-alasan" name="alasan"
                                    placeholder="Alasan pembatalan" required></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" form="UangBatalkanForm">
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
        {{-- modal uang =================================================================================================== --}}
        {{-- ============================================================================================================== --}}
    @endif


    @if ($can_barang)
        {{-- lsit barang ================================================================================================== --}}
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h3 class="card-title">Ganti Rugi Barang</h3>
                <div>
                    @if ($can_surat_terima)
                        <a href="{{ url(h_prefix_uri('surat_terima', 2), $model->id) }}" target="_blank"
                            class="btn btn-rounded btn-primary btn-sm me-1" title="Cetak Faktur">
                            <i class="fas fa-file-alt"></i> Surat Terima Barang
                        </a>
                    @endif
                    @if ($can_barang_insert)
                        <button type="button" class="btn btn-rounded btn-success btn-sm" data-bs-effect="effect-scale"
                            data-bs-toggle="modal" href="#modal-barang" onclick="barangAdd()"
                            data-target="#modal-barang">
                            <i class="fas fa-plus"></i> Tambah
                        </button>
                    @endif

                    {{-- surat penyerahan barang --}}
                </div>
            </div>
            <div class="card-body">
                <div class="panel-group" id="barang_accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default active mb-2">
                        <div class="panel-heading " role="tab" id="barang_heading_filter">
                            <h4 class="panel-title">
                                <a role="button" data-bs-toggle="collapse" data-bs-parent="#barang_accordion"
                                    href="#barang_filter" aria-expanded="true" aria-controls="barang_filter">
                                    Filter Data
                                </a>
                            </h4>
                        </div>
                        <div id="barang_filter" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="barang_heading_filter">
                            <div class="panel-body">
                                <form action="javascript:void(0)" class="ml-md-3 mb-md-3" id="BarangFilterForm">

                                    <div class="form-group float-start me-2" style="min-width: 300px">
                                        <label for="barang_dibatalkan">Dibatalkan</label>
                                        <br>
                                        <select class="form-control" id="barang_dibatalkan" name="barang_dibatalkan"
                                            style="width: 100%;">
                                            <option value="" selected>Semua</option>
                                            <option value="Ya">Ya</option>
                                            <option value="Tidak">Tidak</option>
                                        </select>
                                    </div>

                                    <div class="form-group float-start me-2" style="min-width: 300px">
                                        <label for="barang_created_by">Dibuat Oleh</label>
                                        <br>
                                        <select class="form-control" id="barang_created_by" name="barang_created_by"
                                            style="width: 100%;">
                                            <option value="" selected>Semua</option>
                                        </select>
                                    </div>

                                    <div class="form-group float-start me-2" style="min-width: 300px">
                                        <label for="barang_updated_by">Diubah Oleh</label>
                                        <br>
                                        <select class="form-control" id="barang_updated_by" name="barang_updated_by"
                                            style="width: 100%;">
                                            <option value="" selected>Semua</option>
                                        </select>
                                    </div>

                                </form>
                                <div style="clear: both"></div>
                                <button type="submit" form="BarangFilterForm" class="btn btn-rounded btn-md btn-info"
                                    data-toggle="tooltip" title="Refresh Filter Table">
                                    <i class="bi bi-arrow-repeat"></i> Terapkan filter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-hover" id="tbl_barang">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Diterima Dari</th>
                            <th>Tanggal</th>
                            <th>Barang</th>
                            <th>Qty</th>
                            <th>Diubah</th>
                            <th>Batalkan</th>
                        </tr>
                    </thead>
                    <tbody> </tbody>
                </table>

            </div>
        </div>
        {{-- lsit barang ================================================================================================== --}}


        {{-- modal barang =================================================================================================== --}}
        {{-- modal --}}
        <div class="modal fade" id="modal-barang">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-barang-title"></h6><button aria-label="Tutup"
                            class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:void(0)" id="BarangMainForm" name="BarangMainForm" method="POST"
                            enctype="multipart/form-data">
                            <input type="hidden" name="ganti_rugi" id="barang_ganti_rugi" value="{{ $model->id }}">
                            <div class="form-group">
                                <label class="form-label" for="nama">Barang <span
                                        class="text-danger">*</span></label>
                                <select class="form-control" id="barang" name="barang" style="width: 100%;"
                                    required>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="qty">Quantity/Jumlah
                                    <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="number" min="1" class="form-control"
                                        placeholder="Quantity/Jumlah" aria-label="Quantity/Jumlah" id="qty"
                                        name="qty" aria-describedby="basic-addon1" required>
                                    <span class="input-group-text satuan"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="barang_oleh">Barang diterima dari
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="barang_oleh" name="oleh"
                                    placeholder="Contoh: Bpk. Adi Permana" required="" />
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="barang_tanggal">Tanggal
                                    <span class="text-danger">*</span></label>
                                <input type="date" class="form-control date-input-str" id="barang_tanggal"
                                    name="tanggal" required="" />
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="barang_keterangan">Keterangan</label>
                                <textarea type="text" class="form-control" rows="3" id="barang_keterangan" name="keterangan"
                                    placeholder="Keterangan"> </textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" form="BarangMainForm">
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

        <div class="modal fade" id="barang-modal-batalkan">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Batalkan Penggantian Barang</h6>
                        <button aria-label="Tutup" class="btn-close" data-bs-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:void(0)" id="BarangBatalkanForm" method="POST"
                            enctype="multipart/form-data">
                            <input type="hidden" name="id" id="barang-batalkan_id">
                            <div class="form-group">
                                <label class="form-label" for="alasan">Alasan pembatalan
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea type="text" class="form-control" rows="3" id="barang-alasan" name="alasan"
                                    placeholder="Alasan pembatalan" required></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" form="BarangBatalkanForm">
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
        {{-- modal barang =================================================================================================== --}}
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
        // Perizinan ==================================================================================================
        // detail
        const can_simpan_status = {{ $can_simpan_status ? 'true' : 'false' }};
        const can_faktur = {{ $can_faktur ? 'true' : 'false' }};

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

        $(document).ready(() => {
            $('#DetailForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                setBtnLoading('button[form=DetailForm][type=submit]', 'Simpan Status Ganti Rugi');
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
                        // simpan detail
                        setDetail(data.ganti_rugi);
                        refresh_detail_list_barang(data.barangs);
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
                            '<i class="fas fa-save"></i> Simpan Status Ganti Rugi',
                            false);
                    }
                });
            });
        });
    </script>

    @if ($can_uang)
        <script>
            // Perizinan ==============================================================================================
            const can_uang_batalkan = {{ $can_uang_batalkan ? 'true' : 'false' }};

            // Table ==================================================================================================
            let uangIsEdit = true;
            const table_uang = $('#tbl_uang');

            // Ganti rugi uang ========================================================================================
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

            function uangBatalFunc(id) {
                $('#uang-modal-batalkan').modal('show');
                $('#uang-batalkan_id').val(id);
                $('#uang-alasan').val('');
            }
            // Ganti rugi uang ========================================================================================
            // ========================================================================================================

            $(document).ready(() => {
                $('#uang_dibatalkan').select2();

                $('#uang_created_by').select2({
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

                $('#uang_updated_by').select2({
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

                $('#uang_nominal').change(UangRefreshNominal);
                $('#uang_nominal').keyup(UangRefreshNominal);
                $('#uang_nominal').click(UangRefreshNominal);

                // form
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
                            setDetail(data.ganti_rugi);
                            refresh_detail_list_barang(data.barangs);
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

                $('#UangBatalkanForm').submit(function(e) {
                    e.preventDefault();
                    resetErrorAfterInput();
                    var formData = new FormData(this);
                    setBtnLoading('button[form=UangBatalkanForm]', 'Save Changes');
                    $.ajax({
                        type: "POST",
                        url: "{{ route(h_prefix('uang.batalkan', 2)) }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: (data) => {
                            $("#uang-modal-batalkan").modal('hide');
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
                            setDetail(data.ganti_rugi);
                            refresh_detail_list_barang(data.barangs);
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
                            setBtnLoading('button[form=UangBatalkanForm]',
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
                            data: 'oleh',
                            name: 'oleh',
                            render(data, type, full, meta) {
                                const batal = full.status == 0;
                                const keterangan = full.keterangan ?
                                    `<br><small>${full.keterangan??''}<span class="${batal ?'text-danger' : '' }">${batal ?' (Dibatalkan)' : '' }</span></small> ` :
                                    '';
                                const nama = full.nama ?
                                    `<br>${full.nama??''}` :
                                    '';
                                return `<span class="fw-bold">${data??''}</span> ${nama} ${keterangan} `;
                            },
                        },
                        {
                            data: 'tanggal_str',
                            name: 'tanggal',
                            className: 'text-nowrap',
                            render(data, type, full, meta) {
                                return `${data}<br><small data-toggle="tooltip" title="Nomor Faktur">${full.no_surat}</small>`;
                            },
                        },
                        {
                            data: 'nominal',
                            name: 'nominal',
                            render(data, type, full, meta) {
                                return 'Rp. ' + format_rupiah(data);
                            },
                            className: 'text-nowrap text-right'
                        },
                        ...(can_faktur ? [{
                            data: 'id',
                            name: 'id',
                            render(data, type, full, meta) {
                                return `<a href="{{ url(h_prefix_uri('faktur', 2)) }}/${data}" target="_blank" class="btn btn-rounded btn-primary btn-sm me-1" title="Cetak Faktur">
                                <i class="fas fa-file-alt"></i> Cetak
                                </a>`;
                            },
                            orderable: false,
                            className: 'text-nowrap',
                        }] : []),
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
                        {
                            data: 'id',
                            name: 'id',
                            render(data, type, full, meta) {
                                const btn_batalkan = can_uang_batalkan && full.status == 1 ? `<button type="button" class="btn btn-rounded btn-warning btn-sm me-1" title="Batalkan" onClick="uangBatalFunc('${data}')">
                                <i class="fas fa-times"></i> Batalkan
                                </button>` : '';
                                const status_str = full.status == 0 ?
                                    `<i class="fas fa-circle text-danger me-1"></i> Dibatalkan<br><small>${full.pembatalan_alasan??''}</small>` :
                                    '';
                                return btn_batalkan + status_str;
                            },
                            orderable: false,
                            className: 'text-nowrap'
                        }
                    ],
                    order: [
                        [2, 'desc']
                    ],
                    language: {
                        url: datatable_indonesia_language_url
                    }
                });

                new_table_uang.on('draw.dt', function() {
                    var PageInfo = table_uang.DataTable().page.info();
                    new_table_uang.column(0, {
                        page: 'current'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1 + PageInfo.start;
                    });
                });

                $('#UangFilterForm').submit(function(e) {
                    e.preventDefault();
                    var oTable = table_uang.dataTable();
                    oTable.fnDraw(false);
                });
            });
        </script>
    @endif



    @if ($can_barang)
        <script>
            // Perizinan ==============================================================================================
            const can_barang_batalkan = {{ $can_barang_batalkan ? 'true' : 'false' }};

            // Table ==================================================================================================
            let barangIsEdit = true;
            const table_barang = $('#tbl_barang');

            function barangAdd() {
                if (!barangIsEdit) return false;
                $('#UangMainForm').trigger("reset");
                $('#modal-barang-title').html("Tambah Pembayaran");
                $('#modal-barang').modal('show');
                $('#barang_id').val('');
                $('#barang_tanggal').val(today);
                $('#barang_oleh').val(oleh);
                $('#barang')
                    .append((new Option('', '', true, true)))
                    .trigger('change');
                render_tanggal($('#barang_tanggal'));
                resetErrorAfterInput();
                barangIsEdit = false;
                BarangRefreshNominal();
                return true;
            }

            function BarangRefreshNominal() {
                const nominal = $('#barang_nominal').val();
                $('#barang_nominal_terbilang').html(nominal > 0 ? (terbilang(nominal) + ' Rupiah') : "");
            }

            function barangBatalFunc(id) {
                $('#barang-modal-batalkan').modal('show');
                $('#barang-batalkan_id').val(id);
                $('#barang-alasan').val('');
            }

            $(document).ready(() => {
                $('#barang_dibatalkan').select2();

                $('#barang_created_by').select2({
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

                $('#barang_updated_by').select2({
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

                $('#barang_nominal').change(BarangRefreshNominal);
                $('#barang_nominal').keyup(BarangRefreshNominal);
                $('#barang_nominal').click(BarangRefreshNominal);

                $('#barang').select2({
                    ajax: {
                        url: "{{ route(h_prefix('barang.select2', 2)) }}",
                        type: "GET",
                        data: function(params) {
                            var query = {
                                search: params.term,
                                ganti_rugi: '{{ $model->id }}',
                            }
                            return query;
                        }
                    },
                    placeholder: "Nama, Kode, Jenis atau Satuan Barang",
                    dropdownParent: $('#modal-barang'),
                }).on('select2:select', function(e) {
                    const data = e.params.data;
                    $('.satuan').html(data.satuan);
                    $('#qty').attr('max', data.sisa);
                    $('#qty').val(data.sisa);
                });

                // form
                $('#BarangMainForm').submit(function(e) {
                    e.preventDefault();
                    resetErrorAfterInput();
                    var formData = new FormData(this);
                    setBtnLoading('[form=BarangMainForm][type=submit]', 'Save Changes');
                    $.ajax({
                        type: "POST",
                        url: "{{ route(h_prefix('barang.insert', 2)) }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: (data) => {
                            $("#modal-barang").modal('hide');
                            var oTable = table_barang.dataTable();
                            oTable.fnDraw(false);
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Data saved successfully',
                                showConfirmButton: false,
                                timer: 1500
                            })

                            // simpan detail
                            setDetail(data.ganti_rugi);
                            refresh_detail_list_barang(data.barangs);
                            barangIsEdit = true;
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
                            setBtnLoading('[form=BarangMainForm][type=submit]',
                                '<li class="fas fa-save mr-1"></li> Simpan',
                                false);
                        }
                    });
                });

                $('#BarangBatalkanForm').submit(function(e) {
                    e.preventDefault();
                    resetErrorAfterInput();
                    var formData = new FormData(this);
                    setBtnLoading('button[form=BarangBatalkanForm]', 'Save Changes');
                    $.ajax({
                        type: "POST",
                        url: "{{ route(h_prefix('barang.batalkan', 2)) }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: (data) => {
                            $("#barang-modal-batalkan").modal('hide');
                            var oTable = table_barang.dataTable();
                            oTable.fnDraw(false);
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Data saved successfully',
                                showConfirmButton: false,
                                timer: 1500
                            })

                            // simpan detail
                            setDetail(data.ganti_rugi);
                            refresh_detail_list_barang(data.barangs);
                            barangIsEdit = true;
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
                            setBtnLoading('button[form=BarangBatalkanForm]',
                                '<li class="fas fa-save mr-1"></li> Simpan',
                                false);
                        }
                    });
                });

                const new_table_barang = table_barang.DataTable({
                    searchDelay: 500,
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    scrollX: true,
                    aAutoWidth: false,
                    bAutoWidth: false,
                    type: 'GET',
                    ajax: {
                        url: "{{ route(h_prefix('barang', 2)) }}",
                        data: function(d) {
                            d['filter[ganti_rugi_id]'] = ganti_rugi_id;
                            d['filter[updated_by]'] = $('#barang_updated_by').val();
                            d['filter[created_by]'] = $('#barang_created_by').val();
                            d['filter[dibatalkan]'] = $('#barang_dibatalkan').val();
                        }
                    },
                    columns: [{
                            data: null,
                            name: 'id',
                            orderable: false,
                        },
                        {
                            data: 'oleh',
                            name: 'oleh',
                            render(data, type, full, meta) {
                                const batal = full.status == 0;
                                const keterangan = full.keterangan ?
                                    `<br><small>${full.keterangan??''}<span class="${batal ?'text-danger' : '' }">${batal ?' (Dibatalkan)' : '' }</span></small> ` :
                                    '';
                                return `<span class="fw-bold">${data??''}</span> ${keterangan} `;
                            },
                        },
                        {
                            data: 'tanggal_str',
                            name: 'tanggal',
                            className: 'text-nowrap',
                            render(data, type, full, meta) {
                                return `${data}<br><small data-toggle="tooltip" title="Nomor Faktur">${full.no_surat}</small>`;
                            },
                        },
                        {
                            data: 'barang_nama',
                            name: 'barang_nama',
                            render(data, type, full, meta) {
                                return `${data}<br><small>${full.barang_kode} | Rp. ${format_rupiah(full.harga)}</small>`;
                            },
                            className: 'text-left'
                        },
                        {
                            data: 'qty',
                            name: 'qty',
                            render(data, type, full, meta) {
                                return `${data} ${full.satuan}<br><small>Rp. ${format_rupiah(full.harga*data)}</small>`;
                            },
                            className: 'text-right'
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
                        {
                            data: 'id',
                            name: 'id',
                            render(data, type, full, meta) {
                                const btn_batalkan = can_barang_batalkan && full.status == 1 ? `<button type="button" class="btn btn-rounded btn-warning btn-sm me-1" title="Batalkan" onClick="barangBatalFunc('${data}')">
                                <i class="fas fa-times"></i> Batalkan
                                </button>` : '';
                                const status_str = full.status == 0 ?
                                    `<i class="fas fa-circle text-danger me-1"></i> Dibatalkan<br><small>${full.pembatalan_alasan??''}</small>` :
                                    '';
                                return btn_batalkan + status_str;
                            },
                            orderable: false,
                            className: 'text-nowrap'
                        }
                    ],
                    order: [
                        [1, 'desc']
                    ],
                    language: {
                        url: datatable_indonesia_language_url
                    }
                });

                new_table_barang.on('draw.dt', function() {
                    tooltip_refresh();
                    var PageInfo = table_barang.DataTable().page.info();
                    new_table_barang.column(0, {
                        page: 'current'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1 + PageInfo.start;
                    });
                });

                $('#BarangFilterForm').submit(function(e) {
                    e.preventDefault();
                    var oTable = table_barang.dataTable();
                    oTable.fnDraw(false);
                });
            });
        </script>
    @endif

    {{-- function --}}
    <script>
        // informasi ganti rugi =======================================================================================
        function setStatus(value) {
            if (value == '0' || value == '1' || value == '2') {
                $("input[name=detail_status][value=" + value + "]").prop('checked', true);
                const ele = $('#detail_status_disimpan');
                ele.html(value == '1' ? 'Diproses' : (value == '2' ? 'Selesai' : 'Data Dibuat'));
                ele.removeClass('bg-warning');
                ele.removeClass('bg-success');
                ele.removeClass('bg-primary');
                ele.addClass(value == '1' ? 'bg-primary' : (value == '2' ? 'bg-success' : 'bg-warning'));
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

        function setDetail(data) {
            // simpan detail
            detail_status_disimpan = data.status;
            detail_total_harga = data.nominal;
            detail_dibayar = data.dibayar;
            detail_dibayar_barang = data.dibayar_barang;
            detail_sisa = data.sisa;
            detail_customer = `${data.customer.nama ?? data.get_customer.nama}<br>
                        <small>${data.customer.alamat ?? data.get_customer.alamat}</small>`;
            detail_keterangan = `${data.nama}<br>
                        <small>${data.keterangan}</small>`;

            setStatus(detail_status_disimpan);
            refreshDetail();
        }

        function refresh_detail_list_barang(datas) {
            const container = $('#detail-list-barang');
            container.html('');
            let counter = 1;
            datas.forEach(list => {
                container.append(`<tr>
                    <td>${counter++}</td>
                    <td>
                        ${list.barang_nama }
                        <br>
                        <small>${list.barang_kode }</small>
                    </td>
                    <td class="text-right">${list.qty_rusak } ${list.satuan }</td>
                    <td class="text-right">${list.qty_hilang } ${list.satuan }</td>
                    <td class="text-right">
                        ${list.qty_diganti } ${list.satuan }
                        <br>
                        <small>Rp. ${ format_rupiah(list.harga * list.qty_diganti) }</small>
                    </td>
                    <td class="text-right">Rp. ${ format_rupiah(list.harga) }</td>
                    <td class="text-right">Rp.
                        ${ format_rupiah((list.qty_rusak + list.qty_hilang) * list.harga) }
                    </td>
                </tr>`);
            });
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
