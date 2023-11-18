<!DOCTYPE html>
<html>

<head>
  <title>Pemilih</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #DCE2F4;
      font-family: 'Poppins', sans-serif;

    }

    #imageForm {
      background-color: white;
      padding: 20px;
      border-radius: 15px;
      width: 100%;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    @media (min-width: 768px) {
      #imageForm {
        width: 60%;
      }
    }

    .image-picker {
      display: flex;
      flex-direction: row;
      gap: 20px;
      justify-content: center;
      align-items: center;
    }

    .image-picker label {
      display: flex;
      flex-direction: column;
      align-items: center;
      cursor: pointer;
      border: 2px solid #D9D9D9;
      padding: 10px;
      border-radius: 5px;
      text-align: center;
    }

    .image-picker img {
      max-width: 150px;
      max-height: 200px;
    }

    .image-picker input[type="radio"] {
      display: none;
    }

    .logout {
      background-color: #4B60AE;
      height: 45px;
      width: 100px;
    }

    .logout a {
      color: white;
      text-decoration: none;
    }

    .btn-pilih {
      width: 260px;
      background-color: #4B60AE;
      font-weight: 500;
    }

    .navbar-brand {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">PilihCepat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <button class="btn btn-primary logout nav-item nav-link mt-2">
            <a class="" href="<?= base_url('/logout') ?>">Logout <span class="sr-only">(current)</span></a>
          </button>
        </div>
      </div>
    </nav>
    <div class="success mt-5" id="imageForm">
      <h3 class="text-center mb-3">Pemilu Desa Konoha</h3>
      <img class="mt-5 mb-5" src="<?= base_url('assets/img/Vector.png') ?>" alt="">
      <h5 class="text-center mb-3">Terimakasih telah menggunakan hak pilih anda</h5>
      <h6 class="text-center mb-5">Akan dilakukan redirect dalam 5 detik</h6>
    </div>
  </div>
  <script>
    var timer = setTimeout(function() {
      window.location = '<?= base_url('/logout') ?>'
    }, 5000);
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>