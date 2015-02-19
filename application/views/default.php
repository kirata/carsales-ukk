<!doctype html>
<html class="no-js" lang="">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Aplikasi Penjualan Mobil">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->

    <title>Carsales | Aplikasi Penjualan Mobil</title>

    <!-- page level plugin styles -->
    <link rel="stylesheet" href="<?=base_url('assets')?>/vendor/offline/theme.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/vendor/pace/theme.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/vendor/toastr/toastr.css">
    <!-- /page level plugin styles -->

    <!-- core styles -->
    <link rel="stylesheet" href="<?=base_url('assets')?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/animate.min.css">
    <!-- /core styles -->

    <!-- template styles -->
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/skins/palette.3.css" id="skin">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/main.css">
    <!-- template styles -->

    <link rel="stylesheet" href="<?=base_url('assets')?>/css/panel.css">

    <!-- load modernizer -->
    <script src="<?=base_url('assets')?>/vendor/modernizr.js"></script>
</head>

<!-- body -->
<body>
    <div class="app" data-sidebar="locked">
        <!-- top header -->
        <?php $this->load->view('layouts/navbar'); ?>
        <!-- /top header -->

        <section class="layout">
            <!-- sidebar menu -->
            <?php $this->load->view('layouts/sidemenu'); ?>
            <!-- /sidebar menu -->

            <!-- main content -->
                <?php 
                    if ($this->uri->segment(3)) {
                        $this->load->view('pages/'.$this->uri->segment(3));
                    }
                    else{
                        $this->load->view('pages/home');
                    }
                ?>    
            <!-- /main content -->

        </section>

    </div>

    <!-- core scripts -->
    <script src="<?=base_url('assets')?>/vendor/jquery-1.11.1.min.js"></script>
    <script src="<?=base_url('assets')?>/bootstrap/js/bootstrap.js"></script>
    <script src="<?=base_url('assets')?>/vendor/jquery.easing.min.js"></script>
    <script src="<?=base_url('assets')?>/vendor/jquery.placeholder.js"></script>
    <!-- /core scripts -->

    <!-- page level scripts -->
    <script src="<?=base_url('assets')?>/vendor/moment.js"></script>
    <script src="<?=base_url('assets')?>/vendor/skycons.js"></script>
    <script src="<?=base_url('assets')?>/vendor/jquery.blockUI.js"></script>
    <script src="<?=base_url('assets')?>/vendor/raphael.min.js"></script>
    <script src="<?=base_url('assets')?>/vendor/morris/morris.js"></script>
    <script src="<?=base_url('assets')?>/vendor/jquery.slimscroll.js"></script>
    <script src="<?=base_url('assets')?>/vendor/bxslider/jquery.bxslider.min.js"></script>
    <script src="<?=base_url('assets')?>/vendor/offline/offline.min.js"></script>
    <script src="<?=base_url('assets')?>/vendor/pace/pace.min.js"></script>
    <script src="<?=base_url('assets')?>/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=base_url('assets')?>/vendor/toastr/toastr.js"></script>
    <!-- /page level scripts -->

    <!-- template scripts -->
    <script src="<?=base_url('assets')?>/js/off-canvas.js"></script>
    <script src="<?=base_url('assets')?>/js/main.js"></script>
    <!-- /template scripts -->

    <script src="<?=base_url('assets')?>/js/panel.js"></script>

</body>
<!-- /body -->
</html>
