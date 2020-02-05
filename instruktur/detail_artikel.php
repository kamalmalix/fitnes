<?php 
include "../function/koneksi.php";

$ida  = $_GET['id'];

$sql = "SELECT *, id_artikel as id FROM artikel WHERE id_artikel='$ida'";
$query = mysqli_query($conn,$sql);
if($query == false){
  die ("Terjadi Kesalahan : ". mysqli_error($conn));
}
$da = mysqli_fetch_assoc($query);
?>

<section class="content-header">
  <h1>
    Detail
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-newspaper-o"></i> Artikel</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
    <div class="box box-info">
    <div class="box-header">

    <div class="date">
      <p><a><i class="fa fa-calendar-o"></i>&nbsp &nbsp<?php echo date('l, d F Y ', strtotime($da['tgl_artikel'])); ?></a></p>
    </div><br>
    <div class="judul" align="center">
      <section class="content">
      <div class="col-md-12" >
      <div class="box">
      <h3 style="font-family: impact;"><?= $da['judul_artikel']; ?></h3> <hr>
      <img src="../upload/artikel/<?php echo $da['gambar']; ?>" width="600" height="400" >
      <br>
      <div class="isi" align="justify" style="padding:0 10px;font-size: 14pt; font-family: 'san serif';">
        <p style="word-break: break-all;"><?= $da['isi_artikel']; ?></p>
        <br><hr>
      </div>
      </div>
      </div>
      </section>
    </div>

    </div>
    </div>
    </div>
  </div>
</section><!-- /.content -->