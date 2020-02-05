<?php

include "../function/koneksi.php";

$id_rekam	= $_GET["id_rekam"];

$query = mysqli_query($conn, "SELECT * FROM rekam WHERE id_rekam='$id_rekam'");
if($query == false){
	die ("Terjadi Kesalahan : ". mysqli_error($conn));
}
while($rekam = mysqli_fetch_array($query)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#tanggal').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>


<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Rekam</h4>
            </div>
            <div class="modal-body">
                <form action="rekam_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
                    <input name="id_rekam" type="hidden" value="<?php echo $rekam["id_rekam"]; ?>"/>
                    <div class="form-group">
                        <label>Kelas</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <select class="form-control" name="kelas">
                                    <option disabled="" selected=""> ~ PILIH KELAS ~ </option>
                                    <?php  
                                        $kelas = mysqli_query($conn,"SELECT * FROM kelas");
                                        while ($kel = mysqli_fetch_assoc($kelas)) { ?>
                                        <option value="<?php echo $kel['id_kelas'] ?>" <?php echo ($kel['id_kelas'] == $rekam['id_kelas'])?"selected":"" ?>><?php echo $kel['nama_kelas']; ?></option>
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
                                <select class="form-control" name="member">
                                    <option disabled="" selected=""> ~ PILIH MEMBER ~ </option>
                                    <?php  
                                        $member = mysqli_query($conn,"SELECT * FROM pelanggan");
                                        while ($mem = mysqli_fetch_assoc($member)) { ?>
                                        <option value="<?php echo $mem['kode_member'] ?>" <?php echo ($mem['kode_member']==$rekam['kode_member'])? "selected":"" ?>><?php echo $mem['nama']; ?> [id=<?php echo $mem['kode_member']; ?>]</option>
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
                                <input name="bb" type="text" class="form-control" value="<?php echo $rekam['bb'] ?>" placeholder="Berat Badan Hari ini "/>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Kalori</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-thumb-tack"></i>
                                </div>
                                <input name="kalori" type="text" class="form-control" value="<?php echo $rekam['kalori'] ?>" placeholder="Jumlah kalori Hari ini "/>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Detak Jantung</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-thumb-tack"></i>
                                </div>
                                <input name="dj" type="text" class="form-control" value="<?php echo $rekam['dj'] ?>" placeholder="Jumlah detak jantung Hari ini "/>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-navicon"></i>
                                </div>
                                <input name="keterangan" type="text" class="form-control" value="<?php echo $rekam['keterangan'] ?>" placeholder="Kegiatan yang dilakukan..."/>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">
                            Save
                        </button>
                        <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
			}

?>