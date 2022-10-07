## Penyewaan
    [x] CRUD penyewaan
    [x] Penyewaan detail
    [] Penyewaan detail Pembayaran
    [] Survey

## Pembayaran
    [x] datatable list penyewaan yang status nya >= 1
    [x] halaman list pnyewaan pembayaran
    [x] status pembayaran (lunas/belum lunas)
    [x] crud pembayaran
    [x] status lunas role jika ada pembayaran bisa di jadiin lunas, jika total pembayaran sama dengan total harga maka otomatis status akan lunas.
    [x] cetak faktur dari per pembayaran
    [x] nomor faktur dari timestamp pencetakan faktur
    [] Buat settingan faktur

## Buat teknis pembatalan
    [x] Penyewaan db
    [x] Penyewaan crud
    [x] Pembayaran db
    [x] Pembayaran crud

## Pengambilan Barang
    [] List penyewaan yang status nya sudah 2
    [] Tombol surat jalan masuk ke halaman buat surat jalan list barang dan jumlah yang akan di kirim dan detail surat jalan

## Pengembalian Barang
    [] List penyewaan yang status nya sudah 2

## Fitur Lain
    [] Bisa tambahkan diskon
    [] barang penyewaan jika status 1 maka tidak bisa dihapus kecuali oleh super admin
    [] Modal keterangan pembatalan

## Penghapusan barang sewa dan barang habis
    data barang tidak bisa di hapus jika sudah tercatat dalam transaksi lain maka status nya akan di nonaktifkan/arsipkan. untuk meminimalisir error. logikanya jika barang di hapus maka akan mengecek ke database data barang apakah sudah tercatat di tabel lain jika sudah maka akan di nonaktifkan.
    [] barang habis pakai tambah status aktif/nonaktif
    [] barang habis pakai crud
    [] barang sewa tambah status aktif/nonaktif
    [] barang sewa crud

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
    [] Buat Surat Jalan
        [] Buat Logo
        [] Buat halaman konsep
    [] Pengirim di surat jalan
    [] Pengambilan barang bisa di klik table -> tr nya langsung
    [] Buat status pengambilan barang (Datatable)
    [] semua tanggal ada str nya
    [] Crud Setting Surat Jalan

## Buat Lagi konsep sesuai dengan yang ada di kledo

### Pengambilan Barang 
    1. Admin Menyimpan list data barang yang akan diambil (Surat Bisa di cetak kalau list barang sudah disimpan, dan bisa mengubah nya jika warehouse belum mengkonfirmasi barang diambil.).
    2. Admin mencetak surat jalan.
    3. Warehouse Mengkonfirmasi Barang diambil
    4. Data pengambilan Barang -> List barang otomatis tidak bisa di ubah lagi (Disimpan, dikunci);

    
    