<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KGA | Daftar Kategori</title>
  <style>
  th.dpass, td.dpass {display: none;}
  </style>
  <!-- Select 2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/select2/css/select2.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/adminlte.min.css');?>">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome-all.min.css');?>">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/buttons.bootstrap4.min.css');?>">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  
  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Backdoor/welcome');?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Kategori</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="card">

        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th style="text-align: center;">No.</th>
              <th class="noExport" style="text-align: center;">id_kategori</th>
              <th class="noExport" style="text-align: center;">id_kategori1</th>
              <th style="text-align: center;">Jenis Kategori</th>
              <th style="text-align: center;">Nama Kategori</th>
              <th style="text-align: center;">Parent Kategori</th>
              <th class="noExport" style="text-align: center;">Aksi</th>

            </tr>
            </thead>
            <tbody>
          <?php

          $num=1;
          foreach ($kategori as $row) { ?>
            <tr>
              <td class="num" style="text-align: center;"><?php echo $num;?></td>
              <td class="id_kategori" style="text-align: center;"><?php echo $row->id_kategori;?></td>
              <td class="id_kategori1" style="text-align: center;"><?php if(!is_null($row->id_kategori1)) {echo $row->id_kategori1;} else echo "-"; ?></td>
              <td class="jenis_kategori" style="text-align: center;"><?php if(is_null($row->id_kategori1) && is_null($row->parent_kategori1)) {echo "Kategori Utama";} 
              elseif(is_null($row->parent_kategori1)) {echo "Sub Kategori 1";} else {echo "Sub Kategori 2";} ?></td>
              <td class="nama_kategori" style="text-align: center;"><?php echo $row->nama_kategori; ?></td>
              <td class="parent_kategori" style="text-align: center;"><?php if(!is_null($row->parent_kategori)) {echo $row->parent_kategori;} else echo "-"; ?></td>
              <td style="text-align: center;">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-edit"></i> Edit</button>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fas fa-trash"></i> Hapus</button>

                </td>
            </tr>
          <?php $num++;} ?>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <div class="modal fade" id="editModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url('Backdoor/Edit_Kategori'); ?>">

        <div class="form-group">
        <input type="text" name="id_kategori"  class="form-control id_kategori" hidden>

        <label for="namaKategori">Nama Kategori</label><input type="text" name="nama_kategori" class="form-control nama_kategori ">
        <label for="namaKategori">Parent Kategori</label>
        <select id="select2EditKategori" class="form-control select2 id_kategori1" style="width:100%" name="parent_kategori">
        <option value="<?php echo "-";?>"> - (Kategori Utama)
        <?php foreach($kategori as $row) { ?>
            <?php if(is_null($row->id_kategori1) || is_null($row->parent_kategori1)) { ?>
              
              <option value="<?php echo $row->id_kategori;?>"><?php echo $row->nama_kategori;?>
            <?php }} ?>
      </select>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Hapus Kategori</h5>
      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="POST" action="<?php echo base_url('Backdoor/Delete_Kategori'); ?>">
      <div class="form-group">
      <input type="text" name="id_kategori"  class="form-control id_kategori_delete" hidden>
      <p id="p1"  text-align: justify;> </p>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tidak</button>
      <button type="submit" class="btn btn-danger">Ya</button>
    </form>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Barang</h5>
      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="POST" action="<?php echo base_url('Backdoor/Add_Kategori'); ?>">
      <div class="form-group">

      <label for="namaKategori">Nama Kategori</label>
      <input type="text" name="nama_kategori" class="form-control">
      <label for="parentKategori">Parent Kategori</label>
      <select id="select2AddKategori" class="form-control select2 parent_kategori" style="width:100%" name="parent_kategori">
        <option value="<?php echo NULL;?>"> - (Kategori Utama)
        <?php foreach($kategori as $row) { ?>
            <?php if(is_null($row->id_kategori1) || is_null($row->parent_kategori1)) { ?>
              
              <option value="<?php echo $row->id_kategori;?>"><?php echo $row->nama_kategori;?>
            <?php }} ?>
      </select>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
    </div>
  </div>
</div>
</div>







 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/adminlte.min.js');?>"></script>
<!-- Select 2  -->
<script src="<?php echo base_url('assets/select2/js/select2.full.min.js');?>"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.responsive.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/responsive.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/buttons.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jszip.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/vfs_fonts.js');?>"></script>
<script src="<?php echo base_url('assets/js/buttons.html5.min.js');?>"></script>

<script src="<?php echo base_url('assets/js/buttons.colVis.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/autoNumeric.min.js');?>"></script>

<script>





$(function () {
    $("#example1").DataTable({
                        "retrieve":true,"responsive": true, "lengthChange": false, "autoWidth": false,"ordering": false,
                        "buttons": [{text: 'Tambah Kategori',action: function (e, node, config){$('#addModal').modal('show')}}],
                        "aoColumnDefs": [ { "sClass": "dpass", "aTargets": [ 1,2 ] } ]

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });


  $('.select2').select2();

  $('#select2AddKategori').select2({
        dropdownParent: $('#addModal'),
    });

  $('#select2EditKategori').select2({
        dropdownParent: $('#editModal'),
    });  


  $('#editModal').on('show.bs.modal', function (e) {
    var _button = $(e.relatedTarget);
    // console.log(_button, _button.parents("tr"));
    var _row = _button.parents("tr");
    var _nama_kategori = _row.find(".nama_kategori").text();
    var _id_kategori = _row.find(".id_kategori").text();
    var _id_kategori1 = _row.find(".id_kategori1").text();

    $('#select2EditKategori').val(_id_kategori1);
    $('#select2EditKategori').trigger('change');
    $(this).find(".nama_kategori").val(_nama_kategori);
    $(this).find(".id_kategori").val(_id_kategori);
    });



$('#deleteModal').on('show.bs.modal', function (e) {

  var _button = $(e.relatedTarget);

  // console.log(_button, _button.parents("tr"));
  var _row = _button.parents("tr");
  var _id_kategori_delete = _row.find(".id_kategori").text();
  var _jenis_kategori_delete = _row.find(".jenis_kategori").text();
  $(this).find(".id_kategori_delete").val(_id_kategori_delete);
  
  let x = "Kategori Utama";
  let y = "Sub Kategori 1";
  let z = "Sub Kategori 2";
  if(_jenis_kategori_delete.valueOf() == x.valueOf()) {
    document.getElementById("p1").innerHTML = "Menghapus Kategori Utama akan menghapus Sub Kategori 1 dan 2 dari Kategori Utama. Apakah Anda yakin untuk menghapus kategori ini?";
  } else if(_jenis_kategori_delete.valueOf() == y.valueOf()) {
    document.getElementById("p1").innerHTML = "Menghapus Sub Kategori 1 akan menghapus Sub Kategori 2 dari Sub Kategori 1. Apakah Anda yakin untuk menghapus kategori ini?";
  } else if(_jenis_kategori_delete.valueOf() == z.valueOf()) {
    document.getElementById("p1").innerHTML = "Apakah Anda yakin untuk menghapus kategori ini?";
  }

 

});




</script>




</body>
</html>
