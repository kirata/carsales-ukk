<section class="main-content">
                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
<header class="panel-heading" style="">
	<?=$titnow;?> : <?=humanize($this->uri->segment(4))?>
</header><!-- /header -->
<div class="panel-body" style="">
<?php  
$condition = $this->uri->segment(4);
if ($condition == "cash") {
?>
<div class="table-responsive">
	<table class="table table-bordered table-striped mg-t dable-report">
	<thead>
	<tr>
	<th>No</th>
	<th>KTP Pembeli</th>
	<th>Mobil</th>
	<th>Waktu Beli</th>
	</tr>
	</thead>
	<tbody>
	<?php $no=0; foreach ($cash_cash->result() as $c) {$no++; ?>
	<tr>
	<td><?=$no?></td>
	<td><?=$c->ktp?></td>
	<td><?=$c->merk?> <?=$c->type?> <?=$c->warna?></td>
	<td><?=$c->cash_tgl?></td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
 </div>
<?php
}
else if ($condition == "kredit") {
?>
<div class="table-responsive">
	<table class="table table-bordered table-striped mg-t dable-report">
	<thead>
	<tr>
	<th>No</th>
	<th>KTP Pembeli</th>
	<th>Mobil</th>
	<th>Status</th>
	</tr>
	</thead>
	<tbody>
	<?php $no=0; foreach ($complete_kredit->result() as $c) {$no++; ?>
	<tr>
	<td><?=$no?></td>
	<td><?=$c->ktp?></td>
	<td><?=$c->merk?> <?=$c->type?> <?=$c->warna?></td>
	<td><?=$c->status?></td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
 </div>

<?php
}
else if ($condition == "cicilan") {
?>
<?php
}
else if ($condition == "mobil") {
?>
<div class="table-responsive">
    <table class="table table-bordered table-striped mg-t dable-report">
    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Merk</th>
                                            <th>Tipe</th>
                                            <th>Warna</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                        </tr>
                                    </thead>
<tbody>
                                        <?php 
                                        $no=0; 
                                        foreach ($mobil_mobil->result() as $m) {
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?=$no;?></td>
                                            <td><?=$m->merk;?></td>
                                            <td><?=$m->type;?></td>
                                            <td><?=$m->warna;?></td>
                                            <td>Rp <?=number_format($m->harga_mobil);?></td>
                                            <td><?=$m->stok;?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
    </table>
 </div>
<?php
}
else if ($condition == "pembeli") {
?>
<div class="table-responsive">
	<table class="table table-bordered table-striped mg-t dable-report">
	<thead>
	<tr>
	<th>No</th>
	<th>KTP</th>
	<th>Nama</th>
	<th>Alamat</th>
	<th>Telepon</th>
	</tr>
	</thead>
	<tbody>
	<?php $no=0; foreach ($pembeli_pembeli->result() as $c) {$no++; ?>
	<tr>
	<td><?=$no?></td>
	<td><?=$c->ktp?></td>
	<td><?=$c->nama_pembeli?></td>
	<td><?=$c->alamat_pembeli?></td>
	<td><?=$c->telp_pembeli?></td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
 </div>
<?php
}
else {

}
?>
</div>
</section>
                        </div>
                    </div>
                </div>
                <!-- /content wrapper -->
            </section>