<section class="main-content">
                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
<header class="panel-heading" style="">
	<?=$titnow;?>
</header><!-- /header -->
<div class="panel-body" style="">
	<?php 
		if ($this->session->flashdata('mssg')=='success-delete') {
			echo '	<div class="alert alert-success alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Sukses,</strong> Data berhasil dihapus !
					</div>';
		}
		else if($this->session->flashdata('mssg')=='failed-delete')
		{
			echo '	<div class="alert alert-danger alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Maaf,</strong> Data gagal dihapus. 
					</div>';
		}
		else if ($this->session->flashdata('mssg')=='unknown-parameter') {
			echo '	<div class="alert alert-danger alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong>Maaf,</strong> Terjadi sedikit kesalahan. 
					</div>';
		}
		else{

		}
	?>
    <div class="table-responsive">
    <table class="table table-bordered table-striped mg-t dable">
    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Merk</th>
                                            <th>Tipe</th>
                                            <th width="25%">Opsi</th>
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
                                            <td><a href="<?php echo site_url('app/page/detail/mobil/'.$m->kode_mobil); ?>" title="Selengkapnya" class="btn btn-default btn-outline btn-sm"><i class="fa fa-file-text"></i></a>
                                            <a href="<?php echo site_url('app/page/edit/mobil/'.$m->kode_mobil); ?>" title="Modifikasi" class="btn btn-success btn-outline btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a href="<?php echo site_url('app/hapusMobil/'.$m->kode_mobil); ?>" title="Hapus" class="btn btn-danger btn-outline btn-sm" onclick="return confirm('Apa Anda Yakin Ingin Menghapus ?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
    </table>
 </div>

</div>
</section>
                        </div>
                    </div>
                </div>
                <!-- /content wrapper -->
            </section>