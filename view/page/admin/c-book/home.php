
	  			<div class="row">
	  				<div class="col-md-6 panel-default">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Tabel Kategori Buku</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
				  			<div>
                  <div class="panel-body">
    		  					<table class="table table-hover">
    				              <thead>
    				                <tr>
    				                  <th width="3%">No</th>
    				                  <th width="57%">Nama Kategori Buku</th>
    				                  <th width="40%">Aksi</th>
    				                </tr>
    				              </thead>
    				              <tbody>
														<?php
															$sql = "SELECT * FROM kategori_buku";
															$query = mysqli_query($conn, $sql);
															$no = 0;
															while ($data = mysqli_fetch_array($query)) {
																$no++;
														 ?>
    				                <tr>
    				                  <td><?php echo $no; ?></td>
    				                  <td><?php echo $data['nama_kategori_buku']; ?></td>
    				                  <td>
																<a href="index.php?p=admin/c-book/update&id_kategori_buku=<?php echo $data['id_kategori_buku'] ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit </a>
																<a href="index.php?p=admin/c-book/delete&id_kategori_buku=<?php echo $data['id_kategori_buku'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus </a>
															</td>
    				                </tr>
														<?php
															}
														 ?>
    				              </tbody>
    				            </table>
    		  				</div>

							</div>
						</div>
			  		</div>

	  				<div class="col-md-6 panel-default">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Form Tambah Kategori Buku</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
				  			<div>
                  <form action="engine/admin/c-book/insert.php" method="post">
									<fieldset>
										<div class="form-group">
											<label>Nama Kategori Buku</label>
											<input class="form-control" placeholder="Nama Kategori Buku" type="text" name="nama_kategori_buku">
										</div>
									</fieldset>
									<div>
											<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan </button>
									</div>
								</form>
							</div>
						</div>
			  		</div>
	  			</div>
