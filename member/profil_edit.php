<?php

include "../function/koneksi.php";

  $idu=$_POST['idu'];
  $nama=$_POST['nama'];
  $kelamin=$_POST['kelamin'];
  $tmplahir=$_POST['tmplahir'];
  $tgl_lahir= date('y-m-d',strtotime($_POST['tgl_lahir']));
  $alamat=$_POST['alamat'];
  $tlp=$_POST['tlp'];
  $email=$_POST['email'];
  $lv = $_POST['level'];


  if ($lv == 'user') {
    if ($edit = mysqli_query($conn, "UPDATE pelanggan SET nama='$nama', alamat='$alamat', tmp_lahir='$tmplahir', tgl_lahir='$tgl_lahir', jenkel='$kelamin', tlp='$tlp', email='$email' WHERE kode_member='$idu'"))
      { ?>
        <script type="text/javascript">
        idu = <?php echo $idu ?>;
        lv = '<?php echo $lv ?>';
          alert("Data Berhasil di Simpan..!");
          window.location.href = "index.php?page=profil&idp="+idu+"&lv="+lv+"";
        </script>
      <?php
        exit;
    }
    die ("Terdapat Kesalahan : ". mysqli_error($conn));
    
  }else if($lv == 'instruktur') {
    if ($edit = mysqli_query($conn, "UPDATE instruktur SET nama='$nama', alamat='$alamat', tmp_lahir='$tmplahir', tgl_lahir='$tgl_lahir', jenkel='$kelamin', tlp='$tlp', email='$email' WHERE kode_ins='$idu'"))
      { ?>
        <script type="text/javascript">
        idu = <?php echo $idu ?>;
        lv = '<?php echo $lv ?>';
          alert("Data Berhasil di Simpan..!");
          window.location.href = "index.php?page=profil&idp="+idu+"&lv="+lv+"";
        </script>
      <?php
        exit;
    }
    die ("Terdapat Kesalahan : ". mysqli_error($conn));
    
  }else {
    if ($edit = mysqli_query($conn, "UPDATE admin SET nama='$nama', alamat='$alamat', tmp_lahir='$tmplahir', tgl_lahir='$tgl_lahir', jenkel='$kelamin', tlp='$tlp', email='$email' WHERE id_admin='$idu'"))
      { ?>
        <script type="text/javascript">
        idu = <?php echo $idu ?>;
        lv = '<?php echo $lv ?>';
          alert("Data Berhasil di Simpan..!");
          window.location.href = "index.php?page=profil&idp="+idu+"&lv="+lv+"";
        </script>
      <?php
    }
    die ("Terdapat Kesalahan : ". mysqli_error($conn));

  }
 ?>    


