<?php

session_start();

include "../function/koneksi.php";
include "cekadmin.php";
$u = mysqli_query($conn, "SELECT * FROM admin WHERE id_admin = '$_SESSION[id_user]'");
$user = mysqli_fetch_assoc($u);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Master Gym</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" type="image/x-icon" href="../images/logo.jpg" />

        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="../assets/fonts/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="../assets/fonts/ionicons/css/ionicons.min.css" />

        <link rel="stylesheet" href="../assets/js/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="../assets/js/daterangepicker/daterangepicker.css">

        <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../assets/css/_all-skins.min.css">
        <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        
        <!-- EasyUI Style -->
        <link rel="stylesheet" href="../assets/css/metro/easyui.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />

        <link rel="stylesheet" href="../plugins/select2/select2.min.css">

        <script src="../assets/js/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="../assets/js/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/js/datatables/dataTables.bootstrap.min.js"></script>
    
    <style type="text/css">
        .content-wrapper, 
        .right-side, 
        .main-footer,
        .main-header>.navbar{
          margin-left: 170px;
        }

        .main-sidebar, 
        .left-side,
        .main-header .logo{
          width: 170px;
        }
    </style>
        
    </head>
    <body class="hold-transition skin-blue sidebar-mini fixed">
        <div class="wrapper">
            <header class="main-header">
                <a href="" class="logo">
                    <span class="logo-mini" ><img src="../images/logo.jpg" style="border: none;" width="32" alt="MG" /></span>
                    <span class="logo-lg">Master Gym<font size="1pt"></font></span>
                </a>

                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.php?page=profil&idp=<?php echo $_SESSION['id_user'] ?>&lv=<?php echo $_SESSION['level_user'] ?>" title="Profile">
                                    <i class="glyphicon glyphicon-user"></i> &nbsp;
                                    <span class="hidden-xs"><?=$user['nama'];?></span> 
                                </a>                            
                            </li>
                            <li>
                                <a href="../logout.php" title="Logout">
                                    <i class="glyphicon glyphicon-log-out"></i> &nbsp;
                                    <span class="hidden-xs">Logout</span> 
                                </a>                            
                            </li>
                        </ul>
                    </div><!-- /.navbar-custom-menu -->
                </nav>
            </header>

            <?php include'menu.php'; ?>

        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php 
          if (isset($_GET['page'])) {
            switch ($_GET['page']) {
              case 'event':
                include 'event.php';
                break;
              case 'event_edit':
                include 'event_edit.php';
                break;
              case 'member':
                include 'pelanggan.php';
                break;
              case 'instruktur':
                include 'instruktur.php';
                break;
              case 'promo':
                include 'promo.php';
                break;
              case 'promo_edit':
                include 'promo_edit.php';
                break;
              case 'galeri':
                include 'galeri.php';
                break;
              case 'service':
                include 'servis.php';
                break;
              case 'profil':
                include 'profil.php';
                break;
              case 'kelas':
                include 'kelas.php';
                break;
              case 'rekam':
                include 'rekam.php';
                break;
              case 'user':
                include 'user.php';
                break;
              case 'jp':
                include 'jp.php';
                break;
            }
          } else {
        ?> 
         <section class="content-header">
          <h1>
            Home
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i> Home</li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">

                   <div class="col-md-3 text-center">
                    <img src="../images/logo.jpg" width="150px">
                </div>
                <div class="col-md-6"><center><h1><p>Health Is Everithing<br> Fitness Center & Aerobic<br><b>MASTER GYM</b> </p></h1></center></div> <br><br><br><br><br><br><br><br><br><br>

                    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
                  
               <?php

                $query ="SELECT * FROM event";
                $sql= mysqli_query($conn,$query);
                $num_rows = mysqli_num_rows($sql);

                echo "$num_rows";

                ?>

              </h3>
              <p>Event</p>
            </div>
            <div class="icon">
              <i class="ion ion-flag"></i>
            </div>
            <a href="index.php?page=event" class="small-box-footer" title="Input Data">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
              
                <?php

                $query ="SELECT * FROM promo";
                $sql= mysqli_query($conn,$query);
                $num_rows = mysqli_num_rows($sql);

                echo "$num_rows";

                ?>

              </h3>

              <p>Promo</p>
            </div>
            <div class="icon">
              <i class="ion ion-pricetag"></i>
            </div>
            <a href="index.php?page=promo" class="small-box-footer" title="Input Data">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                 <?php

                $query ="SELECT * FROM user where level_user = 'user' ";
                $sql= mysqli_query($conn,$query);
                $num_rows = mysqli_num_rows($sql);

                echo "$num_rows";

                ?>

              </h3>

              <p>Tambah Member</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="index.php?page=user" class="small-box-footer" title="Input Data">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>
                 <?php

                $query ="SELECT * FROM user where level_user = 'instruktur' ";
                $sql= mysqli_query($conn,$query);
                $num_rows = mysqli_num_rows($sql);

                echo "$num_rows";

                ?>

              </h3>

              <p>Tambah Instruktur</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="index.php?page=user" class="small-box-footer" title="Input Data">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> <hr>
     


                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
                    
      <?php
        }
      ?>
      </div>
        

        <!-- JavaScript -->
        <script src="../assets/js/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="../assets/js/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/js/datatables/dataTables.bootstrap.min.js"></script>
        
        <script src="../assets/js/jquery.maskedinput.min.js"></script>
        <script src="../assets/js/daterangepicker/moment.min.js"></script>
        <script src="../assets/js/daterangepicker/daterangepicker.js"></script>
        <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>

        <script src="../assets/js/app.min.js"></script>
        <script src="../assets/js/sparkline/jquery.sparkline.min.js"></script>
        <script src="../assets/js/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/js/chartjs/Chart.min.js"></script>
        <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
        <script src="../plugins/select2/select2.full.min.js"></script>

        
        <script type="text/javascript">
            /* TODO : Delete this line, reason : not all page using Datatables */ 
            $(function () {
                $('#dtTbls').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "order": [[1, 'asc']],
                    "info": true,
                    "autoWidth": false
                });                
            });
        </script>

        

        <?php include "bundle_script.php"; ?>

        
     <footer class="main-footer">
      <div class="pull-right hidden-xs"></div>
      <strong>Copyright &copy; <?php echo date("Y") ?> Master Gym <a href="../assets/img/barbel.jpg">Abdul Malik K.</a></strong>
    </footer>   
    </body>
</html>