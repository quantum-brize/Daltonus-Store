<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-footer="dark">

<head>
	<meta charset="utf-8" />
	<title>Index | Toner eCommerce + Admin HTML Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="Toner - eCommerce + Admin HTML Template Build with HTML, React, Laravel, Nodejs"
		name="description" />
	<meta content="Themesbrand" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?=base_url()?>public/assets/images/favicon-1.ico" />

	<!--Swiper slider css-->
	<link href="<?=base_url()?>public/assets/libs/swiper/swiper-bundle.min-1.css" rel="stylesheet" type="" />

	<!-- Bootstrap Css -->
	<link href="<?=base_url()?>public/assets/css/bootstrap.min-1.css" rel="stylesheet" type="" />
	<!-- Icons Css -->
	<link href="<?=base_url()?>public/assets/css/icons.min-1.css" rel="stylesheet" type="" />
	<!-- App Css-->
	<link href="<?=base_url()?>public/assets/css/app.min-1.css" rel="stylesheet" type="" />
	<!-- custom Css-->
	<link href="<?=base_url()?>public/assets/css/custom.min-1.css" rel="stylesheet" type="" />

	 <!-- Include the Toastify CSS file -->
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

	<!-- Icons library -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<!-- Include the Toastify JavaScript file -->
	<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	  <?php
    if (!empty ($header_asset_link)) {
        foreach ($header_asset_link as $link) {
            echo "<link href='" . base_url() . 'public/' . $link . "' rel='stylesheet' type='text/css'>";
        }
    }

    if (!empty ($header_link)) {
        foreach ($header_link as $link) {
            require_once ('css/' . $link);
        }
    }
    ?>
</head>