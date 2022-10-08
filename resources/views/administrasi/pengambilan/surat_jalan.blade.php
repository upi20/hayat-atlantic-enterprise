<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="{{ public_path('favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ public_path('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ public_path('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ public_path('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ public_path('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ public_path('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ public_path('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ public_path('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ public_path('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ public_path('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ public_path('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ public_path('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ public_path('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ public_path('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ public_path('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#0191D7">
    <meta name="msapplication-TileImage" content="{{ public_path('favicon/icon-144x144.png') }}">
    <title>Surat Jalan</title>
    @include('templates.admin.pdf_style')
</head>

<body>
    <table>
        <tr>
            <td>
                <img src="{{ public_path(settings()->get(set_admin('app.foto_light_mode'))) }}" alt=""
                    style="height: 30mm;">
            </td>
            <td>
                <h2 class="p-title">CV. HAYAT ATLANTIC ENTERPRISE</h2>
                <p class="p-title">Jl. Lodaya No.27, Malabar, Kec. Lengkong, Kota Bandung, Jawa Barat 40262</p>
                <p class="p-title">Telp:
                    <a href="tel:0227303759">0227303759</a> –
                    <a href="tel:0227900502">0227900502</a> /
                    WA: <a href="https://wa.me/081214886315">081214886315</a> –
                    <a href="https://wa.me/081214939435">081214939435</a>
                </p>
                <p class="p-title">Website: <a href="http://hayatpesta.com">hayatpesta.com</a>
                    / Email: <a href="mailto:INFO@HAYATPESTA.COM">info@hayatpesta.com</a></p>
            </td>
        </tr>
    </table>
    <hr class="garis">
    <h2 class="text-center">Surat Jalan</h2>

    <table class="tbl-10 w-100">
        <tr>
            <td class="b-all w-50">
                <table class="tbl-10">
                    <tr>
                        <td class="fw-bold" style="">Nomor Surat</td>
                        <td class="fw-bold" style="padding: 8px 10px!important">:</td>
                        <td class="fw-bold" style="">{{ $surat_jalan->no_surat_jalan }}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold" style="">Tanggal Surat</td>
                        <td class="fw-bold" style="padding: 8px 10px!important">:</td>
                        <td class="fw-bold" style="">{{ $surat_jalan->tanggal_str }}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold" style="">Tanggal Pakai</td>
                        <td class="fw-bold" style="padding: 8px 10px!important">:</td>
                        <td class="fw-bold" style="">{{ $surat_jalan->tanggal_pakai }}</td>
                    </tr>
                </table>
            </td>
            <td class="b-all w-50">
                <table class="tbl-10">
                    <tr>
                        <td class="fw-bold" style="">Customer</td>
                        <td class="fw-bold" style="padding: 8px 10px!important">:</td>
                        <td class="fw-bold" style="">{{ $customer->nama }}, {{ $customer->alamat }}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold" style="">Kepada</td>
                        <td class="fw-bold" style="padding: 8px 10px!important">:</td>
                        <td class="fw-bold" style="">{{ $model->kepada }}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold" style="">Alamat Kirim</td>
                        <td class="fw-bold" style="padding: 8px 10px!important">:</td>
                        <td class="fw-bold" style="">{{ $model->lokasi }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table class="tbl-10 w-100">
        <thead>
            <tr>

                <th class="b-all" style="max-width: 10px">No</th>
                <th class="b-all">Barang</th>
                <th class="b-all">Qty</th>
                <th class="b-all">Satuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($surat_jalan_barangs as $key => $barangs)
                <tr>
                    <td class="b-all"style="text-align: center">{{ $key + 1 }}</td>
                    <td class="b-all"style="padding: 8px 10px!important">{{ $barangs->barang_nama }}</td>
                    <td class="text-right b-all" style="padding: 8px 10px!important">{{ $barangs->qty }}</td>
                    <td class="b-all" style="padding: 8px 10px!important">{{ $barangs->barang_satuan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="w-100">
        <tr>
            <td class="w-50" style="padding: 0 20px!important">
                <h4>Catatan:</h4>
                <h4 style="text-align: justify">{{ $surat_jalan->keterangan }}</h4>
            </td>
            <td class="w-50">
                <table class="w-100 tbl-2">
                    <tr>
                        <td class="text-center b-all">Diterima Oleh</td>
                        <td class="text-center b-all">Pengirim</td>
                    </tr>
                    <tr>
                        <td class="text-center b-all">
                            <br><br><br><br><br><br>
                        </td>
                        <td class="text-center b-all">
                            <br><br><br><br><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center b-all">(......................)</td>
                        <td class="text-center b-all">(......................)</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
