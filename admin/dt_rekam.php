<thead>
	<tr>
		<th style="width: 10%;">Id Rekam</th>
		<th>Kelas</th>
    <th>Nama Member</th>
		<th>Tanggal</th>
		<th>BB</th>
    <th>Kalori</th>
    <th>Detak Jantung</th>
		<th>Kegiatan</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<?php
      $query = mysqli_query ($conn,"SELECT a.*, b.nama_kelas as nm_kelas, c.nama as nm FROM rekam a
        LEFT JOIN kelas b ON a.id_kelas = b.id_kelas
        LEFT JOIN pelanggan c ON a.kode_member = c.kode_member");
      if($query == false){
        die ("Terjadi Kesalahan : ". mysqli_error($conn));
      }
      while ($rekam = mysqli_fetch_array ($query)){ ?>
          <tr>
            <td>RM<?php echo $rekam['id_rekam']; ?></td>
            <td><?php echo $rekam['nm_kelas']; ?></td>
            <td><?php echo $rekam['nm']; ?></td>
            <td><?php echo date("d-M-Y H:i A", strtotime($rekam['tanggal'])); ?></td>
            <td><?php echo $rekam['bb'] .' '.'kg'; ?></td>
            <td><?php echo $rekam['kalori']; ?></td>
            <td><?php echo $rekam['dj']; ?></td>
            <td><?php echo $rekam['keterangan']; ?></td>
            <td style='text-align:center'>
              <a href='#' id="<?php echo $rekam['id_rekam'] ?>"" title="edit" class="btn btn-success btn-sm open_rekam"><span class="fa fa-edit"></span></a> 
              <a href='#' onClick='confirm_delete("rekam_delete.php?id_rekam=<?php echo $rekam['id_rekam']; ?>")' class="btn btn-danger btn-sm" title="hapus"><span class="fa fa-trash" aria-hidden="true"></span></a>
            </td>
          </tr>
    <?php     
      }
    ?>
</tbody>