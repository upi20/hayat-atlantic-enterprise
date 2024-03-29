<?php
// ====================================================================================================================
// utility ============================================================================================================
use Illuminate\Support\Facades\Route;

// ====================================================================================================================
// Admin ==============================================================================================================
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\DashboardController;

// Artikel ============================================================================================================
use App\Http\Controllers\Admin\Artikel\ArtikelController;
use App\Http\Controllers\Admin\Artikel\KategoriController;
use App\Http\Controllers\Admin\Artikel\TagController;

// Contact ============================================================================================================
use App\Http\Controllers\Admin\Contact\FAQController;
use App\Http\Controllers\Admin\Contact\ListContactController;
use App\Http\Controllers\Admin\Contact\MessageController;


// User Access ========================================================================================================
use App\Http\Controllers\Admin\UserAccess\PermissionController;
use App\Http\Controllers\Admin\UserAccess\RoleController;

// Menu ===============================================================================================================
use App\Http\Controllers\Admin\Menu\AdminController as MenuAdminController;
use App\Http\Controllers\Admin\Menu\FrontendController as MenuFrontendController;

// Pendaftaran ========================================================================================================
use App\Http\Controllers\Admin\Pendaftaran\GFormController;

// Setting ============================================================================================================
use App\Http\Controllers\Admin\Setting\AdminController;
use App\Http\Controllers\Admin\Setting\FrontController;
use App\Http\Controllers\Admin\Setting\HomeController;

// Utility ============================================================================================================
use App\Http\Controllers\Admin\Utility\HariBesarNasionalController;
use App\Http\Controllers\Admin\Utility\NotifAdminAtasController;
use App\Http\Controllers\Admin\Utility\NotifDepanAtasController;

// ====================================================================================================================
// Administrasi =======================================================================================================
use App\Http\Controllers\Administrasi\KaryawanController;
use App\Http\Controllers\Administrasi\CustomerController;
use App\Http\Controllers\Administrasi\PenyewaanController;
use App\Http\Controllers\Administrasi\PembayaranController;
use App\Http\Controllers\Administrasi\PengambilanBarangController;
use App\Http\Controllers\Administrasi\PengembalianBarangController;
use App\Http\Controllers\Administrasi\GantiRugiController;

// Data Master ========================================================================================================
use App\Http\Controllers\Administrasi\MasterData\JenisBarangController;
use App\Http\Controllers\Administrasi\MasterData\SatuanBarangController;
use App\Http\Controllers\Administrasi\MasterData\PegawaiJabatan;

// Data Barang ========================================================================================================
use App\Http\Controllers\Administrasi\Barang\SewaController;
use App\Http\Controllers\Administrasi\Barang\HabisPakaiController;
use App\Http\Controllers\Administrasi\Laporan\GantiRugiBarangController;

// Pengadaan Barang ===================================================================================================
use App\Http\Controllers\Administrasi\Pengadaan\BarangSewaController;
use App\Http\Controllers\Administrasi\Pengadaan\BarangSewaListController;
use App\Http\Controllers\Administrasi\Pengadaan\BarangHabisPakaiController;
use App\Http\Controllers\Administrasi\Pengadaan\BarangHabisPakaiListController;

// Pengadaan Barang ===================================================================================================
use App\Http\Controllers\Administrasi\Pengurangan\BarangSewaController as PenguranganBarangSewaController;
use App\Http\Controllers\Administrasi\Pengurangan\BarangSewaListController as PenguranganBarangSewaListController;
use App\Http\Controllers\Administrasi\Pengurangan\BarangHabisPakaiController as PenguranganBarangHabisPakaiController;
use App\Http\Controllers\Administrasi\Pengurangan\BarangHabisPakaiListController as PenguranganBarangHabisPakaiListController;

// Data Barang ========================================================================================================
use App\Http\Controllers\Administrasi\Laporan\PengambilanBarangController as LaporanPengambilanBarangController;
use App\Http\Controllers\Administrasi\Laporan\PengembalianBarangController as LaporanPengembalianBarangController;
use App\Http\Controllers\Administrasi\Laporan\PenyewaanController as LaporanPenyewaanController;
use App\Http\Controllers\Administrasi\Laporan\PembayaranController as LaporanPembayaranController;
use App\Http\Controllers\Administrasi\PesananController;

$name = 'admin';
$prefix = 'dashboard';
Route::group(
    [
        'prefix' => $prefix,
        'middleware' => "permission:$name.$prefix",
        'controller' => DashboardController::class
    ],
    function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.dashboard
        Route::get('/', 'index')->name($name);
        Route::get('/chart_reciving_order', 'reciving_order')->name("$name.chart_reciving_order");
        Route::get('/chart_barang_sewa', 'barang_sewa')->name("$name.chart_barang_sewa");
        Route::get('/chart_barang_hs', 'barang_hs')->name("$name.chart_barang_hs");
        Route::get('/penyewaan_barang_rusak', 'penyewaan_barang_rusak')->name("$name.penyewaan_barang_rusak");
        Route::get('/penyewaan_barang_hilang', 'penyewaan_barang_hilang')->name("$name.penyewaan_barang_hilang");
        Route::get('/penggunaan_bhs', 'penggunaan_bhs')->name("$name.penggunaan_bhs");
        Route::get('/ganti_rugi', 'ganti_rugi')->name("$name.ganti_rugi");
    }
);

$prefix = 'user';
Route::controller(UserController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.user
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/excel', 'excel')->name("$name.excel")->middleware("permission:$name.excel");

    Route::post('/', 'store')->name("$name.store")->middleware("permission:$name.insert");
    Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");

    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
});


$prefix = 'artikel';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.artikel

    $prefix = 'data';
    Route::controller(ArtikelController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.data
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/add', 'add')->name("$name.add")->middleware("permission:$name.insert");
        Route::get('/edit/{artikel}', 'edit')->name("$name.edit")->middleware("permission:$name.update");

        Route::delete('/{artikel}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/insert', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });

    $prefix = 'kategori';
    Route::controller(KategoriController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; //admin.artikel.kategori
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/select2', 'select2')->name("$name.select2")->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });

    $prefix = 'tag';
    Route::controller(TagController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.artikel.tag
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/select2', 'select2')->name("$name.select2")->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });
});



$prefix = 'galeri';
Route::controller(GaleriController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.galeri
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/select2', 'select2')->name("$name.select2")->middleware("permission:$name");
    Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
});

$prefix = 'social_media';
Route::controller(SocialMediaController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.social_media
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
});

$prefix = 'pendaftaran';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.pendaftaran

    $prefix = 'gform';
    Route::controller(GFormController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.pendaftaran.gform
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/member', 'member_select2')->name("$name.member")->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});

$prefix = 'utility';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.utility
    $prefix = 'notif_depan_atas';
    Route::controller(NotifDepanAtasController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.utility.notif_depan_atas
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'notif_admin_atas';
    Route::controller(NotifAdminAtasController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.utility.notif_admin_atas
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'hari_besar_nasional';
    Route::controller(HariBesarNasionalController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.utility.hari_besar_nasional
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::get('/list_error', 'list_error')->name("$name.list_error")->middleware("permission:$name");
    });
});

$prefix = 'user_access';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.user_access
    $prefix = 'permission';
    Route::controller(PermissionController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.user_access.permission
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/', 'store')->name("$name.store")->middleware("permission:$name.insert");
        Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });

    $prefix = 'role';
    Route::controller(RoleController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.user_access.role
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/create', 'create')->name("$name.create")->middleware("permission:$name.insert");
        Route::get('/edit/{model}', 'edit')->name("$name.edit")->middleware("permission:$name.update");
        Route::post('/', 'store')->name("$name.store")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});

$prefix = 'menu';
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.menu

    $prefix = 'admin';
    Route::controller(MenuAdminController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.menu.admin
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::put('/save', 'save')->name("$name.save")->middleware("permission:$name.save");

        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");

        Route::get('/list', 'list')->name("$name.list")->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/parent_list', 'parent_list')->name("$name.parent_list")->middleware("permission:$name");
    });

    $prefix = 'frontend';
    Route::controller(MenuFrontendController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.menu.admin
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::put('/save', 'save')->name("$name.save")->middleware("permission:$name.save");

        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");

        Route::get('/list', 'list')->name("$name.list")->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/parent_list', 'parent_list')->name("$name.parent_list")->middleware("permission:$name");
    });
});




$prefix = "setting";
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.setting

    $prefix = 'admin';
    $name_ = "$name.$prefix"; // admin.setting.admin
    Route::group([
        'controller' => AdminController::class,
        'prefix' => $prefix,
        'middleware' => "permission:$name_"
    ], function () use ($name_) {
        Route::get('/', 'index')->name($name_);
        Route::post('/save/app', 'save_app')->name("$name_.save.app");
        Route::post('/save/meta', 'save_meta')->name("$name_.save.meta");

        Route::get('/meta', 'meta_list')->name("$name_.meta");
        Route::post('/meta/insert', 'meta_insert')->name("$name_.meta.insert");
        Route::post('/meta/update', 'meta_update')->name("$name_.meta.update");
        Route::delete('/meta/delete', 'meta_delete')->name("$name_.meta.delete");
    });

    $prefix = 'front';
    $name_ = "$name.$prefix"; // admin.setting.front
    Route::group([
        'controller' => FrontController::class,
        'prefix' => $prefix,
        'middleware' => "permission:$name_"
    ], function () use ($name_) {
        Route::get('/', 'index')->name($name_);
        Route::post('/save/app', 'save_app')->name("$name_.save.app");
        Route::post('/save/meta', 'save_meta')->name("$name_.save.meta");

        Route::get('/meta', 'meta_list')->name("$name_.meta");
        Route::post('/meta/insert', 'meta_insert')->name("$name_.meta.insert");
        Route::post('/meta/update', 'meta_update')->name("$name_.meta.update");
        Route::delete('/meta/delete', 'meta_delete')->name("$name_.meta.delete");
    });

    $prefix = 'home';
    $name_ = "$name.$prefix"; // admin.setting.home
    Route::group([
        'controller' => HomeController::class,
        'prefix' => $prefix,
        'middleware' => "permission:$name_"
    ], function () use ($name_) {
        Route::get('/', 'index')->name($name_);

        // save
        $method = 'hero';
        Route::post("/$method", $method)->name("$name_.$method");

        $method = 'poesaka';
        Route::post("/$method", $method)->name("$name_.$method");

        $method = 'visi_misi';
        Route::post("/$method", $method)->name("$name_.$method");

        $method = 'struktur_anggota';
        Route::post("/$method", $method)->name("$name_.$method");

        $method = 'kata_alumni';
        Route::post("/$method", $method)->name("$name_.$method");

        $method = 'galeri_kegiatan';
        Route::post("/$method", $method)->name("$name_.$method");

        $method = 'artikel';
        Route::post("/$method", $method)->name("$name_.$method");

        $method = 'sensus';
        Route::post("/$method", $method)->name("$name_.$method");
    });
});



$prefix = 'kontak';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.kontak
    $prefix = 'faq';
    Route::controller(FAQController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.kontak.faq
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/setting', 'setting')->name("$name.setting")->middleware("permission:$name.setting");
    });

    $prefix = 'list';
    Route::controller(ListContactController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.kontak.list
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/setting', 'setting')->name("$name.setting")->middleware("permission:$name.setting");
    });

    $prefix = 'message';
    Route::controller(MessageController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.kontak.message
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/setting', 'setting')->name("$name.setting")->middleware("permission:$name.setting");
    });
});


$prefix = 'data_master';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.data_master

    $prefix = "jenis";
    Route::controller(JenisBarangController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.data_master.jenis
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });

    $prefix = "satuan";
    Route::controller(SatuanBarangController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.data_master.satuan
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });

    $prefix = "jabatan";
    Route::controller(PegawaiJabatan::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.data_master.jabatan
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });
});

$prefix = 'barang';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.barang

    $prefix = "sewa";
    Route::controller(SewaController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.barang.sewa
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });

    $prefix = "habis_pakai";
    Route::controller(HabisPakaiController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.barang.habis_pakai
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });

    $prefix = 'pengadaan';
    Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.pengadaan

        $prefix = "sewa";
        Route::controller(BarangSewaController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
            $name = "$name.$prefix"; // admin.barang.pengadaan.sewa
            Route::get('/', 'index')->name($name)->middleware("permission:$name");
            Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
            Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
            Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
            Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");

            $prefix = 'list';
            Route::group(['prefix' => $prefix, 'controller' => BarangSewaListController::class], function () use ($name, $prefix) {
                $name = "$name.$prefix"; // admin.barang.pengadaan.sewa.list
                Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
                Route::get('/barang_select2', 'barang_select2')->name("$name.barang_select2")->middleware("permission:$name.insert|$name.update");

                Route::get('/{model}', 'index')->name($name)->middleware("permission:$name");
                Route::post('/{model}', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
                Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
                Route::post('/{model}/update', 'update')->name("$name.update")->middleware("permission:$name.update");
            });
        });

        $prefix = "habis_pakai";
        Route::controller(BarangHabisPakaiController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
            $name = "$name.$prefix"; // admin.barang.pengadaan.habis_pakai
            Route::get('/', 'index')->name($name)->middleware("permission:$name");
            Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
            Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
            Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
            Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");

            $prefix = 'list';
            Route::group(['prefix' => $prefix, 'controller' => BarangHabisPakaiListController::class], function () use ($name, $prefix) {
                $name = "$name.$prefix"; // admin.barang.pengadaan.habis_pakai.list
                Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
                Route::get('/barang_select2', 'barang_select2')->name("$name.barang_select2")->middleware("permission:$name.insert|$name.update");

                Route::get('/{model}', 'index')->name($name)->middleware("permission:$name");
                Route::post('/{model}', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
                Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
                Route::post('/{model}/update', 'update')->name("$name.update")->middleware("permission:$name.update");
            });
        });
    });

    $prefix = 'pengurangan';
    Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.pengurangan

        $prefix = "sewa";
        Route::controller(PenguranganBarangSewaController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
            $name = "$name.$prefix"; // admin.barang.pengurangan.sewa
            Route::get('/', 'index')->name($name)->middleware("permission:$name");
            Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
            Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
            Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
            Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");

            $prefix = 'list';
            Route::group(['prefix' => $prefix, 'controller' => PenguranganBarangSewaListController::class], function () use ($name, $prefix) {
                $name = "$name.$prefix"; // admin.barang.pengurangan.sewa.list
                Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
                Route::get('/barang_select2', 'barang_select2')->name("$name.barang_select2")->middleware("permission:$name.insert|$name.update");

                Route::get('/{model}', 'index')->name($name)->middleware("permission:$name");
                Route::post('/{model}', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
                Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
                Route::post('/{model}/update', 'update')->name("$name.update")->middleware("permission:$name.update");
            });
        });

        $prefix = "habis_pakai";
        Route::controller(PenguranganBarangHabisPakaiController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
            $name = "$name.$prefix"; // admin.barang.pengurangan.habis_pakai
            Route::get('/', 'index')->name($name)->middleware("permission:$name");
            Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
            Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
            Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
            Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");

            $prefix = 'list';
            Route::group(['prefix' => $prefix, 'controller' => PenguranganBarangHabisPakaiListController::class], function () use ($name, $prefix) {
                $name = "$name.$prefix"; // admin.barang.pengurangan.habis_pakai.list
                Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
                Route::get('/barang_select2', 'barang_select2')->name("$name.barang_select2")->middleware("permission:$name.insert|$name.update");

                Route::get('/{model}', 'index')->name($name)->middleware("permission:$name");
                Route::post('/{model}', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
                Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
                Route::post('/{model}/update', 'update')->name("$name.update")->middleware("permission:$name.update");
            });
        });
    });
});

$prefix = "karyawan";
Route::controller(KaryawanController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.karyawan
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
});

$prefix = "customer";
Route::controller(CustomerController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.customer
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
});

$prefix = "penyewaan";
Route::prefix($prefix)->controller(PenyewaanController::class)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.penyewaan
    // header
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/customer_select2', 'customer_select2')->name("$name.customer_select2")->middleware("permission:$name");
    Route::get('/detail', 'detail')->name("$name.detail")->middleware("permission:$name");
    Route::post('/batalkan', 'batalkan')->name("$name.batalkan")->middleware("permission:$name.batalkan");
    Route::post('/selesai/{model}', 'selesai')->name("$name.selesai")->middleware("permission:$name.selesai");
    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");

    $prefix = "reciving_order";
    Route::prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.penyewaan.reciving_order
        Route::get('/', 'reciving_order')->name($name)->middleware("permission:$name");
        Route::post('/save', 'save')->name("$name.save")->middleware("permission:$name.save");
        Route::get('/barang_select2', 'barang_select2')->name("$name.barang_select2")->middleware("permission:$name");
        Route::get('/{model}', 'reciving_order_update')->name("$name.update")->middleware("permission:$name");

        $prefix = "barang";
        Route::prefix($prefix)->group(function () use ($name, $prefix) {
            $name = "$name.$prefix"; // admin.penyewaan.reciving_order.barang
            Route::get('/', 'reciving_order_barang')->name($name)->middleware("permission:$name");
            Route::post('/insert', 'reciving_order_barang_insert')->name("$name.insert")->middleware("permission:$name.insert");
            Route::post('/update', 'reciving_order_barang_update')->name("$name.update")->middleware("permission:$name.update");
            Route::get('/find', 'reciving_order_barang_find')->name("$name.find")->middleware("permission:$name.update");
            Route::delete('/{model}', 'reciving_order_barang_delete')->name("$name.delete")->middleware("permission:$name.delete");
        });
    });
});

$prefix = "pesanan";
Route::prefix($prefix)->controller(PesananController::class)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.pesanan
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::post('/insert', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    Route::post('/status', 'status')->name("$name.status")->middleware("permission:$name.status");
    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name");
    Route::get('/customer_select2', 'customer_select2')->name("$name.customer_select2")->middleware("permission:$name");
    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");

    // detail
    Route::get('/detail/datatable', 'detail_datatable')->name("$name.detail.datatable")->middleware("permission:$name.detail");
    Route::post('/detail/insert', 'detail_insert')->name("$name.detail.insert")->middleware("permission:$name.detail.insert");
    Route::post('/detail/update', 'detail_update')->name("$name.detail.update")->middleware("permission:$name.detail.update");
    Route::get('/detail/find', 'detail_find')->name("$name.detail.find")->middleware("permission:$name");
    Route::get('/detail/{model}', 'detail')->name("$name.detail")->middleware("permission:$name.detail");
    Route::delete('/detail_delete/{model}', 'detail_delete')->name("$name.detail.delete")->middleware("permission:$name.detail.delete");
});

$prefix = "pembayaran";
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.pembayaran
    Route::controller(PembayaranController::class)->group(function () use ($name) {
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/list/{model}', 'list')->name("$name.list")->middleware("permission:$name");
        Route::get('/faktur/{model}', 'faktur')->name("$name.faktur")->middleware("permission:$name");
        Route::post('/simpan_status/{model}', 'simpan_status')->name("$name.simpan_status")->middleware("permission:$name.simpan_status");

        Route::post('/insert', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/batalkan', 'batalkan')->name("$name.batalkan")->middleware("permission:$name.batalkan");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    Route::controller(PenyewaanController::class)->group(function () use ($name) {
        Route::get('/datatable', 'index')->name("$name.datatable")->middleware("permission:$name");
        Route::get('/customer_select2', 'customer_select2')->name("$name.customer_select2")->middleware("permission:$name");
        Route::get('/detail', 'detail')->name("$name.detail")->middleware("permission:$name");
    });
});

$prefix = "pengambilan";
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.pengambilan
    Route::controller(PengambilanBarangController::class)->group(function () use ($name) {
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/list/{model}', 'list')->name("$name.list")->middleware("permission:$name");
        Route::get('/surat_jalan/{model}', 'surat_jalan')->name("$name.surat_jalan")->middleware("permission:$name");
        Route::post('/konfirmasi/{model}', 'konfirmasi')->name("$name.konfirmasi")->middleware("permission:$name.konfirmasi");
        Route::post('/save', 'save')->name("$name.save")->middleware("permission:$name.save");
    });

    Route::controller(PenyewaanController::class)->group(function () use ($name) {
        Route::get('/datatable', 'index')->name("$name.datatable")->middleware("permission:$name");
        Route::get('/customer_select2', 'customer_select2')->name("$name.customer_select2")->middleware("permission:$name");
        Route::get('/detail', 'detail')->name("$name.detail")->middleware("permission:$name");
    });
});

$prefix = "pengembalian";
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.pengembalian
    Route::controller(PengembalianBarangController::class)->group(function () use ($name) {
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/list/{model}', 'list')->name("$name.list")->middleware("permission:$name");
        Route::get('/surat_pengembalian/{model}', 'surat_pengembalian')->name("$name.surat_pengembalian")->middleware("permission:$name");
        Route::post('/konfirmasi/{model}', 'konfirmasi')->name("$name.konfirmasi")->middleware("permission:$name.konfirmasi");
        Route::post('/save', 'save')->name("$name.save")->middleware("permission:$name.save");
        $prefix = "barang_habis_pakai";
        Route::prefix($prefix)->group(function () use ($name, $prefix) {
            $name = "$name.$prefix"; // admin.pengembalian.barang_habis_pakai
            $bhs = "barang_habis_pakai";
            Route::post('/', "{$bhs}_list")->name($name)->middleware("permission:$name");
            Route::get('/select2', "{$bhs}_select2")->name("$name.select2")->middleware("permission:$name");
            Route::post('/insert', "{$bhs}_insert")->name("$name.insert")->middleware("permission:$name.insert");
            Route::get('/find', "{$bhs}_find")->name("$name.find")->middleware("permission:$name.update");
            Route::post('/update', "{$bhs}_update")->name("$name.update")->middleware("permission:$name.update");
            Route::delete('/{model}', "{$bhs}_delete")->name("$name.delete")->middleware("permission:$name.delete");
        });
    });

    Route::controller(PenyewaanController::class)->group(function () use ($name) {
        Route::get('/datatable', 'index')->name("$name.datatable")->middleware("permission:$name");
        Route::get('/customer_select2', 'customer_select2')->name("$name.customer_select2")->middleware("permission:$name");
        Route::get('/detail', 'detail')->name("$name.detail")->middleware("permission:$name");
    });
});



$prefix = 'ganti_rugi';
Route::controller(GantiRugiController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.ganti_rugi
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/detail/{model}', 'detail')->name("$name.detail")->middleware("permission:$name");
    Route::get('/invoice/{model}', 'invoice')->name("$name.invoice")->middleware("permission:$name");
    Route::get('/surat_permohonan_ganti_rugi/{model}', 'surat_permohonan_ganti_rugi')->name("$name.surat_permohonan_ganti_rugi")->middleware("permission:$name");
    Route::post('/simpan_status/{ganti_rugi}', 'simpan_status')->name("$name.simpan_status")->middleware("permission:$name.simpan_status");
    Route::controller(PenyewaanController::class)->group(function () use ($name) {
        Route::get('/customer_select2', 'customer_select2')->name("$name.customer_select2")->middleware("permission:$name");
    });
    Route::get('/faktur/{ganti_rugi}', 'faktur')->name("$name.faktur")->middleware("permission:$name.faktur");
    Route::get('/surat_terima/{ganti_rugi}', 'surat_terima')->name("$name.surat_terima")->middleware("permission:$name.surat_terima");

    $prefix = 'barang';
    Route::prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.ganti_rugi.barang
        Route::get('/', "{$prefix}_datatable")->name("$name")->middleware("permission:$name");
        Route::get('/invoice', "{$prefix}_invoice")->name("$name.invoice")->middleware("permission:$name");
        Route::get('/select2', "{$prefix}_select2")->name("$name.select2")->middleware("permission:$name.insert");
        Route::post('/insert', "{$prefix}_insert")->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/batalkan', "{$prefix}_batalkan")->name("$name.batalkan")->middleware("permission:$name.batalkan");
    });

    $prefix = 'uang';
    Route::prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.ganti_rugi.uang
        Route::get('/', "{$prefix}_datatable")->name("$name")->middleware("permission:$name");
        Route::get('/invoice', "{$prefix}_invoice")->name("$name.invoice")->middleware("permission:$name");
        Route::post('/insert', "{$prefix}_insert")->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/batalkan', "{$prefix}_batalkan")->name("$name.batalkan")->middleware("permission:$name.batalkan");
    });
});

$prefix = 'laporan';
Route::prefix($prefix)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.laporan

    $prefix = "penyewaan";
    Route::prefix($prefix)->controller(LaporanPenyewaanController::class)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.laporan.penyewaan
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/cetak_laporan', 'cetak_laporan')->name("$name.cetak_laporan")->middleware("permission:$name.cetak_laporan");

        Route::controller(PenyewaanController::class)->group(function () use ($name) {
            Route::get('/customer_select2', 'customer_select2')->name("$name.customer_select2")->middleware("permission:$name");
            Route::get('/detail', 'detail')->name("$name.detail")->middleware("permission:$name");
        });
    });

    $prefix = "pengambilan";
    Route::prefix($prefix)->controller(LaporanPengambilanBarangController::class)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.laporan.pengambilan
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/cetak_laporan', 'cetak_laporan')->name("$name.cetak_laporan")->middleware("permission:$name.cetak_laporan");

        Route::controller(PenyewaanController::class)->group(function () use ($name) {
            Route::get('/customer_select2', 'customer_select2')->name("$name.customer_select2")->middleware("permission:$name");
            Route::get('/detail', 'detail')->name("$name.detail")->middleware("permission:$name");
        });
    });

    $prefix = "pengembalian";
    Route::prefix($prefix)->controller(LaporanPengembalianBarangController::class)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.laporan.pengembalian
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/cetak_laporan', 'cetak_laporan')->name("$name.cetak_laporan")->middleware("permission:$name.cetak_laporan");

        Route::controller(PenyewaanController::class)->group(function () use ($name) {
            Route::get('/customer_select2', 'customer_select2')->name("$name.customer_select2")->middleware("permission:$name");
            Route::get('/detail', 'detail')->name("$name.detail")->middleware("permission:$name");
        });
    });

    $prefix = "ganti_rugi";
    Route::prefix($prefix)->controller(GantiRugiBarangController::class)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.laporan.ganti_rugi
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/cetak_laporan', 'cetak_laporan')->name("$name.cetak_laporan")->middleware("permission:$name.cetak_laporan");

        Route::controller(PenyewaanController::class)->group(function () use ($name) {
            Route::get('/customer_select2', 'customer_select2')->name("$name.customer_select2")->middleware("permission:$name");
            Route::get('/detail', 'detail')->name("$name.detail")->middleware("permission:$name");
        });
    });

    $prefix = "pembayaran";
    Route::prefix($prefix)->controller(LaporanPembayaranController::class)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.laporan.pembayaran
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/cetak_laporan', 'cetak_laporan')->name("$name.cetak_laporan")->middleware("permission:$name.cetak_laporan");

        Route::controller(PenyewaanController::class)->group(function () use ($name) {
            Route::get('/customer_select2', 'customer_select2')->name("$name.customer_select2")->middleware("permission:$name");
            Route::get('/detail', 'detail')->name("$name.detail")->middleware("permission:$name");
        });
    });
});
