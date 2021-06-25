<!DOCTYPE html>
<html lang="en">
<head>
  <title>KESWAN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<div class="container-fluid">
  <h1>Sistem Informasi Pelayanan Kesehatan Hewan</h1>
  <p>Silahkan login terlebih dahulu</p>
  <br>
  <br>
<div class="row">
  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="assets/img/admin.png" alt="Card image cap" width="200" height="180" >
        <div class="card-body">
          <h5 class="card-title">Admin</h5>
            <p class="card-text">Silahkan pilih admin untuk login sebagai admin</p>
              <br>
            <a class="btn btn-primary" href="admin/login.php">Login Admin</a>
        </div>
      </div>
  </div>
  <br>
  <br>
  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="assets/img/user.png" alt="Card image cap" width="200" height="180" >
        <div class="card-body">
          <h5 class="card-title">Pengguna</h5>
            <p class="card-text">Silahkan pilih pengguna untuk login sebagai pengguna</p>
              <br>
            <a class="btn btn-primary" href="user/login.php">Login Pengguna</a>
            <br><br><br>
            <p class="card-text">Belum Punya Akun ?</p>
            <a class="btn btn-primary" href="user/register.php">Register</a>
        </div>
      </div>
  </div>
  <br>
  <br>
  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="assets/img/petugas.png" alt="Card image cap" width="200" height="180" >
        <div class="card-body">
          <h5 class="card-title">Petugas</h5>
            <p class="card-text">Silahkan pilih petugas untuk login sebagai petugas</p>
              <br>
            <a class="btn btn-primary" href="petugas/login.php">Login Petugas</a>
        </div>
      </div>
  </div>      
  </div>
</div>
</body>
</html>
