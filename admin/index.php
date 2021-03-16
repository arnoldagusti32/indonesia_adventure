<?php
session_start();
$koneksi = new mysqli("sql308.epizy.com", "epiz_27456010", "k6mTdJdqfC", "epiz_27456010_indonesiaadventure");

if ($_SESSION['admin'] || $_SESSION['user']) {

?>
  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Admin Indonesia Adventure</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
  </head>

  <body>
    <div id="wrapper">
      <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <font size=+0.9>
              <font color=#00FF7F>Sistem Informasi </font> Pariwisata
          </a> </font>
        </div>
        <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 25px;"> Indonesia Adventure &nbsp;
      </nav>
      <!-- /. NAV TOP  -->
      <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li class="text-center">
              <img src="img/logo.jpg" class="user-image img-responsive" />
            </li>
            <li>
              <a href="index.php"><i class="fa fa-desktop fa-3x"></i> Beranda</a>
            </li>
            <li>
              <a href="?page=provinsi"><i class="fa fa-location-arrow fa-3x"></i> Provinsi</a>
            </li>
            <li>
              <a href="?page=kota"><i class="fa fa-map-marker fa-3x"></i> Kota</a>
            </li>
            <li>
              <a href="?page=wisata"><i class="fa fa-tags fa-3x"></i> Kategori Wisata</a>
            </li>
            <li>
              <a href="?page=objk_wisata"><i class="fa fa-globe fa-3x"></i> Objek Wisata</a>
            </li>
            <li>
              <a href="?page=event"><i class="fa fa-calendar fa-3x"></i> Event</a>
            </li>
            <li>
              <a href="?page=hotel"><i class="fa fa-home fa-3x"></i> Hotel</a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-power-off fa-3x"></i> Logout</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- /. NAV SIDE  -->
      <div id="page-wrapper">
        <div id="page-inner">
          <div class="row">
            <div class="col-md-12">
              <?php
              $page = @$_GET['page'];
              $aksi = @$_GET['aksi'];

              if ($page == "provinsi") {
                if ($aksi == "") {
                  include "page/provinsi.php";
                } elseif ($aksi == "tambah") {
                  include "page/provinsi_tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/provinsi_ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/provinsi_hapus.php";
                }
              } elseif ($page == "kota") {
                if ($aksi == "") {
                  include "page/kota.php";
                } elseif ($aksi == "tambah") {
                  include "page/kota_tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/kota_ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/kota_hapus.php";
                }
              } elseif ($page == "wisata") {
                if ($aksi == "") {
                  include "page/wisata.php";
                } elseif ($aksi == "tambah") {
                  include "page/wisata_tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/wisata_ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/wisata_hapus.php";
                }
              } elseif ($page == "objk_wisata") {
                if ($aksi == "") {
                  include "page/objk_wisata.php";
                } elseif ($aksi == "tambah") {
                  include "page/objk_wisata_tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/objk_wisata_ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/objk_wisata_hapus.php";
                }
              } elseif ($page == "event") {
                if ($aksi == "") {
                  include "page/event.php";
                } elseif ($aksi == "tambah") {
                  include "page/event_tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/event_ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/event_hapus.php";
                }
              } elseif ($page == "hotel") {
                if ($aksi == "") {
                  include "page/hotel.php";
                } elseif ($aksi == "tambah") {
                  include "page/hotel_tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/hotel_ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/hotel_hapus.php";
                }
              } else {
                include "page/beranda.php";
              }

              ?>
            </div>
          </div>
          <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
      </div>
      <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
      $(document).ready(function() {
        $('#dataTables-example').dataTable();
      });
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


  </body>

  </html>

<?php

} else {
  header("location:login.php");
}
?>