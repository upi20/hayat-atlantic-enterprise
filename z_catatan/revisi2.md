
# Administrasi
➖ [x] Data Penyewaan, filternya tambhain perbulan (yg kaya General Manager)
➖ Fitur pesanan 
[x] setelah terima pesanan, 
    [x] nanti nama cust yg baru muncul di tabel cust & nanti si pesanan ini muncul di tabel penyewaan Jadi nge link langsung ke data customer sama data penyewaan
    [x] Data pesanan jadi data penyewaan
[x] Filternya tambahin perbulan (yg kaya general manager) 

# Gudang
[x] Dashboardnya sesuain yg kaya di word (gaada menu customer & pembayaran) 
[x] Data Penyewaan, filternya tambhain perbulan (yg kaya General Manager)
[x] Nama tabel Penyewaan, Pengadaan & Pengurangan Barang sesuin lg juga
[x] Nama Tabel
    [x] Penyewaan
        [x] Detail data data barang pop up
        [x] List data barang di halaman edit data
    [x] Pembayaran
        [x] Detail data data barang pop up
    [x] Pengiriman Barang
        [x] Detail data data barang pop up
    [x] Pengambilan Barang
        [x] Detail data data barang pop up
    [x] Ganti rugi
        [x] List data barang di halaman edit data
    [x] Pengadaan barang sewa
        [x] List data barang di halaman edit data
    [x] Pengurangan barang sewa
        [x] List data barang di halaman edit data
    [x] Pengurangan barang habis pakai
        [x] List data barang di halaman edit data

# Update hosting
ALTER TABLE `pesanan` 
ADD `customer_nama` VARCHAR(255) NULL DEFAULT NULL AFTER `status`, 
ADD `customer_no_telepon` VARCHAR(255) NULL DEFAULT NULL AFTER `customer_nama`, 
ADD `customer_alamat` TEXT NULL DEFAULT NULL AFTER `customer_no_telepon`;