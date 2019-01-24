<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/image/icon.ico">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="assets/css/styles.css" rel="stylesheet">

  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">Aplikasi Pustakawan</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content-login container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>LOGIN</h6>
                            <hr class="left">
                            <?php if (isset($_GET['error'])): ?>
          			                <div class="alert alert-warning alert-dismissible" role="alert">
                									<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                									<strong>Username atau password salah!</strong>
          								      </div>
			                      <?php endif ?>

                            <form action="engine/auth.php" method="POST">
                            	    <input class="form-control" type="text" name="username" placeholder="Username" autofocus>
				                          <input class="form-control" type="password" name="password" placeholder="Password">
                                  <select class="form-control" name="level">
                                    <option value="">-- Pilih --</option>
                                    <option value="1">Administrator</option>
                                    <option value="2">Operator</option>
                                  </select>
          				                <div class="action">
          				                    <button type="submit" class="btn btn-success signup">Login </button>
          				                </div>
                            </form>
                        <br><br>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
