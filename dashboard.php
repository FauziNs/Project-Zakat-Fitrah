<?php
  include('koneksi.php');
  include('header.php');
  $tot_muzakki = mysqli_query($koneksi,"SELECT COUNT(*) AS total_muzakki FROM muzakki");
  $tot_muzakki = mysqli_fetch_assoc($tot_muzakki);
  $mustahik = mysqli_query($koneksi, "SELECT COUNT(*) AS total_mustahik FROM kategori_mustahik");
  $mustahik = mysqli_fetch_assoc($mustahik);
  $tot_bayar = mysqli_query($koneksi, "SELECT COUNT(*) AS total_bayar FROM bayarzakat");
  $tot_bayar = mysqli_fetch_assoc($tot_bayar);
  $beras = mysqli_query($koneksi,"SELECT SUM(bayar_beras) AS total_beras FROM bayarzakat" );
  $beras = mysqli_fetch_assoc($beras);
  $uang  = mysqli_query($koneksi,"SELECT SUM(bayar_uang) AS total_uang FROM bayarzakat" );
  $uang  = mysqli_fetch_assoc($uang);
?>
<!-- partial -->
<html>
  <body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <style>
  .row {
    margin-bottom: 15px;
  }
</style>

  
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="images/mulik.png" alt="logo" width="80" height="50"/>
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.png" alt="logo"/></a>
          </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Selamat Datang, Zakat Fitrah</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
              <p class="card-title">Total KK</p>
            </div>
            <div class="d-flex align-items-center flex-wrap mb-3">
              <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 me-3"><?php echo $tot_muzakki['total_muzakki']; ?></h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
              <p class="card-title">Kategori Mustahik</p>
            </div>
            <div class="d-flex align-items-center flex-wrap mb-3">
              <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 me-3"><?php echo $mustahik['total_mustahik']; ?> Org</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
              <p class="card-title">Muzakki</p>
            </div>
            <div class="d-flex align-items-center flex-wrap mb-3">
              <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 me-3"><?php echo $tot_bayar['total_bayar']; ?> Org</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
              <p class="card-title">Total Beras Terkumpul</p>
            </div>
            <div class="d-flex align-items-center flex-wrap mb-3">
              <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 me-3"><?php echo $beras['total_beras']; ?> Kg</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
              <p class="card-title">Total Uang Terkumpul</p>
            </div>
            <div class="d-flex align-items-center flex-wrap mb-3">
              <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 me-3">Rp. <?php echo number_format($uang['total_uang'], 0, ",", "."); ?></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

          <!-- row end -->
          </body>
</html>