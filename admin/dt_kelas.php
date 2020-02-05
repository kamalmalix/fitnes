<thead>
	<tr>
		<th>Id Kelas</th>
		<th>Service</th>
		<th>Instruktur</th>
		<th>Nama Kelas</th>
		<th>Tanggal</th>
		<th>Jam</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<?php
		$querykelas = mysqli_query ($conn, "SELECT * FROM kelas a
			LEFT JOIN type b ON b.id_type = a.id_type
			LEFT JOIN instruktur c ON c.kode_ins = a.kode_ins");
		if($querykelas == false){
			die ("Terjadi Kesalahan : ". mysqli_error($conn));
		}
		while ($kelas = mysqli_fetch_array ($querykelas)){ ?>
		
				<tr>
					<td><?php echo $kelas['id_kelas']; ?></td>
					<td><?php echo $kelas['nama_kegiatan']; ?></td>
					<td><?php echo $kelas['nama']; ?></td>
					<td><?php echo $kelas['nama_kelas']; ?></td>
					<td><?php echo ($kelas['jadwal'] == null)? "none": date('d-M-Y',strtotime($kelas['jadwal'])); ?></td>
					<td><?php echo ($kelas['jadwal'] == null)? "none": date('H:i', strtotime($kelas['jadwal'])); ?></td>
					<td>
						<a href='#' class='open_modal' id="<?php echo $kelas['id_kelas'];?>">Edit</a> |
<a href='#' onClick="confirm_delete('kelas_delete.php?id_kelas=<?php echo $kelas['id_kelas']?>')"">Delete</a>
					</td>
				</tr>
	<?php	}
	?>
</tbody>