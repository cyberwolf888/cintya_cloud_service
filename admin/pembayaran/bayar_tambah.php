

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Halaman Admin
                    </a>
                </li>
                <li>
                    <a href="../dt_admin.php">Data Admin</a>
                </li>
                <li>
                  	<a href="../dt_member.php">Data Member</a>
                </li>
                <li>
                    <a href="../dt_bayarmember.php">Data Pembayaran</a>
                </li>
                <li>
                    <a href="../dt_layanan.php">Layanan</a>
                </li>
               
                <li>
                    <a href="../layanan/logout.php">Logout</a>
                </li>
            </ul>
      </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <h1 class="sub-header">Tambah Data Bayar</h1>
                    
                    <form name="tambah" method="post" action="bayar_tambahproses.php" class="form-horizontal">
	<div class="form-group">
		<label class="label-control col-md-2">Nama </label>	
		<div class="col-md-4">
			<input type="text" class="form-control"  name="nama" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<label class="label-control col-md-2">Tanggal Bayar</label>	
		<div class="col-md-4">
			<input type="text" class="form-control"  name="tgl_bayar" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<label class="label-control col-md-2">Jumlah Bayar</label>	
		<div class="col-md-4">
			<input type="text" class="form-control"  name="jml_bayar" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-2 col-md-offset-2">
			<input type="submit" name="tambah" value="Tambah" class="btn btn-primary">
		</div>
	</div>
</form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
