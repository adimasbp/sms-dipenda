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
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
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

				<a class="navbar-brand" href="index.php">DIPENDA</a>
				
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">	
					<li><a href="#" data-toggle="modal" data-target="#contact"><i class="fa fa-pencil fa-fw fa-fw"></i>Tulis Pesan</a></li>			
					<li><a href="inbox.php"><i class="fa fa-inbox fa-fw"></i>Pesan Masuk</a></li>
					<li><a href="sentitems.php"><i class="fa fa-envelope-o fa-fw"></i>Pesan Keluar</a></li>
					<li><a href="pengaturan.php"><i class="fa fa-cog fa-fw"></i>Pengaturan</a></li>
					<li class="dropdown">
                     <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i><? echo $_SESSION['username'] ?><i class="caret"></i></a>
                         <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
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

		<div class="jumbotron">
			<h1>Aplikasi SMS Gateway</h1>
			<p>
				Dinas Pendapatan Provinsi Lampung 
				<img src="">
			</p>

		</div>
		
	</div>
	
</div>

	

</div>




<!--footer-->
	<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    		
    			<font color="#A30006"><img alt="Brand" src="img/lampungkecil.png"> DINAS PENDAPATAN PROVINSI LAMPUNG</font>
    		</div>
    		<div class="navbar-text pull-right">
    		
    		</div>
    	</div>
    </div>


    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>