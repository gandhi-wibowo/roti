<?php
include '../include/con.php';
session_start();
if($_SESSION['name']==NULL){
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_SESSION['name']; ?> [Roti]</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
            
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <img src="../dist/img/<?php echo $_SESSION['image']; ?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $_SESSION['name']; ?></span>
                      </a>
                      <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="../dist/img/<?php echo $_SESSION['image']; ?>" class="img-circle" alt="User Image">
                          <p>
                            <?php echo $_SESSION['name']; ?>
                            <small>Admin</small>
                          </p>
                        </li>
                        <li class="user-footer">
                          <div class="pull-right">
                              <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                          </div>
                        </li>
                      </ul>
                    </li>
                </ul>
            </div>
            
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="treeview">
              <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Daftar Roti</span> <i class=" pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="../about.php">
                <i class="fa fa-users"></i> <span>About Us</span> <i class=" pull-right"></i>
              </a>
            </li>
            
          </ul>
        </section>
      </aside>
      
      <div class="content-wrapper">
          
          <section class="content">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="box box-default box-solid">
                          <div class="box-header with-border">
                              <h3 class="box-title">Tambah Daftar Roti</h3>
                          </div>
                          <form class="form-horizontal form-group-sm" method="POST" action="in.php" enctype="multipart/form-data">
                              <div class="box-body">
                                  
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Nama Roti</label>
                                  <div class="col-xs-3">
                                      <input type="text" class="form-control" placeholder="Nama Roti" name="nm_roti">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Gambar</label>
                                  <div class="col-xs-3">
                                      <input type="file" class="form-control" name="image" >
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Deskripsi</label>
                                  <div class="col-xs-3">
                                      <textarea class="form-control" name="des_roti" ></textarea>
                                  </div>
                                </div>                                  
                              <div class="box-footer">                                   
                                  <?php
                                  for($i=1;$i<=15;$i++){
                                  ?>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label"> </label>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" name="nama_<?php echo $i;?>" placeholder="Nama Bahan ke <?php echo $i;?>">
                                    </div>                                      
                                    <div class="col-xs-1">
                                        <input type="number" style="width: 75px;" class="form-control" name="jumlah_<?php echo $i;?>" placeholder="Berapa">
                                    </div>                                      
                                    <div class="col-xs-3">
                                      <select name="satuan_<?php echo $i;?>" class="form-control select2" style="width: 90px;">
                                          <option value="1">Gram</option>
                                          <option value="2">Mili</option>
                                          <option value="3">Butir</option>
                                          <option value="4">SDT</option>
                                          <option value="5">SDM</option>
                                          <option value="6">Bungkus</option>
                                      </select>
                                    </div>
                                  </div>                                  
                                  <?php
                                  }
                                  ?>
                                  <button type="submit" name="submit" class="btn btn-info pull-right " style="margin-right: 5px;">
                                      <span class="fa fa-save"> Simpan</span>
                                  </button>
                               </div>
                          </form>
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
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="../bootstrap/js/jquery-2.1.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../dist/js/app.min.js"></script>
  </body>
</html>
