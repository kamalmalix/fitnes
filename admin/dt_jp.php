<thead>
	<tr>
		<th>Id</th>
		<th>Hari</th>
		<th>Pelatih</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<?php
		$query = mysqli_query ($conn, "SELECT * FROM jp a
			LEFT JOIN instruktur c ON c.kode_ins = a.kode_ins
			LEFT JOIN type b ON b.id_type = c.skill"
			);
		if($query == false){
			die ("Terjadi Kesalahan : ". mysqli_error($conn));
		}
		$no = 1;
		while ($jp = mysqli_fetch_array ($query)){ ?>
		
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $jp['hari']; ?></td>
					<td><?php echo $jp['nama']; ?></td>
					<td>
						<a href='#' class='open_modal' id="<?php echo $jp['id_jp'];?>">Edit</a> |
						<a href='#' onClick="confirm_delete('jp_delete.php?id_jp=<?php echo $jp['id_jp']?>')">Delete</a>
					</td>
				</tr>
	<?php	}
	?>
</tbody>