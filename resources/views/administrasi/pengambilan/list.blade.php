@extends('templates.admin.master')

@section('content')
    @php
        $can_save = auth_can(h_prefix('save', 2));
        $can_konfirmasi = auth_can(h_prefix('konfirmasi', 2));
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
                <a href="{{ route(h_prefix('surat_jalan', 2), $model->id) }}" target="_blank" id="btn-surat-jalan"
                    class="btn btn-rounded btn-success btn-sm">
                    <i class="fas fa-print"></i> Surat Jalan
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="javascript:void(0)" id="MainForm" name="MainForm" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="surat_jalan" value="{{ $surat_jalan->id }}">
                <div class=" row mb-4">
                    <label class="form-label col-md-3 ">Kepada:</label>
                    <div class="col-md-9">
                        <p><i class="fas fa-user"></i> {{ $model->kepada }} </p>
                        <p><i class="fas fa-map-marker-alt"></i> {{ $model->lokasi }} </p>
                        <p><i class="fab fa-whatsapp"></i> {{ is_null($customer) ? '' : $customer->no_whatsapp }}
                            <i class="fas fa-phone-alt ms-3"></i> {{ is_null($customer) ? '' : $customer->no_telepon }}
                        </p>

                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="form-label col-md-3">Tanggal Surat Jalan:
                        <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="date" class="form-control date-input-str" name="tanggal" id="tanggal"
                            value="{{ $surat_jalan->tanggal }}" required="" />
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="form-label col-md-3 ">Keterangan/Catatan:
                        <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="keterangan" id="keterangan" cols="20" rows="7">{{ $surat_jalan->keterangan }}</textarea>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="form-label col-md-3 ">Status Pengambilan</label>
                    <div class="col-md-9">
                        <span id="status-surat_jalan" class="">{{ $surat_jalan->status }}</span>
                    </div>
                </div>

                <p>List data barang yang akan diambil sesuai dengan penyewaan yang sudah dibuat.</p>
                <table class="table">
                    <thead>
                        <th>Nama Barang</th>
                        <th>Jml. Diambil <span class="text-danger">*</span></th>
                        <th class="text-right">Jml. Disewa</th>
                        <th class="text-right">Jml. Digudang</th>
                    </thead>
                    <tbody>
                        @foreach ($surat_jalan_barangs as $key => $barang)
                            <tr>
                                <td>{{ $barang->barang_nama }}<br><small>{{ $barang->barang_kode }}</small></td>
                                <td>
                                    <div class="input-group">
                                        <input type="number" min="0" value="{{ $barang->qty }}"
                                            class="form-control" style="max-width: 100px" name="qtys[{{ $barang->id }}]"
                                            required="" />
                                        <div class="input-group-text">{{ $barang->barang_satuan }}</div>
                                    </div>
                                </td>
                                <td class="text-right">{{ $barang->barang_disewa_qty }} {{ $barang->barang_satuan }}</td>
                                <td class="text-right">{{ $barang->barang_stok }} {{ $barang->barang_satuan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        <div class="card-footer" id="btn-simpan">
            @if ($can_save)
                <button type="submit" class="btn btn-primary" form="MainForm">
                    <li class="fas fa-save"></li> Simpan
                </button>
            @endif
            @if ($can_konfirmasi)
                <button type="button" class="btn btn-success" id="btn-konfirmasi"
                    onclick="konfirmasiFun('{{ $surat_jalan->id }}')">
                    <li class="fas fa-check"></li> Konfirmasi Pengambilan Barang
                </button>
            @endif
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
            $('#MainForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                setBtnLoading('button[type=submit][form=MainForm]', 'Simpan');
                $.ajax({
                    type: "POST",
                    url: "{{ route(h_prefix('save', 2)) }}",
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

                        // jika status 1 maka set status teks, print, simpan
                        if (data.status != undefined) {
                            // set status
                            set_status(data.status);
                        }
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
                        setBtnLoading('button[type=submit][form=MainForm]',
                            '<i class="fas fa-save"></i> Simpan',
                            false);
                    }
                });
            });
        });

        function set_status(status) {
            const status_el = $('#status-surat_jalan');
            const status_color = colorClass(status);
            const status_str = statusPengamblian(status);

            status_el.attr('class', `badge bg-${status_color}`);
            status_el.html(status_str);

            if (status < 2) {
                $('#btn-simpan').fadeIn();
            } else {
                $('#btn-simpan').fadeOut();
            }

            if (status != 0) {
                $('#btn-surat-jalan').fadeIn();
            } else {
                $('#btn-surat-jalan').fadeOut();
            }

            if (status == 1) {
                $('#btn-konfirmasi').fadeIn();
            } else {
                $('#btn-konfirmasi').fadeOut();
            }
        }

        function konfirmasiFun(id) {
            swal.fire({
                title: 'Apakah anda yakin?',
                text: "Untuk mengkofirmsi pengmabilan barang. ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes'
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: `{{ url(h_prefix_uri('konfirmasi', 2)) }}/${id}`,
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
                                title: 'Konfirmasi pengmabilan barang berhasil.',
                                showConfirmButton: false,
                                timer: 2000
                            });
                            set_status(data.status);
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
        set_status($('#status-surat_jalan').html());
    </script>
@endsection
