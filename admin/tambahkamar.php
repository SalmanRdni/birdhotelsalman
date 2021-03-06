<?php
    session_start();
    include 'koneksi.php';

    // jika tidak ada session pelanggan (belum login)
    if (!isset($_SESSION['status_login']) OR empty($_SESSION['status_login']))
    { 
    echo '<script>alert("Silahkan Login")</script>';
    echo '<script>window.location="/reservasisalman/index.php"</script>';
    exit();
    } 
    $data = mysqli_query($koneksi,"select * from kamar");
    while($d = mysqli_fetch_array($data)){
    }
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Bird Hotel</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="icon" href="images/logo3.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title"></h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bed"></i><a href="datakamar.php">Kamar</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="datapengguna.php">Pengguna</a></li>
                            <li><i class="fa fa-home"></i><a href="fasilitas.php">Fasilitas</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Transaksi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-envelope-open"></i><a href="transaksi.php">Confirm</a></li>
                        </ul>
                    </li>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="images/<?php echo $_SESSION['gambar']; ?>" class="rounded-circle me-lg-2" alt="" style="width: 40px; height: 40px;margin-left: 15px;">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>  
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Data</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="datakamar.php">Kembali</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

       <!--  -->
                <div style=" margin-bottom: 100px; width: 50%;" class="container">
                    <h2 class="alert alert-warning text-center mt-5">TAMBAH KAMAR</h2>
                        <div class="card">
                            <div class="card-header text-center">
                            </div>
                <div class="card-body">
                <div style="margin-left:10px; " class="row mt-2 mx-auto">
                <form method="post" action="kamarproses.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id" value="">
                    </div>
                    <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Jenis Kamar</label>
                        <input type="text" name="jenis" class="form-control" placeholder="jenis kamar" id="jenis" required="required" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="des">Jumlah Kamar</label>
                        <input type="text" name="jumlah" class="form-control" placeholder="jumlah" id="jumlah" required="required" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="des">Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="harga kamar" id="harga" required="required" autocomplete="off">
                    </div>
                </div>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="gambar">
                        </div>
                    </div>
                </div><br>
                <button type="submit" class="btn btn-success" name="submit">TAMBAH</button>
                <button type="reset" class="btn btn-danger">RESET</button>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?= base_url('assets/vendors/popper.js/dist/umd/popper.min.js');?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/main.js');?>"></script>
</body>
</html>