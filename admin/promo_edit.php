<section class="content-header">
  <h1>
    Promo Edit
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-newspaper-o"></i> Promo Edit</li>
  </ol>
</section>

<?php 

$id_promo	= $_GET["id_promo"];

$query = mysqli_query($conn, "SELECT * FROM promo WHERE id_promo='$id_promo'");
if($query == false){
	die ("Terjadi Kesalahan : ". mysqli_error($conn));
}
$ep = mysqli_fetch_assoc($query);
?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
        <div class="tab-content">
          <form action="promo_proses_edit.php" method="POST" enctype="multipart/form-data">
          <input name="id_promo" type="hidden" value="<?php echo $ep["id_promo"]; ?>"/>
            <div class="box-body">
              <div class="form-group">
                <label for="Judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $ep["judul_promo"]; ?>">
              </div>
              <div class="form-group">
                  <label>Content Isi</label>
              </div>
              <div class="box-body pad">
                  <textarea class="textarea" name="konten" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> <?php echo $ep["isi_promo"]; ?></textarea>
              </div>

              <div class="form-group">
                <label for="InputFile">File input</label>
                <input type="file" name="foto" id="InputFile" accept=".jpg , .png">
              </div>

	          	<div class="form-group">
					<label>Photo</label>
						<div class="input-group">
						<?php
							echo "<img src='../upload/promo/$ep[gambar]' height=150>";
						?>
						</div>
				</div>

            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
          </div>
          </div>
          </div>
</div>
  <!-- /.col-->
</div>
<!-- ./row -->
</section>
