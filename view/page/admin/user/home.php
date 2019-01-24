<div class="row isi">
  	<div class="col-md-12 panel-default">
    	<div class="content-box-header panel-heading">

      		<div class="panel-title ">Pengguna</div>

	    </div>

	    <div class="content-box-large box-with-header">

	    	<div class="panel-body">
          <!-- Button trigger modal Tambah Pengguna-->
          <button class="btn btn-default" data-toggle="modal" data-target="#tambah" style="margin-bottom: 10px;">
              <i class="fa fa-user-plus"></i> Tambah Pengguna
          </button>

          <!-- Modal Tambah Pengguna -->
          <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                              Form Tambah Pengguna
                          </h4>
                      </div>

                      <!-- Modal Body -->
                      <div class="modal-body">

                          <form role="form" action="engine/admin/user/insert.php" method="post">
                            <div class="form-group">
                              <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap"/>
                            </div>
                            <div class="form-group">
                              <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                              <label>Password</label>
                                <input type="text" class="form-control" name="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                              <label>Level</label>
                                <select class="form-control" name="level">
                                  <option value="0">-- Pilih --</option>
                                  <option value="1">Administrator</option>
                                  <option value="2">Operator</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Tambah</button>
                          </form>


                      </div>

                      <!-- Modal Footer -->
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">
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
							<th width="30%" class="text-center">Nama Lengkap</th>
              <th width="30%" class="text-center">Username</th>
							<th width="15%" class="text-center">Level</th>
							<th width="20%" class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>

						<?php

							$sql = "SELECT * FROM pengguna";
							$query = mysqli_query($conn,$sql);
							$index = 0;

							while($data = mysqli_fetch_array($query)) //mulai looping
			                {
			                    $index++;
			            ?>
						<tr class="gradeA">
              <td class="text-center tengah"><?php echo $index ?></td>
              <td class="text-center tengah"><?php echo $data['nama_lengkap']; ?></td>
              <td class="text-center tengah"><?php echo $data['username']; ?></td>
							<td class="text-center tengah">
                <?php if ($data['level'] == 1): ?>
                  <?php echo "Administrator" ?>
                <?php endif; ?>
                <?php if ($data['level'] == 2): ?>
                  <?php echo "Operator" ?>
                <?php endif; ?>
              </td>
							<td class="text-center tengah">
								<div class="btn-group">
                  <a href="index.php?p=admin/user/update&id_pengguna=<?php echo $data['id_pengguna']; ?>" class="btn btn-primary">
                    <i class="fa fa-pencil"></i> Edit
                  </a>
                  <a href="index.php?p=admin/user/delete&id_pengguna=<?php echo $data['id_pengguna']; ?>" class="btn btn-danger">
                    <i class="fa fa-trash"></i> Hapus
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
