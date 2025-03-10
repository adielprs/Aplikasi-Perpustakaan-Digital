<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="botstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title> Dashboard DataTable</title>
</head>

<body>
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span>
                <span>Dashboard</span>
            </h3>
            <label for="sidebar-toggle" class="ti-menu"></label>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="tambahbuku.php"><span class="ti-folder">
                </span><span>buku</span></a></li>
                <li><a href="viewpetugas.php"><span class="ti-folder">
                </span><span>Petugas</span></a></li>
                <li><a href="logout.php"><span class="ti-folder">
                </span><span>lougout</span></a></li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header class="header">
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="search">

            </div>
            <div class="social-icons">
                <span class="ti-bell"></span>
                <span class="ti-comment"></span>
            </div>

            <?php
        session_start();
        if ($_SESSION['role'] != 'admin') {
            header("Location: login.php");
            exit();
        }
        echo "Selamat datang, Admin " . $_SESSION['username'];
        ?>

        </header>

        <main class="main">
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <a href="tambahbuku.php" class="btn btn-primary">+ Tambah Buku</a>
                        <table class="mt-5">
                            <thead>
                                <tr>
                                    <th>ID BUKU</th>
                                    <th>JUDUL</th>
                                    <th>PENULIS</th>
                                    <th>PENERBIT</th>
                                    <th>TAHUN TERBIT</th>
                                    <th>OPSI</th>
                                </tr>
                            </thead>
                            <?php
                            include 'koneksi.php';
                            $query = "SELECT * FROM tbuku";
                            $result = mysqli_query($koneksi, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['id_buku']; ?></td>
                                        <td><?php echo $row['judul']; ?></td>
                                        <td><?php echo $row['penulis']; ?></td>
                                        <td><?php echo $row['penerbit']; ?></td>
                                        <td><?php echo $row['tahunterbit']; ?></td>
                                        <td>
                                        <a href="vieweditbuku.php?id=<?php echo $row['id_buku']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="hapusbuku.php?id=<?php echo $row['id_buku']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="botstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<style>
    :root {
        --main-color: #55c57a;
        --main-color-dark: #28b485;
        --text-grey: #8390A2;
    }


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
        list-style: none;
    }

    #sidebar-toggle {
        display: none;
    }

    .sidebar {
        height: 100%;
        width: 240px;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 100;
        background: var(--main-color);
        color: #fff;
        overflow-y: auto;
        transition: 500ms;
    }

    .sidebar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 60px;
        padding: 0rem 1rem;
    }

    .sidebar-menu {
        padding: 1rem;
    }

    .sidebar li {
        margin-bottom: 1.2rem;
    }

    .sidebar a {
        color: #fff;
        font-size: 0.8rem;
    }

    .sidebar a span:last-child {
        padding-left: .5rem;
    }

    #sidebar-toggle:checked~.sidebar {
        width: 60px;
    }

    #sidebar-toggle:checked~.sidebar .sidebar-header h3,
    #sidebar-toggle:checked~.sidebar li span:last-child {
        display: none;
    }

    #sidebar-toggle:checked~.sidebar .sidebar-header,
    #sidebar-toggle:checked~.sidebar li {
        display: flex;
        justify-content: center;
    }

    #sidebar-toggle:checked~.main-content {
        margin-left: 180px;
    }

    #sidebar-toggle:checked~.main-content header {
        left: 60px;
    }

    .social-icons {
        display: flex;
        align-items: center;
    }

    .social-icons span,
    .social-icons div {
        margin-left: 1.2rem;
    }

    .social-icons div {
        height: 40px;
        width: 40px;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .main-content {
        position: relative;
        margin-left: 240px;
        transition: margin-left 500ms;
    }

    .header {
        position: fixed;
        left: 240px;
        top: 0;
        z-index: 100;
        width: 82%;
        background: #fff;
        height: 60px;
        padding: 0rem 1rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #ccc;
        transition: left 500ms;

    }

    .search-wrapper {
        display: flex;
        align-items: center;
    }

    .search-wrapper input {
        border: 0;
        outline: 0;
        padding: 1rem;
        height: 38px;
    }

    .main {
        margin-top: 60px;
        min-height: 90vh;
        padding: 1rem;
        background: #f1f5f9;
    }

    .recent {
        margin-top: 3rem;
    }

    .activity-card {
        border-radius: 7px;
    }

    .activity-card table {
        border-collapse: collapse;
        width: 100%;
    }

    .activity-card thead {
        background: #efefef;
        text-align: left;
    }

    th,
    td {
        font-size: .9rem;
        padding: 1rem 1rem;
        color: var(--color-grey);
    }

    td {
        font-size: .85rem;
    }

    .badge {
        padding: .2rem 1rem;
        border-radius: 20px;
        font-weight: 700;
    }

    .badge.success {
        background: #DEF7EC;
        color: var(--main-color);
    }

    .badge.warning {
        background: #F0F6B2;
        color: orange;
    }

    @media only screen and (max-width:1200px) {
        .sidebar {
            width: 60px;
        }

        .sidebar .sidebar-header h3,
        .sidebar li span:last-child {
            display: none;
        }

        .sidebar .sidebar-header,
        .sidebar li {
            display: flex;
            justify-content: center;
        }

        .main-content {
            margin-left: 180px;
        }

        .main-content header {
            left: 60px;
        }
    }
</style>