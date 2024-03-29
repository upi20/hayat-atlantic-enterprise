@extends('templates.admin.master')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
    </div>

    <!-- ROW OPEN -->
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <a href="{{ route('admin.penyewaan') }}">
                <div class="card bg-primary img-card box-primary-shadow card-main">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h2 class="mb-0 number-font">{{ $total->penyewaan }}</h2>
                                <p class="text-white mb-0">Total Penyewaan </p>
                            </div>
                            <div class="ms-auto">
                                <i class="fas fa-sign-out-alt text-white fs-30 me-2 mt-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <a href="{{ route('admin.customer') }}">
                <div class="card bg-secondary img-card box-secondary-shadow card-main">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h2 class="mb-0 number-font">{{ $total->customer }}</h2>
                                <p class="text-white mb-0">Total Customer </p>
                            </div>
                            <div class="ms-auto">
                                <i class="fas fa-users text-white fs-30 me-2 mt-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <a href="{{ route('admin.karyawan') }}">
                <div class="card bg-success img-card box-success-shadow card-main">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h2 class="mb-0 number-font">{{ $total->karyawan }}</h2>
                                <p class="text-white mb-0">Total Karyawan </p>
                            </div>
                            <div class="ms-auto">
                                <i class="fas fa-user text-white fs-30 me-2 mt-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <a href="{{ route('admin.ganti_rugi') }}">
                <div class="card bg-danger img-card box-danger-shadow card-main">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h2 class="mb-0 number-font">{{ $total->ganti_rugi }}</h2>
                                <p class="text-white mb-0">Ganti Rugi </p>
                            </div>
                            <div class="ms-auto">
                                <i class="fas fa-times text-white fs-30 me-2 mt-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="page-header my-1">
        <h1 class="page-title">Ringkasan</h1>
    </div>

    <div class="row">
        {{-- ringkasan penyewaan --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h3 class="card-title mb-1">Penyewaan</h3>
                        <small>Ringkasan penyewaan per hari ini</small>
                    </div>
                </div>
                <div class="card-body">
                    <div class="clearfix row mb-4">
                        <div class="col">
                            <div class="float-start">
                                <a href="{{ route('admin.penyewaan') }}">
                                    <h5 class="mb-0"><i class="fas fa-box-open me-1"></i>
                                        <strong>Penyewaan</strong>
                                    </h5>
                                </a>
                                <small class="text-muted">Total penyewaan hari ini</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="float-end">
                                <h4 class="fw-bold mb-0 mt-2 text-blue">{{ $ringkasan_penyewaan->penyewaan_hari_ini }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix row mb-4">
                        <div class="col">
                            <div class="float-start">
                                <a href="{{ route('admin.pengambilan') }}">
                                    <h5 class="mb-0"><i class="fas fa-sign-out-alt me-1"></i>
                                        <strong>Pengiriman Barang</strong>
                                    </h5>
                                </a>
                                <small class="text-muted">Barang yang harus dikirim hari ini</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="float-end">
                                <h4 class="fw-bold mt-2 mb-0 text-info">{{ $ringkasan_penyewaan->pengiriman_hari_ini }}
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix row mb-4">
                        <div class="col">
                            <div class="float-start">
                                <a href="{{ route('admin.pengembalian') }}">
                                    <h5 class="mb-0"><i class="fas fa-sign-in-alt me-1"></i>
                                        <strong>Pengambilan Barang</strong>
                                    </h5>
                                </a>
                                <small class="text-muted">Barang yang harus diambil hari ini</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="float-end">
                                <h4 class="fw-bold mt-2 mb-0 text-wrning">{{ $ringkasan_penyewaan->pengembalian_hari_ini }}
                                </h4>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="clearfix row mb-4">
                        <div class="col">
                            <div class="float-start">
                                <h5 class="mb-0"><i class="fas fa-sync me-1"></i>
                                    <strong>Ganti Rugi</strong>
                                </h5>
                                <small class="text-muted">Penyewan yang ganti rugi nya belum selesai</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="float-end">
                                <h4 class="fw-bold mt-2 mb-0 text-danger">{{ $ringkasan_penyewaan->ganti_rugi }}</h4>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        {{-- Reciving Order --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <div>
                        <h3 class="card-title mb-1 text-dark">
                            <a href="{{ route('admin.penyewaan') }}"> Penyewaan</a>
                        </h3>
                        <small>Jumlah Penyewaan Per Bulan</small>
                    </div>
                    <div>
                        <select id="chart-penyewaan-filter" class="form-control form-select form-select-sm select2"
                            data-bs-placeholder="Select Country">
                            @foreach ($years as $year)
                                <option value="{{ $year->year }}" {{ $year->year == date('Y') ? 'selected' : '' }}>
                                    {{ $year->year }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart-penyewaan" class="chartsh"></div>
                </div>
            </div>
        </div>

        {{-- Barang sewa --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <div>
                        <h3 class="card-title mb-1 text-dark">
                            <a href="{{ route('admin.barang.sewa') }}"> Barang Sewa</a>
                        </h3>
                        <small>Barang yang Sering Disewakan </small>
                    </div>
                    <div>
                        <select id="chart-barang-sewa-filter" class="form-control form-select form-select-sm select2"
                            data-bs-placeholder="Select Country">
                            @foreach ($years as $year)
                                <option value="{{ $year->year }}" {{ $year->year == date('Y') ? 'selected' : '' }}>
                                    {{ $year->year }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart-barang-sewa" class="chartsh"></div>
                </div>
            </div>
        </div>

        {{-- Barang Habis pakai --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <div>
                        <h3 class="card-title mb-1 text-dark">
                            <a href="{{ route('admin.barang.habis_pakai') }}"> Barang Habis Pakai </a>
                        </h3>
                        <small>Barang yang Sering Dipakai</small>
                    </div>
                    <div>
                        <select id="chart-barang-hs-filter" class="form-control form-select form-select-sm select2"
                            data-bs-placeholder="Select Country">
                            @foreach ($years as $year)
                                <option value="{{ $year->year }}" {{ $year->year == date('Y') ? 'selected' : '' }}>
                                    {{ $year->year }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart-barang-hs" class="chartsh"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('stylesheet')
    <style>
        .card-main {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
            margin: 3px;
        }

        .card-main:hover {
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }
    </style>
@endsection

@section('javascript')
    <!-- SPARKLINE JS-->
    <script src="{{ asset('assets/templates/admin/js/jquery.sparkline.min.js') }}"></script>
    <!-- CHART-CIRCLE JS -->
    <script src="{{ asset('assets/templates/admin/js/circle-progress.min.js') }}"></script>
    <!-- C3 CHART JS -->
    <script src="{{ asset('assets/templates/admin/plugins/charts-c3/d3.v5.min.js') }}"></script>
    <script src="{{ asset('assets/templates/admin/plugins/charts-c3/c3-chart.js') }}"></script>
    <!-- INPUT MASK JS-->
    <script src="{{ asset('assets/templates/admin/plugins/input-mask/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('assets/templates/admin/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/templates/admin/plugins/loading/loadingoverlay.min.js') }}"></script>
    {{-- sweetalert --}}
    <script src="{{ asset('assets/templates/admin/plugins/sweet-alert/sweetalert2.all.js') }}"></script>
    <script>
        $(document).ready(() => {
            $('.select2').select2();

            $('#chart-penyewaan-filter').on('select2:select', function(e) {
                chart_reciving_order();
            });

            $('#chart-barang-sewa-filter').on('select2:select', function(e) {
                chart_barang_sewa();
            });

            $('#chart-barang-hs-filter').on('select2:select', function(e) {
                chart_barang_hs();
            });
        });

        function chart_reciving_order() {
            const card = $('#chart-penyewaan').parent().parent();
            const year = $('#chart-penyewaan-filter').val();
            card.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: `{{ route(h_prefix('chart_reciving_order')) }}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    year
                },
                success: (res) => {
                    console.log(res);

                    const columns = ['data1'];
                    const categories = [];

                    res.data.forEach(e => {
                        columns.push(e.data);
                        categories.push(e.name);
                    })
                    var chart = c3.generate({
                        bindto: '#chart-penyewaan', // id of chart wrapper
                        data: {
                            columns: [
                                // each columns data
                                columns
                            ],
                            type: 'bar', // default type of chart
                            colors: {
                                data1: '#6c5ffc'
                            },
                            names: {
                                // name of each serie
                                'data1': res.title
                            }
                        },
                        axis: {
                            x: {
                                type: 'category',
                                // name of each category
                                categories: categories
                            },
                        },
                        bar: {
                            width: 16
                        },
                        legend: {
                            show: false, //hide legend
                        },
                        padding: {
                            bottom: 0,
                            top: 0
                        },
                    });
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
                    card.LoadingOverlay("hide");
                }
            });

        }

        function chart_barang_sewa() {
            const card = $('#chart-barang-sewa').parent().parent();
            const year = $('#chart-barang-sewa-filter').val();
            card.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: `{{ route(h_prefix('chart_barang_sewa')) }}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    year
                },
                success: (res) => {
                    console.log(res);

                    const columns = ['data1'];
                    const categories = [];

                    res.data.forEach(e => {
                        columns.push(e.data);
                        categories.push(e.name);
                    })
                    var chart = c3.generate({
                        bindto: '#chart-barang-sewa', // id of chart wrapper
                        data: {
                            columns: [
                                // each columns data
                                columns
                            ],
                            type: 'bar', // default type of chart
                            colors: {
                                data1: '#6c5ffc'
                            },
                            names: {
                                // name of each serie
                                'data1': res.title
                            }
                        },
                        axis: {
                            x: {
                                type: 'category',
                                // name of each category
                                categories: categories
                            },
                        },
                        bar: {
                            width: 16
                        },
                        legend: {
                            show: false, //hide legend
                        },
                        padding: {
                            bottom: 0,
                            top: 0
                        },
                    });
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
                    card.LoadingOverlay("hide");
                }
            });

        }

        function chart_barang_hs() {
            const card = $('#chart-barang-hs').parent().parent();
            const year = $('#chart-barang-hs-filter').val();
            card.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: `{{ route(h_prefix('chart_barang_hs')) }}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    year
                },
                success: (res) => {
                    console.log(res);

                    const columns = ['data1'];
                    const categories = [];

                    res.data.forEach(e => {
                        columns.push(e.data);
                        categories.push(e.name);
                    })
                    var chart = c3.generate({
                        bindto: '#chart-barang-hs', // id of chart wrapper
                        data: {
                            columns: [
                                // each columns data
                                columns
                            ],
                            type: 'bar', // default type of chart
                            colors: {
                                data1: '#6c5ffc'
                            },
                            names: {
                                // name of each serie
                                'data1': res.title
                            }
                        },
                        axis: {
                            x: {
                                type: 'category',
                                // name of each category
                                categories: categories
                            },
                        },
                        bar: {
                            width: 16
                        },
                        legend: {
                            show: false, //hide legend
                        },
                        padding: {
                            bottom: 0,
                            top: 0
                        },
                    });
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
                    card.LoadingOverlay("hide");
                }
            });

        }

        // initial
        chart_reciving_order();
        chart_barang_sewa();
        chart_barang_hs();
    </script>
@endsection
