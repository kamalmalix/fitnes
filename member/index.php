<?php

session_start();

include "../function/koneksi.php";
include "cekuser.php";
$u = mysqli_query($conn, "SELECT * FROM pelanggan WHERE kode_member = '$_SESSION[id_user]'");
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
        <!-- <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css" /> -->
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
        <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
        
<style type="text/css">
#tableBodyScroll tbody {
display:block !important;
max-height:230px !important;
overflow-y:scroll !important;
}
#tableBodyScroll thead, tbody tr {
display:table;
width:100%;
table-layout:fixed;
}

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

.layout-boxed {
    background: url(../images/co.jpg) repeat fixed;
}
</style>
    
        
    </head>
    <body class="hold-transition skin-blue sidebar-mini layout-boxed fixed  ">
        <div class="wrapper">
            <header class="main-header">
                <a href="" class="logo">
                    <span class="logo-mini" ><img src="../images/logo.jpg" style="border: none;" width="32" alt="MG" /></span>
                    <span class="logo-lg"><font size="5pt" style=" color: white; text-shadow: 5px 5px 10px red; font-family:  Cursive">Master Gym</font></span>
                </a>

                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li><span class="hidden-xs"></span></li>
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
          
        <?php 
          include 'menu.php';
         ?>

        <div class="content-wrapper">

        <?php 
          if (isset($_GET['page'])) {
            switch ($_GET['page']) {
              case 'event':
                include 'even.php';
                break;
              case 'd_event':
                include 'detail_event.php';
                break;
              case 'artikel':
                include 'artikel.php';
                break;
              case 'd_artikel':
                include 'detail_artikel.php';
                break;
              case 'galeri':
                include 'galeri.php';
                break;
              case 'promo':
                include 'promo.php';
                break;
              case 'd_promo':
                include 'detail_promo.php';
                break;
              case 'about':
                include 'about.php';
                break;
              case 'profil':
                include 'profil.php';
                break;
              }
            }else { ?>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="../images/test2.png" alt="Healt" width="120%">
              </div>

              <div class="item">
                <img src="../images/or2.png" alt="OR" width="120%">
              </div>

              <div class="item">
                <img src="../images/act2.png" alt="OR" width="120%">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
            <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-line-chart"> Monitoring History</i>
                <button type="button" class="fa fa-question-circle" data-toggle="modal" data-target="#myModal"></button><!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Catatan Kesehatan !!</h4>
                      </div>
                      <div class="modal-body">
                          <?php include "info.php"; ?>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
              <br>
                  <table class="table table-striped table-bordered"  id="tableBodyScroll">
                      <thead style="background-color: aquamarine;">
                          <tr style="">
                              <th>Hari</th>
                              <th>Jam</th>
                              <th>Instruktur</th>
                              <th>BB</th>
                              <th>Kalori</th>
                              <th>Detak Jantung</th>
                              <th>Kegiatan</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php $m = mysqli_query($conn,"SELECT a.*, b.*, c.* FROM rekam a LEFT JOIN kelas b ON a.id_kelas = b.id_kelas LEFT JOIN instruktur c ON b.kode_ins=c.kode_ins WHERE kode_member = '$_SESSION[id_user]' ORDER BY id_rekam DESC"); 
                      while ($rekam = mysqli_fetch_array($m)) {
                          
                      ?>
                          <tr>
                              <td><?php echo date("d-M-Y",strtotime($rekam['tanggal'])); ?></td>
                              <td><?php echo date("H:i A",strtotime($rekam['tanggal']));  ?></td>
                              <td><?php echo $rekam['nama']?></td>
                              <td><?php echo $rekam['bb']." ". "kg"; ?></td>
                              <td><?php echo $rekam['kalori']; ?></td>
                              <td><?php echo $rekam['dj']; ?></td>
                              <td><?php echo $rekam['keterangan']; ?></td>
                            
                          </tr>
                      <?php } ?>
                      </tbody>
                  </table>

              <i class="fa fa-calendar"> Jadwal Aerobic</i>
                  <table class="table table-striped table-bordered" id="tableBodyScroll">
                      <thead style="background-color: #FFEBCD;">
                          <tr>
                              <th>Tanggal</th>
                              <th>Jam</th>
                              <th>Kelas</th>
                              <th>Instruktur</th>
                          </tr>
                      </thead>
                   
                      <tbody>
                      <?php if ($user['status'] == 2) {
                          $time = date('Y-m-d H:i:s');
                          $sq = mysqli_query($conn,"SELECT a.*, b.* FROM kelas a LEFT JOIN instruktur b ON a.kode_ins = b.kode_ins WHERE jadwal >= '$time'");
                          while ($jadwal = mysqli_fetch_assoc($sq)) {
                            
                       ?>
                          <tr>
                              <td><?php echo date("d-M-Y", strtotime($jadwal['jadwal'])) ?></td>
                              <td><?php echo date("H:i A", strtotime($jadwal['jadwal'])) ?></td>
                              <td><?php echo $jadwal['nama_kelas'];?></td>
                              <td><?php echo $jadwal['nama']; ?></td>
                          </tr>
                      <?php } } ?>
                      </tbody>
                         </table>

                 <div class="row">
                  <div class="col-md-6">
                    <div class="box box-success collapsed-box">
                      <div class="box-header with-border">
                        <i class="box-title fa fa-calendar"> Jadwal Fitness</i>

                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                          </button>
                        </div>
                        <!-- /.box-tools -->
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <table class="table table-striped table-bordered" id="tableBodyScroll">
                          <thead style="background-color: aquamarine;" >
                              <tr>
                                  <th class="col-md-3">Hari Melatih</th>
                                  <th>Nama Instruktur</th>
                              </tr>
                          </thead>
                       
                          <tbody>
                          <?php if ($user['status'] == 2 || $user['status'] == 1) {
                              $time = date('Y-m-d H:i:s');
                            $query = mysqli_query ($conn, "SELECT * FROM jp a
                            LEFT JOIN instruktur c ON c.kode_ins = a.kode_ins
                            LEFT JOIN type b ON b.id_type = c.skill"
                            );
                              while ($jadwal = mysqli_fetch_assoc($query)) {
                                
                           ?>
                              <tr>
                                  <td class="col-md-3"><?php echo $jadwal['hari']; ?></td>
                                  <td><?php echo $jadwal['nama']; ?></td>
                              </tr>
                          <?php } } ?>
                          </tbody>      
                          </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                  
                  </div>
                  </div>
                </div>
            <div class="col-md-9">
            <div class="box box-info">
            <div class="box-header">
            <a href="../member/index.php?page=artikel"><i class="fa fa-newspaper-o"> New Artikel</i></a><hr>
            
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
              <h3><a href="../member/index.php?page=d_artikel&id=<?php echo $atk['id_artikel']; ?>"><?php echo $atk['judul_artikel']; ?></a></h3></div></div> <hr>

              <?php } ?>

            </div>
            </div>
            
            
            </div>

            <div class="col-md-3">
            <div class="box box-warning">
            <div class="box-header">
              <a href="../member/index.php?page=event"><i class="fa fa-bullhorn"> New Event</i></a><hr>

              <?php

              $query = mysqli_query ($conn, "SELECT * FROM event ORDER BY tgl_event DESC LIMIT 3");
              if($query == false){
                die ("Terjadi Kesalahan : ". mysqli_error($conn));
              }
              while ($que = mysqli_fetch_array ($query)){ ?>
              <div>
              <a><?php echo date('l, d F Y ', strtotime($que['tgl_event'])); ?></a> <br>
              <h4><a href="../member/index.php?page=d_event&id=<?php echo $que['id_event']; ?>"><?php echo $que['judul_event']; ?></a></h4> <hr> </div> 

              <?php } ?>

            </div>
            </div>
            <div class="box box-warning">
            <div class="box-header">
              <a href="../member/index.php?page=promo"><i class="fa fa-tags"> New Promo</i></a><hr>
              <?php

              $query = mysqli_query ($conn, "SELECT * FROM promo ORDER BY tgl_promo DESC LIMIT 3");
              if($query == false){
                die ("Terjadi Kesalahan : ". mysqli_error($conn));
              }
              while ($qup = mysqli_fetch_array ($query)){ ?>
              <div>
              <a><?php echo date('l, d F Y ', strtotime($qup['tgl_promo'])); ?></a> <br>
              <h4><a href="../member/index.php?page=d_promo&id=<?php echo $qup['id_promo']; ?>"><?php echo $qup['judul_promo']; ?></a></h4> <hr> </div> 

              <?php } ?>
            </div>
            </div>
          </div><!-- /.row -->
          </div>

            
        </section><!-- /.content -->

        <?php } ?>

    </div><!-- /.content-wrapper -->      

        <!-- JavaScript -->
        
        
        <script src="../assets/js/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/js/datatables/dataTables.bootstrap.min.js"></script>
        
        <script src="../assets/js/jquery.maskedinput.min.js"></script>
        
        <script src="../assets/js/daterangepicker/moment.min.js"></script>
        <script src="../assets/js/daterangepicker/daterangepicker.js"></script>

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
      

    <footer class="main-footer">
      <div class="pull-right hidden-xs"></div>
      <strong>Copyright &copy; <?php echo date("Y") ?> Master Gym <a href="../assets/img/barbel.jpg">Abdul Malik K.</a></strong>
    </footer>  
    </body>
</html>
