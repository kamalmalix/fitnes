<section class="content-header">
  <h1>
    Kelas
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-star"></i> Kelas</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

        </div><!-- /.box-header -->
        <div class="box-body">
        <a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
          <br></br>
          <table id="data" class="table table-bordered table-striped table-scalable">
                <?php
                    include "dt_kelas.php";
                ?>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->

<!-- Modal Popup Dosen -->
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kelas</h4>
            </div>
            <div class="modal-body">
                <form action="kelas_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label>Service</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-odnoklassniki"></i>
                            </div>
                            <select name="id_type" class="form-control type">
                                <?php
                                    
                                    $query1 = mysqli_query ($conn, "SELECT * FROM type");
                                    if ($query1 == false){
                                        die ("Terdapat Kesalahan : ". mysqli_error($conn));
                                    }
                                    while ($q1 = mysqli_fetch_array($query1)){ ?>
                                        <option value="<?php echo $q1['id_type'] ?>"><?php echo $q1['nama_kegiatan']?></option>";
                                <?php        
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Instruktur</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-child"></i>
                            </div>
                            <select name="kode_ins" class="form-control">
                                <option disabled="" selected="">~ Pilih Instruktur ~</option>
                                <?php
                                    
                                    $query2 = mysqli_query ($conn, "SELECT * FROM instruktur");
                                    if ($query2 == false){
                                        die ("Terdapat Kesalahan : ". mysqli_error($conn));
                                    }
                                    while ($q2 = mysqli_fetch_array($query2)){ 
                                        if ($q2['skill'] == 2) { ?>
                                        <option class="skill2" style="display: none;" value="<?php echo $q2['kode_ins']?>"><?php echo $q2['nama']?></option>";
                                        <?php }
                                        else{ ?>
                                        <option class="skill1" value="<?php echo $q2['kode_ins']?>"><?php echo $q2['nama']?></option>";
                                        <?php }     
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nama Kelas</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <input name="nama_kelas" type="text" class="form-control" placeholder="Kelas"/>
                            </div>
                    </div>
                    <div class="form-group" id="jw" style="display: none;">
                        <label>Jadwal</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <input name="jadwal" id="jad" type="text" class="form-control" placeholder="Kelas"/>
                                <input type="text" name="cek" id="cek" hidden="" value="0">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">
                            Add
                        </button>
                        <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Popup Edit -->
<div id="ModalEditKelas" class="modal fade" tabindex="-1" role="dialog"></div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
            </div>    
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(function(){
  $('#jad').datetimepicker({
      format: 'D-M-YYYY HH:mm',
    });
});




$('.type').on('change', function() {
   if (this.value == '2'){
    $('#cek').val('');
    $('#jw').removeAttr("style");
    $('#cek').val('1');
    $('.skill1').hide();
    $('.skill2').show();
   }else if (this.value == '1') {
    $('#cek').val('');
    $('#jw').hide();
    $('#cek').val('2');
    $('.skill2').hide();
    $('.skill1').show();
   }else{

   }
})

</script>