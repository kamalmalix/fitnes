<section class="content-header">
  <h1>
    Instruktur
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-user"></i> Instruktur</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="data" class="table table-bordered table-striped table-scalable">
            <thead>
            <tr>
              <th>No.</th>
              <th style="display: none;">idu</th>
              <th>Username</th>
              <th>Email</th>
              <th>Level</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $queryuser = mysqli_query($conn, "SELECT * FROM user where level_user = 'instruktur'");
              if($queryuser == false){
                die ("Terjadi Kesalahan : ". mysqli_error($conn));
              }
              $no = 1;
              while ($user = mysqli_fetch_array($queryuser)){ ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td style="display: none;"><?php echo $user['id_user'];  ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['level_user']; ?></td>
                    <td>
                      <a href="" title="info detail" data-toggle="" class="btn btn-info btn-sm"><span class="fa fa-info" aria-hidden="true"></span></a>

                      <a href="" onclick="edit(<?php echo "'".$user['id_user']."','".$user['username']."','".$user['email']."','".$user['level_user']."'";?>)" title="edit" data-toggle="modal" class="btn btn-success btn-sm"><span class="fa fa-edit"></span></a>

                      <a href='#' onClick='confirm_delete("user_delete.php?id_user=<?php echo $user['id_user']; ?>")' title="hapus" data-toggle="" class="btn btn-danger btn-sm"><span class="fa fa-trash" aria-hidden="true"></span></a>

                    </td>
                  </tr>
            
            <?php 
              $no++;  
              }
            ?>
          </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->

<!-- Modal Edit -->
<div id="edit_" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit User </h4>
      </div>
      <div class="modal-body">
       
    <form action="" method="post" enctype="multipart/form-data" class="form">
    <input type="text" style="display: none;" name="id" id="idu" value="">
      <div class="form-group has-feedback">
        <input type="text" name="username" id="username_" class="form-control" value="" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" id="email_" class="form-control" placeholder="Email" value="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <select class="form-control" name="level" id="level_" placeholder="">
          <option disabled="">Pilih User</option>
          <option value="user">user</option>
          <option value="instruktur">Instruktur</option>
          <option value="admin">Admin</option>
        </select> 
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pass" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
     
    </div>
    <div class="modal-footer">    
      <button type="submit" class="btn btn-primary">Save</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </form>
      </div>
    </div>

  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modal_delete">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align:center;">Apakah anda ingin menghapus data ?</h4>
            </div>    
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-danger" id="delete_link">Hapus</a>
                <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
      $('#dt_user').DataTable();
  });  


function edit(id,user,email,lv) {
  $('#edit_').modal('show');

  $("#idu").val(id);
  $("#username_").val(user);
  $("#email_").val(email);
  $("#level_").val(lv);
}

function confirm_delete(delete_url){
      $("#modal_delete").modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href', delete_url);
    }

</script>