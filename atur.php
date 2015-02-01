<?php
include('cek-login.php');
?>

<!DOCTYPE html>
<html class="no-js">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fa/font-awesome.css">
</head>
<body>

	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target-".navbar-collapse">
					<span class="sr-only">toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">DISPENDA</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">	
					<li><a href="#" data-toggle="modal" data-target="#contact">Tulis Pesan</a></li>			
					<li><a href="inbox.php">Pesan Masuk</a></li>
					<li><a href="sentitems.php">Pesan Keluar</a></li>
					<li><a href="pengaturan.php">Pengaturan</a></li>
					<li class="dropdown">
                     <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i><? echo $_SESSION['username'] ?><i class="caret"></i></a>
                         <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="logout.php">Logout</a>
                            </li>
                         </ul>
                	</li>	

				</ul>
				

			</div>
			
		</div>
	

	</div>





</div>
</div>
<?php include "ketik-pesan.php";?>

<!--jumbotron-->
<br/><br/>
<div class="container">
	<div class="row">
		<div class="com-md-12">
			<h2>Pengaturan</h2>			
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<img src="img/admin.png" />
			
		</div>
		<div class="col-md-4">
			<img src="img/admin.png" />
			
		</div>
		
		<div class="col-md-4">
			<img src="img/admin.png" />
			
		</div>
		
		
	</div>
	

</div>




<!--footer-->
	<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<font color="#A30006">DINAS PENDAPATAN PROVINSI LAMPUNG</font>
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