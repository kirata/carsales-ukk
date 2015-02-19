<!doctype html>
<html class="signin no-js" lang="">


<!-- Mirrored from cameo.nyasha.me/signin.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 09 Sep 2014 22:02:52 GMT -->
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->

    <title>Masuk | CarsalesAPP</title>

    <!-- page level plugin styles -->
    <link rel="stylesheet" href="<?=base_url('assets')?>/vendor/offline/theme.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/vendor/pace/theme.css">
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

    <!-- load modernizer -->
    <script src="<?=base_url('assets')?>/vendor/modernizr.js"></script>
</head>

<body class="bg-color center-wrapper">
    <div class="center-content">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <section class="panel panel-default">
                    <header class="panel-heading"><i class="fa fa-lock"></i>&nbsp;CarsalesAPP : Masuk <label for="error" style="font-size: 10px;color:red;float:right;"><?=$this->session->flashdata('mssg');?></label></header>
                    <div class="bg-white user pd-md">
                        <?php echo form_open('login/authenticating',array('role'=>'form')); ?>
                            <input type="text" name="username" class="form-control mg-b-sm" placeholder="Username" autofocus>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <label class="checkbox pull-left">
                                <input type="checkbox" value="remember-me" name="remember">Ingat Saya
                            </label>
                            <div class="text-right mg-b-sm mg-t-sm">
                                <a href="javascript:;">Lupa Password?</a>
                            </div>
                            <button class="btn btn-default btn-block" type="submit">Masuk</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
<!-- /body -->
</html>
