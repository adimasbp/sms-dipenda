<?php
include('cek-login.php');
include('config.php');
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
<?php include "tambah-kontak.php";?>


<div class="container">
	<div class="row clearfix">
		<div class>
			<div class="sidebar-nav">
				
			</div>
			
<!--/span-->

		</div>

	</div>
	

</div>


	<div class="container">
		<div class="row">
			<div align="col-md-12">

	<!--tab navigasi-->
	<ul class="nav nav-tabs">
         <li class="active"><a href="#tab1" data-toggle="tab">Pengelola</a></li>
         <li><a href="#tab2" data-toggle="tab">Kontak</a></li>
         <li><a href="#tab3" data-toggle="tab">SMS gateway</a></li>
	</ul>
				
	<!-- Tab isi-->
	<div class="tab-content">
		<div class="tab-pane" active id="tab1">
		<br/>
                <!--/span-->
               
                <div class="span10" id="content">
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
                    
					<div class="panel panel-default">
  		<div class="panel-heading"><a href="#"><font color="white">Daftar User</font></a></span>
    
  </div>
  <div class="panel-body">
    <div class="block-content collapse in">
                            	 <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Proses</th>
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
													<td><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i><a href="edit-user.php?id=<?php echo $data['id']; ?>"  ></a>Edit</button> <button class="btn btn-danger" <i class="fa fa-trash fa-fw"><a href="delete-user.php?id=<?php echo $data['id']; ?>" ></a> Hapus</button></td>
												</tr>
											<?php
												$no++;
											}
											?>
                                        </tbody>
                                    </table>
                            </div>
                            <div class="navbar navbar-inner block-header">
                            	 <button type="submit" class="btn btn-default"><i class="fa fa-user-plus"></i></span><a href="tambah-user.php">Tambah</button>
                            </div>
                        </div>
  </div>

                 
                </div>
            

            
        
		</div>

<!-- tab KONTAK-->

		<div class="tab-pane" id="tab2">
					<br/>
				
			<div class="panel panel-default">
					<div class="panel-heading"><a href="#"><font color="white">Daftar Kontak / Grup </font></a></span> </div>
  					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal11" data-whatever="@mdo"><i class="fa fa-users"></i>Tambah Grup</button>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModa2" data-whatever="@fat"><i class="fa fa-pencil-square-o"></i>Edit Grup</button>
					<button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#exampleModa3" data-whatever="@fat"><i class="fa fa-trash fa-fw"></i>Hapus Grup</button>
  					
<div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Tambah Grup</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Nama Grup</label>
               <div class="form-group">
           
            <input type="text" class="form-control" id="recipient-name">
          </div>
          </div>
         
          
           
           

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
        <button type="button" class="btn btn-warning">keluar</button>
    </div>
  </div>
</div>

  </div>


  					<div class="panel-body">



    					<div class="panel panel-default">
 						 		<div class="panel-heading"><font color="white">Seluruh dispenda</font></div>
  							<div class="panel-body">
    							<div class="block-content collapse in">
                            	 	<table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nomor Hp</th>
                                                <th>Nama</th>
                                                <th>Proses</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
												<tr>

												<td align="center">1</td>
												<td align="center">08978957270</td>
												<td align="center">adimas</td>
											<td>
			
												<button type="submit" class="btn btn-primary"><i class="fa fa-pencil fa-fw fa-fw"></i>Tulis Pesan</button>
												<button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i>Hapus</button>

											</td>

													<!--<td><?php echo $no; ?>1</td>
													<td><?php echo $data['number']; ?>adimas</td>
													<td><?php echo $data['name']; ?>08978957270</td>
													<td><button class="btn btn-default" ><i <i class="fa fa-user-plus"></i></i><a href="edit-kontak.php?id=<?php echo $data['id']; ?>" >Edit</a></button> <button class="btn btn-default" ><i <i class="fa fa-user-plus"></i></i><a href="delete-user.php?id=<?php echo $data['id']; ?>" >Hapus</a></button></td>
												-->
												</tr>
											<tr>

												<td align="center">2</td>
												<td align="center">0897900012</td>
												<td align="center">Bagus Prio</td>
											<td>
			
												<button type="submit" class="btn btn-primary"><i class="fa fa-pencil fa-fw fa-fw"></i>Tulis Pesan</button>
												<button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i>Hapus</button>
											</td>

													<!--<td><?php echo $no; ?>1</td>
													<td><?php echo $data['number']; ?>adimas</td>
													<td><?php echo $data['name']; ?>08978957270</td>
													<td><button class="btn btn-default" ><i <i class="fa fa-user-plus"></i></i><a href="edit-kontak.php?id=<?php echo $data['id']; ?>" >Edit</a></button> <button class="btn btn-default" ><i <i class="fa fa-user-plus"></i></i><a href="delete-user.php?id=<?php echo $data['id']; ?>" >Hapus</a></button></td>
												-->
												</tr>
											<tr>

												<td align="center" >3</td>
												<td align="center">0897998923</td>
												<td align="center">Joko Kurniawan</td>
											<td>
												<button type="submit" class="btn btn-primary"><i class="fa fa-pencil fa-fw fa-fw"></i>Tulis Pesan</button>
												<button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i>Hapus</button>
											</td>

													<!--<td><?php echo $no; ?>1</td>
													<td><?php echo $data['number']; ?>adimas</td>
													<td><?php echo $data['name']; ?>08978957270</td>
													<td><button class="btn btn-default" ><i <i class="fa fa-user-plus"></i></i><a href="edit-kontak.php?id=<?php echo $data['id']; ?>" >Edit</a></button> <button class="btn btn-default" ><i <i class="fa fa-user-plus"></i></i><a href="delete-user.php?id=<?php echo $data['id']; ?>" >Hapus</a></button></td>
												-->
												</tr>
												</tr>
											<tr>

												<td align="center">4</td>
												<td align="center">0897998111</td>
												<td align="center">Made Oki</td>
											<td>
											<button type="submit" class="btn btn-primary"><i class="fa fa-pencil fa-fw fa-fw"></i>Tulis Pesan</button>
											<button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i>Hapus</button>

											</td>

													<!--<td><?php echo $no; ?>1</td>
													<td><?php echo $data['number']; ?>adimas</td>
													<td><?php echo $data['name']; ?>08978957270</td>
													<td><button class="btn btn-default" ><i <i class="fa fa-user-plus"></i></i><a href="edit-kontak.php?id=<?php echo $data['id']; ?>" >Edit</a></button> <button class="btn btn-default" ><i <i class="fa fa-user-plus"></i></i><a href="delete-user.php?id=<?php echo $data['id']; ?>" >Hapus</a></button></td>
												-->
												</tr>
												</tr>
											<tr>

												<td align="center">5</td>
												<td align="center">0897998090</td>
												<td align="center">Dimas Satria</td>
											<td>
			
												<button type="submit" class="btn btn-primary"><i class="fa fa-pencil fa-fw fa-fw"></i>Tulis Pesan</button>
												<button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i>Hapus</button>
											</td>

													<!--<td><?php echo $no; ?>1</td>
													<td><?php echo $data['number']; ?>adimas</td>
													<td><?php echo $data['name']; ?>08978957270</td>
													<td><button class="btn btn-default" ><i <i class="fa fa-user-plus"></i></i><a href="edit-kontak.php?id=<?php echo $data['id']; ?>" >Edit</a></button> <button class="btn btn-default" ><i <i class="fa fa-user-plus"></i></i><a href="delete-user.php?id=<?php echo $data['id']; ?>" >Hapus</a></button></td>
												-->
												</tr>
											
                                        </tbody>
                                    </table>
                            	</div>
                            					<div class="navbar navbar-inner block-header">
                            	 				<button type="submit" class="btn btn-default"><i class="fa fa-user-plus"></i></span><a href="#" data-toggle="modal" data-target="#kontak">Tambah</a></button></div>
                        	</div>
						</div>
					</div>

		</div>

</div> 


<!-- tab sms gatewayy-->
<div class="tab-pane"  id="tab3">

<div class="panel panel-default">
  <div class="panel-body">
    
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Setting Modem</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModa2" data-whatever="@fat">Setting Database</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Setting Modem</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Modem:</label>
               <div class="form-group">
           
            <div class="input-group">
      <input type="text" class="form-control" placeholder="Masukan Nama modem">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">?</button>
      </span>
    </div>
          </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Port:</label>
               <div class="form-group">
          
            <div class="input-group">
      <input type="text" class="form-control" placeholder="Masukan Port Modem">
      <span class="input-group-btn">
<button type="button" class="btn btn-default" data-toggle="tooltip" title="Masukkan nomor port modem/hp. 
Contoh penulisan: com4 (dengan huruf kecil dan tanpa spasi apa-apa)">?
      </span>
    </div>
          </div>
          	
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Connection:</label>
            <div class="input-group">
      <input type="text" class="form-control" placeholder="Masukan Jenis Koneksi Modem">
      <span class="input-group-btn">
       <button type="button" class="btn btn-default" data-toggle="tooltip" title="Pilih jenis connection hp/modem Anda.">?
      </span>
    </div>
          </div>
           

        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-info" data-dismiss="modal">Tes Koneksi</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">keluar</button>
        <button type="button" class="btn btn-primary">SImpan</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Setting Database</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Username MySQL:</label>
               <div class="form-group">
           
            <input type="text" class="form-control" id="recipient-name">
          </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Password:</label>
               <div class="form-group">
           
            <input type="password" class="form-control" id="recipient-name">
          </div>
          	
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Host:</label>
           <div class="form-group">
           
            <input type="text" class="form-control" id="recipient-name">
          </div>
          </div>
           <div class="form-group">
            <label for="recipient-name" class="control-label">Database name:</label>
           <div class="form-group">
           
            <input type="text" class="form-control" id="recipient-name">
          </div>
          </div>
           

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Tes Database</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">keluar</button>
        <button type="button" class="btn btn-primary">SImpan</button>
    </div>
  </div>
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
    <script type="text/javascript">
    $('document').ready(function(){

    	$('#mytootip').tooltip();
    });


    </script>
    
</body>
</html>