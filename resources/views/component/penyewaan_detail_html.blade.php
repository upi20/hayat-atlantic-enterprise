<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-default-title">Detail Penyewaan</h6><button aria-label="Tutup"
                    class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="card-title mb-2">Customer</h3>
                <div class="row"id="detail_data_customer">

                </div>
                <hr>
                <h3 class="card-title mb-2">Data Penyewaan</h3>
                <div class="row" id="detail_data_penyewaan">

                </div>
                <hr>
                <h3 class="card-title mb-2">Daftar Barang</h3>
                <table class="table table-hover border-bottom table-responsive" id="tbl_detail">
                    <thead>
                        <tr>
                            <th class="text-nowrap">No</th>
                            <th class="text-nowrap">Barang</th>
                            <th class="text-nowrap text-center">Qty</th>
                            <th class="text-nowrap text-center">Harga</th>
                            <th class="text-nowrap text-center">Total Harga</th>
                            <th class="text-nowrap">Keterangan</th>
                            <th class="text-nowrap">Diubah</th>
                        </tr>
                    </thead>
                    <tbody id="tbl_detail_body">

                    </tbody>
                </table>
                <hr>
                <h3 class="card-title mb-2">Daftar Pembayaran</h3>
                <table class="table table-hover border-bottom table-responsive" id="tbl_pembayaran">
                    <thead>
                        <tr>
                            <th class="text-nowrap">No</th>
                            <th class="text-nowrap">Nama</th>
                            <th class="text-nowrap">Tanggal</th>
                            <th class="text-nowrap text-center">Nominal</th>
                            <th class="text-nowrap">Keterangan</th>
                            <th class="text-nowrap">Diubah</th>
                        </tr>
                    </thead>
                    <tbody id="tbl_pembayaran_body">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-bs-dismiss="modal">
                    <i class="fas fa-times"></i>
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
