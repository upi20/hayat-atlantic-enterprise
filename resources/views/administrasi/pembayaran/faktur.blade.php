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

        .b-left {
            border-left: 2px solid #000;
        }

        .b-right {
            border-right: 2px solid #000;
        }

        .b-top {
            border-top: 2px solid #000;
        }

        .b-bottom {
            border-bottom: 2px solid #000;
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
                <h4 style="text-align: center; margin-bottom: 8px">FAKTUR PENYEWAAN</h4>
                <table>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>123456</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>123456</td>
                    </tr>
                </table>
                <p style="margin-bottom: 4px">Daftar barang yang disewakan:</p>
                <table style="width: 100%; border-collapse:collapse">
                    <tr style="font-weight: bold;">
                        <td style="width: 24px;" class="b-left b-top b-bottom">I.</td>
                        <td class="b-top b-bottom  b-right">ANAMNESIS :</td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td style="padding-bottom: 0; width: 24px;" class="b-left b-top">II.</td>
                        <td style="padding-bottom: 0;" class="b-top b-right">IDENTITAS PASIEN :</td>
                    </tr>
                    <tr>
                        <td style="padding: 0;" class="b-left"></td>
                        <td style="padding: 0;" class="b-right">
                            <table style="padding: 0;">
                                <tr>
                                    <td style=" vertical-align: top;">NAMA</td>
                                    <td>:</td>
                                    <td>wkwk</td>
                                </tr>
                                <tr>
                                    <td style=" vertical-align: top;">UMUR</td>
                                    <td>:</td>
                                    <td>wkwk?> TAHUN</td>
                                </tr>
                                <tr>
                                    <td style=" vertical-align: top;">JENIS KELAMIN</td>
                                    <td>:</td>
                                    <td>wkwk</td>
                                </tr>
                                <tr>
                                    <td style=" vertical-align: top;">ALAMAT</td>
                                    <td>:</td>
                                    <td>wkwk</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr style="font-weight: bold; height:85mm; vertical-align: top;">
                        <td style="width: 24px;" class="b-left b-top b-bottom">III.</td>
                        <td class="b-top b-bottom  b-right">DIAGNOSA :</td>
                    </tr>
                    <tr style="font-weight: bold; height:85mm; vertical-align: top;">
                        <td style="width: 24px;" class="b-left b-top b-bottom">IV.</td>
                        <td class="b-top b-bottom  b-right">OBAT :</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ url('loader/js/admin.js') }}"></script>
    <script>
        // window.print();
    </script>
</body>

</html>
