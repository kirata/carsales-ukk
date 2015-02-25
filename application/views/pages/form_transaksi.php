<?php  
if ($this->uri->segment(4)=="cicilan" && $this->uri->segment(5)) {
?>
<section class="main-content">
                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">

<header class="panel-heading">
<?=$titnow;?> : Bayar Cicilan
</header>
<div class="panel-body">
    <?php 
        if ($this->session->flashdata('mssg')=='insert-success') {
            echo '  <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <strong>Sukses,</strong> Data berhasil disimpan !
                    </div>';
        }
        else if($this->session->flashdata('mssg')=='insert-failed')
        {
            echo '  <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <strong>Maaf,</strong> Data gagal disimpan. 
                    </div>';
        }
        else if ($this->session->flashdata('mssg')=='unknown-parameter') {
            echo '  <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <strong>Maaf,</strong> Terjadi sedikit kesalahan. 
                    </div>';
        }
    ?>
    <?php echo form_open_multipart('app/prosesTransaksi',array('class'=>'form-horizontal parsley-form','role'=>'form')); ?>
    <?=form_hidden('opsi_bayar','cicilan')?>
    <div class="form-group">
        <label class="col-sm-3 control-label">KTP<?=form_hidden('kredit_id',$this->uri->segment(5))?></label>
        <div class="col-sm-4">
            <input type="text" value="" class="form-control" readonly="readonly">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Nama</label>
        <div class="col-sm-4">
            <input type="text" value="" readonly="readonly" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Mobil Yang Dibeli</label>
        <div class="col-sm-4">
           <input type="text" value="" readonly="readonly" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Cicilan</label>
        <div class="col-sm-4">
            <input type="text" value="Rp  /Bulan" readonly="readonly" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Jumlah Cicilan Terbayar</label>
        <div class="col-sm-4">
            <input type="text" value="" readonly="readonly" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-sm-3 control-label"></label>
        <div class="col-sm-4">
            <button class="btn btn-primary btn-parsley" type="submit">Bayar Cicilan</button>
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
<?php }else{ ?>
<?php  ?>
<section class="main-content">

                <header class="header navbar bg-default">
                    <ul class="nav navbar-nav nav-tabs">
                        <li class="active">
                            <a href="#pembelian" data-toggle="tab">Pembelian</a>
                        </li>
                        <li>
                            <a href="#cicilan" data-toggle="tab">Bayar Cicilan</a>
                        </li>
                    </ul>
                </header>

                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content ">
                                <section class="tab-pane active" id="pembelian">
                                <?=form_open_multipart('app/prosesTransaksi');?>
	                                <div class="row">
	                                        <div class="col-lg-12">
	                                            <section class="panel">
                                                <header class="panel-heading">Identitas Pembeli</header>
                                                <div class="panel-body">
                                                    <div role="form" class="form-horizontal">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="pembeli">Pembeli</label>
                                                            <div class="col-sm-10">
                                                                    <div class="radio">
                                                                    <label><input type="radio" name="opsi_pembeli" value="baru" id="pelanggan-baru">Pembeli Baru</label>
                                                                    <label><input type="radio" name="opsi_pembeli" value="lama" id="pelanggan-lama">Pembeli Lama</label>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div id="pembeli-baru">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="ktp">No. KTP</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" placeholder="Masukkan Nomor KTP" id="" class="form-control" name="ktp">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="nama">Nama Lengkap</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" placeholder="Masukkan Nama Lengkap" id="" class="form-control" name="nama">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="nama">Alamat Pembeli</label>
                                                            <div class="col-sm-10">
                                                                <textarea rows="3" class="form-control" placeholder="Masukkan Alamat Lengkap Calon Pembeli" name="alamat"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="telepon">No. Telepon</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" placeholder="Masukkan Nomor Telepon Yang Aktif" id="telepon" class="form-control" name="telepon">
                                                                </div>
                                                        </div>
                                                        </div>
                                                        <div id="pembeli-lama">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="ktp">Pelanggan Lama</label>
                                                            <div class="col-sm-10">
                                                                <select data-placeholder="Pilih Pembeli" class="form-control" name="ktp" id="buyer">
                                                                    <option value="0">-- Pilih Pembeli --</option>
                                                                    <?php foreach ($pembeli_pembeli->result() as $m) {?>
                                                                    <option value="<?=$m->ktp;?>"><?=$m->ktp;?> | <?=$m->nama_pembeli;?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <p class="help-block">KTP | Nama</p>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-lg-12">
	                                            <section class="panel">
                                                <header class="panel-heading">Pembelian</header>
                                                <div class="panel-body">
                                                    <div role="form" class="form-horizontal">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="mobil">Mobil</label>
                                                            <div class="col-sm-10">
                                                                <select data-placeholder="Pilih Mobil" class="form-control chosen" name="mobil" id="mobil">
                                                                	<option value="0">-- Pilih Mobil --</option>
                                                                	<?php foreach ($mobil_mobil->result() as $m) {?>
                                                                	<option value="<?=$m->kode_mobil;?>"><?=$m->merk;?> | <?=$m->type;?> | <?=$m->warna;?> | <?=$m->stok;?></option>
                                                                	<?php } ?>
                                                                </select>
                                                                <p class="help-block">Merk | Tipe | Warna | Stok</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="nama">Harga</label>
                                                            <div class="col-sm-10">
                                                            <p class="form-control-static">Rp 200.000.000</p>    
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="telepon">Opsi Pembayaran</label>
                                                            <div class="col-sm-10">
                                                                	<div class="radio">
																	<label><input type="radio" name="opsi_bayar" value="cash" id="bayar_cash">Cash</label>
																	<label><input type="radio" name="opsi_bayar" value="kredit" id="bayar_kredit">Kredit</label>
																	</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
	                                        </div>
	                                    </div>
	                                    <div class="row" id="form-cash">
	                                        <div class="col-lg-12">
	                                            <section class="panel">
                                                <header class="panel-heading">Transaksi : Cash</header>
                                                <div class="panel-body">

                                                    <div role="form" class="form-horizontal">
                                                        <div class="form-group">
                                                         <label class="col-sm-2 control-label" for="nama">Total Uang</label>
                                                            <div class="col-sm-10">
                                                                <div class="input-group mg-b-md">
																<span class="input-group-addon">Rp</span>
																<input type="text" class="form-control" placeholder="Masukkan Total Uang Yang Dibayar" name="bayar">
																</div>
                                                            </div>
                                                        </div>
           												<div class="form-group">
														<label class="col-sm-2 control-label"></label>
														<div class="col-sm-4">
															<button class="btn btn-primary btn-parsley" type="submit">Proses Sekarang</button>
														</div>
														</div>
                                                    </div>

                                                </div>
                                            </section>
	                                        </div>
	                                    </div>

	                                    
	                                    <div class="row" id="form-kredit">
	                                        <div class="col-lg-12">
	                                            <section class="panel">
                                                <header class="panel-heading">Transaksi : Kredit</header>
                                                <div class="panel-body">
                                                    <div role="form" class="form-horizontal">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="ktp">Paket Kredit</label>
                                                            <div class="col-sm-10">
                                                                <select name="pilih_kredit" class="form-control">
                                                                	<option value="">-- Pilih Paket Kredit --</option>
                                                                	<option value="1">12 Bulan | DP 20% | 12 | 15%</option>
                                                                	<option value="2">24 Bulan | DP 25% | 24 | 20%</option>
                                                                </select>
                                                                <p class="help-block">Nama Paket | Uang Muka | Jumlah Cicilan | Bunga</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="dp">Uang Muka Paket</label>
                                                            <div class="col-sm-10">
                                                            <input type="text" disabled="" placeholder="" class="form-control" value="Rp 20.000.000">    
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="fk_ktp">Fotokopi KTP</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="fk_ktp">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="telepon">Fotokopi KK</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="fk_kk">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="telepon">Fotokopi Slip Gaji</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="fk_slip_gaji">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
    														<label class="col-sm-2 control-label"></label>
    														<div class="col-sm-4">
    															<button class="btn btn-primary btn-parsley">Proses Sekarang	</button>
    														</div>
														</div>
                                                </div>
                                            </section>
	                                        </div>
	                                    </div>
	                                    <?=form_close()?>
                                </section>
                                <section class="tab-pane" id="cicilan">                                    <div class="row">
	                                        <div class="col-lg-12">
	                                            <section class="panel">
                                                <header class="panel-heading">Transaksi : Bayar Cicilan</header>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
    <table class="table table-bordered table-striped mg-t dable">
    <thead>
    <tr>
    <th>No</th>
    <th>KTP Pembeli</th>
    <th>Mobil</th>
    <th>Status</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php $no=0; foreach ($kredit_kredit->result() as $c) {$no++; ?>
    <tr>
    <td width="2%"><?=$no?></td>
    <td><?=$c->ktp?></td>
    <td><?=$c->merk?> <?=$c->type?> <?=$c->warna?></td>
    <td><?=$c->status?></td>
    <td width="5%"><a href="<?=site_url('app/page/form_transaksi/cicilan/'.$c->kode_kredit)?>" title="Mulai Bayar Cicilan" class="btn btn-outline btn-success"><i class="fa fa-money"></i> Bayar Cicilan</a></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
 </div>
                                                </div>
                                            </section>
	                                        </div>
	                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /content wrapper -->

            </section>
<?php } ?>