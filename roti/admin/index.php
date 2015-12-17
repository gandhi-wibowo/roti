<?php
include '../include/con.php';
session_start();
if($_SESSION['name']==NULL){
    header("location:login.php");
}

$query = "SELECT * FROM cake";
$result = mysql_query($query);
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
                              <h3 class="box-title">Daftar Roti</h3>
                          </div>
                          <div class="box-body">
                            <div class="box-body table-responsive no-padding">
                                <a href="tambah.php" class="btn btn-warning pull-left" style="margin-left: 5px;"><i class="fa fa-plus-square-o"></i> Tambah Data</a>
                                <br>
                                <br>                 
                              <table class="table table-hover">
                                  <tr>
                                      <th>No</th>
                                      <th>Nama</th>
                                      <th>Tgl</th>
                                  </tr>
                                  <?php
                                  $i=1;
                                  while ($row = mysql_fetch_array($result)) {
                                      echo "<tr>"
                                              . "<td>".$i++."</td>"
                                              . "<td>".$row['nama_cake']."</td>"
                                              . "<td>".$row['tgl']."</td>"
                                          //    . "<td>"
                                          //    . "<a href='edit.php?=".$row['id_cake']."' class='btn-sm btn-info'><i class='fa fa-edit'>  Edit</i></a>   "
                                          //    . "<a href='hapus.php?=".$row['id_cake']."' class='btn-sm btn-danger'><i class='fa fa-trash'>  Hapus</i></a>"
                                          //    . "</td>"
                                              . "</tr>";
                                  }
                                  ?>
                              </table>
                            </div>                            
                          </div>
                          <div class="box-footer">
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
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="../bootstrap/js/jquery-2.1.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../dist/js/app.min.js"></script>
  </body>
</html>
