<?php 
include "../function/koneksi.php";

$idu		= $_POST["idu"];
$lv			= $_POST["level"];
$lokasi_file= $_FILES['foto']['tmp_name'];
$nama_file	= $_FILES['foto']['name'];
move_uploaded_file($lokasi_file,"../foto/$nama_file");


  if ($lv == 'user') {
    if ($edit = mysqli_query($conn, "UPDATE pelanggan SET gambar ='$nama_file' WHERE kode_member='$idu'"))
      { ?>
        <script type="text/javascript">
        idu = <?php echo $idu ?>;
        lv = '<?php echo $lv ?>';
          alert("Upload Sukses..!");
          window.location.href = "index.php?page=profil&idp="+idu+"&lv="+lv+"";
        </script>
      <?php
        exit;
    }
    die ("Terdapat Kesalahan : ". mysqli_error($conn));
    
  }else if($lv == 'instruktur') {
    if ($edit = mysqli_query($conn, "UPDATE instruktur SET gambar ='$nama_file' WHERE kode_ins='$idu'"))
      { ?>
        <script type="text/javascript">
        idu = <?php echo $idu ?>;
        lv = '<?php echo $lv ?>';
          alert("Upload Sukses..!");
          window.location.href = "index.php?page=profil&idp="+idu+"&lv="+lv+"";
        </script>
      <?php
        exit;
    }
    die ("Terdapat Kesalahan : ". mysqli_error($conn));
    
  }else {
    if ($edit = mysqli_query($conn, "UPDATE admin SET gambar ='$nama_file' WHERE id_admin='$idu'"))
      { ?>
        <script type="text/javascript">
        idu = <?php echo $idu ?>;
        lv = '<?php echo $lv ?>';
          alert("Upload Sukses..!");
          window.location.href = "index.php?page=profil&idp="+idu+"&lv="+lv+"";
        </script>
      <?php
    }
    die ("Terdapat Kesalahan : ". mysqli_error($conn));

  }

 ?>