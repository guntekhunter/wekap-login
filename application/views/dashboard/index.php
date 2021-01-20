<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row my-auto">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Mahasiswa Bimbingan</div>
                            <?php
                            $queryNamaMahasiswa = "SELECT * 
                                        FROM user
                                        JOIN user_role  ON user.role_id = user_role.id
                                        WHERE user.role_id = 2
                                        AND user_role.id = 2
                                        ";
                            $subMenu = $this->db->query($queryNamaMahasiswa)->result_array();
                            ?>
                            <?php $i = 1; ?>
                            <?php foreach ($subMenu as $m) : ?>
                                <?php if ($m['id_anggota'] == $user['id_anggota']) : ?>
                                    <?php $i++; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 pb-2"><?= $i - 1; ?></div>
                        </div>
                        <div class="col-auto ">
                            <h3><i class="fas fa-users"></i></h3>
                        </div>
                    </div>
                    <a href="<?= base_url('menu/index'); ?>" class="btn btn-success btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Lihat Data</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah pengguna</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 pb-2">
                                <?php
                                $user = $this->db->get('user')->result_array();
                                ?>
                                <?php $i = 1; ?>
                                <?php foreach ($user as $u) : ?>
                                    <?php if ($u['id']) : ?>

                                        <?php $i++; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 pb-2"><?= $i - 1; ?></div>
                            </div>
                        </div>
                        <div class="col-auto ">
                            <h3><i class="fas fa-users"></i></h3>
                        </div>
                    </div>
                    <a href="<?= base_url('menu/submenu'); ?>" class="btn btn-warning btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Lihat Data</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>