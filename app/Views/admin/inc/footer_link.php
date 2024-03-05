    <!-- JAVASCRIPT -->
    <script src="<?=base_url()?>/assets_admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>/assets_admin/libs/simplebar/simplebar.min.js"></script>
    <script src="<?=base_url()?>/assets_admin/libs/node-waves/waves.min.js"></script>
    <script src="<?=base_url()?>/assets_admin/libs/feather-icons/feather.min.js"></script>
    <script src="<?=base_url()?>/assets_admin/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?=base_url()?>/assets_admin/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="<?=base_url()?>/assets_admin/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="<?=base_url()?>/assets_admin/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="<?=base_url()?>/assets_admin/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="<?=base_url()?>/assets_admin/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="<?=base_url()?>/assets_admin/js/pages/dashboard-ecommerce.init.js"></script>
    
    <!-- App js -->
    
    <script src="<?=base_url()?>/assets_admin/js/app.js"></script>
    <!-- jQuery from CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <?php require_once(APPPATH . 'views/inc/main_js.php');?>

    <?php
        if(!empty($footer_asset_link)){
            foreach($footer_asset_link as $link){
                echo "<script src='".base_url().$link."'></script>";
            }
        }
        if(!empty($footer_link)){
            foreach($footer_link as $link){
                require_once(APPPATH . 'views/admin/inc/js/'.$link);
            }
        }
    ?>

</body>

</html>