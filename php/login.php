<?php

session_start();

// jika sudah login, alihkan ke halaman list
if (isset($_SESSION['user'])) {
    header('Location: home.php');
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
  <link href="../assets/css/simplebar.css" rel="stylesheet" />
  <link href="../assets/css/perfect-scrollbar.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="../ssets/css/style.css" rel="stylesheet" />
  <link href="../assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />


  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/light-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />

  <title>E-Perpus-Login</title>
</head>

<body>
	<form method="post" name="form_login" id="form_login" action="proses-login.php" style="margin-top: 120px;">
		<!-- <table class="form">
			<tr>
				<td colspan="2">
					<h1 align="center">Login Petugas</h1>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" id="username" />
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" id="password" />
				</td>
			</tr>
			<tr style="height:10px"></tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="login" id="login" value="Login" class="btn btn-submit" />
				</td>
			</tr>
		</table> -->

		<div class="col-xl-6 mx-auto">
					<table class="form">
			<div class="card">
              <div class="card-body">
                <div class="border p-3 rounded">
                <h6 class="mb-0">Silahkan Login</h6>
                <hr/>
                <form class="row g-3">
                  <div class="col-12">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control"  name="password" id="password">
                  </div>
                  <div class="col-6">
                  </div>
                  <br><br>
                  <div class="col-12">
                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary" name="login" id="login" >Sign in</button>
                    </div>
                  </div>
                </form>
              </div>
              </div>
			  </table>
            </div>
	</form>
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
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="../assets/js/pace.min.js"></script>
  <!--app-->
  <script src="../assets/js/app.js"></script>

</body>
</html>
