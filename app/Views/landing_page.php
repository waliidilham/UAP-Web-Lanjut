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
                    <a href="<?= base_url('/login')?>" style="width:150px;" class="btn btn-outline-light btn-lg" >Login</a>
                  
                </div>
            </div>
        </div>
        <div class="container" style=" margin-top:90px; margin-left:170px;" >
            <div class="row">
                <div class="col-7">
                 <img src="<?= base_url('assets/img/Voting-pana.png')?> " alt="">
                </div>
                <div class="col">
                    <div class="title">
                        <div class="card-body">
                            <h1 class="card-title text-white">E-VOTING</h1>
                            <p class="h3 card-text text-secondary">Lakukan dengan Mudah</p>
                            <p class="h3 card-text text-secondary" style="margin-top:-12px;">Menilih dengan Cepat</p>
                            <a href="#" class="btn text-grey btn-success"  style="margin-top:4px;">Pilih Sekarang</a>
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

<section class="page" id="portfolio">
            <div class="text-center">
                 <div class="portfolio-caption-subheading text-muted">Jadi Gampang</div>
                  <div class="portfolio-caption-heading">Voting Dengan E-Voting</div> 
            </div>
            <br>
            
            
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid"  src="<?= base_url('assets/img/voting2.jpeg')?> " alt="">
                            </a>
                            <div class="portfolio-caption">
                                <!-- <div class="portfolio-caption-heading">menghemat biaya pencetakan surat suara</div> -->
                                <div class="portfolio-caption-subheading text-muted">menghemat biaya pencetakan surat suara</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid"  src="<?= base_url('assets/img/voting4.jpeg')?> " alt="">
                            </a>
                            <div class="portfolio-caption">
                                <!-- <div class="portfolio-caption-heading">menghemat biaya pencetakan surat suara</div> -->
                                <div class="portfolio-caption-subheading text-muted">perhitungan suara akan lebih cepat</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid"  src="<?= base_url('assets/img/voting5.jpeg')?> " alt="">
                            </a>
                            <div class="portfolio-caption">
                                <!-- <div class="portfolio-caption-heading">pemungutan suara lebih sederhana</div> -->
                                <div class="portfolio-caption-subheading text-muted">pemungutan suara lebih sederhana</div>
                            </div>
                        </div>
                    </div>
                </div>  
            <!-- </div>     -->
                        
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
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/tentang1.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2019</h4>
                                <h4 class="subheading">Wijayanto Pradana</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Wijayanto Pradana merupakan Mantan Kepala Desa Tahun 2019 menjabat selama 1 tahun dan memiliki kinerja yang sangat bagus dalam mengelola desa</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/tentang2.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2020</h4>
                                <h4 class="subheading">Sukma Prajandanu</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Sukma Prajandanu merupakan Mantan Kepala Desa Tahun 2020 menjabat selama 1 tahun dan memiliki kinerja yang sangat disukai oleh para warga karna sangat ramah dan memiliki wibawa yang sangat bagus</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/tentang3.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2021</h4>
                                <h4 class="subheading">Andika Dani</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Andika Dani merupakan Mantan Kepala Desa Tahun 2021 menjabat selama 1 tahun dan memiliki  </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/tentang4.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2022</h4>
                                <h4 class="subheading">Abdan Syakuro</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"> Abdan Syakuro merupakan Mantan Kepala Desa Tahun 2022 menjabat selama 1 tahun dan </p></div>
                        </div>
                    </li>
                    
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
