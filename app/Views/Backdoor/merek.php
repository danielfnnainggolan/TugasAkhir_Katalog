<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KGA | Daftar Merek</title>
  <style>
  th.dpass, td.dpass {display: none;}
  </style>

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
            <h1>Daftar Katalog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Backdoor/welcome');?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Katalog</li>
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
              <th class="noExport" style="text-align: center;">id_merek</th>
              <th style="text-align: center;">Nama Merek</th>
              <th class="noExport" style="text-align: center;">Aksi</th>

            </tr>
            </thead>
            <tbody>
          <?php

          $num=1;
          foreach ($merek as $row) { ?>
            <tr>
              <td class="num" style="text-align: center;"><?php echo $num;?></td>
              <td class="id_merek" style="text-align: center;"><?php echo $row['id_merek'];?></td>
              <td class="nama_merek" style="text-align: center;"><?php echo $row['nama_merek']; ?></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Edit Merek</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url('Backdoor/Edit_Merek'); ?>">

        <div class="form-group">
        <input type="text" name="id_merek"  class="form-control id_merek" hidden >
        <label for="namaMerek">Nama Merek</label><input type="text" name="nama_merek" class="form-control nama_merek " >
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
      <h5 class="modal-title" id="exampleModalLabel">Hapus Merek</h5>
      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="POST" action="<?php echo base_url('Backdoor/Delete_Merek'); ?>">
      <div class="form-group">
      <input type="text" name="id_merek"  class="form-control id_merek_delete" hidden>
      <p> Apakah Anda yakin ingin menghapus merek barang ini? </p>
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
      <h5 class="modal-title" id="exampleModalLabel">Tambah Merek</h5>
      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="POST" action="<?php echo base_url('Backdoor/Add_Merek'); ?>">
      <div class="form-group">

      <label for="namaMerek">Nama Merek</label>
      <input type="text" name="nama_merek" class="form-control">
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
                        "buttons": [{text: 'Tambah Merek',action: function (e, node, config){$('#addModal').modal('show')}}],
                        "aoColumnDefs": [ { "sClass": "dpass", "aTargets": [ 1 ] } ]

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');



  });












  $('#editModal').on('show.bs.modal', function (e) {
    var _button = $(e.relatedTarget);
    // console.log(_button, _button.parents("tr"));
    var _row = _button.parents("tr");
    var _nama_merek = _row.find(".nama_merek").text();
    var _id_merek = _row.find(".id_merek").text();


    $(this).find(".nama_merek").val(_nama_merek);
    $(this).find(".id_merek").val(_id_merek);
    });



$('#deleteModal').on('show.bs.modal', function (e) {

  var _button = $(e.relatedTarget);

  // console.log(_button, _button.parents("tr"));
  var _row = _button.parents("tr");
  var _id_merek_delete = _row.find(".id_merek").text();
  $(this).find(".id_merek_delete").val(_id_merek_delete);

});




</script>




</body>
</html>
