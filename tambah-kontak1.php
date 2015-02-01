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
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tulis Pesan</h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#PS" data-toggle="tab">Kirim Pesan Single</a></li>
            <li><a href="#PB" data-toggle="tab">Kirim Pesan Broadcast</a></li>
            <li><a href="#KT" data-toggle="tab">Kontak</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="PS">
                <form class="form-horizontal "action="#">
                    <fieldset>
                        <legend></legend>              
                          <div class="control-group">
                            <label class="control-label">Masukan Nomor</label>
                              <div class="controls">
                                <input type="text" placeholder="Masukan Nomor">

                                <button type="submit" class="btn btn-default">Cari</button>
                              </div> 

                          </div>


                          <div class="control-group">
                            <label class="control-label">Masukan Pesan</label>
                              <div class="controls">
                                <textarea rows="10" cols="70">
                     


                                  
                                </textarea>

                          </div> 
                        </div>

                        <div class="control-group">
                        <div class="controls">
                        <br>
                          <input type="submit" value="Kirim" class="btn btn-primary">
                          <input type="reset" value="Batal" class="btn">                          

                          </div>
                        </div>
                    </fieldset>           
            </form>
                


            </div>
            <div class="tab-pane" id="PB">

            <form class="form-horizontal "action="#">
                    <fieldset>
                        <legend></legend>              
                          <div class="control-group">
                            <label class="control-label">Group Kontak</label>
                              <div class="controls">
                                <select>
                                <option>Dispenda</option>
                                <option>Ruangan IT</option>
                                <option>Ruangan Pajak</option>
                                <option>Ruangan Keuangan</option>


                                </select>

                              </div> 

                          </div>


                          <div class="control-group">
                            <label class="control-label">Masukan Pesan</label>
                              <div class="controls">
                                <textarea rows="10" cols="70">
                     


                                  
                                </textarea>

                          </div> 
                        </div>

                        <div class="control-group">
                        <div class="controls">
                        <br>
                          <input type="submit" value="Kirim" class="btn btn-primary">
                          <input type="reset" value="Batal" class="btn">                          

                          </div>
                        </div>
                    </fieldset>           
            </form>
                


            </div>
            <div class="tab-pane" id="KT">
                <div class="table-responsive">
                  <div class="table">
                  
                    


                  </div>
                  


                </div>
            </div>
        </div>
        <!--/tab-content-->


          </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>

