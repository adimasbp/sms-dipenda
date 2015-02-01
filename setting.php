<?php
include('cek-login.php');
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Setting</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>

	<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php">Pengaturan</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><? echo $_SESSION['username'] ?><i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                   <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                      <ul class="nav">
                            <li class="active">
                                <a href="index.php">Admin</a>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Modem <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="barang.php">Barang</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="pesan.php">Pesan</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="pembeli.php">Pembeli</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="about-us.php">Tentang Kami</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="kontak.php">Kontak</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="slide.php">Slide</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="user.php">Daftar User</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>                        
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            
                <!--/span-->
                
                <div class="span9" id="content">
                	<?php
						if (!empty($_GET['message']) && $_GET['message'] == 'success') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Menambah User</h4>';
							echo '</div>';
						}
						else if (!empty($_GET['message']) && $_GET['message'] == 'update') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Update User</h4>';
							echo '</div>';
						}
						else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Delete User</h4>';
							echo '</div>';
						}
						
                  	?>
                    
					<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Daftar User </div>
                            </div>
                            <div class="block-content collapse in">
                            	 <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$query = mysql_query("select * from admin");
										 
											$no = 1;
											while ($data = mysql_fetch_array($query)) {
											?>
												<tr>
													<td><?php echo $no; ?></td>
													<td><?php echo $data['username']; ?></td>
													<td><?php echo md5($data['password']); ?></td>
													<td><a href="edit-user.php?id=<?php echo $data['id']; ?>" class="btn"><i class="icon-edit"></i> Edit</a> | <a href="delete-user.php?id=<?php echo $data['id']; ?>" class="btn"><i class="icon-trash"></i>Hapus</a></td>
												</tr>
											<?php
												$no++;
											}
											?>
                                        </tbody>
                                    </table>
                            </div>
                            <div class="navbar navbar-inner block-header">
                            	 <a href="tambah-user.php" class="btn"><i class="icon-plus"></i> Tambah</a>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                 
                </div>
            
            
            
        </div>
        <!--/.fluid-container-->

       <!--footer-->

    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<p>DINAS PENDAPATAN DAERAH LAMPUNG</p>
    		</div>
    		<div class="navbar-text pull-right">
    			<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
    			<a href="#"><i class="fa fa-twitter fa-2x"></i></a>
    			<a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
    		</div>
    	</div>
    </div>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>