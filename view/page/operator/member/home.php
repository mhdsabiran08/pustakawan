<div class="row isi">
  	<div class="col-md-12 panel-default">
    	<div class="content-box-header panel-heading">

      		<div class="panel-title ">Anggota</div>

	    </div>

	    <div class="content-box-large box-with-header">

	    	<div class="panel-body">
          <!-- Button trigger modal Tambah Pengguna-->
          <button class="btn btn-default" data-toggle="modal" data-target="#tambah" style="margin-bottom: 10px;">
              <i class="fa fa-user-plus"></i> Tambah Anggota
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
                              Form Tambah Anggota
                          </h4>
                      </div>

                      <!-- Modal Body -->
                      <div class="modal-body">

                          <form role="form" action="engine/operator/member/insert.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required/>
                            </div>
                            <div class="form-group">
                              <label>NPM</label>
                                <input type="text" class="form-control" name="npm" placeholder="NPM" required/>
                            </div>
                            <div class="form-group">
                              <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required/>
                            </div>
                            <div class="form-group">
                              <label>Tanggal Lahir</label>
                                <input id="datepicker" type="text" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" required/>
                            </div>
                            <div class="form-group">
                              <label>Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3" cols="80" placeholder="Alamat" required></textarea>
                            </div>
                            <div class="form-group">
                              <label>Angkatan</label>
                                <input type="text" class="form-control" name="angkatan" placeholder="Angkatan" required/>
                            </div>
                            <div class="form-group">
                              <label>Nomor Handphone</label>
                                <input type="text" class="form-control" name="no_hp" placeholder="Nomor Handphone" required/>
                            </div>
                            <div class="form-group">
                              <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                              <label>Foto</label>
                                <input type="file" class="btn btn-default" name="foto" accept="image/*" required/>
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
							<th width="25%" class="text-center">Nama Lengkap</th>
              <th width="20%" class="text-center">NPM</th>
              <th width="15%" class="text-center">Angkatan</th>
							<th width="20%" class="text-center">Foto</th>
							<th width="15%" class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>

						<?php

							$sql = "SELECT * FROM anggota";
							$query = mysqli_query($conn,$sql);
							$index = 0;

							while($data = mysqli_fetch_array($query)) //mulai looping
			                {
			                    $index++;
			            ?>
						<tr class="gradeA">
              <td class="text-center tengah"><?php echo $index ?></td>
              <td class="text-center tengah"><?php echo $data['nama_lengkap']; ?></td>
              <td class="text-center tengah"><?php echo $data['npm']; ?></td>
              <td class="text-center tengah"><?php echo $data['angkatan']; ?></td>
              <td class="text-center tengah">
                <?php if ($data['foto'] == ""): ?>
                  <img src="storage/person.png" alt="" class="img-responsive img-thumbnail" width="50px" height="80px">
                <?php endif; ?>
                <?php if ($data['foto'] != ""): ?>
                  <img src="storage/member/<?php echo $data['foto'] ?>" alt="" class="img-responsive img-thumbnail" width="50px" height="80px">
                <?php endif; ?>
              </td>
							<td class="text-center tengah">
								<div class="btn-group">
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#Detil<?php echo $data['id_anggota'] ?>">
                    <i class="fa fa-search"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#Edit<?php echo $data['id_anggota'] ?>">
                    <i class="fa fa-edit"></i>
                  </button>
                  <a href="index.php?p=admin/user/delete&id_pengguna=<?php echo $data['id_pengguna']; ?>" class="btn btn-sm btn-danger">
                    <i class="fa fa-trash"></i>
                  </a>
                </div>
							</td>
						</tr>

            <!-- Modal Detail -->
            <div id="Detil<?php echo $data['id_anggota'] ?>" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Detail Anggota</h4>
                  </div>
                  <div class="modal-body">
                    <p><img src="storage/member/<?php echo $data['foto'] ?>" alt="" class="img-responsive img-thumbnail" width="100px" height="100px"></p>
                    <p>Nama Lengkap : <?php echo $data['nama_lengkap']; ?></p>
                    <p>NPM : <?php echo $data['npm']; ?></p>
                    <p>Tempat Lahir : <?php echo $data['tempat_lahir']; ?></p>
                    <p>Tanggal Lahir :
                      <?php
                        require_once 'engine/TglIndo.php';
                        echo tgl_indo($data['tanggal_lahir']);
                       ?>
                    </p>
                    <p>Alamat : <?php echo $data['alamat']; ?></p>
                    <p>Angkatan : <?php echo $data['angkatan']; ?></p>
                    <p>Nomor Handphone : <?php echo $data['no_hp']; ?></p>
                    <p>Email : <?php echo $data['email']; ?></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>

            <!-- Modal Update -->
            <div id="Edit<?php echo $data['id_anggota'] ?>" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Edit Anggota</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="engine/operator/member/update.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                          <input type="text" class="form-control" value="<?php echo $data['nama_lengkap']; ?>" name="nama_lengkap" placeholder="Nama Lengkap" required/>
                      </div>
                      <div class="form-group">
                        <label>NPM</label>
                          <input type="text" class="form-control" value="<?php echo $data['npm']; ?>" name="npm" placeholder="NPM" required/>
                      </div>
                      <div class="form-group">
                        <label>Tempat Lahir</label>
                          <input type="text" class="form-control" value="<?php echo $data['tempat_lahir']; ?>" name="tempat_lahir" placeholder="Tempat Lahir" required/>
                      </div>
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                          <input id="datepicker" type="text" class="form-control" value="<?php echo date('m/d/Y', strtotime($data['tanggal_lahir'])); ?>" name="tanggal_lahir" placeholder="Tanggal Lahir" required/>
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                          <textarea class="form-control" name="alamat" rows="3" cols="80" placeholder="Alamat" required></textarea>
                      </div>
                      <div class="form-group">
                        <label>Angkatan</label>
                          <input type="text" class="form-control" name="angkatan" placeholder="Angkatan" required/>
                      </div>
                      <div class="form-group">
                        <label>Nomor Handphone</label>
                          <input type="text" class="form-control" name="no_hp" placeholder="Nomor Handphone" required/>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                          <input type="email" class="form-control" name="email" placeholder="Email" required/>
                      </div>
                      <div class="form-group">
                        <label>Foto</label>
                          <input type="file" class="btn btn-default" name="foto" accept="image/*" required/>
                      </div>
                      <button type="submit" class="btn btn-success">Tambah</button>
                    </form>
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
   $(document).ready(function () {
   $(".modal_edit").click(function(e) {
      var m = $(this).attr("id");
     $.ajax({
          url: "home.php",
          type: "GET",
          data : {modal_id: m,},
          success: function (ajaxData){
            $("#edit").html(ajaxData);
            $("#edit").modal('show',{backdrop: 'true'});
           }
         });
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
