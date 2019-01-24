<div class="row isi">
  	<div class="col-md-12 panel-warning">
    	<div class="content-box-header panel-heading">

      		<div class="panel-title ">Input Data</div>

	    </div>

	    <div class="content-box-large box-with-header">

	    	<div class="panel-body">

				<form class="form-horizontal" role="form" action="pemroses/insert.php" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label class="col-md-3 control-label">	Nomor Surat
						</label>
						<div class="col-md-5">
							<input type="text" name="nomor_surat" class="form-control" placeholder="nomor surat" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label"> Perihal Surat
						</label>
						<div class="col-md-5">
							<input type="text" name="perihal_surat" class="form-control" placeholder="perihal" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">	Tanggal Surat
						</label>
						<div class="col-md-3">
							<input type="text" name="tanggal" class="form-control" id="datepicker" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">	Instansi
						</label>
						<div class="col-md-5">
							<input type="text" name="instansi" class="form-control" placeholder="instansi" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">	Status Surat
						</label>
						<div class="col-md-3">
							<select class="form-control" name="status_surat">
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
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-8">
						  <button type="submit" class="btn btn-success pull-right">Simpan</button>
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


