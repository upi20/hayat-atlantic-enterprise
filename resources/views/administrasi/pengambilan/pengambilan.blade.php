@extends('templates.admin.master')

@section('content')
    @php
        $can_save = auth_can(h_prefix('save'));
        $can_konfirmasi = auth_can(h_prefix('konfirmasi'));
        $can_pengambilan = $can_save || $can_konfirmasi;
    @endphp

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
                                    <label for="filter_status_pengambilan">Status Pengembalian</label>
                                    <br>
                                    <select class="form-control" id="filter_status_pengambilan"
                                        name="filter_status_pengambilan" style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                        <option value="Pengembalian Selesai">Pengembalian Selesai</option>
                                        <option value="Pengembalian Disimpan">Pengembalian Disimpan</option>
                                        <option value="Barang Dikirim">Barang Dikirim</option>
                                        <option value="Data Disimpan">Data Disimpan</option>
                                        <option value="Data Dibuat">Data Dibuat</option>
                                    </select>
                                </div>
                                <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="filter_status">Status Penyewaan</label>
                                    <br>
                                    <select class="form-control" id="filter_status" name="filter_status"
                                        style="width: 100%;">
                                        <option value="">Semua</option>
                                        <option value="1">Penyewaan Dibuat</option>
                                        <option value="2" selected>Faktur Dibuat</option>
                                        <option value="3">Barang Diambil</option>
                                        <option value="4">Barang Dikembalikan</option>
                                        <option value="5">Selesai</option>
                                        <option value="9">Dibatalkan</option>
                                    </select>
                                </div>

                                <div class="form-group float-start me-2" style="min-width: 300px">
                                    <label for="customer">Customer</label>
                                    <br>
                                    <select class="form-control" id="customer" name="customer" style="width: 100%;">
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
                        <th>Faktur Penyewaan</th>
                        <th>Tanggal Kirim</th>
                        <th>Tanggal Pengiriman Barang</th>
                        {{-- <th>Tanggal Pakai</th> --}}
                        <th>Status Barang</th>
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

    {{-- sweetalert --}}
    <script src="{{ asset('assets/templates/admin/plugins/sweet-alert/sweetalert2.all.js') }}"></script>
    <script src="{{ asset('assets/templates/admin/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        const can_pengambilan = {{ $can_pengambilan ? 'true' : 'false' }};
        const table_html = $('#tbl_main');
        let isEdit = true;
        $(document).ready(function() {
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
            $('#filter_status').select2();
            $('#filter_status_pengambilan').select2();

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
                    url: "{{ route(h_prefix('datatable')) }}",
                    data: function(d) {
                        const status_pengmbilan = $('#filter_status_pengambilan').val();
                        d['filter[updated_by]'] = $('#updated_by').val();
                        d['filter[created_by]'] = $('#created_by').val();
                        d['filter[customer]'] = $('#customer').val();
                        d['filter[status]'] = $('#filter_status').val();
                        d['filter[status_pengambilan_str]'] = $('#filter_status_pengambilan').val();
                        if (status_pengmbilan == '') {
                            d['filter[proses_penyewaan]'] = 'pengiriman';
                        }
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        orderable: false,
                    },
                    {
                        data: 'customer_nama',
                        name: 'customer_nama',
                        render(data, type, full, meta) {
                            return `${full.number} | <span class="fw-bold">${data??full.number}</span> <br>
                            <i class="fas fa-circle text-${full.status_pengambilan == 1 ? 'success':'danger'} me-1"></i>${full.status_pengambilan_str}`;
                        },
                        className: `to-link`
                    },
                    {
                        data: 'tanggal_kirim_str',
                        name: 'tanggal_kirim',
                        className: 'text-nowrap to-link'
                    },
                    {
                        data: 'tanggal_pengambilan_str',
                        name: 'tanggal_pengambilan',
                        className: 'text-nowrap to-link'
                    },
                    // {
                    //     data: 'tanggal_pakai_dari_str',
                    //     name: 'tanggal_pakai_dari_str',
                    //     render(data, type, full, meta) {
                    //         if (data == full.tanggal_pakai_sampai_str) {
                    //             return data;
                    //         } else {
                    //             return `${data ?? ''} s/d ${full.tanggal_pakai_sampai_str ?? ''}`;
                    //         }
                    //     },
                    //     className: 'text-nowrap to-link'
                    // },
                    // {
                    //     data: 'status_pengambilan',
                    //     name: 'status_pengambilan',
                    //     render(data, type, full, meta) {
                    //         return `<i class="fas fa-circle text-${data == 1 ? 'success':'danger'} me-1"></i>${full.status_pengambilan_str}<br>
                //         <button type="button" data-toggle="tooltip" class="btn btn-rounded btn-info btn-sm me-1" title="Detail Data" onClick="detailFunc('${full.id}')">
                //             <i class="fas fa-file-alt"></i> Detail
                //             </button>`;
                    //     }
                    // },

                    {
                        data: 'status',
                        name: 'status_str',
                        render(data, type, full, meta) {
                            const status = `<i class="fas fa-circle me-1 text-${statusClass(full.status)}"></i>
                                ${full.status_str} <br>
                                <button type="button" data-toggle="tooltip" class="btn btn-rounded btn-info btn-sm me-1" title="Detail Data" onClick="detailFunc('${full.id}')">
                                <i class="fas fa-file-alt"></i> Detail
                                </button>`;
                            return status;
                            // return `<i class="fas fa-circle text-${data == 1 ? 'success':'danger'} me-1"></i>${full.status_pengambilan_str}<br>`;
                        }
                    },
                ],
                order: [
                    [4, 'asc'],
                    [1, 'asc'],
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
                    cell.innerHTML = i + 1 + PageInfo.start;
                    if (can_pengambilan) {
                        var link = `window.location.href = '{{ url(h_prefix_uri('list')) }}/${id}'`
                        var ele = $(cell).parent().find('.to-link');
                        ele.css('cursor', 'pointer');
                        ele.attr("onclick", link);
                    }
                });
            });

            $('#FilterForm').submit(function(e) {
                e.preventDefault();
                var oTable = table_html.dataTable();
                oTable.fnDraw(false);
            });
        });

        function statusClass(status) {
            if (status == 1) return 'primary';
            else if (status == 2) return 'info';
            else if (status == 3) return 'secondary';
            else if (status == 4) return 'warning';
            else if (status == 5) return 'success';
            else return 'danger';
        }
    </script>

    @include('component.penyewaan_detail_js')
@endsection
