	<!-- JAVASCRIPT -->
	<script src="<?=base_url()?>public/assets/libs/bootstrap/js/bootstrap.bundle.min-1.js"></script>
	<script src="<?=base_url()?>public/assets/libs/simplebar/simplebar.min-1.js"></script>
	<script src="<?=base_url()?>public/assets/js/plugins-1.js"></script>
	<!-- isotope-layout -->
	<script src="<?=base_url()?>public/assets/libs/isotope-layout/isotope.pkgd.min.js"></script>
	<!--Swiper slider js-->
	<script src="<?=base_url()?>public/assets/libs/swiper/swiper-bundle.min-1.js"></script>
	<!-- Countdown js -->
	<script src="<?=base_url()?>public/assets/js/pages/coming-soon.init-1.js"></script>
	<script src="<?=base_url()?>public/assets/js/frontend/landing-index.init.js"></script>
	<script src="<?=base_url()?>public/assets/js/frontend/menu.init.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<?php
        if (!empty ($footer_asset_link)) {
            foreach ($footer_asset_link as $link) {
                echo "<script src='" . base_url() . 'public/' . $link . "'></script>";
            }
        }
        if (!empty ($footer_link)) {
            foreach ($footer_link as $link) {
                require_once ('js/' . $link);
            }
        }
    ?>

</body>

</html>