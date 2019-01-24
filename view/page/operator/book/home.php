<div class="row isi">
  	<div class="col-md-12 panel-default">
    	<div class="content-box-header panel-heading">

      		<div class="panel-title ">Anggota</div>

	    </div>

	    <div class="content-box-large box-with-header">

	    	<div class="panel-body">
          <!-- Button trigger modal Tambah Pengguna-->
          <button class="btn btn-default" data-toggle="modal" data-target="#tambah" style="margin-bottom: 10px;">
              <i class="fa fa-book"></i> Tambah Buku
          </button>

          <!-- Modal Tambah Pengguna -->
          <div class="modal fade" id="tambah" tabindex="-1" role="dialog"
               aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                          <button type="button" class="close"
                             data-dismiss="modal">
                                 <span aria-hidden="true">&times;</span>
                                 <span class="sr-only">Close</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">
                              Form Tambah Buku
                          </h4>
                      </div>

                      <!-- Modal Body -->
                      <div class="modal-body">

                          <form role="form" action="engine/operator/book/insert.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label>Judul</label>
                                <textarea class="form-control" name="judul" rows="2" cols="80" placeholder="Judul" required></textarea>
                            </div>
                            <div class="form-group">
                              <label>Pengarang</label>
                                <input type="text" class="form-control" name="pengarang" placeholder="Pengarang" required/>
                            </div>
                            <div class="form-group">
                              <label>Penerbit</label>
                                <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" required/>
                            </div>
                            <div class="form-group">
                              <label>Tahun Terbit</label>
                                <input id="datepicker" type="text" class="form-control" name="tahun" placeholder="Tahun Terbit" required/>
                            </div>
                            <div class="form-group">
                              <label>Stok</label>
                                <input type="text" name="stok" class="form-control" placeholder="Stok" required>
                            </div>
                            <div class="form-group">
                              <label>Kategori Buku</label>
                                <select class="form-control" name="id_kategori_buku">
                                  <option value=""> --Pilih-- </option>
                                  <?php
                                    $s = "SELECT * FROM kategori_buku";
                                    $q = mysqli_query($conn, $s);
                                    while ($r = mysqli_fetch_array($q)) {
                                   ?>
                                  <option value="<?php echo $r['id_kategori_buku'] ?>"><?php echo $r['nama_kategori_buku']; ?></option>
                                  <?php
                                    }
                                   ?>
                                </select>
                            </div>
                            <div class="form-group">
                              <label>Gambar Buku</label>
                                <input type="file" class="btn btn-default" name="gambar" accept="image/*" required/>
                            </div>
                            <button type="submit" class="btn btn-success">Tambah</button>
                          </form>


                      </div>

                      <!-- Modal Footer -->
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default"
                                  data-dismiss="modal">
                                      Close
                          </button>
                      </div>
                  </div>
              </div>
          </div>

				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

					<thead>
						<tr>
							<th width="5%" class="text-center">No.</th>
							<th width="41%" class="text-center">Judul</th>
              <th width="15%" class="text-center">Pengarang</th>
              <th width="10%" class="text-center">Penerbit</th>
              <th width="7%" class="text-center">Tahun</th>
              <th width="7%" class="text-center">Stok</th>
							<th width="15%" class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>

						<?php

							$sql = "SELECT * FROM buku";
							$query = mysqli_query($conn,$sql);
							$index = 0;

							while($data = mysqli_fetch_array($query)) //mulai looping
			                {
			                    $index++;
			            ?>
						<tr class="gradeA">
              <td class="text-center tengah"><?php echo $index ?></td>
              <td class="text-center tengah"><?php echo $data['judul']; ?></td>
              <td class="text-center tengah"><?php echo $data['pengarang']; ?></td>
              <td class="text-center tengah"><?php echo $data['penerbit']; ?></td>
              <td class="text-center tengah"><?php echo $data['tahun']; ?></td>
              <td class="text-center tengah"><?php echo $data['stok']; ?></td>
							<td class="text-center tengah">
								<div class="btn-group">
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#Pinjam<?php echo $data['id_buku'] ?>">
                    <i class="fa fa-sign-in"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal<?php echo $data['id_buku'] ?>">
                    <i class="fa fa-search"></i>
                  </button>
                  <a href="index.php?p=admin/user/update&id_pengguna=<?php echo $data['id_pengguna']; ?>" class="btn btn-sm btn-primary">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <a href="index.php?p=admin/user/delete&id_pengguna=<?php echo $data['id_pengguna']; ?>" class="btn btn-sm btn-danger">
                    <i class="fa fa-trash"></i>
                  </a>
                </div>
							</td>
						</tr>

            <!-- Modal Pinjam -->
            <div class="modal fade" id="Pinjam<?php echo $data['id_buku'] ?>" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="close"
                               data-dismiss="modal">
                                   <span aria-hidden="true">&times;</span>
                                   <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                                Form Peminjaman Buku <?php echo $data['id_buku']; ?>
                            </h4>
                        </div>

                        <!-- Modal Body -->
                        <div class="modal-body">

                            <form role="form" action="engine/operator/book/borrow.php" method="post">
                              <input type="hidden" name="id_buku" value="<?php echo $data['id_buku'] ?>">
                              <div class="form-group">
                                <label>NPM Anggota</label>
                                  <select class="form-control" name="id_anggota">
                                    <option value=""> -- Pilih -- </option>
                                    <?php
                                      $s = "SELECT * FROM anggota";
                                      $q = mysqli_query($conn,$s);
                                      while ($r = mysqli_fetch_array($q)) {
                                     ?>
                                     <option value="<?php echo $r['id_anggota'] ?>"><?php echo $r['npm'] ?></option>
                                     <?php
                                      }
                                      ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label>Tanggal Peminjaman</label>
                                  <input id="date" type="text" class="form-control" name="tgl_pinjam" placeholder="Tanggal Peminjaman" required/>
                              </div>
                              <button type="submit" class="btn btn-success">Proses</button>
                            </form>


                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"
                                    data-dismiss="modal">
                                        Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Detail -->
            <div id="myModal<?php echo $data['id_buku'] ?>" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Detail Buku</h4>
                  </div>
                  <div class="modal-body">
                    <p>Judul : <?php echo $data['judul']; ?></p>
                    <p>Pengarang : <?php echo $data['pengarang']; ?></p>
                    <p>Penerbit : <?php echo $data['penerbit']; ?></p>
                    <p>Tahun Terbit : <?php echo $data['tahun']; ?></p>
                    <p>Stok : <?php echo $data['stok']; ?></p>
                    <img src="storage/book/<?php echo $data['gambar'] ?>" alt="" class="img-responsive img-thumbnail" width="50px" height="80px">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>

						<?php
							} //tutup looping
						?>
					</tbody>

				</table>

	  	</div>
  	</div>
</div>
<script type="text/javascript">
    $(function () {
        $('#datepicker').datetimepicker({
          format: 'YYYY'
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#datepicker').datetimepicker({
          format: 'MM/DD/YYYY'
        });
    });
</script>
