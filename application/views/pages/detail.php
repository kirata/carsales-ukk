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
	Detail <?=humanize($this->uri->segment(4));?> : <?=$m->merk.' '.$m->type;?>
</header><!-- /header -->
<div class="panel-body">
<table class="table table-striped table-bordered table-hover">
                    <tr>
                      <td colspan="2">
                      <center>
                        <a class="prettyPhoto[pp_gal]" href="#">
                          <img width="20%" height="20%" alt="" src="<?php echo base_url('assets/img/mobil/'.$m->gambar); ?>">
                        </a>
                      </center>
                      </td>
                    </tr>
                    <tr>
                      <td width="20%">Merk</td>
                      <td><?=$m->merk;?></td>
                    </tr> 
                    <tr>
                      <td width="20%">Tipe</td>
                      <td><?=$m->type;?></td>
                    </tr> 
                    <tr>
                      <td width="20%">Harga Mobil</td>
                      <td><?=$m->harga_mobil;?></td>
                    </tr>
                    <tr>
                      <td width="20%">Jumlah Stok Saat Ini</td>
                      <td><?=$m->stok;?></td>
                    </tr>   
                  </table>
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
  Detail <?=humanize($this->uri->segment(4));?> : <i><?=$m->nama;?></i>
</header><!-- /header -->
<div class="panel-body">
<table class="table table-striped table-bordered table-hover">
                    <tr>
                      <td colspan="2">
                      <center>
                        <a class="prettyPhoto[pp_gal]" href="#">
                          <img width="20%" height="20%" alt="" src="<?php echo base_url('assets/img/user.gif'); ?>">
                        </a>
                      </center>
                      </td>
                    </tr>
                    <tr>
                      <td width="20%">Nama Lengkap</td>
                      <td><?=$m->nama;?></td>
                    </tr> 
                    <tr>
                      <td width="20%">Username</td>
                      <td><?=$m->username;?></td>
                    </tr> 
                    <tr>
                      <td width="20%">Email</td>
                      <td><?=$m->email;?></td>
                    </tr>
                    <tr>
                      <td width="20%">Level</td>
                      <td><?=$m->level;?></td>
                    </tr> 
                    <tr>
                      <td width="20%">Status Akun</td>
                      <td><?=$m->status;?></td>
                    </tr>  
                  </table>
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