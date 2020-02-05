	<!-- page script -->
    <script>
		
		  // Data Table
        $("#data").dataTable({
			scrollX: true
		});		
      });
    </script>
	
	<!-- Javascript Edit--> 
	<script type="text/javascript">
		$(document).ready(function () {
		
		// Instruktur
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "instruktur_modal_edit.php",
					type: "GET",
					data : {kode_ins: m,},
					success: function (ajaxData){
					$("#ModalEditInstruktur").html(ajaxData);
					$("#ModalEditInstruktur").modal('show',{backdrop: 'true'});
					}
				});
			});
		
		// Pelanggan edit
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "pelanggan_modal_edit.php",
					type: "GET",
					data : {kode_member: m,},
					success: function (ajaxData){
					$("#ModalEditPelanggan").html(ajaxData);
					$("#ModalEditPelanggan").modal('show',{backdrop: 'true'});
					}
				});
			});

		
			
		// Service
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "service_modal_edit.php",
					type: "GET",
					data : {id_type: m,},
					success: function (ajaxData){
					$("#ModalEditService").html(ajaxData);
					$("#ModalEditService").modal('show',{backdrop: 'true'});
					}
				});
			});

		// kelas
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "kelas_modal_edit.php",
					type: "GET",
					data : {id_kelas: m,},
					success: function (ajaxData){
					$("#ModalEditKelas").html(ajaxData);
					$("#ModalEditKelas").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Rekam
		$(".open_rekam").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "rekam_modal_edit.php",
					type: "GET",
					data : {id_rekam: m,},
					success: function (ajaxData){
					$("#ModalEditRekam").html(ajaxData);
					$("#ModalEditRekam").modal('show',{backdrop: 'true'});
					}
				});
			});

		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jp_modal_edit.php",
					type: "GET",
					data : {id_jp: m,},
					success: function (ajaxData){
					$("#ModalEditJP").html(ajaxData);
					$("#ModalEditJP").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		});
	</script>
	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#modal_delete").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
	</script>