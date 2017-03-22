

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Member</title>

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
                <a href="dashboardmember.php">
                    Halaman Admin
                </a>
            </li>
            <li>
                <a href="#">Data Paket Tour</a>
            </li>
            <li>
                <a href="#">Data Transaksi</a>
            </li>
            <li>
                <a href="#">Profile</a>
            </li>
            <li>
                <a href="#">Laporan Penjualan</a>
            </li>
            <li>
                <a href="#">Logout</a>
            </li>
        </ul>
    </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <h1>Data Admin</h1>
                    <a href="admin/admin_tambah.php" class="btn btn-primary">Tambah Data Admin</a><br><br>
                        <table class="datatable-1 table table-striped table-bordered  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Id Admin</th>
                                                <th>Nama Admin</th>
                                                <th>Alamat</th>
                                                <th>Telepon</th>
                                                <th>Email</th>
                                                <th>Status</th> 
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                        <?php
                                            include ("../koneksi.php");
                                            $query2 = "SELECT * FROM tb_user WHERE type = 1";
                                            $no=1;
                                            $result2=mysql_query($query2);
                                            while($row=mysql_fetch_array($result2))
                                            { ?>
													
											<tr>
												<td> <?php echo $no; ?> </td>
												<td> <?php echo $row['nama']; ?> </td>
												<td> <?php echo $row['alamat']; ?> </td>
                                                <td> <?php echo $row['tlpn'] ?> </td>
												<td> <?php echo $row['email']; ?> </td>
                                                <td> <?php echo $row['status']==1?'Aktif':'Suspend'; ?> </td>
                                                       <td>
			<a href="admin/admin_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"> Edit </a>
			<a href="admin/hapusadmin.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
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
