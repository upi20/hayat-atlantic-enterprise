<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#0191D7">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/icon-144x144.png') }}">
    <title>Cetak Faktur</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #333;
            font: 12pt sans-serif;
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .page {
            width: 21cm;
            min-height: 29.7cm;
            padding: .5cm;
            margin: 0.5cm auto;
            background-color: #fff;
            /* border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); */
        }

        .subpage {
            /* padding: 1cm; */
            /* border: 5px red solid; */
            height: 286mm;
            /* outline: 0.5cm #FFEAEA solid; */
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }

        table,
        th,
        td {
            padding: 8px 4px;
        }

        .p-title {
            margin: 4px;
        }

        .garis {
            border: none;
            height: 2px !important;
            color: #000;
            background-color: #000;
            opacity: 1;
            border-radius: 4px;
        }

        .my-table td,
        .my-table th {
            border: 1px solid #000;
        }

        .text-right {
            text-align: right;
        }

        .no-border {
            border: 0 !important;
            padding: 2px
        }

        .table-detail td {
            padding: 2px
        }
    </style>
</head>

<body>
    <div class="book">
        <div class="page">
            <div class="subpage">
                <div style="display: flex;">
                    <img src="{{ asset(settings()->get(set_admin('app.foto_light_mode'))) }}" alt=""
                        style="height: 25mm;">
                    <div>
                        <h2 class="p-title">HAYAT ATLANTIC ENTERPRISE</h2>
                        <p class="p-title">Jl. Lodaya No.27, Malabar, Kec. Lengkong, Kota Bandung, Jawa Barat 40262</p>
                        <p class="p-title">Telp: 022 7303759 – 0227900502 / WA: 081214886315 – 081214939435</p>
                    </div>
                </div>
                <hr class="garis">
                <h4 style="text-align: center; margin-bottom: 8px">FAKTUR PEMBAYARAN PENYEWAAN</h4>
                <table class="table-detail">
                    <tr>
                        <td>Nomor Faktur</td>
                        <td>:</td>
                        <td>{{ $faktur->no_faktur }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Faktur</td>
                        <td>:</td>
                        <td>{{ $faktur->tanggal_str }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Kirim</td>
                        <td>:</td>
                        <td>{{ $penyewaan->tanggal_kirim }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Pakai</td>
                        <td>:</td>
                        <td>
                            {{ $penyewaan->tanggal_pakai_dari }}
                            @if ($penyewaan->tanggal_pakai_dari != $penyewaan->tanggal_pakai_sampai)
                                s/d {{ $penyewaan->tanggal_pakai_sampai }} ( {{ $penyewaan->pakai_hari }} hari)
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Kepada</td>
                        <td>:</td>
                        <td>Yth. {{ $penyewaan->kepada }}</td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td>{{ $penyewaan->lokasi }}</td>
                    </tr>
                </table>
                <p style="margin-bottom: 4px">Daftar barang yang disewakan:</p>
                <table style="width: 100%; border-collapse:collapse" class="my-table">
                    <thead>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Keterangan</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $key => $barang)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $barang->barang_nama }}</td>
                                <td>{{ $barang->keterangan }}</td>
                                <td class="text-right">{{ $barang->qty }}</td>
                                <td class="text-right format_rupiah">{{ $barang->harga }}</td>
                                <td class="text-right format_rupiah">{{ $barang->harga_total }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5" class="text-right no-border">Total:</td>
                            <td class="no-border text-right format_rupiah">{{ $faktur->total }}</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-right no-border" style="font-weight: bold;">
                                {{ $model->nama }}:</td>
                            <td class="no-border text-right format_rupiah" style="font-weight: bold;">
                                {{ $faktur->jumlah }}</td>
                        </tr>
                        @if ($faktur->pembayaran_sebelumnya > 0)
                            <tr>
                                <td colspan="5" class="text-right no-border">Pembayaran Sebelumnya:</td>
                                <td class="no-border text-right format_rupiah">{{ $faktur->pembayaran_sebelumnya }}
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <td colspan="5" class="text-right no-border">Sisa:</td>
                            <td class="no-border text-right format_rupiah">{{ $faktur->sisa }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="my-table" style="width: 15cm; border-collapse:collapse">
                    <tr>
                        <td>Terbilang: <small><i id="terbilang"></i></small></td>
                    </tr>
                </table>

                <br>
                <p>Hormat Kami</p>
                <br><br>
                <p>Hayat Pesta</p>

            </div>
        </div>
    </div>

    <script src="{{ url('loader/js/admin.js') }}"></script>
    <script>
        // format rupiah
        if (format_rupiah.length > 0) {
            Array.from(document.getElementsByClassName("format_rupiah")).forEach(function(item) {
                const val = Number(item.innerHTML);
                const rupiah = (val > 0) ? format_rupiah(val) : 0
                item.innerHTML = `Rp. ${rupiah}`;
            });
        }

        // terbilang
        document.getElementById('terbilang').innerHTML = `${terbilang('{{ $faktur->jumlah }}')} Rupiah`;

        setTimeout(() => {
            window.print();
        }, 500);
    </script>
</body>

</html>
