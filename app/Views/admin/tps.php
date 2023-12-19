<?php
$this->extend('admin/layout/app');
$this->section('content');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data TPS</h1>

  <div class="row">

    <div class="col-lg-12">

      <!-- Circle Buttons -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">TPS</h6>
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
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Data TPS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="<?= base_url('admin/tps') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="form-group">
                      <label for="namacalon" class="col-form-label">Nama TPS</label>
                      <div class="">
                        <input type="text" class="form-control <?php if (session('errors.tps')) : ?>is-invalid<?php endif ?>" name="nama_tps" placeholder="Nama TPS" value="<?= old('tps') ?>">
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
                <th scope="col">Nama TPS</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($tps as $tps) {
              ?>
                <tr>
                  <th class="align-middle" scope="row"><?= $no++ ?></th>
                  <td class="align-middle"><?= $tps['nama_tps'] ?></td>
                  <td style="display: flex;" class="align-middle">
                    <a href="" class="btn btn-primary px-3 mb-0" data-toggle="modal" data-target="#modal<?= $tps['id']; ?>">Edit</a>
                    <div class="modal fade" id="modal<?= $tps['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="<?= base_url('admin/tps/' . $tps['id']) ?>" enctype="multipart/form-data">
                              <input type="hidden" name="_method" value="PUT">
                              <?= csrf_field() ?>
                              <div class="form-group">
                                <label for="namacalon" class="col-form-label">Nama TPS</label>
                                <div class="">
                                  <input type="text" name="nama_tps" class="form-control" id="namacalon" value="<?= $tps['nama_tps'] ?>">
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

                    <a href="" class="btn btn-danger px-3 mb-0 ml-1" data-toggle="modal" data-target="#modall<?= $tps['id']; ?>">Delete</a>
                    <div class="modal fade" id="modall<?= $tps['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <p>Apakah anda yakin menghapus TPS <?= $tps['nama_tps']; ?>?</p>
                            </div>

                            <div class="text-right">
                              <form action="<?= base_url('admin/tps/' . $tps['id']) ?>" method="POST">
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