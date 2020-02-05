<?php 
include "../function/koneksi.php";

$idp  = $_GET['idp'];
$lv = $_GET['lv'];

if ($lv == 'user') {
  $sql = "SELECT *, kode_member as idu FROM pelanggan WHERE kode_member = '$idp'";
} elseif ($lv == 'instruktur') {
  $sql = "SELECT *, kode_ins as idu FROM instruktur WHERE kode_ins = '$idp'";
}else {
  $sql = "SELECT *, id_admin as idu FROM admin WHERE id_admin ='$idp'";
}

$query = mysqli_query($conn,$sql);
if($query == false){
  die ("Terjadi Kesalahan : ". mysqli_error($conn));
}
$data = mysqli_fetch_assoc($query);
?>

<section class="content-header">
  <h1>
    Profil
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-info-circle"></i> Profil</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
      <div class="box-header">
      </div>
      <div class="box-body">
      <div class="col-md-2 text-center" style="padding-bottom: 15px;">
        <p style="color: grey;">Foto Profile</p>   
          <form action="uploadfoto.php" method="POST" id="foto" accept-charset="utf-8" enctype="multipart/form-data">
        <img src="../foto/<?php echo $data['gambar'] ?>" class="img-responsive" alt="profile foto" width="100%" height="150">
        <a href="#" class="profil-foto">Edit</a>
          <input type="text" name="level" style="display: none;" value="<?php echo $lv; ?>"> 
          <input type="text" name="idu" style="display: none;"  value="<?php  echo $data['idu']; ?>" placeholder="">
          <input type="file" name="foto" id="foto" class="input-foto" onchange="javascript:this.form.submit()" style="display: none;">
        </form>
        </div>
          <div class="col-md-10">
            <form action="profil_edit.php" method="POST" class="form-horizontal" accept-charset="utf-8">
              <input type="text" name="level" style="display: none;" value="<?php echo $lv; ?>"> 
              <input type="text" name="idu" style="display: none;" value="<?php  echo $data['idu']; ?>" placeholder="">
                <div class="form-group">
                  <label for="Nama" class="col-md-3">Nama  <span class="required">*</span></label>
                  <div class="col-md-9">
                  <input class="form-control" required="" type="text" value="<?php  echo $data['nama'] ?>" name="nama">                  
                  </div>
                </div>
                <div class="form-group">
                  <label for="Kelamin" class="col-md-3">Jenis Kelamin </label>
                  <div class="col-md-9">
                  <select name="kelamin" class="form-control" required="" >
                    <option selected="" value="0"  >~ Pilih Jenis Kelamin ~</option>
                      <option value="L" <?php  echo ($data['jenkel']=='L')?'selected':'' ?> >Laki-Laki</option>  
                      <option value="P" <?php  echo ($data['jenkel']=='P')?'selected':'' ?>>Perempuan</option>  
                  </select>                  
                  </div>
                </div>
                <div class="form-group">
                  <label for="Tmpt Lahir" class="col-md-3">Tempat Lahir  <span class="required">*</span></label>
                  <div class="col-md-9">
                  <input class="form-control" type="text" value="<?php  echo $data['tmp_lahir'] ?>" name="tmplahir" required="">                  
                  </div>
                </div>
                <div class="form-group">
                  <label for="Tgl Lahir" class="col-md-3">Tanggal Lahir  <span class="required">*</span></label>
                  <div class="col-md-9">
                  <input class="form-control" id="tgl_" type="text" value="<?php  echo date('d-m-y',strtotime($data['tgl_lahir'])) ?>" name="tgl_lahir" required="">                  
                  </div>
                </div>
                <div class="form-group">
                  <label for="Alamat" class="col-md-3">Alamat </label>
                  <div class="col-md-9">
                  <textarea name="alamat" value="" required="" class="form-control"><?php  echo $data['alamat'] ?></textarea>                  
                  </div>
                </div>
                <div class="form-group">
                  <label for="Tlp" class="col-md-3">No Tlp <span class="required">*</span></label>
                  <div class="col-md-9">
                  <input class="form-control" type="text" value="<?php  echo $data['tlp'] ?>" name="tlp" required="">                  
                  </div>
                </div>
                <div class="form-group">
                  <label for="Email" class="col-md-3">Email Aktif  <span class="required">*</span></label>
                  <div class="col-md-9">
                  <input class="form-control" type="email" value="<?php  echo $data['email'] ?>" name="email" required="">                  
                  </div>
                </div>
                <?php 
                  if ($lv == 'user') { ?>
                    
                <div class="form-group">
                  <label for="" class="col-md-3">Tanggal Tempo </label>
                  <div class="col-md-9">
                  <input class="form-control" type="text" id="tlexp" value="<?php echo date('d-m-y',strtotime($data['tgl_exp'])) ?>" name="tempo">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Status" class="col-md-3">Status </label>
                  <div class="col-md-9">
                    <select class="form-control" name="status">
                        <option disabled="" selected="">~ PILIH STATUS ~</option>
                        <?php
                            $querytype = mysqli_query ($conn, "SELECT * FROM type");
                            if($querytype == false){
                              die ("Terjadi Kesalahan : ". mysqli_error($conn));
                            }
                            while ($type = mysqli_fetch_array ($querytype)){ ?>
                        
                                <option value="<?php echo $type['id_type']; ?>" <?php echo ($type['id_type'] == $data['status'])? "selected":"" ?>><?php echo $type['nama_kegiatan'] ?></option>
                          <?php
                            }
                          ?>
                    </select>
                  </div>
                </div>
                <?php 
                  }else if ($lv == 'instruktur') { ?>
                  <div class="form-group">
                    <label for="" class="col-md-3">Skill :</label>
                    <div class="col-md-9">
                    <select name="skill" class="form-control">
                      <option disabled="" selected="">~ PILIH SKILL ~</option>
                       <?php
                            $querytype = mysqli_query ($conn, "SELECT * FROM type");
                            if($querytype == false){
                              die ("Terjadi Kesalahan : ". mysqli_error($conn));
                            }
                            while ($type = mysqli_fetch_array ($querytype)){ ?>
                        
                                <option value="<?php echo $type['id_type']; ?>" <?php echo ($type['id_type'] == $data['skill'])? "selected":"" ?>><?php echo $type['nama_kegiatan'] ?></option>
                          <?php
                            }
                          ?>
                    </select>
                  </div>
                </div>
                 <?php 
                  }else{}
                 ?>

                <a href="index.php?page=user" title="Back" class="btn btn-warning btn-sm btn-flat pull-right" style="margin: 3px;">Batal</a>
                <button type="submit" name="submit" class="btn btn-info btn-sm btn-flat pull-right" style="margin: 3px;">Save</button>
            </form>
            </div>
            </div>
        </div> <!-- col -->        
      </div><!-- row -->
      </div>
      </section>
      </div>
    </div>


<script type="text/javascript">
$(function(){
  $('#tgl_,#tlexp').daterangepicker({
      singleDatePicker: true,
      locale: {
            format: 'DD-MM-YYYY'
        }
    });
});
$(function(){
    $(".profil-foto").on('click', function(e){
        e.preventDefault();
        $(this).parent().find(".input-foto").trigger('click');
    });
});
</script>
