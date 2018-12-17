
<html>
  <head><title></title>
      <link href="../assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
      
  </head>

  <body background="../assets/images/baru1.jpg" width="100px">
    
    <BR>
    <BR>
    <BR>
    <BR>
    <BR>
    <BR>
    <BR>
    <BR>
    
  <div class="container">
    <div class="col-sm-6">
      <div class="panel panel-default col-sm-12" style="box-shadow: 12px 12px 25px" >
        
        <div class="panel-heading"><span class="glyphicon glyphicon-lock"></span> Login</div>
          
          <div class="panel-body">
            <form action="cek_login.php" class="form-horizontal" method="post">
              <div class="form-group">
                <label class="col-sm-6 control-label">Username</label>
                <div class="col-sm-12"><input type="text" name="username" class="form-control" Placeholder=" Input Username" required="required"></div>
              </div>
              <div class="form-group">
                <label class="col-sm-6  control-label">Password</label>
                <div class="col-sm-12"><input type="password" name="password" class="form-control"  placeholder="Input Password" required="required"></div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-warning" name="btn_login">Masuk</button>
                  <button type="reset" class="btn btn-danger">Batal</button>
                </div>
              </div>
            </form>
          </div>

        <div class="panel-footer">
        </div>

      </div>
    </div>
  </div>
  
  
      
</body>
</html>