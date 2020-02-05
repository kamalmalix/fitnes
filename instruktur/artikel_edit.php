<section class="content-header">
  <h1>
    Artikel Edit
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-newspaper-o"></i> Artikel Edit</li>
  </ol>
</section>

<?php 

$id_artikel	= $_GET["id_artikel"];

$query = mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel='$id_artikel'");
if($query == false){
	die ("Terjadi Kesalahan : ". mysqli_error($conn));
}
$ea = mysqli_fetch_assoc($query);
?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
        <div class="tab-content">
          <form action="artikel_proses_edit.php" method="POST" enctype="multipart/form-data">
          <input name="id_artikel" type="hidden" value="<?php echo $ea["id_artikel"]; ?>"/>
            <div class="box-body">
              <div class="form-group">
                <label for="Judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $ea["judul_artikel"]; ?>">
              </div>
              <div class="form-group">
                  <label>Content Isi</label>
              </div>
              <div class="box-body pad">
                  <textarea class="textarea" name="konten" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> <?php echo $ea["isi_artikel"]; ?></textarea>
              </div>

              <div class="form-group">
                <label for="InputFile">File input</label>
                <input type="file" name="foto" id="InputFile" accept=".jpg , .png">
              </div>

	          	<div class="form-group">
					<label>Photo</label>
						<div class="input-group">
						<?php
							echo "<img src='../upload/artikel/$ea[gambar]' height=150>";
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
