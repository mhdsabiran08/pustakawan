<div class="row isi">
  	<div class="col-md-12 panel-warning">
    	<div class="content-box-header panel-heading">

      		<div class="panel-title ">Data Surat Masuk</div>

	    </div>

	    <div class="content-box-large box-with-header">

	    	<div class="panel-body">

				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

					<thead>
						<tr>
							<th width="5%" class="text-center">No.</th>
							<th width="35%" class="text-center">Informasi Surat</th>
							<th class="text-center">Foto Surat</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>

						<?php

							$data = "SELECT *FROM catatan_surat WHERE status_surat = 'surat masuk' order By id_surat asc";
							$query = mysql_query($data);
							$index = 0;

							while($r = mysql_fetch_array($query)) //mulai looping
			                {
			                    $index++;
			            ?>
						<tr class="gradeA">
							<td class="text-center tengah"><?php echo $index ?></td>
							<td class="tengah">
								<div class="col-md-2">
									Nomor
								</div>
								<div class="col-md-9">
									: &nbsp;<?php echo $r['nomor_surat']?>
								</div><br\>
								<div class="col-md-2">
									Perihal
								</div>
								<div class="col-md-9">
									: &nbsp;<?php echo ucfirst($r['perihal_surat'])?>
								</div><br\>
								<div class="col-md-2">
									Tanggal
								</div>
								<div class="col-md-9">
									: &nbsp;<?php echo date('d-m-Y',strtotime($r['tanggal_surat']))?>
								</div>
							</td>
							<td class="text-center tengah">
								<?php
									if ($r['foto_surat']==""){
										?>
										<img src="assets/image/holder.png" alt="" width="150px">
										<?php

									}
									else{

										?>
										<img src="storage/<?php echo $r['foto_surat']; ?>" width="150px" alt="">
										<?php

									}

								?>
							</td>
							<td class="text-center tengah">
								<div class="btn-group">
                                    <a href="index.php?p=edit-surat&id_surat=<?php echo $r['id_surat']; ?>" class="btn btn-info btn-xs">
                                    	<i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="index.php?p=hapus-surat&id_surat=<?php echo $r['id_surat']; ?>" class="btn btn-danger btn-xs">
                                    	<i class="fa fa-times"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<?php
							} //tutup looping
						?>
					</tbody>

				</table>

			</div>

	  	</div>
  	</div>
</div>




