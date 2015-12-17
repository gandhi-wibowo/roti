<?php
include 'include/con.php';
$id = $_GET['id'];
$query = "SELECT * FROM cake WHERE id_cake='$id'";
$quer = "SELECT * FROM bahan WHERE id_cake='$id'";
$result = mysql_query($query);
$resul = mysql_query($quer);
$row = mysql_fetch_array($result);


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detail</title>
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
          <h1></h1>
        </section> 
          <section class="content">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="box box-default box-solid">
                          <div class="box-header with-border">
                              <h3 class="box-title">Detail Kue</h3>
                          </div>
                          <div class="box-body">
                              
                              
                            <div class="post">
                              <div class='user-block'>
                                <span class='username'><?php echo $row['nama_cake'] ?></span>
                                <span class='description'><?php echo $row['tgl']." : ".$row['jam']; ?></span>                              
                                <span class='description'><?php echo $row['deskripsi'] ?></span>                              
                              </div>
                              <div class='row margin-bottom'>
                                <div class='col-sm-6'>
                                  <img class='img-responsive' src='dist/img/roti/<?php echo $row['gambar'] ?>' alt='Photo'>
                                </div>
                                <div class='col-sm-6'>
                                    
                                    
                                <div class="row">
                                 <div class="col-xs-12">
                                   <div class="box">
                                     <div class="box-header">
                                       <h3 class="box-title">Bahan Bahan : <?php echo $row['nama_cake'] ?></h3>                  
                                     </div>
                                     <div class="box-body table-responsive no-padding">
                                       <table class="table table-hover">
                                           <?php
                                           while($r = mysql_fetch_array($resul)){
                                               echo "<tr>"
                                                       . "<td style='width:20px;'>".$r['jumlah_bahan']."</td>"
                                                       . "<td style='width:70px;'>";
                                                            if($r['satuan_bahan']==1){
                                                                echo "Gram";
                                                            }
                                                            elseif($r['satuan_bahan']==2){
                                                                echo "Mili";
                                                            }
                                                            elseif($r['satuan_bahan']==3){
                                                                echo "Butir";
                                                            }
                                                            elseif($r['satuan_bahan']==4){
                                                                echo "SDT";
                                                            }
                                                            elseif($r['satuan_bahan']==5){
                                                                echo "SDM";
                                                            }
                                                            elseif($r['satuan_bahan']==6){
                                                                echo "Bungkus";
                                                            }                                                       
                                                    echo "</td>"
                                                       . "<td>".$r['nama_bahan']."</td>"
                                                       . "</tr>";
                                           }

                                           ?>
                                       </table>
                                     </div>
                                   </div>
                                 </div>
                                </div>                                    
                                </div>                       
                              </div>
                            </div>
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
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="dist/js/app.min.js"></script>
  </body>
</html>
