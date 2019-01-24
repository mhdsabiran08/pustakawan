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
          <form role="form" action="engine/admin/user/update.php?id_pengguna=<?php echo $data['id_pengguna'] ?>" method="post">
            <div class="form-group">
              <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $data['nama_lengkap'] ?>" placeholder="Nama Lengkap"/>
            </div>
            <div class="form-group">
              <label>Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>" placeholder="Username"/>
            </div>
            <div class="form-group">
              <label>Password</label>
                <input type="text" class="form-control" name="password" value="<?php echo $data['password'] ?>" placeholder="Password"/>
            </div>
            <div class="form-group">
              <label>Level</label>
                <select class="form-control" name="level">
                  <option value="<?php echo $data['level'] ?>">
                    <?php if ($data['level'] == 1): ?>
                      <?php echo "Administrator" ?>
                    <?php endif; ?>

                    <?php if ($data['level'] == 2): ?>
                      <?php echo "Operator" ?>
                    <?php endif; ?>
                  </option>
                  <option value="1">Administrator</option>
                  <option value="2">Operator</option>
                </select>
            </div>
            <div class="pull-right">
              <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit </button>
              <a href="index.php?p=admin/user/home" class="btn btn-default"><i class="fa fa-mail-reply"></i> Kembali </a>
            </div>
          </form>
        </div>
  	</div>
</div>
