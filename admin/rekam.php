<section class="content-header">
  <h1>
    Rekam Kegiatan
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-boomark"></i> Rekam Kegiatan</li>
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
                    include "dt_rekam.php";
                ?>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->

<!-- Modal Popup -->
<div id="ModalAdd" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Rekam</h4>
            </div>
            <div class="modal-body">
                <form action="rekam_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label>Kelas</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <select style="width: 100%" class="form-control select2" name="kelas" id="select1">
                                    <option disabled="" selected=""> ~ PILIH KELAS ~ </option>
                                    <?php  
                                        $kelas = mysqli_query($conn,"SELECT * FROM kelas");
                                        while ($kel = mysqli_fetch_assoc($kelas)) { ?>
                                        <option value="<?php echo $kel['id_kelas'] ?>"><?php echo $kel['nama_kelas'].'  '.date('d F Y H:i ', strtotime($kel['jadwal'])); ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                    </div>

                    <div class="form-group">
                        <label>Member</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <select style="width: 100%" class="form-control select2" name="member" id='select'>
                                    <option disabled="" selected=""> ~ PILIH MEMBER ~ </option>
                                    <?php  
                                        $member = mysqli_query($conn,"SELECT * FROM pelanggan");
                                        while ($mem = mysqli_fetch_assoc($member)) { ?>
                                        <option value="<?php echo $mem['kode_member'] ?>"><?php echo $mem['nama'];?> [id=<?php echo $mem['kode_member']; ?>]</option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                    </div>
                
                    <div class="form-group">
                        <label>Berat Badan</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-thumb-tack"></i>
                                </div>
                                <input name="bb" type="text" class="form-control" placeholder="Berat Badan Hari ini "/>
                            </div>
                    </div>

                    <div class="form-group">
                        <label>Kalori</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-thumb-tack"></i>
                                </div>
                                <input name="kalori" type="text" class="form-control" placeholder="Jumlah kalori Hari ini "/>
                            </div>
                    </div>

                    <div class="form-group">
                        <label>Detak Jantung</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-thumb-tack"></i>
                                </div>
                                <input name="dj" type="text" class="form-control" placeholder="Jumlah detak jantung Hari ini "/>
                            </div>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-navicon"></i>
                                </div>
                                <input name="keterangan" type="text" class="form-control" placeholder="Kegiatan yang dilakukan..."/>
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

<!-- Modal Popup Dosen Edit -->
<div id="ModalEditRekam" class="modal fade" tabindex="-1" role="dialog"></div>

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

<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../plugins/select2/select2.full.min.js"></script>
<!-- page script -->
<script>
  $(function () {   
    // Daterange Picker
      $('#tanggal').daterangepicker({
          singleDatePicker: true,
          showDropdowns: true,
          format: 'YYYY-MM-DD'
      });
      $("#select, #select1").select2();
  });


</script>