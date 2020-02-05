<?php

include "../function/koneksi.php";

$id_kelas	= $_GET["id_kelas"];

$querykelas = mysqli_query($conn, "SELECT * FROM kelas WHERE id_kelas='$id_kelas'");
if($querykelas == false){
	die ("Terjadi Kesalahan : ". mysqli_error($conn));
}
while($kelas = mysqli_fetch_array($querykelas)){

?>
	
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
<!-- Modal Popup -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Kelas </h4>
					</div>
					<div class="modal-body">
						<form action="kelas_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Id kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-lock"></i>
										</div>
										<input name="id_kelas" type="text" class="form-control" value="<?php echo $kelas["id_kelas"]; ?>" readonly />
									</div>
							</div>

							<div class="form-group">
		                        <label>Service</label>
		                        <div class="input-group">
		                            <div class="input-group-addon">
		                                <i class="fa fa-odnoklassniki"></i>
		                            </div>
		                            <select name="id_type" class="form-control type1">
		                         	 <?php
                                    
                                    $query1 = mysqli_query ($conn, "SELECT * FROM type");
                                    if ($query1 == false){
                                        die ("Terdapat Kesalahan : ". mysqli_error($conn));
                                    }
                                    while ($q1 = mysqli_fetch_array($query1)){ ?>
                                    <option value="<?php echo $q1['id_type']?>" <?php echo ($q1['id_type']==$kelas['id_type'])?"selected" : ""?>><?php echo $q1['nama_kegiatan']?></option>
                                    <?php }
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
		                            <select name="kode_instruktur" class="form-control">
		                                <?php
		                                    
		                                    $query2 = mysqli_query ($conn, "SELECT * FROM instruktur");
		                                    if ($query2 == false){
		                                        die ("Terdapat Kesalahan : ". mysqli_error($conn));
		                                    }
		                                    while ($q2 = mysqli_fetch_array($query2)){
		                                        echo "<option value='$q2[kode_ins]'>$q2[nama]</option>";
		                                    }
		                                ?>
		                            </select>
		                        </div>
		                    </div>

							<div class="form-group">
								<label>Nama Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-odnoklassniki"></i>
										</div>
										<input name="nama_kelas" type="text" class="form-control" value="<?php echo $kelas["nama_kelas"]; ?>"/>
									</div>
							</div>
					
							<div class="form-group" id="jw1" style="display: none;">
		                        <label>Jadwal</label>
		                            <div class="input-group">
		                                <div class="input-group-addon">
		                                    <i class="fa fa-star"></i>
		                                </div>
		                                <input name="jadwal" id="jad1" type="text" value="<?php echo date('d-M-Y H:i A',strtotime($kelas['jadwal'])) ?>" class="form-control" placeholder="Jadwal"/>
		                                <input type="text" name="cek" id="cek1" hidden="" value="0">
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
<script type="text/javascript">

$('.type1').on('change', function() {
   if (this.value == '2'){
    $('#cek1').val('');
    $('#jw1').removeAttr("style");
    $('#cek1').val('1');
   }else{
   	$('#cek1').val('');
    $('#jw1').css("display", "none");
    $('#cek1').val('0');
   }
})
$(function(){
  $('#jad1').datetimepicker({
      format: 'D-M-YYYY HH:mm',
    });
});
$(document).ready(function(){
	if ($('.type1').val() == 2){
		$('#jw1').removeAttr("style");
		$('#cek1').val('1');
	}
})
</script>
			
<?php
			}

?>