<?php  
if ($level_loggedin == "Admin") 
{// hanya tampil jika diakses admin
?>
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
		if ($this->session->flashdata('mssg-success')) {
			echo '	<div class="alert alert-success alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Sukses,</strong> Data berhasil disimpan !
					</div>';
		}
		else if($this->session->flashdata('mssg-danger'))
		{
			echo '	<div class="alert alert-danger alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Maaf,</strong> Data gagal disimpan. 
					</div>';
		}
	?>
	<?php echo form_open('app/simpanPengguna',array('class'=>'form-horizontal parsley-form','role'=>'form','id'=>'formPengguna')) ?>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Nama Lengkap</label>
	    <div class="col-sm-4">
	        <input type="text" placeholder="Masukkan Nama Lengkap Anda" name="nama" class="form-control">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Username</label>
	    <div class="col-sm-4">
	        <input type="text" placeholder="Username"name="username" class="form-control">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Password</label>
	    <div class="col-sm-4">
	        <input type="password" placeholder="Password" name="password" class="form-control">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Email</label>
	    <div class="col-sm-4">
	        <input type="email" placeholder="Email"name="email" class="form-control">
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label">Level</label>
	    <div class="col-sm-4">
	     <select name="level" class="form-control">
	        	<option value="0">--- Pilih Level Penggunaan --</option>
	        	<option value="admin">Admin</option>
	        	<option value="pegawai">Pegawai</option>
	        </select>   
	     </div>
	</div>
<div class="form-group">
	    <label class="col-sm-3 control-label">Status</label>
	    <div class="col-sm-4">
	     <select name="status" class="form-control">
	        	<option value="0">--- Status Akun Pengguna --</option>
	        	<option value="aktif">Aktif</option>
	        	<option value="tidak aktif">Tidak Aktif</option>
	        </select>   
	     </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label"></label>
	    <div class="col-sm-4">
	        <button class="btn btn-primary btn-parsley" type="submit" id="btnSimpanPengguna">Tambah Pengguna Baru</button>
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
<?php
}
else
{
	echo "tidak ada akses";
}
?>