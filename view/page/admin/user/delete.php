<div class="row isi">
  	<div class="col-md-12 panel-default">
    	<div class="content-box-header panel-heading">

      		<div class="panel-title ">Pengguna</div>

	    </div>

	    <div class="content-box-large box-with-header">

	    	<div class="panel-body">
          <?php
            $id_pengguna = $_GET['id_pengguna'];
            $sql = "SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'";
            $query = mysqli_query($conn,$sql);
            $data = mysqli_fetch_array($query);
           ?>
          <form role="form" action="engine/admin/user/delete.php?id_pengguna=<?php echo $data['id_pengguna'] ?>" method="post">
            <div class="form-group">
              <label>Nama Lengkap</label>
                <input type="text" class="form-control" value="<?php echo $data['nama_lengkap'] ?>" readonly/>
            </div>
            <div class="form-group">
              <label>Username</label>
                <input type="text" class="form-control" value="<?php echo $data['username'] ?>" readonly/>
            </div>
            <div class="form-group">
              <label>Level</label>
              <?php if ($data['level'] == 1): ?>
                <input type="text" class="form-control" name="username" value="Administrator" readonly/>
              <?php endif; ?>

              <?php if ($data['level'] == 2): ?>
                <input type="text" class="form-control" name="username" value="Operator" readonly/>
              <?php endif; ?>
            </div>
            <div class="pull-right">
              <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus </button>
              <a href="index.php?p=admin/user/home" class="btn btn-default"><i class="fa fa-mail-reply"></i> Kembali </a>
            </div>
          </form>
        </div>
  	</div>
</div>
