<?php
$condition = $this->uri->segment(4);  
if ($condition == "mobil") {
?>
<?php foreach ($mobil->result() as $m) {?>
<section class="main-content">
                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
<header class="panel-heading">
	Edit <?=humanize($condition)?> : <?=$m->merk.' '.$m->type;?>	
</header>
<!-- /header -->
<div class="panel-body">
	<?php 
		if ($this->session->flashdata('mssg')=='update-success') {
			echo '	<div class="alert alert-success alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Sukses,</strong> Data berhasil diubah !
					</div>';
		}
		else if($this->session->flashdata('mssg')=='update-failed')
		{
			echo '	<div class="alert alert-danger alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Maaf,</strong> Data gagal diubah. 
					</div>';
		}
		else if ($this->session->flashdata('mssg')=='unknown-parameter') {
			echo '	<div class="alert alert-danger alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Maaf,</strong> Terjadi sedikit kesalahan. 
					</div>';
		}
	?>
	<?php echo form_open_multipart('app/ubahMobil',array('class'=>'form-horizontal parsley-form','role'=>'form')); ?>
	<?php echo form_hidden('mobil_id',$m->kode_mobil); ?>
	<div class="form-group">
	    <label class="col-sm-3 control-label">Merk</label>
	    <div class="col-sm-4">
	        <input type="text" placeholder="Masukkan Merk Mobil" name="merk" class="form-control" value="<?=$m->merk;?>">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Tipe</label>
	    <div class="col-sm-4">
	        <input type="text" placeholder="Masukkan Tipe Mobil" name="tipe" class="form-control" value="<?=$m->type;?>">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Warna</label>
	    <div class="col-sm-4">
	        <input type="text" placeholder="Masukkan Warna Mobil" name="warna" class="form-control" value="<?=$m->warna;?>">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Harga</label>
	    <div class="col-sm-4">
	        <input type="text" placeholder="Tulis Harga Mobil" name="harga" class="form-control" value="<?=$m->harga_mobil;?>">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Stok</label>
	    <div class="col-sm-4">
	        <input type="number" placeholder="Tulis Jumlah Stok Yang Ada" name="stok" class="form-control" value="<?=$m->stok;?>">
	    </div>
	</div>

<div class="form-group">
	    <label class="col-sm-3 control-label">Gambar</label>
	    <div class="col-sm-4">
	     <input type="file" name="fotomobil">
	     <p class="help-block">Pilih foto mobil, kosongkan jika tak ingin diubah</p>   
	     </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label"></label>
	    <div class="col-sm-4">
	        <button class="btn btn-primary btn-parsley" type="submit">Update </button>
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
<?php } ?>
<?php
}
else if($condition == "pengguna"){
?>
<?php foreach ($pengguna->result() as $m) {?>
<section class="main-content">
                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
<header class="panel-heading">
	Edit <?=humanize($condition)?> : <b><?=$m->username;?></b>	
</header>
<!-- /header -->
<div class="panel-body">
	<?php 
		if ($this->session->flashdata('mssg')=='update-success') {
			echo '	<div class="alert alert-success alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Sukses,</strong> Data berhasil diubah !
					</div>';
		}
		else if($this->session->flashdata('mssg')=='update-failed')
		{
			echo '	<div class="alert alert-danger alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Maaf,</strong> Data gagal diubah. 
					</div>';
		}
		else if ($this->session->flashdata('mssg')=='unknown-parameter') {
			echo '	<div class="alert alert-danger alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Maaf,</strong> Terjadi sedikit kesalahan. 
					</div>';
		}
	?>
	<?php echo form_open_multipart('app/ubahPengguna',array('class'=>'form-horizontal parsley-form','role'=>'form')); ?>
	<?php echo form_hidden('pengguna_id',$m->kode_pengguna); ?>
	<div class="form-group">
	    <label class="col-sm-3 control-label">Nama Lengkap</label>
	    <div class="col-sm-4">
	        <input type="text" placeholder="Masukkan Nama Lengkap Anda" name="nama" class="form-control" value="<?=$m->nama;?>">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Username</label>
	    <div class="col-sm-4">
	        <input type="text" placeholder="Username" name="username" class="form-control" value="<?=$m->username;?>" disabled="disabled">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Password</label>
	    <div class="col-sm-4">
	        <input type="password" placeholder="Masukkan Password Baru / Kosongkan" name="password" class="form-control">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Email</label>
	    <div class="col-sm-4">
	        <input type="email" placeholder="Email" name="email" class="form-control" value="<?=$m->email;?>">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Level</label>
	    <div class="col-sm-4">
	     <select name="level" class="form-control">
	        	<option value="0" <?php if($m->level==NULL){echo 'selected="selected"';}else{} ?>>--- Pilih Level Penggunaan --</option>
	        	<option value="admin" <?php if($m->level=="Admin"){echo 'selected="selected"';}else{} ?>>Admin</option>
	        	<option value="pegawai" <?php if($m->level=="Pegawai"){echo 'selected="selected"';}else{} ?>>Pegawai</option>
	        </select>   
	     </div>
	</div>
<div class="form-group">
	    <label class="col-sm-3 control-label">Status</label>
	    <div class="col-sm-4">
	     <select name="status" class="form-control">
	        	<option value="0" <?php if($m->status==NULL){echo 'selected="selected"';}else{} ?>>--- Status Akun Pengguna --</option>
	        	<option value="aktif" <?php if($m->status=="Aktif"){echo 'selected="selected"';}else{} ?>>Aktif</option>
	        	<option value="tidak aktif" <?php if($m->status=="Tidak Aktif"){echo 'selected="selected"';}else{} $m->status==NULL?>>Tidak Aktif</option>
	        </select>   
	     </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label"></label>
	    <div class="col-sm-4">
	        <button class="btn btn-primary btn-parsley" type="submit">Update</button>
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
<?php } ?>
<?php
}
else{

}
?>
