<script>
    function detailFunc(id) {
        $.LoadingOverlay("show");
        $.ajax({
            method: 'get',
            url: `{{ route(h_prefix('detail')) }}`,
            data: {
                id: id
            }
        }).done((data) => {
            $('#modal-default').modal('show');
            const data_customer = $('#detail_data_customer');
            const data_penyewaan = $('#detail_data_penyewaan');
            const table = $('#tbl_detail');
            const table_body = $('#tbl_detail_body');

            const table_pembayaran = $('#tbl_pembayaran');
            const table_pembayaran_body = $('#tbl_pembayaran_body');

            // data customer
            data_customer.html(` <div class="col-md-6">
                            <p><i class="fas fa-user me-2"></i>${data.customer?? 'Data customer sudah dihapus'}</p>
                            <p><i class="fas fa-map-marker-alt me-2"></i>${data.customer_alamat?? ''}</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-phone me-2"></i> ${data.customer_no_telepon?? ''}</p>
                            <p><i class="fab fa-whatsapp me-2"></i> ${data.customer_no_whatsapp?? ''}</p>
                        </div> `);

            // data penyewaan
            const status_pembayaran =
                `<span class="badge bg-${data.status_pembayaran == 1 ? 'success':'danger'}">${data.status_pembayaran_str}</span>`;
            const status_penyewaan =
                `<span class="badge bg-${statusClass(data.status)}">${data.status_str}</span>`;

            const tanggal_pakai = data.tanggal_pakai_dari == data.tanggal_pakai_sampai ? data
                .tanggal_pakai_dari :
                `${data.tanggal_pakai_dari} s/d ${data.tanggal_pakai_sampai} 
                    (${data.tanggal_pakai_lama} Hari)`;

            const created_at =
                `<div class="col-md-6 mb-2"><span class="fw-bold">Ditambahkan Oleh:</span> <br> ${data.created_by_str} | ${data.created_at_str}</div>`;
            const updated_at =
                `<div class="col-md-6 mb-2"><span class="fw-bold">Diubah Oleh:</span> <br> ${data.updated_by_str} | ${data.updated_at_str}</div>`;
            const timestamp = created_at + (data.updated_by_str ? updated_at : '')


            data_penyewaan.html(`
                <div class="col-md-6 mb-2"><span class="fw-bold">Nomor Penyewaan:</span> <br> ${data.number}</div>
                <div class="col-md-6 mb-2"><span class="fw-bold">Tanggal Order:</span> <br> ${data.tanggal_order}</div>
                <div class="col-md-6 mb-2"><span class="fw-bold">Tanggal Kirim:</span> <br> ${data.tanggal_kirim}</div>
                <div class="col-md-6 mb-2"><span class="fw-bold">Tanggal Pakai:</span> <br> ${tanggal_pakai}</div>
                <div class="col-md-6 mb-2"><span class="fw-bold">Kepada, Lokasi:</span> <br> <span class="fw-bold">${data.kepada}</span>, ${data.lokasi}</div>
                <div class="col-md-6 mb-2"><span class="fw-bold">Status Pembayaran:</span> <br> ${status_pembayaran}</div>
                <div class="col-md-6 mb-2"><span class="fw-bold">Status Penyewaan:</span> <br> ${status_penyewaan}</div>
                ${timestamp}
                `);


            // data barang
            table_body.html('');
            $(table).dataTable().fnDestroy();
            let table_body_html = '';
            let number = 1;
            data.barangs.forEach(e => {
                table_body_html += `
                            <tr>
                                <td class="text-nowrap">${number++}</td>
                                <td class="text-nowrap">${e.barang_nama}<br><small>${e.barang_kode}</small></td>
                                <td class="text-nowrap text-right">${e.qty}</td>
                                <td class="text-nowrap text-right">Rp. ${format_rupiah(e.harga)}</td>
                                <td class="text-nowrap text-right">Rp. ${format_rupiah(e.harga_total)}</td>
                                <td class="text-nowrap">${e.keterangan ??''}</td>
                                <td class="text-nowrap">${e.updated_by_str ?? e.created_by_str}<br><small>${e.updated_at_str ?? e.created_at_str}</small></td>
                            </tr>
                    `;
            });
            table_body.html(table_body_html);
            // renderDataTable(table);

            // data pembayaran
            table_pembayaran_body.html('');
            $(table_pembayaran).dataTable().fnDestroy();
            let table_pembayaran_body_html = '';
            number = 1;
            data.pembayarans.forEach(e => {
                table_pembayaran_body_html += `<tr>
                                <td class="text-nowrap">${number++}</td>
                                <td class="text-nowrap">${e.nama}<br><small>Faktur: ${e.no_faktur}</small></td>
                                <td class="text-nowrap">${e.tanggal}</td>
                                <td class="text-nowrap text-right">Rp. ${format_rupiah(e.nominal)}</td>
                                <td class="text-nowrap">${e.keterangan ?? ''}</td>
                                <td class="text-nowrap">${e.updated_by_str ?? e.created_by_str}<br><small>${e.updated_at_str ?? e.created_at_str}</small></td>
                            </tr>`;
            });
            table_pembayaran_body.html(table_pembayaran_body_html);
            // renderDataTable(table_pembayaran);
            $.LoadingOverlay("hide");
        }).fail(($xhr) => {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Something went wrong, try again later',
                showConfirmButton: false,
                timer: 3500
            })
            $.LoadingOverlay("hide");
        })
    }
</script>
