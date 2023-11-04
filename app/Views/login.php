<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>login</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    overflow: hidden;
  }

  .login-right {
    background-image: url('/assets/img/Picture1.png');
    background-size: cover;
    background-position: center;
    height: 99.8vh;
  }
</style>

<body>
  <section class="login-block">
    <div class="login-left ">
      <div class="row justify-content-center align-items-center ">
        <div class="col-md-6 login-sec">
          <div class="container">
            <h2 style="color: #4169E1;">Selamat Datang!</h2>
            <small> Masukkan nik dan password anda</small>
            <form action="<?= url_to('login') ?>" method="post">
              <?= csrf_field() ?>
              <div class="form-group">
                <br>
                <label for="nik" class="nik">NIK</label>
                <input type="text" class="form-control" name="login">
              </div>
              <div class="form-group">
                <label for="password" class="password">Password</label>
                <input type="password" class="form-control" name="password">
                <small>Format password adalah tanggal lahir</small>
                <br>
                <small style="color: #4169E1;">contoh : 2003-07-25</small>
              </div>
              <?= view('Myth\Auth\Views\_message_block') ?>
              <div class="d-grid gap-2 col-3 mx-auto">
                <button type="submit" class="btn btn-primary btn-user btn-block"><?= lang('Auth.loginAction') ?></button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 login-right"></div>
      </div>
    </div>
    </div>
  </section>
</body>

</html>