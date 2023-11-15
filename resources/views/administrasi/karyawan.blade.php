@extends('templates.admin.master')

@section('content')
    @php
        $can_insert = auth_can(h_prefix('insert'));
        $can_update = auth_can(h_prefix('update'));
        $can_delete = auth_can(h_prefix('delete'));
    @endphp

    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">{{ $page_attr['title'] }}</h3>
            @if ($can_insert)
                <button type="button" class="btn btn-rounded btn-success btn-sm" data-bs-effect="effect-scale"
                    data-bs-toggle="modal" href="#modal-default" onclick="add()" data-target="#modal-default">
                    <i class="fas fa-plus"></i> Tambah
                </button>
            @endif
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
                                <div class="form-group float-start me-2" style="min-width: 250px">
                                    <label for="filter_role">Jabatan</label>
                                    <br>
                                    <select class="form-control" id="filter_role" name="filter_role" style="width: 100%;">
                                        <option value="" selected>Semua</option>
                                        @foreach ($user_role as $v)
                                            <option value="{{ $v['name'] }}">{{ $v['name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group float-start me-2" style="min-width: 250px">
                                    <label for="filter_status_kontrak">Keterangan Kontrak</label>
                                    <br>
                                    <select class="form-control" id="filter_status_kontrak" name="filter_status_kontrak"
                                        style="width: 100%;">
                                        @foreach ($status_kontrak as $status)
                                            @if (is_null($status))
                                                <option value="">Semua</option>
                                            @else
                                                <option value="{{ $status }}">{{ $status }}</option>
                                            @endif
                                        @endforeach
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
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>Umur</th>
                        <th>No Telepon</th>
                        <th>Jabatan</th>
                        <th>Keterangan Kontrak</th>
                        {!! $can_delete || $can_update ? '<th>Ubah Data</th>' : '' !!}
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    <!-- End Row -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-default-title"></h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="UserForm" name="UserForm" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id">
                        <div class="row mb-1">
                            <label class="col-md-3 form-label" for="name">Nama
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nama Karyawan" required="" />
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label class="col-md-3 form-label" for="nik">Nomor Induk Kependudukan
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="number" id="nik" name="nik" class="form-control"
                                    placeholder="Nomor Induk Kependudukan" required="" />
                            </div>
                        </div>

                        {{-- new --}}
                        <div class="row mb-1">
                            <label class="col-md-3 form-label" for="alamat">Alamat
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <textarea id="alamat" name="alamat" class="form-control" placeholder="Alamat" required="" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label class="col-md-3 form-label" for="no_telepon">No Telepon
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" id="no_telepon" name="no_telepon" class="form-control"
                                    placeholder="No Telepon" />
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label class="col-md-3 form-label" for="tgl_lahir">Tanggal Lahir
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="date" id="tgl_lahir" name="tgl_lahir"
                                    class="form-control  date-input-str" placeholder="Tanggal Lahir" />
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label class="col-md-3 form-label" for="role">Jabatan
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <select class="form-control" style="width: 100%;" required="" id="role"
                                    name="role">
                                    @foreach ($user_role as $role)
                                        <option value="{{ $role->name }}">
                                            {{ ucfirst(implode(' ', explode('_', $role->name))) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- new --}}
                        <div class="row mb-1">
                            <label class="col-md-3 form-label" for="awal_masuk_kerja">Awal Masuk Kerja
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="number" id="awal_masuk_kerja" name="awal_masuk_kerja" class="form-control"
                                    placeholder="Awal Masuk Kerja" min="1970" max="{{ date('Y') }}" />
                            </div>
                        </div>

                        {{-- new --}}
                        <div class="row mb-1">
                            <label class="col-md-3 form-label" for="status_kontrak">Status Kontrak
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" id="status_kontrak" name="status_kontrak" class="form-control"
                                    placeholder="Status Kontrak" />
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label class="col-md-3 form-label" for="username">Username
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Username" required="" />
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label class="col-md-3 form-label" for="password">Password
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="password" name="password"
                                    placeholder="Password" required="">
                            </div>
                        </div>
                        {{-- <div class="row mb-1">
                            <label class="col-md-3 form-label" for="jenis_kelamin">Jenis Kelamin
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <select class="form-control" required="" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="l">Laki-Laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="row mb-4 d-none">
                            <label class="col-md-3 form-label" for="active">Active
                                <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="hidden" id="active" name="active" value="1">
                                {{-- <select class="form-control" style="width: 100%;" required="" id="active"
                                    name="active">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select> --}}
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-save" form="UserForm">
                        <li class="fas fa-save mr-1"></li> Simpan
                    </button>
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        Close
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
        const table_html = $('#tbl_main');
        const can_update = {{ $can_update ? 'true' : 'false' }};
        const can_delete = {{ $can_delete ? 'true' : 'false' }};
        $(document).ready(function() {
            $('#filter_role').select2();
            $('#filter_jenis_kelamin').select2();
            $('#filter_active').select2();
            $('#role').select2({
                dropdownParent: $('#modal-default'),
            });

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
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
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
                        d['filter[updated_by]'] = $('#updated_by').val();
                        d['filter[created_by]'] = $('#created_by').val();
                        d['filter[role_str]'] = $('#filter_role').val();
                        d['filter[active]'] = $('#filter_active').val();
                        d['filter[jenis_kelamin]'] = $('#filter_jenis_kelamin').val();
                        d['filter[status_kontrak]'] = $('#filter_status_kontrak').val();
                    }
                },
                columns: [{
                        data: null,
                        name: 'id',
                        orderable: false,
                    },
                    {
                        data: 'name',
                        name: 'name',
                        render(data, type, full, meta) {
                            return `${data}<br><small>${full.username}</small>`;
                        },
                        className: 'text-nowrap',
                    },
                    {
                        data: 'nik',
                        name: 'nik',
                        className: 'text-nowrap',
                    },
                    {
                        data: 'alamat',
                        name: 'alamat',
                        render(data, type, full, meta) {
                            return data ? `<small>${data}</small>` : '';
                        }
                    },
                    {
                        data: 'umur',
                        name: 'umur',
                        className: 'text-nowrap',
                    },
                    {
                        data: 'no_telepon',
                        name: 'no_telepon',
                        className: 'text-nowrap',
                    },
                    {
                        data: 'role_str',
                        name: 'role_str',
                        className: 'text-nowrap'
                    },
                    {
                        data: 'status_kontrak',
                        name: 'awal_masuk_kerja',
                        render(data, type, full, meta) {
                            return `${data ?? ''}<br>${full.awal_masuk_kerja ? `(${full.awal_masuk_kerja})`: ''}`;
                        },
                        className: 'text-nowrap'
                    },
                    ...((can_update || can_delete) ? [{
                        data: 'id',
                        name: 'id',
                        render(data, type, full, meta) {
                            const btn_update = can_update ? `<button type="button" data-toggle="tooltip" class="btn btn-rounded btn-primary btn-sm me-1" title="Ubah Data"
                                onClick="editFunc('${full.id}')">
                                <i class="fas fa-edit"></i>
                                </button>` : '';
                            const btn_delete = can_delete ? `<button type="button" data-toggle="tooltip" class="btn btn-rounded btn-danger btn-sm me-1" title="Hapus Data" onClick="deleteFunc('${data}')">
                                <i class="fas fa-trash"></i>
                                </button>` : '';
                            return btn_update + btn_delete;
                        },
                        orderable: false,
                        className: 'text-nowrap',
                    }] : []),
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

            // insertForm ===================================================================================
            $('#UserForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                setBtnLoading('#btn-save', 'Simpan');
                resetErrorAfterInput();
                const route = ($('#id').val() == '') ? "{{ route(h_prefix('insert')) }}" :
                    "{{ route(h_prefix('update')) }}";
                $.ajax({
                    type: "POST",
                    url: route,
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

                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'center',
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

        });

        function add() {
            $('#UserForm').trigger("reset");
            $('#modal-default-title').html("Tambah {{ $page_attr['title'] }}");
            $('#modal-default').modal('show');
            $('#id').val('');
            $('#role').val('').trigger('change');
            resetErrorAfterInput();
            $('#password').attr('required', true);
            render_tanggal('#tgl_lahir');
        }

        function editFunc(id) {
            $.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: `{{ route(h_prefix('find')) }}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id
                },
                success: (data) => {
                    $('#modal-default-title').html("Ubah {{ $page_attr['title'] }}");
                    $('#modal-default').modal('show');
                    $('#UserForm').trigger("reset");
                    $('#id').val(data.id);
                    $('#name').val(data.name);
                    $('#nik').val(data.nik);
                    $('#alamat').val(data.alamat);
                    $('#no_telepon').val(data.no_telepon);
                    $('#tgl_lahir').val(data.tgl_lahir);
                    $('#awal_masuk_kerja').val(data.awal_masuk_kerja);
                    $('#status_kontrak').val(data.status_kontrak);
                    $('#username').val(data.username);
                    $('#role').val(data.role).trigger('change');
                    $('#active').val(data.active);
                    $('#password').removeAttr('required');

                    render_tanggal('#tgl_lahir');
                },
                error: function(data) {
                    Swal.fire({
                        position: 'center',
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
                title: 'Are you sure?',
                text: "Are you sure you want to proceed ?",
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
                                title: 'Data deleted successfully',
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
