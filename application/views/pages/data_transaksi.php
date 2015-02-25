<section class="main-content">

                <header class="header navbar bg-default">
                    <ul class="nav navbar-nav nav-tabs">
                        <li class="active">
                            <a href="#cash" data-toggle="tab">Cash</a>
                        </li>
                        <li>
                            <a href="#kredit" data-toggle="tab">Kredit</a>
                        </li>
                    </ul>
                </header>

                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content ">
                                <section class="tab-pane active" id="cash">
	                                        <div class="col-lg-12">
	                                            <section class="panel">
                                                <header class="panel-heading">Daftar Data Transaksi Cash</header>
                                                <div class="panel-body">
                                                	<div class="table-responsive">
	<table class="table table-bordered table-striped mg-t dable">
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
                                                </div>
                                            </section>
	                                        </div>
                                </section>
                                <section class="tab-pane" id="kredit">
                                    <div class="row">
	                                        <div class="col-lg-12">
	                                            <section class="panel">
                                                <header class="panel-heading">Transaksi : Bayar kredit</header>
                                                <div class="panel-body">
                                                 <div class="panel-body" style="">
                                                 	<div class="table-responsive">
	<table class="table table-bordered table-striped mg-t dable">
	<thead>
	<tr>
	<th>No</th>
	<th>KTP Pembeli</th>
	<th>Mobil</th>
	<th>Status</th>
	</tr>
	</thead>
	<tbody>
	<?php $no=0; foreach ($kredit_kredit->result() as $c) {$no++; ?>
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