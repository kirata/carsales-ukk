<section class="main-content">
                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">

<header class="panel-heading">
<?=$titnow;?>
</header>
<div class="panel-body">
	<?php 
		if ($this->session->flashdata('mssg')=='update-success') {
			echo '	<div class="alert alert-success alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Sukses,</strong> Password Berhasil Diubah !
					</div>';
		}
		else if($this->session->flashdata('mssg')=='update-failed')
		{
			echo '	<div class="alert alert-danger alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Maaf,</strong> Password Gagal Diubah. 
					</div>';
		}
		else if ($this->session->flashdata('mssg')=='unknown-parameter') {
			echo '	<div class="alert alert-danger alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Maaf,</strong> Terjadi sedikit kesalahan. 
					</div>';
		}
	?>
	<?php echo form_open_multipart('app/ubahPasswordLogin',array('class'=>'form-horizontal parsley-form','role'=>'form')); ?>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Password Lama</label>
	    <div class="col-sm-4">
	        <input type="password" placeholder="Masukkan Password Yang Saat Ini" name="password_lama" class="form-control">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Password Baru</label>
	    <div class="col-sm-4">
	        <input type="password" placeholder="Masukkan Password Baru" name="password_baru" class="form-control">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label"></label>
	    <div class="col-sm-4">
	        <button class="btn btn-primary btn-parsley" type="submit">Ubah Password </button>
	    </div>
	</div>
	<?php echo form_close(); ?>
</div>
</section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">

<header class="panel-heading">
<?=$titnow;?>
</header>
<div class="panel-body">
	<div class="form-group">
	    <label class="col-sm-3 control-label">Backup</label>
	    <div class="col-sm-4">
	    <a href="<?=site_url('app/backupAllData')?>" title="Backup">Backup Semua Data</a>    
	    </div>
	</div>
</div>
</section>
                        </div>
                    </div>
                </div>
                <!-- /content wrapper -->
            </section>