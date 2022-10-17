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
                        <p>Rp <span id="detail_total_harga"></span></p>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Ganti Rugi Uang</label>
                        <p>Rp <span id="detail_dibayar"></span></p>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Ganti Rugi Barang</label>
                        <p>Rp <span id="detail_dibayar_barang"></span></p>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Sisa</label>
                        <p>Rp <span id="detail_sisa"></span></p>
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
        let detail_status_disimpan = '{{ $model->status }}';
        let detail_total_harga = '{{ $model->nominal }}';
        let detail_dibayar = '{{ $model->dibayar }}';
        let detail_dibayar_barang = '{{ $model->dibayar_barang }}';
        let detail_sisa = '{{ $model->sisa }}';
        let detail_customer = '{!! "$customer->nama<br><small>$customer->alamat</small>" !!}';
        let detail_keterangan = '{!! "$model->nama<br><small>$model->keterangan</small>" !!}';

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
            $('#detail_dibayar').html(format_rupiah(detail_dibayar));
            $('#detail_dibayar_barang').html(format_rupiah(detail_dibayar_barang));
            $('#detail_sisa').html(format_rupiah(detail_sisa));

            $('#detail_customer').html(detail_customer);
            $('#detail_keterangan').html(detail_keterangan);
        }

        // initial
        setStatus(detail_status_disimpan);
        refreshDetail();
    </script>
@endsection
