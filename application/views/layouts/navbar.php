<header class="header header-fixed navbar">

            <div class="brand">
                <a href="javascript:;" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>

                <a href="<?php echo site_url(); ?>" class="navbar-brand">
                    <i class="fa fa-stop mg-r-sm"></i>
                    <span class="heading-font">
                        Carsales<b>APP</b> 
                    </span>
                </a>
            </div>
            <?php 
            if ($this->uri->segment(2)=="page") {
            ?>
            <?=form_open('app/search/belumtau',array('class'=>'navbar-form navbar-left hidden-xs','role'=>'search'))?>
            <div class="form-group">
            <button type="submit" class="btn no-border no-margin bg-none no-pd-l">
            <i class="fa fa-search"></i>
            </button>
            <input type="text" placeholder="Pencarian" class="form-control no-border no-padding search">
            </div>
            </form>
            <?php
            }
            else
            {

            }
            ?>

            <ul class="nav navbar-nav navbar-right off-right">
                <li class="quickmenu">
                    <a href="javascript:;" data-toggle="dropdown">
                        <label for="pengguna"><?=$nama_loggedin;?></label>
                        <i class="caret mg-l-xs hidden-xs no-margin"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                        <li>
                            <a href="profile.html">Pengaturan</a>
                        </li>
                        <li>
                            <a href="javascript:;">Bantuan ?</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo site_url('login/destroy') ?>">Keluar</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>