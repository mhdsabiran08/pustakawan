<div class="row isi">
  	<div class="col-md-12 panel-warning">
    	<div class="content-box-header panel-heading">

      		<div class="panel-title ">Edit Data</div>

	    </div>

	    <div class="content-box-large box-with-header">

	    	<div class="panel-body">

	    		<?php
					$data = "SELECT *FROM catatan_surat where id_surat =".$_GET['id_surat']; //select
					$query = mysql_query($data); //query
				    $r=mysql_fetch_array($query); //data
				?>

				<form class="form-horizontal" role="form" action="pemroses/update.php?id_surat=<?php echo $r['id_surat']?>" method="post" enctype="multipart/form-data">

					<input type="hidden" name="old_foto_surat" value="<?php echo $r['foto_surat']; ?>"></input>

					<div class="form-group">
						<label class="col-md-3 control-label">	Nomor Surat
						</label>
						<div class="col-md-5">
							<input type="text" name="nomor_surat" class="form-control" placeholder="nomor surat" value="<?php echo $r['nomor_surat'] ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label"> Perihal Surat
						</label>
						<div class="col-md-5">
							<input type="text" name="perihal_surat" class="form-control" placeholder="perihal" value="<?php echo $r['perihal_surat'] ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">	Tanggal Surat
						</label>
						<div class="col-md-3">
							<input type="text" name="tanggal" class="form-control" id="datepicker" value="<?php echo date('d/m/Y',strtotime($r['tanggal_surat'])) ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">	Instansi
						</label>
						<div class="col-md-5">
							<input type="text" name="instansi" class="form-control" placeholder="instansi" value="<?php echo $r['instansi'] ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">	Status Surat
						</label>
						<div class="col-md-3">
							<select class="form-control" name="status_surat">
								<option value="<?php echo $r['status_surat'] ?>"><?php echo $r['status_surat'] ?></option>
								<option value="surat masuk">surat masuk</option>
								<option value="surat keluar">surat keluar</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">	Foto Surat
						</label>
						<div class="col-md-5">
							<input type="file" class="btn btn-default" id="exampleInputFile1" name="foto_surat" accept="image/*">
							<p>*pilih jika ingin mengubah gambar</p>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-8">
						  	<button type="submit" class="btn btn-success pull-right">Simpan</button>
						  	<?php
						  		if ($r['status_surat']=="surat masuk"){
						  			$url='index.php?p=surat-masuk';
						  		}
						  		else{
						  			$url='index.php?p=surat-keluar';
						  		}
						  	?>
							<div class="btn btn-info pull-right btn-back link_to" url="<?php echo $url ?>" id="back">Kembali</div>
						</div>
					</div>
				</form>

			</div>

	  	</div>
  </div>
</div>

<script>
	(function($) {
		$( "#datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });
	}) (jQuery);

</script>


