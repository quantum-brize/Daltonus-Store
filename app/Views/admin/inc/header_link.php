<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>/assets_admin/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="<?=base_url()?>/assets_admin/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?=base_url()?>/assets_admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="<?=base_url()?>/assets_admin/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="<?=base_url()?>/assets_admin/css/app.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>/assets_admin/css/custom.min.css" rel="stylesheet" type="text/css">
    <?require_once(APPPATH . 'views/inc/main_css.php');?>
    <?php
        if(!empty($header_asset_link)){
            foreach($header_asset_link as $link){
                echo "<link href='".base_url().$link."' rel='stylesheet' type='text/css'>";
            }
        }

        if(!empty($header_link)){
            foreach($header_link as $link){
                require_once(APPPATH . 'views/admin/inc/css/'.$link);
            }
        }
    ?>
    <style>
        #alert {
            position: fixed;
            top: 10px;
            z-index: 10000;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            left: 0px;
        }
    </style>

</head>

<body>
<div id="alert">

</div>