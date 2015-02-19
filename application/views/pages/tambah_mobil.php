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
		if ($this->session->flashdata('mssg')=='insert-success') {
			echo '	<div class="alert alert-success alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Sukses,</strong> Data berhasil disimpan !
					</div>';
		}
		else if($this->session->flashdata('mssg')=='insert-failed')
		{
			echo '	<div class="alert alert-danger alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Maaf,</strong> Data gagal disimpan. 
					</div>';
		}
		else if ($this->session->flashdata('mssg')=='unknown-parameter') {
			echo '	<div class="alert alert-danger alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Maaf,</strong> Terjadi sedikit kesalahan. 
					</div>';
		}
	?>
	<?php echo form_open_multipart('app/simpanMobil',array('class'=>'form-horizontal parsley-form','role'=>'form')); ?>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Merk</label>
	    <div class="col-sm-4">
	        <input type="text" placeholder="Masukkan Merk Mobil" name="merk" class="form-control">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Tipe</label>
	    <div class="col-sm-4">
	        <input type="text" placeholder="Masukkan Tipe Mobil" name="tipe" class="form-control">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Warna</label>
	    <div class="col-sm-4">
	       <input type="text" placeholder="Warna Mobil" name="warna" class="form-control">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Harga</label>
	    <div class="col-sm-4">
	        <input type="text" placeholder="Tulis Harga Mobil" name="harga" class="form-control">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Stok</label>
	    <div class="col-sm-4">
	        <input type="number" placeholder="Tulis Jumlah Stok Yang Ada" name="stok" class="form-control">
	    </div>
	</div>

<div class="form-group">
	    <label class="col-sm-3 control-label">Gambar</label>
	    <div class="col-sm-4">
	     <input type="file" name="fotomobil">
	     <p class="help-block">Pilih foto mobil</p>   
	     </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label"></label>
	    <div class="col-sm-4">
	        <button class="btn btn-primary btn-parsley" type="submit">Tambah Mobil Baru </button>
	    </div>
	</div>
	<?php echo form_close(); ?>
</div>
</section>
                        </div>
                    </div>
                </div>
                <!-- /content wrapper -->
            </section>