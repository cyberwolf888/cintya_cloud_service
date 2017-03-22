

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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">

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
                   <a href="dashboard.php">
                        Halaman Admin
                    </a>
                </li>
                <li>
                    <a href="dt_admin.php">Data Admin</a>
                </li>
                <li>
                  	<a href="dt_member.php">Data Member</a>
                </li>
                <li>
                    <a href="dt_bayarmember.php">Data Pembayaran</a>
                </li>
                <li>
                    <a href="dt_layanan.php">Layanan</a>
                </li>
				<li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
      </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <h1>Data Layanan</h1>
                    <a href="layanan/layanan_tambah.php" class="btn btn-primary">Tambah Data Layanan</a><br><br>
                        <table class="datatable-1 table table-striped table-bordered  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Id Layanan</th>
                                                <th>Nama Paket</th>
                                                <th>Harga Paket</th>
                                                <th>Durasi</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th> 
                                            </tr>
                                        </thead>
                                         <tbody>
                                        <?php
                                            include ("../koneksi.php");
                                            $query2 = "SELECT * FROM tb_layanan";
                                            $no=1;
                                            $result2=mysql_query($query2);
                                            while($row=mysql_fetch_array($result2))
                                            { ?>
													
											<tr>
												<td> <?php echo $no; ?> </td>
												<td> <?php echo $row['nama_paket']; ?> </td>
												<td> <?php echo "IDR ". number_format($row['harga_paket'],0,',','.'); ?> </td>
                                                <td> <?php echo $row['durasi']." Bulan"; ?> </td>
												<td> <?php echo $row['keterangan']; ?> </td>
		
                                                       
                                                       <td> 
			<a href="layanan/layanan_edit.php?id=<?php echo $row['id_layanan']; ?>" class="btn btn-primary btn-sm"> Edit </a>
			<a href="layanan/hapus.php?id=<?php echo $row['id_layanan']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
                                            </tbody>
                                    </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
