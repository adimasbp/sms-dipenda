<?php
session_start();
 
if (!empty($_SESSION['username'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
  
    
</head>
<?php
if (!empty($_GET['error'])) {
        if ($_GET['error'] == 1) {
            echo '<h3 align="center">Username dan Password belum diisi!</h3>';
        } else if ($_GET['error'] == 2) {
            echo '<h3 align="center">Username belum diisi!</h3>';
        } else if ($_GET['error'] == 3) {
            echo '<h3 align="center">Password belum diisi!</h3>';
        } else if ($_GET['error'] == 4) {
            echo '<h3 align="center">Username dan Password tidak terdaftar!</h3>';
        }
    }    

?>
<body>
<body id="login">

    

<div class="container">
      <div class="row">  
  <div class="col-md-4">
       <div class="panel panel-default">
       <div class="panel-body">
          <div class="page-header">
         <h3 align="">Login Area</h3>

         <div class="squiggly-border">
         </div>
      </div>
      <form name="login" action="autentifikasi.php" method="post" accept-charset="utf-8" role="form">
         <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-user"></i></span>
           <input type="text" class="form-control" name="username" placeholder="Enter username" required />
        </div>
         </div>
         <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
           <input type="password" class="form-control" name="password" placeholder="Password" required />
        </div>
         </div>
         <hr/>
         
         <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i></span> Login</button>
         <p>
</p>

      </form>
       </div>
    </div>
    
     </div>
  </div>
    </div>


</body>
</body>
            
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>