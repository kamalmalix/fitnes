<?php

include "../function/koneksi.php";

$id_type	= $_GET["id_type"];

$querytype = mysqli_query($conn, "SELECT * FROM type WHERE id_type='$id_type'");
if($querytype == false){
	die ("Terjadi Kesalahan : ". mysqli_error($conn));
}
while($type = mysqli_fetch_array($querytype)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
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
						<h4 class="modal-title">Edit Service</h4>
					</div>
					<div class="modal-body">
						<form action="service_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Id Service</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-lock"></i>
										</div>
										<input name="id_type" type="text" class="form-control" value="<?php echo $type["id_type"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Nama Service</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-odnoklassniki"></i>
										</div>
										<input name="nama_kegiatan" type="text" class="form-control" value="<?php echo $type["nama_kegiatan"]; ?>"/>
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