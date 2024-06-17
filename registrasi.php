<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="botstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="container text-center mt-5">
        <h2>Registrasi</h2>
    <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <form action="ProsesRegistrasi.php" method="post">
            <div class="form-group">
              <label>NAMA</label>
              <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Anda">
            </div>
            <div class="form-group">
              <label>EMAIL</label>
              <input type="email" class="form-control" name="email" placeholder="Masukkan email Anda">
            </div>
            <div class="form-group">
              <label>ALAMAT</label>
              <input type="text" class="form-control" name="address" placeholder="Masukan Alamat Anda">
            </div>
            <div class="form-group">
              <label for="confirm-password">USERNAME</label>
              <input type="text" class="form-control" name="username" placeholder="Buat Username">
            </div>
            <div class="form-group">
              <label>PASSWORD</label>
              <input type="password" class="form-control" name="password" placeholder="Buat Password">
            </div>
            <div class="form-group">>
            <label for="exampleSelect1">Role</label>
                <select class="form-control" name="role">
                  <option>Admin</option>
                  <option>Peminjam</option>
                </select>
              </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
            <button type="reset" class="btn btn-danger">Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>  
    </div>
</div>
<script src="botstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>
    body
    {
        background-image: url(image/books-bookstore-book-reading-159711.jpeg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    h2
    {
        color: white;
    }
</style>