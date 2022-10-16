@extends('templates.admin.master')

@section('content')
    @php
        $can_save = auth_can(h_prefix('save', 2));
        $can_konfirmasi = auth_can(h_prefix('konfirmasi', 2));
        $can_barang_habis_pakai = auth_can(h_prefix('barang_habis_pakai', 2));
        $can_barang_habis_pakai_insert = auth_can(h_prefix('barang_habis_pakai.insert', 2));
        $can_barang_habis_pakai_update = auth_can(h_prefix('barang_habis_pakai.update', 2));
        $can_barang_habis_pakai_delete = auth_can(h_prefix('barang_habis_pakai.delete', 2));
        $can_barang_habis_pakai_action = ($can_barang_habis_pakai_update || $can_barang_habis_pakai_delete) && $surat_jalan->status != 4;
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
                <a href="{{ route(h_prefix('pengambilan.surat_jalan', 3), $model->id) }}" target="_blank" id="btn-surat-jalan"
                    class="btn btn-rounded btn-success btn-sm"
                    style="{{ $surat_jalan->status == 0 ? 'display:none' : '' }}">
                    <i class="fas fa-print"></i> Cetak Surat Jalan
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
                        <p><i class="fab fa-whatsapp"></i> {{ $customer->no_whatsapp }}
                            <i class="fas fa-phone-alt ms-3"></i> {{ $customer->no_telepon }}
                        </p>

                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="form-label col-md-3">Tanggal Surat Jalan:
                        <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="date" class="form-control date-input-str" name="tanggal" id="tanggal"
                            value="{{ $surat_jalan->tanggal }}" required="" style="display: none" />
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="form-label col-md-3 ">Keterangan/Catatan:
                        <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <p>{{ $surat_jalan->keterangan }}</p>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="form-label col-md-3 ">Status Pengambilan</label>
                    <div class="col-md-9">
                        <span id="status-surat_jalan" class="">{{ $surat_jalan->status }}</span>
                    </div>
                </div>

                <p>List data barang yang akan diambil sesuai dengan penyewaan yang sudah dibuat.</p>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th rowspan="2" class="align-middle">Nama Barang</th>
                            <th rowspan="2" class="text-right align-middle">Jml. Disewa</th>
                            <th colspan="3" class="text-center">Kondisi Barang Saat Dikembalikan</th>
                            <th rowspan="2" class="align-middle">Total</th>
                        </tr>
                        <tr>
                            <th>Baik <span class="text-danger">*</span></th>
                            <th>Rusak <span class="text-danger">*</span></th>
                            <th>Hilang <span class="text-danger">*</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surat_jalan_barangs as $key => $barang)
                            <tr>
                                <td>
                                    {{ $barang->barang_nama }}<br>
                                    <small>{{ $barang->barang_kode }}</small>
                                </td>
                                <td class="text-right">{{ $barang->qty }} {{ $barang->barang_satuan }}</td>
                                <td>
                                    <div class="input-group">
                                        <input onkeyup="refresh_total('{{ $barang->id }}')"
                                            onchange="refresh_total('{{ $barang->id }}')"
                                            onclick="refresh_total('{{ $barang->id }}')" type="number" min="0"
                                            max="{{ $barang->qty }}"
                                            value="{{ $surat_jalan->status == 3 ? $barang->pengembalian_qty : $barang->qty }}"
                                            class="form-control" style="max-width: 100px" name="baik[{{ $barang->id }}]"
                                            id="baik-{{ $barang->id }}" required="" />
                                        <div class="input-group-text">{{ $barang->barang_satuan }}</div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="input-group">
                                        <input onkeyup="refresh_total('{{ $barang->id }}')"
                                            onchange="refresh_total('{{ $barang->id }}')"
                                            onclick="refresh_total('{{ $barang->id }}')" type="number" min="0"
                                            max="{{ $barang->qty }}"
                                            value="{{ $surat_jalan->status == 3 ? $barang->pengembalian_hilang : 0 }}"
                                            class="form-control" style="max-width: 100px" name="rusak[{{ $barang->id }}]"
                                            id="rusak-{{ $barang->id }}" required="" />
                                        <div class="input-group-text">{{ $barang->barang_satuan }}</div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="input-group">
                                        <input onkeyup="refresh_total('{{ $barang->id }}')"
                                            onchange="refresh_total('{{ $barang->id }}')"
                                            onclick="refresh_total('{{ $barang->id }}')" type="number" min="0"
                                            max="{{ $barang->qty }}"
                                            value="{{ $surat_jalan->status == 3 ? $barang->pengembalian_rusak : 0 }}"
                                            class="form-control" style="max-width: 100px"
                                            name="hilang[{{ $barang->id }}]" id="hilang-{{ $barang->id }}"
                                            required="" />
                                        <input type="hidden" id="disewa-{{ $barang->id }}"
                                            value="{{ $barang->qty }}" />
                                        <div class="input-group-text">{{ $barang->barang_satuan }}</div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <span id="total-{{ $barang->id }}"></span>
                                    {{ $barang->barang_satuan }}
                                    <span id="barang-{{ $barang->id }}"></span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        <div class="card-footer" id="btn-simpan" style="{{ $surat_jalan->status == 4 ? 'display:none' : '' }}">
            @if ($can_save)
                <button type="submit" class="btn btn-primary" form="MainForm">
                    <li class="fas fa-save"></li> Simpan
                </button>
            @endif
            @if ($can_konfirmasi)
                <button type="button" class="btn btn-success" id="btn-konfirmasi"
                    onclick="konfirmasiFun('{{ $surat_jalan->id }}')"
                    style="{{ $surat_jalan->status != 1 ? 'display:none' : '' }}">
                    <li class="fas fa-check"></li> Konfirmasi Pengembalian Barang Selesai
                </button>
            @endif
        </div>

    </div>

    @if ($can_barang_habis_pakai)
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h3 class="card-title">Barang habis pakai (Total Rp.<span id="total_bhs"></span>)</h3>
                @if ($can_barang_habis_pakai_insert)
                    <button type="button" class="btn btn-rounded btn-success btn-sm bhs_aksi" onclick="add()">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
                @endif
            </div>
            <div class="card-body">
                <p>Daftar barang habis pakai yang digunakan pada saat penyewaan berlangsung.</p>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">Barang</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Qty</th>
                            <th class="text-right">Harga</th>
                            <th class="text-right">Total</th>

                            {!! $can_barang_habis_pakai_action ? '<th class="text-center bhs_aksi">Aksi</th>' : '' !!}
                        </tr>
                    </thead>
                    <tbody id="bhs-table-body"></tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="modal-default">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-default-title"></h6><button aria-label="Tutup"
                            class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:void(0)" id="BarangHabisPakaiForm" name="BarangHabisPakaiForm"
                            method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="surat_jalan" id="surat_jalan" value="{{ $surat_jalan->id }}">
                            <div class="form-group">
                                <label class="form-label" for="nama">Barang
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control" id="barang_id" name="barang_id" style="width: 100%;"
                                    required>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="qty">Quantity/Jumlah
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="number" min="1" class="form-control"
                                        placeholder="Quantity/Jumlah" id="qty" name="qty"required>
                                    <span class="input-group-text satuan"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="harga">Harga
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp </span>
                                    <input type="number" min="1" class="form-control" id="harga"
                                        name="harga" required>
                                </div>
                                <small id="harga_terbilang" class="fst-italic"></small>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="keterangan">Keterangan </label>
                                <textarea type="text" class="form-control" rows="3" id="keterangan" name="keterangan"
                                    placeholder="Keterangan"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="total_harga">Total Harga</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp </span>
                                    <input type="number" class="form-control" placeholder="Total Harga"
                                        id="total_harga" name="total_harga" readonly>
                                </div>
                                <small id="total_harga_terbilang" class="fst-italic"></small>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" form="BarangHabisPakaiForm">
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
        // barang habis pakai 
        let isEdit = true;
        let current_barang = {
            id: null,
            harga: null,
        };
        const can_barang_habis_pakai_update = {{ $can_barang_habis_pakai_update ? 'true' : 'false' }};
        const can_barang_habis_pakai_delete = {{ $can_barang_habis_pakai_delete ? 'true' : 'false' }};
        let can_barang_habis_pakai_action = {{ $can_barang_habis_pakai_action ? 'true' : 'false' }};


        $(document).ready(function() {
            setTimeout(() => {
                $('#tanggal').next().attr('class', 'h6')
            }, 1000);
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
                        let err_text = null;
                        if (data.responseJSON) {
                            err_text = data.responseJSON.message;
                        }

                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: err_text ?? 'Something went wrong',
                            showConfirmButton: true,
                            timer: 10000
                        })
                    },
                    complete: function() {
                        setBtnLoading('button[type=submit][form=MainForm]',
                            '<i class="fas fa-save"></i> Simpan',
                            false);
                    }
                });
            });

            // barang habis pakai
            $('#barang_id').select2({
                ajax: {
                    url: "{{ route(h_prefix('barang_habis_pakai.select2', 2)) }}",
                    type: "GET",
                    data: function(params) {
                        var query = {
                            search: params.term,
                            surat_jalan: '{{ $surat_jalan->id }}',
                        }
                        return query;
                    },
                },
                placeholder: "Masukan nama,kode,harga,jenis atau satuan barang.",
                dropdownParent: $('#modal-default')
            }).on('select2:select', function(e) {
                const data = e.params.data;
                // set sautan
                $('.satuan').html(data.satuan);

                // set harga
                $('#harga').val(data.harga);

                bhs_refresh_total();
            });

            // event
            $('#qty').click(bhs_refresh_total);
            $('#qty').keyup(bhs_refresh_total);
            $('#qty').change(bhs_refresh_total);

            $('#harga').click(bhs_refresh_total);
            $('#harga').keyup(bhs_refresh_total);
            $('#harga').change(bhs_refresh_total);

            // simpan barang habis pakai
            $('#BarangHabisPakaiForm').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('[form=BarangHabisPakaiForm][type=submit]', 'Save Changes');
                const route = ($('#id').val() == '') ?
                    "{{ route(h_prefix('barang_habis_pakai.insert', 2)) }}" :
                    "{{ route(h_prefix('barang_habis_pakai.update', 2)) }}";
                $.ajax({
                    type: "POST",
                    url: route,
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#modal-default").modal('hide');
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        isEdit = true;
                        refresh_bhs_list();
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
                        setBtnLoading('[form=BarangHabisPakaiForm][type=submit]',
                            '<li class="fas fa-save mr-1"></li> Simpan',
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

            if (status < 4) {
                $('#btn-simpan').fadeIn();
            } else {
                $('#btn-simpan').fadeOut();
            }

            if (status != 0) {
                $('#btn-surat-jalan').fadeIn();
            } else {
                $('#btn-surat-jalan').fadeOut();
            }

            if (status == 3) {
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
                            if (data.status == 4) {
                                $('.bhs_aksi').remove();
                            }
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

        function refresh_total(id) {
            const baik = Number($(`#baik-${id}`).val());
            const rusak = Number($(`#rusak-${id}`).val());
            const hilang = Number($(`#hilang-${id}`).val());
            const total = (baik + hilang + rusak);
            const disewa = Number($(`#disewa-${id}`).val());
            if (total != disewa) {
                $(`#barang-${id}`).html(`<i class="far fa-times-circle text-danger"></i>`);
            } else {
                $(`#barang-${id}`).html(`<i class="far fa-check-circle text-success"></i>`);
            }
            $(`#total-${id}`).html(total);
        }
        set_status($('#status-surat_jalan').html());

        // barang habis pakai ==============================================================================================
        function bhs_refresh_total() {
            const qty = Number($('#qty').val());
            const harga = Number($('#harga').val());
            const total_harga = qty * harga;
            $('#total_harga').val(total_harga);

            bhs_refresh_terbilang();
        }

        function bhs_refresh_terbilang() {
            // harga
            const harga = Number($('#harga').val());
            $('#harga_terbilang').html(harga > 0 ? (terbilang(harga) + ' Rupiah') : "");

            // total harga
            const total_harga = Number($('#total_harga').val());
            $('#total_harga_terbilang').html(total_harga > 0 ? (terbilang(total_harga) + ' Rupiah') : "");
        }
        bhs_refresh_terbilang();

        function add() {
            $('#modal-default').modal('show');
            if (!isEdit) return false;
            $('#BarangHabisPakaiForm').trigger("reset");
            $('#modal-default-title').html("Tambah Barang Habis Pakai");
            $('#id').val('');
            $('#barang_id').append((new Option('', '', true, true))).trigger('change');
            bhs_refresh_total();
            $('.satuan').html('');

            isEdit = false;
            return true;
        }

        function refresh_bhs_list() {
            $('#bhs-table-body').LoadingOverlay("show");
            $.ajax({
                method: 'post',
                url: `{{ route(h_prefix('barang_habis_pakai', 2)) }}`,
                data: {
                    surat_jalan: '{{ $surat_jalan->id }}'
                }
            }).done((data) => {
                $('#bhs-table-body').LoadingOverlay("hide");
                // render
                let html = '';
                let total = 0;
                data.forEach(bhs => {
                    total += bhs.total;
                    const btn_update = can_barang_habis_pakai_update ? `<button type="button" class="btn btn-rounded btn-primary btn-sm me-1" title="Edit Data"onClick="editFunc('${bhs.id}')">
                                <i class="fas fa-edit"></i> Ubah
                                </button>` : '';
                    const btn_delete = can_barang_habis_pakai_delete ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1" title="Delete Data" onClick="deleteFunc('${bhs.id}')">
                                <i class="fas fa-trash"></i> Hapus
                                </button>` : '';
                    const btn = btn_update + btn_delete;
                    html += `<tr>
                            <td class="text-left">
                                ${bhs.nama}<br>
                                <small>${bhs.kode}</small>
                            </td>
                            <td class="text-center">${bhs.keterangan??''}</td>
                            <td class="text-left">${bhs.qty} ${bhs.satuan}</td>
                            <td class="text-right">Rp. ${format_rupiah(bhs.harga)}</td>
                            <td class="text-right">Rp. ${format_rupiah(bhs.total)}</td>
                            ${can_barang_habis_pakai_action ? `<td class="text-center bhs_aksi">${btn}</td>`:'' }
                    </tr>`;
                });

                $('#bhs-table-body').html(html);
                $('#total_bhs').html(format_rupiah(total));

            }).fail(($xhr) => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Something went wrong, try again later',
                    showConfirmButton: false,
                    timer: 3500
                })
                $('#bhs-table-body').LoadingOverlay("hide");
            })
        }
        refresh_bhs_list();

        function editFunc(id) {
            $.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: `{{ route(h_prefix('barang_habis_pakai.find', 2)) }}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id
                },
                success: (data) => {
                    isEdit = true;
                    $('#modal-default').modal('show');
                    $('#modal-default-title').html("Ubah Barang Habis Pakai");
                    $('#barang_id')
                        .append((new Option(data.barang_nama, data.barang_id, true, true)))
                        .trigger('change');
                    $('.satuan').html(data.satuan);
                    $('#id').val(data.id);
                    $('#qty').val(data.qty);
                    $('#harga').val(data.harga);
                    $('#keterangan').val(data.keterangan);
                    bhs_refresh_total();
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
                        url: `{{ url(h_prefix_uri('barang_habis_pakai', 2)) }}/${id}`,
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
                                title: 'Barang habis pakai berhasil dihapus',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            refresh_bhs_list();
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
    @foreach ($surat_jalan_barangs as $barang)
        <script>
            refresh_total('{{ $barang->id }}')
        </script>
    @endforeach;
@endsection
