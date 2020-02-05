<thead>
	<tr>
		<th>Id Service</th>
		<th>Nama Service</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<?php
		$querytype = mysqli_query ($conn, "SELECT * FROM type");
		if($querytype == false){
			die ("Terjadi Kesalahan : ". mysqli_error($conn));
		}
		while ($type = mysqli_fetch_array ($querytype)){
			
			echo "
				<tr>
					<td>$type[id_type]</td>
					<td>$type[nama_kegiatan]</td>
					<td>
						<a href='#' class='open_modal' id='$type[id_type]'>Edit</a> |
						<a href='#' onClick='confirm_delete(\"service_delete.php?id_type=$type[id_type]\")'>Delete</a>
					</td>
				</tr>";
		}
	?>
</tbody>