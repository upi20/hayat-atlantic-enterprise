@extends('templates.admin.master')

@section('content')
    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">{{ $page_attr['title'] }} Table List</h3>
            <button class="btn btn-rounded btn-success btn-sm" type="button" onclick="cetak_laporan()">
                <i class="fas fa-print"></i> Cetak Laporan
            </button>
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
                    <div id="collapse1" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne1">
                        <div class="panel-body">
                            <form action="javascript:void(0)" class="ml-md-3 mb-md-3" id="FilterForm">
                                <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="dari_tanggal">Dari Tanggal <small>(Tanggal Surat Jalan)</small></label>
                                    <br>
                                    <input type="date" class="form-control date-input-str" id="dari_tanggal"
                                        name="dari_tanggal"value="{{ $date_start }}">
                                </div>

                                <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="sampai_tanggal">Sampai Tanggal <small>(Tanggal Surat Jalan)</small></label>
                                    <br>
                                    <input type="date" class="form-control date-input-str" id="sampai_tanggal"
                                        name="sampai_tanggal" value="{{ $date_end }}">
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
                        <th rowspan="2" class="align-middle text-center">Penyewaan</th>
                        <th rowspan="2" class="align-middle">Ganti Rugi</th>
                        <th class="text-center" colspan="3">Nominal</th>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>Dibayar</th>
                        <th>Sisa</th>
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
        </div>
    </div>

    @include('component.penyewaan_detail_html')
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
    <script>
        const prefix_url = '{{ url(h_prefix_uri()) }}';
        const table_html = $('#tbl_main');
        $(document).ready(function() {

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
                        d['filter[sampai_tanggal]'] = $('#sampai_tanggal').val();
                        d['filter[dari_tanggal]'] = $('#dari_tanggal').val();
                    }
                },
                columns: [{
                        data: 'penyewaan_number',
                        name: 'penyewaan_number',
                        render(data, type, full, meta) {
                            const btn_detail = `<button type="button" data-toggle="tooltip" class="btn btn-rounded btn-info btn-sm me-1 mt-1" title="Detail Data" onClick="detailFunc('${full.penyewaan_id}')">
                                <i class="fas fa-file-alt"></i> Detail
                                </button>`;
                            return `${data}<br>${btn_detail}`;
                        },
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        render(data, type, full, meta) {
                            return `<span data-toggle="tooltip" title="${data}">${data}</span><br>
                            <small data-toggle="tooltip" title="${full.keterangan}">${full.keterangan}</small>`;
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
                    {
                        data: 'dibayar_total',
                        name: 'dibayar_total',
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
            });

            $('#FilterForm').submit(function(e) {
                e.preventDefault();
                var oTable = table_html.dataTable();
                oTable.fnDraw(false);
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

        function cetak_laporan() {
            const data_table = table_html.DataTable();
            const params = data_table.ajax.params();
            const dari_tanggal = params['filter[dari_tanggal]'] ?? '';
            const sampai_tanggal = params['filter[sampai_tanggal]'] ?? '';

            const order = params['order'][0] ?? '';
            const order_column = order['column'];
            const order_dir = order['dir'];
            const search = params['search']['value'] ?? '';
            const search_value = encodeURIComponent(search);

            // column
            const columns = params['columns'];
            let columns_str = '';
            Object.keys(columns).map(function(key) {
                const column = columns[key];
                columns_str += `&columns[${key}][data]=${column.data}`;
                columns_str += `&columns[${key}][name]=${column.name}`;
                console.log(columns[key]);
            })

            const url =
                `${prefix_url}/cetak_laporan?&filter[sampai_tanggal]=${sampai_tanggal}&filter[dari_tanggal]=${dari_tanggal}&search[value]=${search_value}${columns_str}&order[0][column]=${order_column}&order[0][dir]=${order_dir}`;
            window.open(url, '_blank');
        }
    </script>
    @include('component.penyewaan_detail_js')
@endsection
