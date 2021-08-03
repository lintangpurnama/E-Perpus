<?php
include '../modul_kategori/proses-list-kategori.php';

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="../../assets/css/simplebar.css" rel="stylesheet" />
  <link href="../../assets/css/perfect-scrollbar.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="../../assets/css/style.css" rel="stylesheet" />
  <link href="../../assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
  <link href="../../assets/css/pace.min.css" rel="stylesheet" />


  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/light-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />

  <title>E-Perpus-Tambah-buku</title>
</head>
<body>
<div class="wrapper">
    <!--start top header-->
    <header class="top-header">
      <nav class="navbar navbar-expand">
        <div class="mobile-toggle-icon d-xl-none">
          <i class="bi bi-list"></i>
        </div>
        <div class="top-navbar d-none d-xl-block">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Dashboard</a>
            </li>

          </ul>
        </div>
        <div class="search-toggle-icon d-xl-none ms-auto">
          <i class="bi bi-search"></i>
        </div>
        <form class="searchbar d-none d-xl-flex ms-auto">
          <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
          <input class="form-control" type="text" placeholder="Type here to search">
          <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i
              class="bi bi-x-lg"></i></div>
        </form>
        <div class="top-navbar-right ms-3">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown dropdown-large">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="user-setting d-flex align-items-center gap-1">
                  <img src="assets/alfi.jpeg" class="user-img" alt="" width="110" height="110">
                  <div class="user-name d-none d-sm-block">Alfiani damayanti</div>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <img src="assets/alfi.jpeg" alt="" class="rounded-circle" width="60" height="60">
                      <div class="ms-3">
                        <h6 class="mb-0 dropdown-user-name">Alifani</h6>
                        <small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="https://www.instagram.com/alfianidamaiyanti/" target="_blank">
                    <div class="d-flex align-items-center">
                      <div class="setting-icon"><i class="bi bi-instagram"></i></div>
                      <div class="setting-text ms-3"><span>Instagram</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="https://wa.me/6282261186727" target="_blank">
                    <div class="d-flex align-items-center">
                      <div class="setting-icon"><i class="bi bi-whatsapp"></i></div>
                      <div class="setting-text ms-3"><span>Whatsapp</span></div>
                    </div>
                  </a>
                </li>
                <li>

                  <a class="dropdown-item" href="mailto:alfianidmynt17@gmail.com" target="_blank">
                    <div class="d-flex align-items-center">
                      <div class="setting-icon"><i class="bi bi-mailbox"></i></div>
                      <div class="setting-text ms-3"><span>Email</span></div>
                    </div>
                  </a>

                </li>
                <li>
                  <a class="dropdown-item" href="#" target="_blank">
                    <div class="d-flex align-items-center">
                      <div class="setting-icon"><i class="bi bi-pin-map-fill"></i></div>
                      <div class="setting-text ms-3"><span>Address</span></div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--end top header-->

    <!--start sidebar -->
    <aside class="sidebar-wrapper">
      <div class="iconmenu">
        <div class="nav-toggle-box">
          <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i
                class="bi bi-house-door-fill"></i></button>
          </li>
        </ul>
      </div>
      <div class="textmenu">
        <div class="brand-logo">
          <img src="assets/images/brand-logo-2.png" width="140" alt="" />
        </div>
        <div class="tab-content active">
          <div class="tab-pane fade active show" id="pills-dashboards">
            <div class="list-group list-group-flush">
              <div class="list-group-item">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-0">Perpustakaan</h5>
                </div>
                <small class="mb-0">Alifani</small>
              </div>
              <a href="../modul_kategori/list-kategori.php" class="list-group-item"><i class="bi bi-card-list"></i>Data Kategori</a>
              <a href="../modul_buku/list-buku.php" class="list-group-item"><i class="bi bi-book"></i>Data Buku</a>
              <a href="../modul_anggota/list-anggota.php" class="list-group-item"><i class="bi bi-file-earmark-person"></i>Data Anggota</a>
              <a href="../modul_peminjaman/pinjam-data.php" class="list-group-item"><i class="bi bi-file-earmark-person-fill"></i>Data Peminjam</a>
              <a href="../modul_pengembalian/list-pengembalian.php" class="list-group-item"><i class="bi bi-arrow-repeat"></i>Data Pengembalian</a>
              <a href="../logout.php" class="list-group-item"><i class="bi bi-arrow-bar-left"></i>Log out</a>
              
            </div>
          </div>
        </div>
    </aside>
    <!--start sidebar -->

    <!--start content-->
    <main class="page-content">
      <!--breadcrumb-->
      <!--end breadcrumb-->

            <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <h5 class="mb-0 mt-2">Daftar Buku</h5>
          </div>
          <div class="content">
            
          <form class="form-control mt-2"method="post" action="proses-tambah-buku.php" enctype="multipart/form-data">
                <p>Judul</p>
                <p><input type="text"  class="form-control" name="judul"></p>
                <p>
                	<select class="form-select" name="kategori">
                        <?php foreach ($data_kategori as $kategori) : ?>
                            <option value="<?php echo $kategori['kategori_id'] ?>"><?php echo $kategori['kategori_nama'] ?></option>
                        <?php endforeach ?>
                	</select>
                </p>

                <p>Deskripsi</p>
                <p><textarea name="deskripsi" class="form-control"></textarea></p>

                <p>Jumlah</p>
                <p><input type="number" class="form-control" name="jumlah"></p>

                <p>Cover</p>
                <p><input type="file" name="cover"></p>

                <p><input type="submit" class="btn btn-primary" value="Simpan"></p>
            </form>
        </div>
        </div>
      </div>

    </main>
    <!--end page main-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <div class="switcher-body">
      <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
          class="bi bi-paint-bucket me-0"></i></button>
      <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
        tabindex="-1" id="offcanvasScrolling">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <h6 class="mb-0">Theme Variation</h6>
          <hr>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
            <label class="form-check-label" for="LightTheme">Light</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
            <label class="form-check-label" for="DarkTheme">Dark</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
            <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
          </div>
          <hr>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DefaultTheme" value="option3"
              checked>
            <label class="form-check-label" for="DefaultTheme">Default Theme</label>
          </div>
        </div>
      </div>
    </div>
    <!--end switcher-->

  </div>


    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/simplebar.min.js"></script>
  <script src="../../assets/js/perfect-scrollbar.js"></script>
  <script src="../../assets/js/pace.min.js"></script>
  <!--app-->
  <script src="../../assets/js/app.js"></script>


</body>
</html>
