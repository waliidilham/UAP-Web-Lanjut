<?php
$this->extend('admin/layout/app');
$this->section('content');
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> Data Pemilih</h1>

    <div class="row">

        <div class="col-lg-12">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Petugas</h6>
                </div>
                <div class="card-body">


                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Asal</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">No KK</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Images</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>


                </div>
                <div style="margin-left:20px; margin-bottom:20px;">
                    <a href="#" class="btn btn-success">
                        Tambah Data
                    </a>
                </div>
            </div>



        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>