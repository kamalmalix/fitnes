<section class="content-header">
  <h1>
    Event Edit
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-newspaper-o"></i> Event Edit</li>
  </ol>
</section>

<?php 

$id_event = $_GET["id_event"];

$query = mysqli_query($conn, "SELECT * FROM event WHERE id_event='$id_event'");
if($query == false){
  die ("Terjadi Kesalahan : ". mysqli_error($conn));
}
$ee = mysqli_fetch_assoc($query);
?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
        <div class="tab-content">
          <form action="event_proses_edit.php" method="POST" enctype="multipart/form-data">
          <input name="id_event" type="hidden" value="<?php echo $ee["id_event"]; ?>"/>
            <div class="box-body">
              <div class="form-group">
                <label for="Judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $ee["judul_event"]; ?>">
              </div>
              <div class="form-group">
                  <label>Content Isi</label>
              </div>
              <div class="box-body pad">
                  <textarea class="textarea" name="konten" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> <?php echo $ee["isi_event"]; ?></textarea>
              </div>

              <div class="form-group">
                <label for="InputFile">File input</label>
                <input type="file" name="foto" id="InputFile" accept=".jpg , .png">
              </div>

              <div class="form-group">
          <label>Photo</label>
            <div class="input-group">
            <?php
              echo "<img src='../upload/event/$ee[gambar]' height=150>";
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