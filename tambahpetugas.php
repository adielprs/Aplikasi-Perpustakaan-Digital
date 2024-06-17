<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="botstrap/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  
  <h2 class="text-center">Tambah Petugas</h2>
  <form method="post" action="ProsesRegistrasi.php">
    <div class="card">
      <div class="row">
        <div class="col-2">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
        </div>
        <div class="col-10">
          <input type="text" name="name" class="form-control" required><br>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="row">
        <div class="col-2">
          <label for="exampleInputEmail1" class="form-label">Email</label>
        </div>
        <div class="col-10">
          <input type="email" name="email" class="form-control" required><br>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="row">
        <div class="col-2">
          <label for="exampleInputEmail1" class="form-label">Alamat</label>
        </div>
        <div class="col-10">
          <input type="text" name="address" class="form-control" required><br>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="row">
        <div class="col-2">
          <label for="exampleInputEmail1" class="form-label">Username</label>
        </div>
        <div class="col-10">
          <input type="text" name="username" class="form-control" required><br>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="row">
        <div class="col-2">
          <label for="exampleInputEmail1" class="form-label">Password</label>
        </div>
        <div class="col-10">
          <input type="password" name="password" class="form-control" required><br>
        </div>
      </div>
    </div>

    <div class="card">
    <div class="row">
        <label for="exampleSelect1">Role</label>
        <select class="form-control" name="role">
        <option value="petugas">Petugas</option>
        </select>
    </div> 
      </div>
    </div>

    

    <div class="tombol">
      <button class="btn btn-primary">Tambah</button>
      <a href="admindashbord.php" class="btn btn-danger"><i class='bx bx-arrow-back'></i> Kembali</a>
    </div>
  </form>
  <script src="botstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<style>
  .card {
        margin-top: 50px;
        margin-left: 250px;
        width: 900px;
    }
    .tombol
    {
        margin: 20px 0px 0px 250px;
    }
</style>