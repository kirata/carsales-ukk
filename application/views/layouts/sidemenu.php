<?php if ($level_loggedin=="Admin")
{//tempat menu admin
?>
<aside class="sidebar canvas-left">
    <!-- main navigation -->
    <nav class="main-navigation">
        <ul>
            <li class="">
                <a href="<?php echo site_url(); ?>">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="dropdown show-on-hover">
                <a href="javascript:;" data-toggle="dropdown">
                    <i class="fa fa-ellipsis-h"></i>
                    <span>Transaksi</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo site_url('app/page/form_transaksi'); ?>" class="linkmenu">
                            <span>Form Transaksi</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('app/page/data_transaksi'); ?>" class="linkmenu">
                            <span>Data Transaksi</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown show-on-hover">
                <a href="javascript:;" data-toggle="dropdown">
                    <i class="fa fa-car"></i>
                    <span>Data Mobil</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo site_url('app/page/tambah_mobil'); ?>" class="linkmenu">
                            <span>Tambah Data Mobil Baru</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('app/page/kelola_mobil'); ?>" class="linkmenu">
                            <span>Kelola Data Mobil</span>
                        </a>
                    </li>                            </ul>
            </li>
            <li class="dropdown show-on-hover">
                <a href="javascript:;" data-toggle="dropdown">
                    <i class="fa fa-user"></i>
                    <span>Pengguna</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo site_url('app/page/tambah_pengguna'); ?>" class="linkmenu">
                            <span>Tambah Pengguna</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('app/page/kelola_pengguna'); ?>" class="linkmenu">
                            <span>Kelola Pengguna</span>
                        </a>
                    </li>                            
                </ul>
            </li>
            <li class="dropdown show-on-hover">
                <a href="javascript:;" data-toggle="dropdown">
                    <i class="fa fa-file-text-o"></i>
                    <span>Laporan</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo site_url('app/page/laporan/cash'); ?>" class="linkmenu">
                            <span>Transaksi Cash</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('app/page/laporan/kredit'); ?>" class="linkmenu">
                            <span>Transaksi Kredit</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('app/page/laporan/cicilan'); ?>" class="linkmenu">
                            <span>Transaksi Cicilan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('app/page/laporan/mobil'); ?>" class="linkmenu">
                            <span>Mobil</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('app/page/laporan/pembeli'); ?>" class="linkmenu">
                            <span>Pembeli</span>
                        </a>
                    </li>                            
                </ul>
            </li>
            <li>
                <a href="<?php echo site_url('app/page/pengaturan'); ?>" class="linkmenu">
                    <i class="fa fa-wrench"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /main navigation -->


    <!-- footer -->
    <footer>
        <div class="footer-toolbar pull-left">
            <a href="<?php echo site_url(''); ?>" class="pull-left help" title="Bantuan ?">
                <i class="fa fa-question-circle"></i>
            </a>

            <a href="javascript:;" class="toggle-sidebar pull-right hidden-xs">
                <i class="fa fa-angle-left"></i>
            </a>
        </div>
    </footer>
    <!-- /footer -->
</aside>
<?php    
}
else
{//tempat menu pegawai
?>

<aside class="sidebar canvas-left">
    <!-- main navigation -->
    <nav class="main-navigation">
        <ul>
            <li class="">
                <a href="<?php echo site_url(); ?>">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="dropdown show-on-hover">
                <a href="javascript:;" data-toggle="dropdown">
                    <i class="fa fa-ellipsis-h"></i>
                    <span>Transaksi</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo site_url('app/page/form_transaksi'); ?>" class="linkmenu">
                            <span>Form Transaksi</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('app/page/data_transaksi'); ?>" class="linkmenu">
                            <span>Data Transaksi</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown show-on-hover">
                <a href="javascript:;" data-toggle="dropdown">
                    <i class="fa fa-car"></i>
                    <span>Data Mobil</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo site_url('app/page/tambah_mobil'); ?>" class="linkmenu">
                            <span>Tambah Data Mobil Baru</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('app/page/kelola_mobil'); ?>" class="linkmenu">
                            <span>Kelola Data Mobil</span>
                        </a>
                    </li>                            </ul>
            </li>
        </ul>
    </nav>
    <!-- /main navigation -->


    <!-- footer -->
    <footer>
        <div class="footer-toolbar pull-left">
            <a href="<?php echo site_url(''); ?>" class="pull-left help" title="Bantuan ?">
                <i class="fa fa-question-circle"></i>
            </a>

            <a href="javascript:;" class="toggle-sidebar pull-right hidden-xs">
                <i class="fa fa-angle-left"></i>
            </a>
        </div>
    </footer>
    <!-- /footer -->
</aside>
<?php    
} 
?>