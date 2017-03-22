<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome To Cloud Reservasi</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<nav class="navbar navbar-inverse"> 
    
    <!-- start menu -->
    <div class="container-fluid"> 
    	<div class="navbar-header"> 
        	<button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false"> 
            <span class="sr-only">Toggle navigation</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            </button> 
            <a href="#" class="navbar-brand">Brand</a> 
            </div> 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9"> 
            <ul class="nav navbar-nav"> 
            	<li class="active"><a href="#">Home</a></li> 
                <li><a href="#">Login</a></li> 
                <li><a href="#">Profile</a></li> 
             </ul> 
             </div> 
             </div> 
      </nav>
   <!-- end menu -->
    
  <div class="container">
  	
    <!-- start form registrasi -->
      <form class="form-horizontal">
          <fieldset>

              <!-- Form Name -->
              <legend>Form Registrasi</legend>

              <!-- Text input-->
              <form action="proses_login.php" method="post">
              <div class="form-group">
                  <label class="col-md-4 control-label" for="fn">Nama</label>
                  <div class="col-md-4">
                      <input id="nama" name="nama" type="text" placeholder="Nama" class="form-control input-md" required="">

                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-4 control-label" for="ln">Alamat</label>
                  <div class="col-md-4">
                      <input id="alamat" name="alamat" type="text" placeholder="Alamat" class="form-control input-md" required="">

                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-4 control-label" for="ln">Telepon</label>
                  <div class="col-md-4">
                      <input id="telepon" name="telepon" type="text" placeholder="Telepon" class="form-control input-md" required="">

                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-4 control-label" for="ln">Email</label>
                  <div class="col-md-4">
                      <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">

                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-4 control-label" for="ln">Password</label>
                  <div class="col-md-4">
                      <input id="password" name="password" type="text" placeholder="Password" class="form-control input-md" required="">

                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-4 control-label" for="ln">Confirm Password</label>
                  <div class="col-md-4">
                      <input id="password" name="password" type="text" placeholder="Confirm Password" class="form-control input-md" required="">

                  </div>
              </div>

              <!-- Button -->
              <div class="form-group">
                  <label class="col-md-4 control-label" for="submit"></label>
                  <div class="col-md-4">
                      <button id="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                  </div>
              </div>
          </fieldset>
</form>

    </div>
    
   <!-- end form login -->
  </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>