<div class="container ">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">

                                    <h2><i class="pl-3 pr-3 pb-3 pt-3 rounded-circle bg-dark text-warning far fa-user"></i></h2>

                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" placeholder="masukkan email..." name="email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="password...">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <button type="submit" class="btn btn-dark text-warning btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>

                                </form>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration'); ?>">Buat akun baru!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 bg-dark ">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 mb-4 text-warning">Selamat Datang Di WEKAP</h1>
                                    <h2 class="h5 text-white">
                                        WEKAP(web konsultasi PA), menyediakan fitur konsultasi langsung ke PA dimana
                                        kami akan memberikan notifiasi ke dosen PA anda jika anda melakukan konsultasi,
                                        dosen juga dapat membuat grup yang berisi mahasiswa bimbingan dari dosen yang bersangkutan

                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>