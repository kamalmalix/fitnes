<section class="content-header">
  <h1>
    Event
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-bullhorn"></i> Event</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#list">List Event</a></li>
          <li><a data-toggle="tab" href="#input">Input Event</a></li>
        </ul>
        <div class="tab-content">
          <div id="list" class="tab-pane fade in active" >
          <div class="box-body">
          <table id="dt_event" class="table table-bordered table-striped table-scalable">
            <thead>
              <tr>
                <th>Kode</th>
                <th style="display: none;">idu</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Isi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $queryevent = mysqli_query ($conn, "SELECT * FROM event");
                if($queryevent == false){
                  die ("Terjadi Kesalahan : ". mysqli_error($conn));
                }
                $no = 1;
                while ($event = mysqli_fetch_array ($queryevent)){ ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td style="display: none;"><?php echo $event['id_event'];  ?></td>
                      <td><?php echo $event['judul_event']; ?></td>
                      <td><?php echo $event['tgl_event']; ?></td>
                      <td><?php echo substr(strip_tags($event['isi_event']),0,30).'...'; ?></td>
                      <td style='text-align:center'>
                        <a href='index.php?page=event_edit&id_event=<?php echo $event['id_event']; ?>' id='$event[id_event]' title="edit" class="btn btn-success btn-sm"><span class="fa fa-edit"></span></a> 
                        <a href='#' onClick='confirm_delete("event_delete.php?id_event=<?php echo $event['id_event']; ?>")' class="btn btn-danger btn-sm" title="hapus"><span class="fa fa-trash" aria-hidden="true"></span></a>
                      </td>
                    </tr>
              <?php 
              $no++;    
                }
              ?>
            </tbody>
          </table>
          </div>
        </div>
        <div id="input" class="tab-pane fade ">
          <form action="event_add.php" method="POST" enctype="multipart/form-data">
            <div class="box-body">
            <div class="form-group">
              <label for="Judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Event">
              </div>
              <div class="form-group">
                  <label>Content Isi</label>
              </div>
              <div class="box-body pad">
                  <textarea class="textarea" name="konten" placeholder="Tulis konten isi disini" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>

              <div class="form-group">
                <label for="InputFile">File input</label>
                <input type="file" name="foto" id="InputFile" accept=".jpg , .png">
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
  </div>
  <!-- /.col-->
</div>
<!-- ./row -->
</section>

<div class="modal fade" id="modal_delete">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align:center;">Apakah anda ingin menghapus data ?</h4>
            </div>    
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-danger" id="delete_link">Hapus</a>
                <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<script>

  $(document).ready(function(){
      $('#dt_event').DataTable();
  }); 

  function confirm_delete(delete_url){
      $("#modal_delete").modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href', delete_url);
    } 
</script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
