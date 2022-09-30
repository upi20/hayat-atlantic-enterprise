let errorAfterInput = [];

function setErrorAfterInput(error, element) {
    // get element after input
    let after = $(element).next();
    if (after.length == 0) $(element).after('<div></div>');
    if (after.length == 0) after = $(element).next();

    // highlight
    $(element).addClass("is-invalid").removeClass("is-valid");
    let errors = Array.isArray(error) ? '' : `<li class="text-danger">${error}</li>`;
    if (Array.isArray(error)) {
        error.forEach(err => {
            errors += `<li class="text-danger">${err}</li>`;
        });
    }

    after.html(`<div><ul style="padding-left: 20px;">${errors}</ul></div>`);
}

function resetErrorAfterInput() {
    errorAfterInput.forEach(id => {
        // get element after input
        const element = $(`#${id}`);
        let after = $(element).next();
        if (after.length == 0) $(element).after('<div></div>');
        if (after.length == 0) after = $(element).next();
        $(element).addClass("is-valid").removeClass("is-invalid");
        after.html('');
    });
}

function setBtnLoading(element, text, status = true) {
    const el = $(element);
    if (status) {
        el.attr("disabled", "");
        el.html(
            `<span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true">
                                </span> <span>${text}</span>`
        );
    } else {
        el.removeAttr("disabled");
        el.html(text);
    }
}

function setToast(
    message = 'Hello, world! This is a toast message.',
    classAttr = ['text-white', 'bg-light']
) {
    var myToastEl = document.getElementById('toast');
    const toastJq = $(myToastEl);
    classAttr.forEach(element => {
        toastJq.addClass(element);
    });
    $("#toast-body").html(message);

    const delay = toastJq.attr('data-bs-delay');

    myToastEl.addEventListener('hidden.bs.toast', function () {
        toastJq.attr("class", "toast fade hide");
    });
    let counter = 0;
    const iterator = delay / 50;
    const progressbar = setInterval(() => {
        counter += iterator;
        const percent = Math.floor((50 / (delay * 0.50)) * counter);
        const progres_bar = $('#toast-progresbar');
        progres_bar.attr('style', `width: ${percent}%`);

        if (counter >= delay) {
            clearInterval(progressbar);
        }
    }, iterator);

    $('.toast').toast('show');
}

function youtube_parser(url) {
    var regExp =
        /^https?\:\/\/(?:www\.youtube(?:\-nocookie)?\.com\/|m\.youtube\.com\/|youtube\.com\/)?(?:ytscreeningroom\?vi?=|youtu\.be\/|vi?\/|user\/.+\/u\/\w{1,2}\/|embed\/|watch\?(?:.*\&)?vi?=|\&vi?=|\?(?:.*\&)?vi?=)([^#\&\?\n\/<>"']*)/i;
    var match = url.match(regExp);
    return (match && match[1].length == 11) ? match[1] : false;
}

function format_rupiah(angka, format = 2, prefix) {
    angka = angka != "" ? angka : 0;
    angka = parseFloat(angka);
    const minus = angka < 0 ? "-" : "";
    angka = angka.toString().split('.');
    let suffix = angka[1] ? '.' + angka[1] : '';

    if (format) {
        let str = '';
        for (let i = 0; i <= format; i++) {
            const suffix_1 = suffix[i] ? suffix[i] : '';
            str = `${str}${suffix_1}`;
        }
        suffix = str;
    }

    angka = angka[0];
    if (angka) {
        let number_string = angka.toString().replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi)

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : ''
            rupiah += separator + ribuan.join('.')
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah

        // return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '')
        const result = prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
        return minus + result + suffix;
    }
    else {
        return 0
    }
}

function terbilang(nilai) {
    var bilangan = `${nilai}`;
    var kalimat = ""
    var angka = new Array('0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')
    var kata = new Array('', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan')
    var tingkat = new Array('', 'Ribu', 'Juta', 'Milyar', 'Triliun')
    var panjang_bilangan = bilangan.length

    // panjang_bilangan = 14
    /* pengujian panjang bilangan */
    if (panjang_bilangan > 15) {
        kalimat = "Diluar Batas"
    }
    else {
        /* mengambil angka-angka yang ada dalam bilangan, dimasukkan ke dalam array */
        for (i = 1; i <= panjang_bilangan; i++) {
            angka[i] = bilangan.substr(-(i), 1)
        }

        var i = 1
        var j = 0

        /* mulai proses iterasi terhadap array angka */
        while (i <= panjang_bilangan) {
            subkalimat = ""
            kata1 = ""
            kata2 = ""
            kata3 = ""

            /* untuk Ratusan */
            if (angka[i + 2] != "0") {
                if (angka[i + 2] == "1") {
                    kata1 = "Seratus"
                }
                else {
                    kata1 = kata[angka[i + 2]] + " Ratus"
                }
            }

            /* untuk Puluhan atau Belasan */
            if (angka[i + 1] != "0") {
                if (angka[i + 1] == "1") {
                    if (angka[i] == "0") {
                        kata2 = "Sepuluh"
                    }
                    else if (angka[i] == "1") {
                        kata2 = "Sebelas"
                    }
                    else {
                        kata2 = kata[angka[i]] + " Belas"
                    }
                }
                else {
                    kata2 = kata[angka[i + 1]] + " Puluh"
                }
            }

            /* untuk Satuan */
            if (angka[i] != "0") {
                if (angka[i + 1] != "1") {
                    kata3 = kata[angka[i]]
                }
            }

            /* pengujian angka apakah tidak nol semua, lalu ditambahkan tingkat */
            if ((angka[i] != "0") || (angka[i + 1] != "0") || (angka[i + 2] != "0")) {
                subkalimat = kata1 + " " + kata2 + " " + kata3 + " " + tingkat[j] + " "
            }

            /* gabungkan variabe sub kalimat (untuk Satu blok 3 angka) ke variabel kalimat */
            kalimat = subkalimat + kalimat
            i = i + 3
            j = j + 1
        }

        /* mengganti Satu Ribu jadi Seribu jika diperlukan */
        if ((angka[5] == "0") && (angka[6] == "0")) {
            kalimat = kalimat.replace("Satu Ribu", "Seribu")
        }
    }

    return kalimat.trim();
}

function renderDataTable(element_table) {
    const tableUser = $(element_table).DataTable({
        columnDefs: [{
            orderable: false,
            targets: [0]
        }],
        // "responsive": true,
        // "lengthChange": true,
        // "autoWidth": false,
        order: [
            [0, 'asc']
        ]
    });
    tableUser.on('draw.dt', function () {
        var PageInfo = $(element_table).DataTable().page.info();
        tableUser.column(0, {
            page: 'current'
        }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}