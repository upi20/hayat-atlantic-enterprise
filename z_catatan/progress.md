=======================================================================================================================
# 04 November 2022
## Refactore Penyewaan
    [] Implementasi nomor
        [x] Crud
        [x] Detail
        [x] Faktur Pembayaran
        [x] Surat Jalan
        [] Pengambilan Barang
        [] Pengembalian Barang
        [x] Ganti Rugi
    [] Tambahkan Perusahaan ke 
    
# Penomoran
    [x] GRU ganti rugi uang
    [x] GRB ganti rugi barang
    [x] GRU Pembayaran sebelumnya

## Cek Error
    [x] Reciving order baru barang bisa sama
    [] Total Harga Penyewaan Jika berbeda kasih tanda merah
    [] Jika ada perubahan dan belum disimpan maka keluarkan alert[pembayaran, pengambilan, pengembalian, ganti rugi]

## Pdf saat penyewaan
    [x] Faktur
    [x] Surat Jalan
    [] Surat Pengembalian (Surat Pengembalian Barang) // sama seperti di laporan
    [] Faktur Ganti Rugi
        [] Uang (Faktur)
        [] Barang (Surat Serah Terima Barang)
    [] Label Pengiriman

## Laporan
    [x] Penyewaan
    [x] Pengambilan Barang
    [x] Pengembalian Barang
    [] Ganti Rugi Barang

## Penyewaan jika di batalkan bisa di hapus

## Buat Setting Penomoran

## Pengembalian barang
    [] Surat pengembalian barang

## Tabel Pengurangan barang ditambah kolom penyewaan
    [] Detail penyewaan dibuat component

## Ganti Rugi
    [] List ganti rugi masukan ke detail penyewaan
    [] Filter di ganti rugi detail

## Printilan
    [] Created dan updated
    [] Date time str
    [] Semua status tidak menggunakan badge tapi menggunakan circle
    [] Semua pembatalan ditambahkan alasan

## Frontend
    [] Home
    [] List Data barang Sewa
=======================================================================================================================
# 25 Oktober 2022

=======================================================================================================================
# 24 Oktober 2022
## Dashboard
    [x] Widget
        [x] Total Penyewaan
        [x] Total Customer
        [x] Total Pegawai
        [x] Jml Barang Rusak (Total)

    [x] Chart
        [x] Penyewaan Single Bar chart Default Tahun http://127.0.0.1:5500/html/charts.html
        [x] Ganti rugi Single Bar chart Default Tahun http://127.0.0.1:5500/html/charts.html
        [x] uang vs barng Multiple Bar chart Default Tahun http://127.0.0.1:5500/html/charts.html
        
        [x] Donout chart ganti uang vs barng http://127.0.0.1:5500/html/chart-donut.html
        [x] Donout chart Penyewaan Berdasarkan Status http://127.0.0.1:5500/html/chart-donut.html
        [x] Donout chart Pembayaran Berdasarkan Status http://127.0.0.1:5500/html/chart-donut.html
        [x] Donout chart Pengambilan Berdasarkan Status http://127.0.0.1:5500/html/chart-donut.html
        [x] Donout chart Ganti Rugi Berdasarkan Status http://127.0.0.1:5500/html/chart-donut.html
    
=======================================================================================================================
# 15 Oktober 2022

## Tabel Pengurangan barang ditambah kolom penyewaan
    [x] Barang sewa
    [x] Barang habis pakai
    [] Detail penyewaan dibuat component

## Pengembalian tambah barang habis pakai
    [x] Display
    [x] Funsngsi simpan
    [x] Simpan ke ganti rugi, ganti rugi barang

## Ganti Rugi
    [x] Ganti rugi list
    [x] ganti rugi pembayaran
    [x] ganti rugi barang
        [x] Select2 Barang
        [x] Insert
        [x] Batalkan
    [x] table List data barang yang rusak dan hilang belum bisa di refresh
    [x] Tombol penyewaan selesai akan ada jika ganti rugi selesai
    [x] di pengadaan jika ada penyewaan id aksi tidak bisa dilakukan
    [x] Ganti rugi tidak bisa di ubah jika penyewaan nya sudah di selesaikan
    [x] Crud perizinan

## Redesign table
    [x] Customer
    [x] Barang sewa
    [x] Barang Habis Pakai
    [x] Pengadaan
        [x] Barang sewa
            [x] List
            [x] Detail
        [x] Barang Habis Pakai
            [x] List
            [x] Detail
    [x] Pengurangan
        [x] Barang sewa
            [x] List
            [x] Detail
        [x] Barang Habis Pakai
            [x] List
            [x] Detail
    [x] Karyawan
    [x] Data Master 
        [x] Jenis Barang
        [x] Satuan Barang
        [x] Jabatan Pegawai
    [x] Penyewaan
        [x] List
        [x] Reciving Order
    [x] Pembayaran
        [x] List
        [x] Detail
    [x] Pengambilan
        [x] List
        [z] Detail
    [x] Pengembalian
        [x] List
        [x] Detail
    [x] Ganti Rugi
        x[] Filter uang
        [] Filter barang
    
=======================================================================================================================
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
    [x] Atur status str sesuai dengan migrasi
    [x] Pengembalian Barang List barang
    [x] Pengembalian Barang pemakaian barang habis pakai
    [x] Laporan pengembalian barang
    [x] tanggal kembali
    [x] penerima barang

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
    [x] Pembatalan Reciving order
    [x] Di pembayaran jika penyewaan sudah selesai maka pembayaran akan di tutup
    [x] Buat template untuk default keterangan pengambilan barang

# Sabtu, 22 Oktober 2022
### Testing
    [x] Pembatalan Reciving order
    [x] Di pembayaran jika penyewaan sudah selesai maka pembayaran akan di tutup
    [x] Buat template untuk default keterangan pengambilan barang
    [x] Unsinged di database yang bukan relasi