<div class="row isi">
  	<div class="col-md-12 panel-default">
    	<div class="content-box-header panel-heading">

      		<div class="panel-title ">Dashboard</div>

	    </div>
      <?php if ($_SESSION['level'] == 1): ?>
        <div class="content-box-large box-with-header">
  	    	<div class="panel-body">
  	    		<div class="col-md-5">
  	    			<img src="assets/image/book.png" alt="" width="300px">
  	    		</div>
  		    	<ul class="col-md-6 nav nav-pills nav-stacked" style="margin-top: 100px">
  					<li class="active">
  						<a href="index.php?p=admin/user/home">
  						  <span class="badge pull-right counter">
                  <?php
                  $sql = "SELECT * FROM pengguna";
                  $query = mysqli_query($conn,$sql);
                  $data = mysqli_num_rows($query);
                  echo $data;
                   ?>
                </span>
  						  <h5 class="tiles">Pengguna</h5>
  						</a>
  					</li>
  					<li class="active">
  						<a href="index.php?p=admin/c-book/home">
  						  <span class="badge pull-right counter">
                  <?php
                  $sql = "SELECT * FROM kategori_buku";
                  $query = mysqli_query($conn,$sql);
                  $data = mysqli_num_rows($query);
                  echo $data;
                   ?>
                </span>
  						  <h5 class="tiles">Kategori Buku</h5>
  						</a>
  					</li>
  				</ul>
  			</div>
  	    </div>
      <?php endif; ?>
	    <?php if ($_SESSION['level'] == 2): ?>
        <div class="content-box-large box-with-header">
  	    	<div class="panel-body">
  	    		<div class="col-md-5">
  	    			<img src="assets/image/book.png" alt="" width="300px">
  	    		</div>
  		    	<ul class="col-md-6 nav nav-pills nav-stacked" style="margin-top: 100px">
  					<li class="active">
  						<a href="index.php?p=operator/member/home">
  						  <span class="badge pull-right">
                  <?php
                  $sql = "SELECT * FROM anggota";
                  $query = mysqli_query($conn,$sql);
                  $data = mysqli_num_rows($query);
                  echo $data;
                   ?>
                </span>
  						  <h5 class="tiles">Anggota</h5>
  						</a>
  					</li>
  					<li class="active">
  						<a href="index.php?p=operator/book/home">
  						  <span class="badge pull-right">
                  <?php
                  $sql = "SELECT * FROM buku";
                  $query = mysqli_query($conn,$sql);
                  $data = mysqli_num_rows($query);
                  echo $data;
                   ?>      
                </span>
  						  <h5 class="tiles">Buku</h5>
  						</a>
  					</li>
            <li class="active">
  						<a href="index.php?p=operator/borrow/home">
  						  <span class="badge pull-right">
                  <?php
                  $sql = "SELECT * FROM pinjam";
                  $query = mysqli_query($conn,$sql);
                  $data = mysqli_num_rows($query);
                  echo $data;
                   ?>      
                </span>
  						  <h5 class="tiles">Peminjaman</h5>
  						</a>
  					</li>
  				</ul>
  			</div>
  	    </div>
	    <?php endif; ?>
	  </div>

  </div>
</div>
