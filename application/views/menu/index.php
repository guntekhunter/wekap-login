                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <div class="row">

                        <div class="col-lg-6">
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php endif; ?>

                            <?= $this->session->flashdata('message'); ?>
                            <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">Tambahkan anggota</a>
                            <table class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Kelas</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php
                                    $queryNamaMahasiswa = "SELECT * 
                                        FROM user
                                        JOIN user_role  ON user.role_id = user_role.id
                                        WHERE user.role_id = 2
                                        AND user_role.id = 2
                                        ";
                                    $subMenu = $this->db->query($queryNamaMahasiswa)->result_array();
                                    ?>
                                    <?php foreach ($subMenu as $m) : ?>
                                        <tr>
                                            <?php if ($m['id_anggota'] == $user['id_anggota']) : ?>
                                                <th scope="row"><?= $i; ?></th>

                                                <td><?= $m['name']; ?></td>
                                                <td><?= $m['nim']; ?></td>
                                                <td><?= $m['kelas']; ?></td>
                                                <td>

                                                </td>
                                            <?php endif; ?>

                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Modal -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Menu Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php base_url('menu'); ?>" method="post">
                                <input class="form-check-input" type ='hidden' id='id_anggota' name='id_anggota' value="<?= $user['id_anggota'] ?>">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <select name="name" id="name" class="form-control">
                                            <option value="">--silahkan pilih mahasiswa bimbingan--</option>
                                            <?php foreach ($wadaw as $n) : ?>
                                                <?php if ($n['role_id'] == 2 && $user['id_anggota'] != $n['id_anggota']) { ?>
                                                    <option value="<?= $n['id']; ?>"><?= $n['name']; ?></option>
                                                <?php }; ?>
                                            <?php endforeach; ?>


                                        </select>


                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>