@extends('templates.admin.master')

@section('content')
    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">{{ $page_attr['title'] }}</h3>
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
                                    <label for="customer">Customer</label>
                                    <br>
                                    <select class="form-control" id="customer" name="customer" style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                    </select>
                                </div>

                                <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="status">Status</label>
                                    <br>
                                    <select class="form-control" id="status" name="status" style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                        <option value="0">Data Dibuat</option>
                                        <option value="1">Proses</option>
                                        <option value="2">Selesai</option>
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
                        <th>Faktur Penyewaan</th>
                        <th>Keterangan Ganti Rugi</th>
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
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
        const table_html = $('#tbl_main');
        let isEdit = true;
        $(document).ready(() => {
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
            // datatable ====================================================================================
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            const new_table = table_html.DataTable({
                searchDelay: 500,
                processing: true,
                serverSide: true,
                responsive: true,
                scrollX: true,
                aAutoWidth: false,
                bAutoWidth: false,
                type: 'GET',
                ajax: {
                    url: "{{ route(h_prefix()) }}",
                    data: function(d) {
                        d['filter[status]'] = $('#status').val();
                        d['filter[customer]'] = $('#customer').val();
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        orderable: false,
                    },
                    {
                        data: 'penyewaan_number',
                        name: 'penyewaan_number',
                        render(data, type, full, meta) {
                            const btn_detail = `<br><button type="button" data-toggle="tooltip" class="btn btn-rounded btn-info btn-sm me-1 mt-1" title="Detail Data" onClick="detailFunc('${full.penyewaan_id}')">
                                <i class="fas fa-file-alt"></i> Detail
                            </button>`;
                            return `${full.penyewaan_number} ${btn_detail}`;
                        },
                        className: 'text-nowrap to-link'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render(data, type, full, meta) {
                            let color = '';
                            let text = '';
                            if (data == 0) {
                                color = 'warning';
                                text = 'Data Dibuat';
                            } else if (data == 1) {
                                color = 'primary';
                                text = 'Proses';
                            } else if (data == 2) {
                                color = 'success';
                                text = 'Selesai';
                            }
                            return `<i class="fas fa-circle text-${color} me-1"></i> ${full.keterangan_gm}`;
                        },
                        className: 'text-nowrap'
                    },
                ],
                order: [
                    [2, 'asc']
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
                    var id = cell.innerHTML;
                    var link =
                        `window.location.href = '{{ url(h_prefix_uri('detail')) }}/${id}'`
                    var ele = $(cell).parent().find('.to-link');
                    ele.css('cursor', 'pointer');
                    ele.attr("onclick", link);
                    cell.innerHTML = i + 1 + PageInfo.start;
                });
            });

            $('#FilterForm').submit(function(e) {
                e.preventDefault();
                var oTable = table_html.dataTable();
                oTable.fnDraw(false);
            });
        });
    </script>
@endsection
