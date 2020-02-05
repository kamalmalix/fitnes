<?php

session_start();

include "../function/koneksi.php";
include "cekinstruktur.php";
$u = mysqli_query($conn, "SELECT * FROM instruktur WHERE kode_ins = '$_SESSION[id_user]'");
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
        
        <!-- EasyUI -->
        <script src="../assets/js/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="../assets/js/jQuery/jQuery-ui.js"></script>
        <script src="../assets/js/easyui/jquery.easyui.min.js"></script>
        <script src="../assets/js/easyui/datagrid-filter.js"></script>
        
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

            <?php include 'menu.php'; ?>
             
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <?php 
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'artikel':
                        include 'artikel.php';
                        break;
                    case 'artikel_edit':
                        include 'artikel_edit.php';
                        break;
                    case 'galeri':
                        include 'galeri.php';
                        break;
                    case 'about':
                        include 'about.php';
                        break;
                    case 'profil':
                        include 'profil.php';
                        break;
                    case 'event':
                        include 'event.php';
                        break;
                    case 'd_event':
                        include 'detail_event.php';
                        break;
                    case 'd_artikel':
                        include 'detail_artikel.php';
                        break;
                    case 'view_atk':
                        include 'view_atk.php';
                        break;    
                }
                
            }else { ?>

                <section class="content-header">
          <h1>
            Home
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i> Home</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-9">
            <div class="box box-warning">
            <div class="box-header">
            <a href="../instruktur/index.php?page=view_atk"><i class="fa fa-newspaper-o"> New Artikel</i></a><hr>
            
            <?php

              $query = mysqli_query ($conn, "SELECT * FROM artikel ORDER BY tgl_artikel DESC LIMIT 3");
              if($query == false){
                die ("Terjadi Kesalahan : ". mysqli_error($conn));
              }
              while ($atk = mysqli_fetch_array ($query)){ ?>
              <div class="row">
              <div class="col-md-5" align="center">
              <img src="../upload/artikel/<?php echo $atk['gambar']; ?>" width="350" height="200">
              </div>
              <div class="col-md-7">
              <a><?php echo date('l, d F Y ', strtotime($atk['tgl_artikel'])); ?></a> <br>
              <h3><a href="../instruktur/index.php?page=d_artikel&id=<?php echo $atk['id_artikel']; ?>"><?php echo $atk['judul_artikel']; ?></a></h3></div></div> <hr>

              <?php } ?>

            </div>
            </div>
            
            
            </div>

            <div class="col-md-3">
            <div class="box box-success">
            <div class="box-header">
              <a href="../instruktur/index.php?page=event"><i class="fa fa-bullhorn"> Event</i></a><hr>
              <?php

              $query = mysqli_query ($conn, "SELECT * FROM event ORDER BY tgl_event DESC LIMIT 3");
              if($query == false){
                die ("Terjadi Kesalahan : ". mysqli_error($conn));
              }
              while ($que = mysqli_fetch_array ($query)){ ?>
              <div>
              <a><?php echo date('l, d F Y ', strtotime($que['tgl_event'])); ?></a> <br>
              <h4><a href="../instruktur/index.php?page=d_event&id=<?php echo $que['id_event']; ?>"><?php echo $que['judul_event']; ?></a></h4> <hr> </div> 

              <?php } ?>
            </div>
            </div>
          </div><!-- /.row -->
          </div>
        </section><!-- /.content -->

         <?php } ?>
        
    </div><!-- /.content-wrapper -->      

        <!-- JavaScript -->
        
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
        
        <script>
          $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
          });
        </script>


    <footer class="main-footer" >
      <div class="pull-right hidden-xs"></div>
      <strong>Copyright &copy; <?php echo date("Y") ?> Master Gym <a href="../assets/img/barbel.jpg">Abdul Malik K.</a></strong>
    </footer>    
    </body>
</html>