@extends('templates.admin.master')

@section('content')
    @php
        $can_surat_jalan = auth_can(h_prefix('surat_jalan', 2));
        $can_simpan = auth_can(h_prefix('simpan', 2));
        $can_action = $can_simpan || $can_surat_jalan;
    @endphp

    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">Detail Pengambilan Barang
                @if ($model->status == 9)
                    <span class="badge bg-danger">Dibatalkan</span>
                @endif
            </h3>
            <div>
                <a href="{{ route(h_prefix(null, 2)) }}" class="btn btn-rounded btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="javascript:void(0)" id="DetailForm" name="DetailForm" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-label">Kepada, Lokasi:</div>
                    <span class="fw-bold">{{ $model->kepada }}</span>,{{ $model->lokasi }}
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="hidden" name="tanggal">
                            <label class="form-label" for="tanggal">Tanggal barang diambil
                                <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="tanggal" required="" />
                        </div>
                    </div>
                </div>
                <p>List data barang yang akan diambil sesuai dengan pemensanan sebelumnya.</p>
                @foreach ($barangs as $key => $barang)
                    <hr>
                    <h5>{{ $barang->barang_kode }} | {{ $barang->barang_nama }}</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="hidden" name="id[]">
                                <label class="form-label" for="qty[]">Barang Diambil
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="qty[]" required="" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="qty_db_{{ $key }}">
                                    Barang QTY Penyewaan (Di Faktur)
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="qty_db_{{ $key }}"
                                    name="qty_db_{{ $key }}" required="" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="stok_db_{{ $key }}">
                                    Stok barang di gudang
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="stok_db_{{ $key }}"
                                    name="stok_db_{{ $key }}" required="" />
                            </div>
                        </div>
                    </div>
                @endforeach

            </form>
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
        $(document).ready(function() {

        });
    </script>
@endsection
