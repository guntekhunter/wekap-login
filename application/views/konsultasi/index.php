<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body>

        <div class="card" style="width: 25rem;">
            <div class="card-body bg-dark text-light">
                <div class="wrap-contact100">
                    <form class="contact100-form validate-form" id="whatsapp">
                        <span class="contact100-form-title">nama dosen</span>
                        <div class="form-group">
                            <select name="nama_dosen" class="form-control">
                                <option value="">--silahkan pilih--</option>
                                <?php foreach ($wadaw as $n) : ?>
                                    <?php if ($n['role_id'] == 1 && $user['id_anggota'] == $n['id_anggota']) { ?>
                                        <option value="<?= $n['id']; ?>"><?= $n['name']; ?></option>

                                    <?php }; ?>
                                    <?= $n['no_telfon']; ?>
                                <?php endforeach; ?>
                                <?= $n['name']; ?>

                            </select>
                        </div>
                        <input class="form-control tujuan" type="hidden" id="noAdmin">
                        <div class="wrap-input100">
                            <span class="label-input100">Nama</span>
                            <label>
                                <textarea class="form-control nama" style="width:22rem" type="text" placeholder="Masukkan alamat lengkap Anda"><?= $user['name'] ?></textarea>
                            </label>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100">
                            <span class="label-input100">Kelas</span>
                            <label>
                                <textarea class="form-control kelas" style="width:22rem" type="text" placeholder="Masukkan Kelas"><?= $user['kelas'] ?></textarea>
                            </label>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100">
                            <span class="label-input100">Keperluan</span>
                            <label>
                                <textarea class="form-control keperluan" placeholder="Masukkan keperluan anda" style="width:22rem"></textarea>
                            </label>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="container-contact100-form-btn">
                            <div class="wrap-contact100-form-btn">
                                <div class="contact100-form-bgbtn">
                                    <a class="submit"><button class="btn shadow-sm btn-warning pl-4 pr-4p-2 rounded">kirim</button></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script>
        $("#noAdmin").val("085241944648");
        $('.whatsapp-btn').click(function() {
            $('#whatsapp').toggleClass('toggle');
        });

        $('#whatsapp .submit').click(WhatsApp);
        $("#whatsapp input, #whatsapp textarea").keypress(function() {
            if (event.which == 13) WhatsApp();
        });
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        function WhatsApp() {
            var ph = '';
            if ($('#whatsapp .nama').val() == '') {
                ph = $('#whatsapp .nama').attr('placeholder');
                alert('Silahkan ' + ph + " yang benar");
                $('#whatsapp .nama').focus();
                return false;
            } else if ($('#whatsapp .kelas').val() == '') {
                ph = $('#whatsapp .kelas').attr('placeholder');
                alert('Silahkan ' + ph + " yang benar");
                $('#whatsapp .kelas').focus();
                return false;
            } else if ($('#whatsapp .keperluan').val() == '') {
                ph = $('#whatsapp .keperluan').attr('placeholder');
                alert('Silahkan ' + ph);
                $('#whatsapp .keperluan').focus();
                return false;
            } else {
                //cek devicenya dulu kolo bisa lanjot
                var url_wa = 'https://web.whatsapp.com/send';
                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                    url_wa = 'whatsapp://send/';
                }
                //masukkanmi itu inputan ke variabel yang nanti dipake'
                var tujuan = $('#whatsapp .tujuan').val(),
                    via_url = location.href,
                    nama = $('#whatsapp .nama').val(),
                    kelas = $('#whatsapp .kelas').val(),
                    keperluan = $('#whatsapp .keperluan').val();
                //aplikasikan variabel ke rumus pembuatan link wa pribadi
                $(this).attr('href', url_wa + '?phone=62 ' + tujuan + '&text=Assalamualaikum, maaf mengganggu, saya ' + nama + ' dari kelas ' + kelas + ' saya adalah anak bimbingan bapak, ' + keperluan + ". Terimakasih pak atas perhatiannya.");
                //pengaturan halaman popup yang menampilkan whatsapp
                var w = 960,
                    h = 540,
                    left = Number((screen.width / 2) - (w / 2)),
                    tops = Number((screen.height / 2) - (h / 2)),
                    popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
                popupWindow.focus();
                return false;
            }
        }
    </script>

    </body>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->