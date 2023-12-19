<?php
$this->extend('admin/layout/app');
$this->section('content');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> Data Pemilih</h1>

    <div class="row">

        <div class="col-lg-9">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pemilih</h6>
                </div>
                <div class="card-body">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pemilih</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= url_to('register') ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="form-group">
                                            <label for="namapemilih" class="col-form-label">Username</label>
                                            <div class="">
                                                <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="NIK" value="<?= old('username') ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="emailpemilih" class="col-form-label">Email</label>
                                            <div class="">
                                                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="passwordpemilih" class="col-form-label">Password</label>
                                            <div class="">
                                                <input name="password" type="password" class="form-control" id="passwordpemilih" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label class="col-form-label">Tempat Pemungutan Suara</label>
                                            <select class="form-control" aria-label="Default select example" name="id_tps">
                                                <option value="" selected disabled>Pilih TPS</option>
                                                <?php
                                                foreach ($tps as $item) {
                                                ?>
                                                    <option value="<?= $item['id'] ?>"><?= $item['nama_tps'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" name="submit" value="Tambah Data">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped" style="margin-top: 20px;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">TPS</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pemilih as $pemilih) {
                            ?>
                                <tr>
                                    <th class="align-middle" scope="row"><?= $no++ ?></th>
                                    <td class="align-middle"><?= $pemilih['username'] ?></td>
                                    <td class="align-middle"><?= $pemilih['email'] ?></td>
                                    <td class="align-middle"><?= $pemilih['nama_tps'] ?></td>
                                    <td class="align-middle"><img src="<?= $pemilih['foto'] ?>" alt="" class="rounded-circle" style="width: 50px; height: 50px;"></td>
                                    <td style="display: flex;" class="align-middle">

                                        <a href="" class="btn btn-primary px-3 mb-0" data-toggle="modal" data-target="#modal<?= $pemilih['id']; ?>">Edit</a>
                                        <div class="modal fade" id="modal<?= $pemilih['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="<?= base_url('admin/pemilih/' . $pemilih['id']) ?>" enctype="multipart/form-data">
                                                            <input type="hidden" name="_method" value="PUT">
                                                            <?= csrf_field() ?>
                                                            <div class="text-center">
                                                                <img src="<?= $pemilih['foto'] ?>" class="rounded-circle img-fluid" style="object-fit: cover; width: 100px; height: 100px;">
                                                                <div class="scvgOW">
                                                                    <label class="d-flex flex-column align-items-center">
                                                                        <input name="fotopemilih" id="gambarInput" class="bMWDYw" type="file" style="opacity: 0;">
                                                                        <span class="btn btn-secondary">Pilih gambar</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="namapemilih" class="col-form-label">Username</label>
                                                                <div class="">
                                                                    <input type="text" name="usernamepemilih" class="form-control" id="namapemilih" value="<?= $pemilih['username'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="emailpemilih" class="col-form-label">Email</label>
                                                                <div class="">
                                                                    <input type="email" name="emailpemilih" class="form-control" id="emailpemilih" value="<?= $pemilih['email'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <button type="submit" name="save" class="btn btn-outline-success mt-2 mb-1">Save Changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="" class="btn btn-danger px-3 mb-0 ml-1" data-toggle="modal" data-target="#modall<?= $pemilih['id']; ?>">Delete</a>
                                        <div class="modal fade" id="modall<?= $pemilih['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <p>Apakah anda yakin menghapus user <?= $pemilih['username']; ?>?</p>
                                                        </div>

                                                        <div class="text-right">
                                                            <form action="<?= base_url('admin/user/' . $pemilih['id']) ?>" method="POST">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <?= csrf_field() ?>
                                                                <button class="btn btn-danger text-white mb-0" style="color: red;">
                                                                    <i class="fas fa-trash text-white me-2" aria-hidden="true"></i>
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>



        </div>

        <div class="col-lg-3">

            <div class="card shadow mb-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pemilih</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pemilih Total
                            <span class="badge bg-primary rounded-pill text-light"><?= count($countPemilih) ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Daerah Asal
                            <span class="badge bg-primary rounded-pill text-light"><?= count($countDaerahAsal) ?></span>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>