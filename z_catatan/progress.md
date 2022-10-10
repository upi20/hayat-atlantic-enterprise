## Penyewaan
    [x] CRUD penyewaan
    [x] Penyewaan detail

## Pembayaran
    [x] datatable list penyewaan yang status nya >= 1
    [x] halaman list pnyewaan pembayaran
    [x] status pembayaran (lunas/belum lunas)
    [x] crud pembayaran
    [x] status lunas role jika ada pembayaran bisa di jadiin lunas, jika total pembayaran sama dengan total harga maka otomatis status akan lunas.
    [x] cetak faktur dari per pembayaran
    [x] nomor faktur dari timestamp pencetakan faktur

## Buat teknis pembatalan
    [x] Penyewaan db
    [x] Penyewaan crud
    [x] Pembayaran db
    [x] Pembayaran crud

## Pengambilan Barang
    [x] List penyewaan yang status nya sudah 2
    [x] Tombol surat jalan masuk ke halaman buat surat jalan list barang dan jumlah yang akan di kirim dan detail surat jalan


## penyewaan status

## pastikan peijinan berjalan dengan baik
## pastikan semua breadcumb berjalan dengan baik

## Perijinan
    
# Jumat, 07 Oktober 2022
## Pengambilan Barang
    [x] Filter status Penyewaan di hide
    [x] Detail Daftar Pengambilan -> Daftar Pembayaran  
    [x] Buat Desain Detail Pengambilan Barang
    [x] Buat Menampilkan data
    [x] Buat fungsi simpan
    [x] Buat Surat Jalan
        [x] Buat Logo
        [x] Buat halaman konsep
    [x] Pengirim di surat jalan


## Buat Lagi konsep sesuai dengan yang ada di kledo

### Pengambilan Barang 
    1. Admin Menyimpan list data barang yang akan diambil (Surat Bisa di cetak kalau list barang sudah disimpan, dan bisa mengubah nya jika warehouse belum mengkonfirmasi barang diambil.).
    2. Admin mencetak surat jalan.
    3. Warehouse Mengkonfirmasi Barang diambil
    4. Data pengambilan Barang -> List barang otomatis tidak bisa di ubah lagi (Disimpan, dikunci);
   
## Pengambilan Barang
    [x] Data sotk barang berkurang.

## Pengembalian Barang
    [x] Pengembalian Barang Datatable
    [] Atur status str sesuai dengan migrasi
    [] Pengembalian Barang List barang
    [] Pengembalian Barang pemakaian barang habis pakai
    [] Laporan pengembalian barang
    [] tanggal kembali
    [] penerima barang

### Refactore
    [] Pembuatan konsep Seluruhan
    [] Penyewaan -> Pemesanan
    [] Pembayaran
    [] Pengambilan -> Pengiriman
    [] Pengembalian
    [] Nomor faktur jadi invoice IN

    [] Rancangan database
    [] Ketika reciving order dibuat maka buat surat jalan
    [] Detail Penyewaan Status Ada yang di perbaiki dan ada yang ditambah
    [] Penyewaan Konfirmasi oleh
    [] Penyewaan Dikirm oleh
    [] Penyewaan Kembali oleh

### Masalah/Error/Harus di perbaiki
    [x] Halaman Penyewaan
        [z] Customer, lokasi disatukan
        [x] diubah oleh dan tanggal disatukan thead nya jadi diubah
        [x] status pembayaran -> Pembayaran
        [x] Aksi Pindah ke kiri
        [x] tanggal order dipindah ke ujung
        [x] Tombol detail di pindah ke aksi

    [x] Halaman Penyewaan -> Reciving order
        [x] diubah oleh dan tanggal disatukan thead nya jadi diubah

    [x] Halaman Penyewaan -> Detail
        [x] diubah oleh dan tanggal disatukan thead nya jadi diubah
        [z] Nama customer tambah icon user
    
    [x] Halaman pengembalian -> status

    [] data barang tidak bisa di hapus jika sudah tercatat dalam transaksi lain maka status nya akan di nonaktifkan/arsipkan. untuk meminimalisir error. logikanya jika barang di hapus maka akan mengecek ke database data barang apakah sudah tercatat di tabel lain jika sudah maka akan di nonaktifkan.
    [] barang habis pakai tambah status aktif/nonaktif
    [] barang sewa tambah status aktif/nonaktif
    [] Crud Setting Surat Jalan
    [] Konfirmasi Pengambilan Barang (Oleh Warehouse)
    [] Format Nomor Penyewaan jadi (SP/00000)

### Penyewaan Selesai
    [] Jika pembayaran selesai makan tombol selesai muncul.

# Senin, 10 Oktober 2022
### Testing
    [] Pembatalan Reciving order
    [] Di pembayaran jika penyewaan sudah selesai maka pembayaran akan di tutup
    [] Buat template untuk default pengambilan barang
