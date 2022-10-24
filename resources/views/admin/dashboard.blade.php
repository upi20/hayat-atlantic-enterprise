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
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <h3 class="card-title">Penyewaan</h3>
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
                    <h3 class="card-title">Reciving Order</h3>
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
                    <h3 class="card-title">Penyewaan Barang Rusak</h3>
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

        {{-- Penyewaan barang habis pakai --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <h3 class="card-title">Penggunaan Barang Habis Pakai</h3>
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
                    <h3 class="card-title">Ganti Rugi</h3>
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

        {{-- status penyewaan --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Status Penyewaan</h3>
                </div>
                <div class="card-body">
                    <div id="chart-circle-penyewaan" class="chartsh"></div>
                </div>
            </div>
        </div>

        {{-- status pembayaran --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Status Pembayaran</h3>
                </div>
                <div class="card-body">
                    <div id="chart-circle-pembayaran" class="chartsh"></div>
                </div>
            </div>
        </div>

        {{-- status pengambilan --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Status Pengambilan</h3>
                </div>
                <div class="card-body">
                    <div id="chart-circle-pengambilan" class="chartsh"></div>
                </div>
            </div>
        </div>

        {{-- status pengembalian --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">StatusPengembalian</h3>
                </div>
                <div class="card-body">
                    <div id="chart-circle-pengembalian" class="chartsh"></div>
                </div>
            </div>
        </div>

        {{-- status penyewaan --}}
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ganti Rugi</h3>
                </div>
                <div class="card-body">
                    <div id="chart-circle-ganti-rugi" class="chartsh"></div>
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

    <script>
        $(document).ready(() => {
            $('.select2').select2();

            $('#chart-penyewaan-filter').on('select2:select', function(e) {
                chart_reciving_order();
            });

            // penyewaan barang rusak
            var chart = c3.generate({
                bindto: '#chart-penyewaan-barang-rusak', // id of chart wrapper
                data: {
                    columns: [
                        // each columns data
                        ['data1', 7, 7, 5, 7, 9, 12, 4, 6, 2, 5, 2, 8],
                        ['data2', 11, 8, 15, 18, 19, 17, 20, 25, 32, 20, 14, 20],
                    ],
                    type: 'bar', // default type of chart
                    groups: [
                        ['data1', 'data2']
                    ],
                    colors: {
                        data1: '#6c5ffc',
                        data2: '#05c3fb'
                    },
                    names: {
                        // name of each serie
                        'data1': 'Barang',
                        'data2': 'Qty/Jumlah'
                    }
                },
                axis: {
                    x: {
                        type: 'category',
                        // name of each category
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
                            'Nov', 'Dec'
                        ]
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

            // barang habis pakai
            var chart = c3.generate({
                bindto: '#chart-penyewaan-bhs', // id of chart wrapper
                data: {
                    columns: [
                        // each columns data
                        ['data1', 11, 8, 35, 18, 19, 17, 33, 39, 48, 57, 39, 63]
                    ],
                    type: 'bar', // default type of chart
                    colors: {
                        data1: '#6c5ffc'
                    },
                    names: {
                        // name of each serie
                        'data1': 'Reciving Order'
                    }
                },
                axis: {
                    x: {
                        type: 'category',
                        // name of each category
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
                            'Nov', 'Dec'
                        ]
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

            // ganti rugi
            var chart = c3.generate({
                bindto: '#chart-ganti-rugi', // id of chart wrapper
                data: {
                    columns: [
                        // each columns data
                        ['data1', 7, 7, 5, 7, 9, 12, 4, 6, 2, 5, 2, 8],
                        ['data2', 11, 8, 15, 18, 19, 17, 20, 25, 32, 20, 14, 20],
                    ],
                    type: 'bar', // default type of chart
                    colors: {
                        data1: '#6c5ffc',
                        data2: '#05c3fb'
                    },
                    names: {
                        // name of each serie
                        'data1': 'Barang',
                        'data2': 'Uang'
                    }
                },
                axis: {
                    x: {
                        type: 'category',
                        // name of each category
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
                            'Nov', 'Dec'
                        ]
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


            /*chart-donut*/
            var chart = c3.generate({
                bindto: '#chart-circle-pembayaran', // id of chart wrapper
                data: {
                    columns: [
                        // each columns data
                        ['data1', 78],
                        ['data2', 95],
                        ['data3', 25],
                        ['data4', 45],
                        ['data5', 75],
                        ['data6', 25],
                    ],
                    type: 'donut', // default type of chart
                    colors: {
                        'data1': '#6c5ffc',
                        'data2': '#05c3fb',
                        'data3': '#09ad95',
                        'data4': '#f7b731',
                        'data5': '#f82649',
                        'data6': '#f7b731',
                    },
                    names: {
                        // name of each serie
                        'data1': 'sales1',
                        'data2': 'sales2',
                        'data3': 'sales3',
                        'data4': 'sales4',
                        'data5': 'sales5',
                        'data6': 'sales6',
                    }
                },
                axis: {},
                legend: {
                    show: true, //hide legend
                },
                padding: {
                    bottom: 0,
                    top: 0
                },
            });

            /*chart-donut*/
            var chart = c3.generate({
                bindto: '#chart-circle-pengambilan', // id of chart wrapper
                data: {
                    columns: [
                        // each columns data
                        ['data1', 78],
                        ['data2', 95],
                        ['data3', 25],
                        ['data4', 45],
                        ['data5', 75],
                        ['data6', 25],
                    ],
                    type: 'donut', // default type of chart
                    colors: {
                        'data1': '#6c5ffc',
                        'data2': '#05c3fb',
                        'data3': '#09ad95',
                        'data4': '#1170e4',
                        'data5': '#f82649',
                        'data6': '#f7b731',
                    },
                    names: {
                        // name of each serie
                        'data1': 'sales1',
                        'data2': 'sales2',
                        'data3': 'sales3',
                        'data4': 'sales4',
                        'data5': 'sales5',
                        'data6': 'sales6',
                    }
                },
                axis: {},
                legend: {
                    show: true, //hide legend
                },
                padding: {
                    bottom: 0,
                    top: 0
                },
            });

            /*chart-donut*/
            var chart = c3.generate({
                bindto: '#chart-circle-pengembalian', // id of chart wrapper
                data: {
                    columns: [
                        // each columns data
                        ['data1', 78],
                        ['data2', 95],
                        ['data3', 25],
                        ['data4', 45],
                        ['data5', 75],
                        ['data6', 25],
                    ],
                    type: 'donut', // default type of chart
                    colors: {
                        'data1': '#6c5ffc',
                        'data2': '#05c3fb',
                        'data3': '#09ad95',
                        'data4': '#1170e4',
                        'data5': '#f82649',
                        'data6': '#f7b731',
                    },
                    names: {
                        // name of each serie
                        'data1': 'sales1',
                        'data2': 'sales2',
                        'data3': 'sales3',
                        'data4': 'sales4',
                        'data5': 'sales5',
                        'data6': 'sales6',
                    }
                },
                axis: {},
                legend: {
                    show: true, //hide legend
                },
                padding: {
                    bottom: 0,
                    top: 0
                },
            });

            /*chart-donut*/
            var chart = c3.generate({
                bindto: '#chart-circle-ganti-rugi', // id of chart wrapper
                data: {
                    columns: [
                        // each columns data
                        ['data1', 78],
                        ['data2', 95],
                        ['data3', 25],
                        ['data4', 45],
                        ['data5', 75],
                        ['data6', 25],
                    ],
                    type: 'donut', // default type of chart
                    colors: {
                        'data1': '#6c5ffc',
                        'data2': '#05c3fb',
                        'data3': '#09ad95',
                        'data4': '#1170e4',
                        'data5': '#f82649',
                        'data6': '#f7b731',
                    },
                    names: {
                        // name of each serie
                        'data1': 'sales1',
                        'data2': 'sales2',
                        'data3': 'sales3',
                        'data4': 'sales4',
                        'data5': 'sales5',
                        'data6': 'sales6',
                    }
                },
                axis: {},
                legend: {
                    show: true, //hide legend
                },
                padding: {
                    bottom: 0,
                    top: 0
                },
            });
        });

        function donat_status_penyewaan() {
            const data_raw = JSON.parse(`{!! json_encode($donat->status_penyewaan) !!}`);

            const columns = [];
            const names = {};
            data_raw.forEach((e, i) => {
                columns.push([`data${i+1}`, e.data]);
                names[`data${i+1}`] = e.name
            });

            var chart = c3.generate({
                bindto: '#chart-circle-penyewaan', // id of chart wrapper
                data: {
                    columns: columns,
                    type: 'donut', // default type of chart
                    colors: {
                        // 'data1': '#6c5ffc', // primary
                        // 'data2': '#05c3fb', // secondary
                        // 'data3': '#09ad95', // success
                        // 'data4': '#1170e4', // info
                        // 'data5': '#f82649', // danger
                        // 'data6': '#f7b731', // warning

                        'data1': '#6c5ffc',
                        'data2': '#1170e4',
                        'data3': '#05c3fb',
                        'data4': '#09ad95',
                        'data5': '#f7b731',
                        'data6': '#f82649',
                    },
                    names: names
                },
                axis: {},
                legend: {
                    show: true, //hide legend
                },
                padding: {
                    bottom: 0,
                    top: 0
                },
            });

            chart.hide(['data5', 'data6']);
        }

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


        // initial
        donat_status_penyewaan();
        chart_reciving_order();
    </script>
@endsection
