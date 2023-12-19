<?php
$this->extend('admin/layout/app');
$this->section('content');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> Data Calon</h1>

    <div class="row">

        <div class="col-lg-12">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Calon</h6>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Calon</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('admin/calon') ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                        <div class="text-center">
                                            <img src="" class="rounded-circle img-fluid" style="object-fit: cover; width: 80px; height: 80px;">
                                            <div class="scvgOW">
                                                <label class="d-flex flex-column align-items-center">
                                                    <input name="fotoCalon" id="gambarInput" class="bMWDYw" type="file" style="opacity: 0;">
                                                    <span class="btn btn-secondary">Pilih Foto Calon</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="namacalon" class="col-form-label">Nama Lengkap</label>
                                            <div class="">
                                                <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="fullname" placeholder="Nama Lengkap" value="<?= old('fullname') ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggalLahir" class="col-form-label">Tanggal Lahir</label>
                                            <div class="">
                                                <input type="date" name="tanggalLahir" class="form-control <?php if (session('errors.tanggalLahir')) : ?>is-invalid<?php endif ?>" name="tanggalLahir" value="<?= old('tanggalLahir') ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="visiCalon" class="col-form-label">Visi</label>
                                            <div class="">
                                                <textarea type="text" name="visiCalon" class="form-control" id="visiCalon"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="misiCalon" class="col-form-label">Misi</label>
                                            <div class="">
                                                <textarea type="text" name="misiCalon" class="form-control" id="visiCalon"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary">
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
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Visi</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($calon as $calon) {
                            ?>
                                <tr>
                                    <th class="align-middle" scope="row"><?= $no++ ?></th>
                                    <td class="align-middle"><?= $calon['nama'] ?></td>
                                    <td class="align-middle"><?= $calon['tanggal_lahir'] ?></td>
                                    <td class="align-middle"><?= $calon['visi'] ?></td>
                                    <td class="align-middle"><img src="<?= $calon['foto'] ?>" alt="" class="rounded-circle" style="width: 50px; height: 50px;"></td>
                                    <td style="display: flex;" class="align-middle">

                                        <a href="" class="btn btn-primary px-3 mb-0" data-toggle="modal" data-target="#modal<?= $calon['id']; ?>">Edit</a>
                                        <div class="modal fade" id="modal<?= $calon['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="<?= base_url('admin/calon/' . $calon['id']) ?>" enctype="multipart/form-data">
                                                            <input type="hidden" name="_method" value="PUT">
                                                            <?= csrf_field() ?>
                                                            <div class="text-center">
                                                                <img src="<?= $calon['foto'] ?>" class="rounded-circle img-fluid" style="object-fit: cover; width: 100px; height: 100px;">
                                                                <div class="scvgOW">
                                                                    <label class="d-flex flex-column align-items-center">
                                                                        <input name="fotoCalon" id="gambarInput" class="bMWDYw" type="file" style="opacity: 0;">
                                                                        <span class="btn btn-secondary">Pilih gambar</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="namacalon" class="col-form-label">Nama Lengkap</label>
                                                                <div class="">
                                                                    <input type="text" name="fullname" class="form-control" id="namacalon" value="<?= $calon['nama'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="emailcalon" class="col-form-label">Tanggal Lahir</label>
                                                                <div class="">
                                                                    <input type="date" name="tanggalLahir" class="form-control" id="emailcalon" value="<?= $calon['tanggal_lahir'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="visiCalon" class="col-form-label">Visi</label>
                                                                <div class="">
                                                                    <textarea type="text" name="visiCalon" class="form-control" id="visiCalon"><?= $calon['visi'] ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="misiCalon" class="col-form-label">Misi</label>
                                                                <div class="">
                                                                    <textarea type="text" name="misiCalon" class="form-control" id="visiCalon"><?= $calon['misi'] ?></textarea>
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

                                        <a href="" class="btn btn-danger px-3 mb-0 ml-1" data-toggle="modal" data-target="#modall<?= $calon['id']; ?>">Delete</a>
                                        <div class="modal fade" id="modall<?= $calon['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <p>Apakah anda yakin menghapus user <?= $calon['nama']; ?>?</p>
                                                        </div>

                                                        <div class="text-right">
                                                            <form action="<?= base_url('admin/calon/' . $calon['id']) ?>" method="POST">
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
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>