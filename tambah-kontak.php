<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/fa/font-awesome.css">
</head>
<body>
<!-- Modal Dialog Contact -->
<div class="modal fade" id="kontak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tulis Pesan</h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <form class="form-horizontal" name="input_user" method="post" action="insert-kontak.php"> 
                                      <fieldset>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Username</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="number" type="text" placeholder="nomor">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Password</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="nam" type="text" placeholder="nama">
                                          </div>
                                        </div>
                               
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                          <button type="reset" class="btn">Reset</button>
                                        </div>
                                      </fieldset>
                                    </form>
          


        </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>

</body>
</html>

