
	  			<div class="row">
            <?php
              $id_kategori_buku = $_GET['id_kategori_buku'];
              $sql = "SELECT * FROM kategori_buku WHERE id_kategori_buku = '$id_kategori_buku'";
              $query = mysqli_query($conn, $sql);
              $data = mysqli_fetch_array($query);
             ?>
	  				<div class="col-md-6 panel-default">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Form Edit Kategori Buku</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
				  			<div>
                  <form action="engine/admin/c-book/update.php?id_kategori_buku=<?php echo $data['id_kategori_buku'] ?>" method="post">
									<fieldset>
										<div class="form-group">
											<label>Nama Kategori Buku</label>
											<input class="form-control" placeholder="Nama Kategori Buku" type="text" name="nama_kategori_buku" value="<?php echo $data['nama_kategori_buku'] ?>">
										</div>
									</fieldset>
									<div>
											<button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit </button>
                      <a href="index.php?p=admin/c-book/home" class="btn btn-default"><i class="fa fa-mail-reply"></i> Kembali </a>
									</div>
								</form>
							</div>
						</div>
			  		</div>
	  			</div>
