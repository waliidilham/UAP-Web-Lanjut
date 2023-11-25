<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Landing page</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="<?= base_url('assets/css/styless.css') ?>">

</head>

<body>
    <div class="wrapper">

        <div class="container" style="margin-left:240px; margin-top:80px;">
            <div class="row">
                <div class="col-8">
                    <p class="text-white h2">PILIH CEPAT</p>
                </div>
                <div class="col">
                    <a href="<?= base_url('/login') ?>" style="width:150px;" class="btn btn-outline-light btn-lg">Login</a>

                </div>
            </div>
        </div>
        <div class="container" style=" margin-top:90px; margin-left:170px;">
            <div class="row">
                <div class="col-7">
                    <img src="<?= base_url('assets/img/Voting-pana.png') ?> " alt="">
                </div>
                <div class="col">
                    <div class="title">
                        <div class="card-body">
                            <h1 class="card-title text-white">E-VOTING</h1>
                            <p class="h3 card-text text-secondary">Lakukan dengan Mudah</p>
                            <p class="h3 card-text text-secondary" style="margin-top:-12px;">Menilih dengan Cepat</p>
                            <a href="#" class="btn text-grey btn-success" style="margin-top:4px;">Pilih Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>

        </div>
    </div>

    <div>
        <h1 class="text-center mt-5 mb-2">E-Voting</h1>
        <section class="features-icons text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-calculator m-auto text-primary"></i></div>
                            <h3>E-Voting Hemat Biaya</h3>
                            <p class="lead mb-0">Menghemat biaya pencetakan surat suara</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 mt-1">
                            <div class="features-icons-icon d-flex"><i class="bi-clock-history m-auto text-primary"></i></div>
                            <h3>Perhitungan Suara Instan</h3>
                            <p class="lead mb-0">Perhitungan suara akan lebih cepat</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3 mt-1">
                            <div class="features-icons-icon d-flex"><i class="bi-arrow-right-circle m-auto text-primary"></i></div>
                            <h3>Pemilihan yang Mudah</h3>
                            <p class="lead mb-0">Langkah Sederhana, Aksesibel</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section " id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tentang Kepala Desa</h2>
                    <br>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <ul class="timeline">
                    <?php
                    $is_inverted = false;

                    foreach ($calon as $calon) {
                        $timeline_class = $is_inverted ? 'timeline-inverted' : '';
                        $sekarang = new DateTime();

                        $tanggal_lahir = new DateTime($calon['tanggal_lahir']);

                        $age = $sekarang->diff($tanggal_lahir);

                    ?>
                        <li class="<?= $timeline_class ?>">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?= $calon['foto'] ?>" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?= $age->y ?> Tahun</h4>
                                    <h4 class="subheading"><?= $calon['nama'] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?= $calon['visi'] ?></p>
                                </div>
                            </div>
                        </li>
                    <?php
                        $is_inverted = !$is_inverted;
                    }
                    ?>
                    <!-- <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/tentang2.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2020</h4>
                                <h4 class="subheading">Sukma Prajandanu</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Sukma Prajandanu merupakan Mantan Kepala Desa Tahun 2020 menjabat selama 1 tahun dan memiliki kinerja yang sangat disukai oleh para warga karna sangat ramah dan memiliki wibawa yang sangat bagus</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/tentang3.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2021</h4>
                                <h4 class="subheading">Andika Dani</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Andika Dani merupakan Mantan Kepala Desa Tahun 2021 menjabat selama 1 tahun dan memiliki </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/tentang4.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2022</h4>
                                <h4 class="subheading">Abdan Syakuro</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"> Abdan Syakuro merupakan Mantan Kepala Desa Tahun 2022 menjabat selama 1 tahun dan </p>
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div>
        </section>

    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


</body>


</html>