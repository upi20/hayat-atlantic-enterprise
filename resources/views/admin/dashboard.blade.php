@extends('templates.admin.master')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
    </div>

    <!-- ROW OPEN -->
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
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
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
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
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
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
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-danger img-card box-danger-shadow card-main">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $total->barang_rusak }}</h2>
                            <p class="text-white mb-0">Barang Rusak </p>
                        </div>
                        <div class="ms-auto">
                            <i class="fas fa-times text-white fs-30 me-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
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
                                <h5 class="mb-0"><i class="fas fa-box-open me-1"></i>
                                    <strong>Penyewaan</strong>
                                </h5>
                                <small class="text-muted">Penyewaan yang belum selesai</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="float-end">
                                <h4 class="fw-bold mb-0 mt-2 text-blue">{{ $ringkasan_penyewaan->penyewaan }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix row mb-4">
                        <div class="col">
                            <div class="float-start">
                                <h5 class="mb-0"><i class="fas fa-dollar-sign me-1"></i>
                                    <strong>Pembayaran</strong>
                                </h5>
                                <small class="text-muted">Penyewaan yang belum lunas</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="float-end">
                                <h4 class="fw-bold mt-2 mb-0 text-success">{{ $ringkasan_penyewaan->pembayaran }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix row mb-4">
                        <div class="col">
                            <div class="float-start">
                                <h5 class="mb-0"><i class="fas fa-sign-out-alt me-1"></i>
                                    <strong>Pengambilan Barang</strong>
                                </h5>
                                <small class="text-muted">Penyewaan yang barang nya belum dikirim</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="float-end">
                                <h4 class="fw-bold mt-2 mb-0 text-info">{{ $ringkasan_penyewaan->pengambilan }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix row mb-4">
                        <div class="col">
                            <div class="float-start">
                                <h5 class="mb-0"><i class="fas fa-sign-in-alt me-1"></i>
                                    <strong>Pengembalian Barang</strong>
                                </h5>
                                <small class="text-muted">Penyewaan yang barang nya sedang ada di luar</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="float-end">
                                <h4 class="fw-bold mt-2 mb-0 text-wrning">{{ $ringkasan_penyewaan->pengembalian }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix row mb-4">
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
                    </div>
                </div>
            </div>
        </div>

        {{-- Reciving Order --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <div>
                        <h3 class="card-title mb-1">Reciving Order</h3>
                        <small>Jumlah Reciving Order Per Tahun</small>
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

        {{-- multiple jumlah barang, qty barang --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <div>
                        <h3 class="card-title mb-1">Penyewaan Barang Rusak</h3>
                        <small>Jumlah Penyewaan Barang Rusak Per Tahun</small>
                    </div>
                    <div>
                        <select id="chart-penyewaan-barang-rusak-filter"
                            class="form-control form-select form-select-sm select2" data-bs-placeholder="Select Country">
                            @foreach ($years as $year)
                                <option value="{{ $year->year }}" {{ $year->year == date('Y') ? 'selected' : '' }}>
                                    {{ $year->year }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart-penyewaan-barang-rusak" class="chartsh"></div>
                </div>
            </div>
        </div>

        {{-- multiple jumlah barang, qty barang --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <div>
                        <h3 class="card-title mb-1">Penyewaan Barang Hilang</h3>
                        <small>Jumlah Penyewaan Barang Hilang Per Tahun</small>
                    </div>
                    <div>
                        <select id="chart-penyewaan-barang-hilang-filter"
                            class="form-control form-select form-select-sm select2" data-bs-placeholder="Select Country">
                            @foreach ($years as $year)
                                <option value="{{ $year->year }}" {{ $year->year == date('Y') ? 'selected' : '' }}>
                                    {{ $year->year }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart-penyewaan-barang-hilang" class="chartsh"></div>
                </div>
            </div>
        </div>

        {{-- Penyewaan barang habis pakai --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <div>
                        <h3 class="card-title mb-1">Penggunaan Barang Habis Pakai</h3>
                        <small>Penggunaan Dalam Penyewaan Per Tahun</small>
                    </div>
                    <div>
                        <select id="chart-penyewaan-bhs-filter" class="form-control form-select form-select-sm select2"
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
                    <div id="chart-penyewaan-bhs" class="chartsh"></div>
                </div>
            </div>
        </div>

        {{-- ganti rugi multiple uang, barang --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <div>
                        <h3 class="card-title mb-1">Ganti Rugi</h3>
                        <small>Perbandingan Ganti Rugi Barang Dengan Uang Per Tahun</small>
                    </div>
                    <div>
                        <select id="chart-ganti-rugi-filter" class="form-control form-select form-select-sm select2"
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
                    <div id="chart-ganti-rugi" class="chartsh"></div>
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

            $('#chart-penyewaan-barang-rusak-filter').on('select2:select', function(e) {
                chart_penyewaan_barang_rusak();
            });

            $('#chart-penyewaan-bhs-filter').on('select2:select', function(e) {
                chart_penggunaan_bhs();
            });

            $('#chart-ganti-rugi-filter').on('select2:select', function(e) {
                chart_ganti_rugi();
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
                            show: true, //hide legend
                        },
                        padding: {
                            bottom: 0,
                            top: 0
                        },
                    });
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
                    card.LoadingOverlay("hide");
                }
            });

        }

        function chart_penyewaan_barang_rusak() {
            const card = $('#chart-penyewaan-barang-rusak').parent().parent();
            const year = $('#chart-penyewaan-barang-rusak-filter').val();
            card.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: `{{ route(h_prefix('penyewaan_barang_rusak')) }}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    year
                },
                success: (res) => {
                    console.log(res);

                    const columns = [
                        ['barang'],
                        ['qty'],
                    ];
                    const categories = [];

                    res.data.forEach(e => {
                        columns[0].push(e.data.barang);
                        columns[1].push(e.data.qty);
                        categories.push(e.name);
                    })
                    // penyewaan barang rusak
                    var chart = c3.generate({
                        bindto: '#chart-penyewaan-barang-rusak', // id of chart wrapper
                        data: {
                            columns: columns,
                            type: 'bar', // default type of chart
                            groups: [
                                ['barang', 'qty']
                            ],
                            colors: {
                                barang: '#6c5ffc',
                                qty: '#05c3fb'
                            },
                            names: {
                                // name of each serie
                                'barang': 'Barang',
                                'qty': 'Qty/Jumlah'
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
                            show: true, //hide legend
                        },
                        padding: {
                            bottom: 0,
                            top: 0
                        },
                    });
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
                    card.LoadingOverlay("hide");
                }
            });

        }

        function chart_penyewaan_barang_hilang() {
            const card = $('#chart-penyewaan-barang-hilang').parent().parent();
            const year = $('#chart-penyewaan-barang-hilang-filter').val();
            card.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: `{{ route(h_prefix('penyewaan_barang_hilang')) }}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    year
                },
                success: (res) => {
                    console.log(res);

                    const columns = [
                        ['barang'],
                        ['qty'],
                    ];
                    const categories = [];

                    res.data.forEach(e => {
                        columns[0].push(e.data.barang);
                        columns[1].push(e.data.qty);
                        categories.push(e.name);
                    })
                    // penyewaan barang hilang
                    var chart = c3.generate({
                        bindto: '#chart-penyewaan-barang-hilang', // id of chart wrapper
                        data: {
                            columns: columns,
                            type: 'bar', // default type of chart
                            groups: [
                                ['barang', 'qty']
                            ],
                            colors: {
                                barang: '#6c5ffc',
                                qty: '#05c3fb'
                            },
                            names: {
                                // name of each serie
                                'barang': 'Barang',
                                'qty': 'Qty/Jumlah'
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
                            show: true, //hide legend
                        },
                        padding: {
                            bottom: 0,
                            top: 0
                        },
                    });
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
                    card.LoadingOverlay("hide");
                }
            });

        }

        function chart_penggunaan_bhs() {
            const card = $('#chart-penyewaan-bhs').parent().parent();
            const year = $('#chart-penyewaan-bhs-filter').val();
            card.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: `{{ route(h_prefix('penggunaan_bhs')) }}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    year
                },
                success: (res) => {
                    console.log(res);

                    const columns = [
                        ['barang'],
                        ['qty'],
                    ];
                    const categories = [];

                    res.data.forEach(e => {
                        columns[0].push(e.data.barang);
                        columns[1].push(e.data.qty);
                        categories.push(e.name);
                    })
                    // penyewaan barang rusak
                    var chart = c3.generate({
                        bindto: '#chart-penyewaan-bhs', // id of chart wrapper
                        data: {
                            columns: columns,
                            type: 'bar', // default type of chart
                            groups: [
                                ['barang', 'qty']
                            ],
                            colors: {
                                barang: '#6c5ffc',
                                qty: '#05c3fb'
                            },
                            names: {
                                // name of each serie
                                'barang': 'Barang',
                                'qty': 'Qty/Jumlah'
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
                            show: true, //hide legend
                        },
                        padding: {
                            bottom: 0,
                            top: 0
                        },
                    });
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
                    card.LoadingOverlay("hide");
                }
            });

        }

        function chart_ganti_rugi() {
            const card = $('#chart-ganti-rugi').parent().parent();
            const year = $('#chart-ganti-rugi-filter').val();
            card.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: `{{ route(h_prefix('ganti_rugi')) }}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    year
                },
                success: (res) => {
                    console.log(res);

                    const columns = [
                        ['barang'],
                        ['uang'],
                    ];
                    const categories = [];

                    res.data.forEach(e => {
                        columns[0].push(e.data.barang);
                        columns[1].push(e.data.uang);
                        categories.push(e.name);
                    })

                    // ganti rugi
                    var chart = c3.generate({
                        bindto: '#chart-ganti-rugi', // id of chart wrapper
                        data: {
                            columns: columns,
                            type: 'bar', // default type of chart
                            colors: {
                                barang: '#6c5ffc',
                                uang: '#05c3fb'
                            },
                            names: {
                                // name of each serie
                                'barang': 'Barang',
                                'uang': 'Uang'
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
                            show: true, //hide legend
                        },
                        padding: {
                            bottom: 0,
                            top: 0
                        },
                    });
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
                    card.LoadingOverlay("hide");
                }
            });

        }

        // initial
        chart_reciving_order();
        chart_penyewaan_barang_rusak();
        chart_penyewaan_barang_hilang();
        chart_penggunaan_bhs();
        chart_ganti_rugi();
    </script>
@endsection
