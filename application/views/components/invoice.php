<?php  if ($this->uri->segment(4) == "cash") {?>
  <?php foreach($data->result() as $d){ ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Bukti Pembelian</title>
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/invoice.css">
    <style>
      @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
      body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
      }
    </style>
  </head>
  
  <body onload="window.print()">
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <h1>
            <a href="#">
            <img src="<?=base_url('assets/img/fav.png')?>" width="10%" height="10%">
            CarsalesAPP
            </a>
          </h1>
        </div>
        <div class="col-xs-6 text-right">
          <h1>PT ABC</h1>
          <h1><small>Bukti Pembayaran</small></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Dari: <a href="#">PT ABC</a></h4>
            </div>
            <div class="panel-body">
              <p>
                Alamat: <br>
                Jalan In aja dulu No.1<br>
                Cimanggis,Kalimantan Utara <br>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-5 col-xs-offset-2 text-right">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Kepada : <a href="#"><?=$d->nama_pembeli;?></a></h4>
            </div>
            <div class="panel-body">
              <p>
                Alamat :<br>
                <?=$d->alamat_pembeli;?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- / end client details section -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              <h4>Merk</h4>
            </th>
            <th>
              <h4>Type</h4>
            </th>
            <th>
              <h4>Warna</h4>
            </th>
            <th>
              <h4>Pembayaran</h4>
            </th>
            <th>
              <h4>Harga</h4>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?=$d->merk;?></td>
            <td><?=$d->type;?></td>
            <td class="text-right"><?=$d->warna;?></td>
            <td class="text-right">Cash</td>
            <td class="text-right">Rp <?=number_format($d->harga_mobil);?></td>
          </tr>
        </tbody>
      </table>
      <div class="row text-right">
        <div class="col-xs-2 col-xs-offset-8">
          <p>
            <strong>
            Total Harga : <br>
            Uang Bayar : <br>
            <hr>
            Kembali : <br>
            </strong>
          </p>
        </div>
        <div class="col-xs-2">
          <strong>
          Rp <?=number_format($d->harga_mobil);?> <br>
          Rp <?=number_format($d->cash_bayar);?> <br>
          <hr>
          Rp <?=number_format($d->cash_bayar - $d->harga_mobil);?> <br>
          </strong>
        </div>
      </div>
    </div>
  </body>
</html>
  <?php } ?>
<?php
}
else if ($this->uri->segment(4)=="kredit") {
?>
<?php foreach ($data->result() as $d) {?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Bukti Pembelian</title>
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/invoice.css">
    <style>
      @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
      body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
      }
    </style>
  </head>
  
  <body onload="window.print()">
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <h1>
            <a href="#">
            <img src="<?=base_url('assets/img/fav.png')?>" width="10%" height="10%">
            CarsalesAPP
            </a>
          </h1>
        </div>
        <div class="col-xs-6 text-right">
          <h1>PT ABC</h1>
          <h1><small>Bukti Pembayaran</small></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Dari: <a href="#">PT ABC</a></h4>
            </div>
            <div class="panel-body">
              <p>
                Alamat: <br>
                Jalan In aja dulu No.1<br>
                Cimanggis,Kalimantan Utara <br>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-5 col-xs-offset-2 text-right">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Kepada : <a href="#"><?=$d->nama_pembeli;?></a></h4>
            </div>
            <div class="panel-body">
              <p>
                Alamat :<br>
                <?=$d->alamat_pembeli;?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- / end client details section -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              <h4>Merk</h4>
            </th>
            <th>
              <h4>Type</h4>
            </th>
            <th>
              <h4>Warna</h4>
            </th>
            <th>
              <h4>Pembayaran</h4>
            </th>
            <th>
              <h4>Harga</h4>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?=$d->merk;?></td>
            <td><?=$d->type;?></td>
            <td class="text-right"><?=$d->warna;?></td>
            <td class="text-right">Kredit</td>
            <td class="text-right">Rp <?=number_format($d->harga_mobil);?></td>
          </tr>
        </tbody>
      </table>
      <div class="row text-right">
        <div class="col-xs-2 col-xs-offset-8">
          <p>
            <strong>
            Total Harga : <br>
            Uang Bayar : <br>
            <hr>
            Kembali : <br>
            </strong>
          </p>
        </div>
        <div class="col-xs-2">
          <strong>
          Rp A <br>
          Rp A <br>
          <hr>
          Rp A <br>
          </strong>
        </div>
      </div>
    </div>
  </body>
</html>
<?php } ?>
<?php
}
else if ($this->uri->segment(4)=="cicilan ") {
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Bukti Pembelian</title>
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/invoice.css">
    <style>
      @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
      body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
      }
    </style>
  </head>
  
  <body onload="window.print()">
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <h1>
            <a href="#">
            <img src="<?=base_url('assets/img/fav.png')?>" width="10%" height="10%">
            CarsalesAPP
            </a>
          </h1>
        </div>
        <div class="col-xs-6 text-right">
          <h1>PT ABC</h1>
          <h1><small>Bukti Pembayaran</small></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Dari: <a href="#">PT ABC</a></h4>
            </div>
            <div class="panel-body">
              <p>
                Alamat: <br>
                Jalan In aja dulu No.1<br>
                Cimanggis,Kalimantan Utara <br>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-5 col-xs-offset-2 text-right">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Kepada : <a href="#"><?=$d->nama_pembeli;?></a></h4>
            </div>
            <div class="panel-body">
              <p>
                Alamat :<br>
                <?=$d->alamat_pembeli;?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- / end client details section -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              <h4>Merk</h4>
            </th>
            <th>
              <h4>Type</h4>
            </th>
            <th>
              <h4>Warna</h4>
            </th>
            <th>
              <h4>Pembayaran</h4>
            </th>
            <th>
              <h4>Harga</h4>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?=$d->merk;?></td>
            <td><?=$d->type;?></td>
            <td class="text-right"><?=$d->warna;?></td>
            <td class="text-right">Kredit</td>
            <td class="text-right">Rp <?=number_format($d->harga_mobil);?></td>
          </tr>
        </tbody>
      </table>
      <div class="row text-right">
        <div class="col-xs-2 col-xs-offset-8">
          <p>
            <strong>
            Total Harga : <br>
            Uang Bayar : <br>
            <hr>
            Kembali : <br>
            </strong>
          </p>
        </div>
        <div class="col-xs-2">
          <strong>
          Rp A <br>
          Rp A <br>
          <hr>
          Rp A <br>
          </strong>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
}
else{
  $this->load->view('404');
}
?>