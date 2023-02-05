<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>NHS Carwash</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/styles/core.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/styles/icon-font.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/styles/style.css') ?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body class="login-page">

	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="<?= base_url('assets/vendors/images/login-page-img.png') ?>" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login To Carwashapp</h2>
						</div>
						<form method="post" action="<?= site_url('C_Login/login') ?>">
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" name="user_username" placeholder="Username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="user_password" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">


										<input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Sign In">


									</div>

								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?= base_url('assets/vendors/scripts/core.js') ?>"></script>
	<script src="<?= base_url('assets/vendors/scripts/script.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendors/scripts/process.js') ?>"></script>
	<script src="<?= base_url('assets/vendors/scripts/layout-settings.js') ?>"></script>
</body>

</html>