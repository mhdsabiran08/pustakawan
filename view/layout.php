<!DOCTYPE html>
<html>
  <head>
    <title>Aplikasi Pustakawan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/image/icon.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <link href="assets/css/costum.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/datepicker/bootstrap-datetimepicker.min.css">

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/jquery-ui.js"></script>

  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="logo kiri">
              <h1><a href="index.php">Aplikasi Pustakawan</a></h1>
            </div>
          </div>

          <div class="col-md-3">
            <div class="navbar navbar-inverse" role="banner">
              <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                <ul class="nav navbar-nav">
                  <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo ucwords($_SESSION['nama_lengkap']); ?>&nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu animated fadeInUp">
                      <li><a href="engine/logout.php">Keluar</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
         </div>
      </div>
    </div>
  </div>

    <div class="page-content">

      <div class="row">
        <div class="col-md-2">
          <div class="sidebar content-box" style="display: block;">

            <ul class="nav">
              <?php if ($_SESSION['level'] == 1): ?>
                <li>
                  <a href="index.php?p=dashboard">
                    <i class="glyphicon glyphicon-home"></i> Beranda
                  </a>
                </li>
                <li>
                  <a href="index.php?p=admin/user/home">
                    <i class="glyphicon glyphicon-user"></i> Pengguna
                  </a>
                </li>
                <li>
                  <a href="index.php?p=admin/c-book/home">
                    <i class="glyphicon glyphicon-tag"></i> Kategori Buku
                  </a>
                </li>
              <?php endif; ?>
              <?php if ($_SESSION['level'] == 2): ?>
                <li>
                  <a href="index.php?p=dashboard">
                    <i class="glyphicon glyphicon-home"></i> Beranda
                  </a>
                </li>
                <li>
                  <a href="index.php?p=operator/member/home">
                    <i class="glyphicon glyphicon-user"></i> Anggota
                  </a>
                </li>
                <li>
                  <a href="index.php?p=operator/book/home">
                    <i class="glyphicon glyphicon-book"></i> Buku
                  </a>
                </li>
                <li>
                  <a href="index.php?p=operator/borrow/home">
                    <i class="glyphicon glyphicon-bookmark"></i> Peminjaman
                  </a>
                </li>
                <li>
                  <a href="index.php?p=operator/setting">
                    <i class="glyphicon glyphicon-cog"></i> Pengaturan
                  </a>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>

        <div class="col-md-10">

          <?php
            if(isset($_GET['p']))
            {
              $page = $_GET['p'];
            }
            else
            {
              $page = 'dashboard';
            }
            include 'view/page/'.$page.'.php';
          ?>

        </div>
      </div>
    </div>

    <footer>
      <div class="container">

        <div class="copy text-center">
          Copyright 2017 <a href='https://www.facebook.com/sidakcoder/' target="_blank">Sidak Coder</a>
        </div>

       </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>

    <script src="assets/datatables/js/jquery.dataTables.min.js"></script>

    <script src="assets/datatables/dataTables.bootstrap.js"></script>

    <script src="assets/js/tables.js"></script>

    <script>
      $(".link_to").click(function() {
        var url = $( this ).attr( "url" );
        window.location = url;
      });
    </script>

    <!-- Counter -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script>
      jQuery(document).ready(function( $ ) {
          $('.counter').counterUp({
              delay: 10,
              time: 1000
          });
      });
    </script>

    <!-- DatePicker -->
    <script src="assets/datepicker/moment.js"></script>
    <script src="assets/datepicker/bootstrap-datetimepicker.min.js"></script>

  </body>
</html>
