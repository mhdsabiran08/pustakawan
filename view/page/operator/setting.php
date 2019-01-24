<div class="row isi">
  	<div class="col-md-12 panel-deafult">
    	<div class="content-box-header panel-heading">

      		<div class="panel-title ">Pengaturan</div>

	    </div>

	    <?php
        ?>

	    <div class="content-box-large box-with-header">
	    	<div class="panel-body">
	    		<div class="col-md-5">
	    			<img src="assets/image/operator.jpg" alt="" width="300px">
	    		</div>

	    		<div class="col-md-7">

	    			<div class="panel panel-info">
						<div class="panel-heading" style="height:40px">
							<h3 class="panel-title">Ubah username/password</h3>
						</div>
						<div class="panel-body">

							<?php
					            $id_pengguna =  $_SESSION['id_pengguna'];
					            $sql = "SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'";
					            $query = mysqli_query($conn,$sql);
					            $data = mysqli_fetch_array($query);

					        ?>

							<form class="form-horizontal" role="form" action="engine/operator/setting.php" method="post">
								<?php

									if (isset($_GET['error'])) {
										$error = $_GET['error'];
										if ($error==1) {
											?>
											<div class="alert alert-warning alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<strong>Salah memasukkan password lama!</strong>
											</div>

											<?php
										}
										elseif($error==2)
										{
											?>
											<div class="alert alert-warning alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<strong>Password konfirmasi tidak cocok!!</strong>
											</div>

											<?php
										}
										else{
											?>
											<div class="alert alert-warning alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<strong>Panjang password minimal 6 karakter!!</strong>
											</div>

											<?php
										}
									}

								?>

								<input type="hidden" name="id_pengguna" value="<?php echo $_SESSION['id_pengguna'] ?>">

								<div class="form-group">
									<label class="col-md-3 control-label">	Username
									</label>
									<div class="col-md-8">
										<input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" placeholder="username" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Password Lama
									</label>
									<div class="col-md-8">
										<input type="password" name="password_lama" class="form-control" placeholder="password lama" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Password Baru
									</label>
									<div class="col-md-8">
										<input type="password" name="password_baru1" class="form-control" placeholder="isi jika ingin mengubah password">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Konfirmasi Password Baru
									</label>
									<div class="col-md-8">
										<input type="password" name="password_baru2" class="form-control" placeholder="isi jika ingin mengubah password">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-11">
									  <button type="submit" class="btn btn-info pull-right">Update</button>
									</div>
								</div>
							</form>
						</div>
					</div>

	    		</div>


			</div>
	    </div>
	  </div>

  </div>
</div>
