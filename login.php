<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="botstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="container text-center mt-5">
        <h2>Login</h2>
    <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <form action="Proseslogin.php" method="post">
            <div class="form-group">
              <label for="confirm-password">USERNAME</label>
              <input type="text" class="form-control" name="username" placeholder="Masukan Username">
            </div>
            <div class="form-group">
              <label>PASSWORD</label>
              <input type="password" class="form-control" name="password" placeholder="Masukan Password">
            </div>
            <label for="exampleSelect1">Role</label>
                <select class="form-control" name="role">
                  <option value="admin">Admin</option>
                  <option value="peminjam">Peminjam</option>
                  <option value="petugas">Petugas</option>
                </select>
              </div>
            <button type="submit" class="btn btn-primary">Login</button>
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