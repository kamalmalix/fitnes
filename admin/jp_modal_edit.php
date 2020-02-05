<?php

include "../function/koneksi.php";

$id_jp	= $_GET["id_jp"];

$queryjp = mysqli_query($conn, "SELECT * FROM jp WHERE id_jp='$id_jp'");
if($queryjp == false){
	die ("Terjadi Kesalahan : ". mysqli_error($conn));
}
while($jp = mysqli_fetch_array($queryjp)){

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
						<form action="jp_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="id_jp" type="hidden" value="<?php echo $jp["id_jp"]; ?>"/>
							<div class="form-group">
		                      <label>Hari </label>
		                      <div class="input-group">
		                            <div class="input-group-addon">
		                                <i class="fa fa-calendar"></i>
		                            </div>
		                      <input class="form-control" type="text" value="<?php echo $jp["hari"]; ?>" name="hari" required="">
		                    </div>
		                    </div>

		                    <div class="form-group">
		                        <label>Nama Instruktur</label>
		                        <div class="input-group">
		                            <div class="input-group-addon">
		                                <i class="fa fa-child"></i>
		                            </div>
		                            <select name="kode_ins" class="form-control">
		                                <?php
		                                    
		                                    $query2 = mysqli_query ($conn, "SELECT * FROM instruktur where skill = '1'");
		                                    if ($query2 == false){
		                                        die ("Terdapat Kesalahan : ". mysqli_error($conn));
		                                    }
		                                    while ($q2 = mysqli_fetch_array($query2)){ ?>
		                                        <option value="<?php echo $q2['kode_ins']?>"><?php echo $q2['nama']?></option>";
		                                <?php    
		                                    }
		                                ?>
		                            </select>
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