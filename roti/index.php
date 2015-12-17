<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cari Roti</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="index.php" class="logo">
          <span class="logo-mini"><b>RO</b>TI</span>
          <span class="logo-lg">ROTI</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span>
          </a>          
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header">  MENU</li>
            <li class="treeview">
              <a href="index.php">
                <i class="fa fa-search"></i> <span>Cari Roti</span> <i class=" pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="about.php">
                <i class="fa fa-users"></i> <span>About Us</span> <i class=" pull-right"></i>
              </a>
            </li>
          </ul>
        </section>
      </aside>
      
      <div class="content-wrapper">
        <section class="content-header">
          <h1>Cari Resep</h1>
        </section> 
          <section class="content">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="box box-default box-solid">
                          <div class="box-header with-border">
                              <h3 class="box-title">Cari Resep Kue</h3>
                          </div>
                          <div class="box-body">
                            <form method="GET" class="sidebar-form">
                              <div class="input-group">
                                  <input type="text" name="q" class="form-control" id="cari" placeholder="Cari Resep Roti . . ">
                                <span class="input-group-btn">
                                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                                </span>
                              </div>
                            </form>
                          </div>
                          <div class="box-footer">
                              
                              <div id="hasil"></div>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </div>      
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 0.1 Beta
        </div>
        <strong>Copyright &copy; 2015 </strong>| DGN | All rights reserved.
      </footer>
    </div>
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="bootstrap/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">            
        $(document).ready(function(){
            $("#cari").keyup(function(){
                var cari=$("input#cari").val();
                $.ajax({
                    type:"GET",
                    url:"cari.php",
                    data:"cari="+cari,
                    success:function(html){
                        $("#hasil").html(html);  
                    }
                });
            });
        });     
    </script>
    <script src="bootstrap/js/jquery-2.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="dist/js/app.min.js"></script>
  </body>
</html>
