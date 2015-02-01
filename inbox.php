<!DOCTYPE html>
<html>
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
		<div class="container">
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













<div class="container -fluid">

<ul class="nav nav-tabs">
         <li class="active"><a href="#tab1" data-toggle="tab">Pesan Pajak</a></li>
         <li><a href="#tab2" data-toggle="tab">Pesan  Dipenda</a></li>
         
</ul>


	<div class="tab-content">
		<div class="tab-pane" active id="tab1">

	<div class="panel panel-default">
  <!-- Default panel contents-->
  <div class="panel-heading"><a href="inbox.php"><font color="white">Pesan Masuk</font></span> <span class="badge">1</span></a></div>
  <button type="button" class="btn btn-default navbar-btn"><i class="fa fa-refresh fa-spin fa-fw"></i>Refresh</button>


<table class="table table-bordered table-striped">
<thead>
	<tr>
 		<th>No</th>
 		<th>Pengirim </th>
 		<th>Pesan </th> 
 		<th> Proses</th>
	</tr>
</thead>

<tbody>
	<tr>
		<td>1</td>
		<td>08127340890</td>
		<td>Dipenda Siap pak</td>
		<td>
			
			<button type="submit" class="btn btn-primary"><i class="fa fa-reply fa-fw"></i></i>Balas</button>
			<button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i>Hapus</button>


				

			

			
		</td>


	</tr>
<tr>
		<td>2</td>
		<td>08567891123</td>
		<td>DIPENDA apa syarat untuk melakukan pemblokiran motor karna hilang dicuri</td>
		<td>
			
			<button type="submit" class="btn btn-primary"><i class="fa fa-reply fa-fw"></i></i>Balas</button>
			<button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i>Hapus</button>


				

			

			
		</td>


	</tr>
	<tr>
		<td>3</td>
		<td>08567273889</td>
		<td>DIPENDA lokasi samsat keliling ada dimana pak ?</td>
		<td>
			
			<button type="submit" class="btn btn-primary"><i class="fa fa-reply fa-fw"></i></i>Balas</button>
			<button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i>Hapus</button>


				

			

			
		</td>


	</tr>

</tbody>

</table>

</div>
<nav>
  <ul class="pager">
    <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>


		
		
	
</div>
</div>	
	




<div class="tab-content">
<div class="tab-pane" active id="tab2">



</div>
</div>		



</div> <!--container-->


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