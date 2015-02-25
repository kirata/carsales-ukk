<?php  
if ($this->uri->segment(4) == "cash") {
?>
	<?php foreach ($current_cash_trans->result() as $c){?>
<section class="main-content">
<!-- content wrapper -->
<div class="content-wrap">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
            	<div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                        <?php echo form_open('app/component/kwitansi/cash').form_hidden('cash_id',$c->kode_cash); ?>
                        <button type="submit" style="float:right;position:absolute;" class="btn btn-success"><i class="fa fa-print"></i> Cetak</button>
                        <?php echo form_close() ?>
                        <div class="panel-body">
                            <div role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="ktp">No. KTP</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static"><?=$c->ktp;?></p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="nama">Nama Pembeli</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static"><?=$c->nama_pembeli;?></p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="mobil">Mobil</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static"><?=$c->merk;?> <?=$c->type;?> <?=$c->warna;?></p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="harga">Harga</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static"><?=$c->harga_mobil;?></p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="opsi">Opsi Bayar</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static">Cash</p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="uang_bayar">Uang Bayar</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static"><?=$c->cash_bayar;?></p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="uang_kembali">Uang Kembali</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static"><?=$c->cash_bayar - $c->harga_mobil;?></p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="waktu">Waktu Bayar</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static"><?=$c->cash_tgl;?></p>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    </div>
                </div>
			</section>
            </div>
        </div>
    </div>
    <!-- /content wrapper -->
</section>
<?php
}
}
else if ($this->uri->segment(4) == "kredit") {
?>
    <?php foreach ($current_kredit_trans->result() as $c){?>
<section class="main-content">
<!-- content wrapper -->
<div class="content-wrap">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                        <?php echo form_open('app/component/kwitansi/kredit').form_hidden('kredit_id',$c->kode_kredit); ?>
                        <button type="submit" style="float:right;position:absolute;" class="btn btn-success"><i class="fa fa-print"></i> Cetak</button>
                        <?php echo form_close() ?>
                        <div class="panel-body">
                            <div role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="ktp">No. KTP</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static"><?=$c->ktp;?></p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="nama">Nama Pembeli</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static"><?=$c->nama_pembeli;?></p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="mobil">Mobil</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static"><?=$c->merk;?> <?=$c->type;?> <?=$c->warna;?></p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="harga">Harga</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static">Rp <?=number_format($c->harga_mobil);?></p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="opsi">Opsi Bayar</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static">Kredit</p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="uang_bayar">Uang Muka</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static">Rp <?=number_format($c->uang_muka);?></p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="uang_kembali">Bayar Cicilan</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static">Rp <?=number_format($c->nilai_cicilan);?> / Bulan</p>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="waktu">Waktu Bayar</label>
                                    <div class="col-sm-10">
                                    <p class="form-control-static"><?=$c->tgl_kredit;?></p>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    </div>
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
else {
?>

<?php
}
?>