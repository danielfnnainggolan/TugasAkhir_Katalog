<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KGA | Stok Barang</title>
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
            <h1>Stok Barang</h1>
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
              <th style="text-align: center;">Nama Barang</th>
              <th style="text-align: center;">Stok</th>
              
              <th style="text-align: center;">Waktu Data Terakhir Diubah</th>
              

            </tr>
            </thead>
            <tbody>
          <?php

          $num=1;
          foreach ($stok as $row) { ?>
            <tr>
              <td class="num" style="text-align: center;"><?php echo $num;?></td>
              <td class="nama_barang" style="text-align: center;"><?php echo $row->nama_barang; ?></td>
              <td class="stok" style="text-align: center;"><?php echo $row->stok; ?></td>
              <td class="createdAt" style="text-align: center;"><?php echo $row->createdAt; ?></td>
              
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


 

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Tambah Deskripsi</h5>
      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="POST" action="<?php echo base_url('Backdoor/Add_Stok'); ?>">
      <div class="form-group">

      <label for="namaBarang">Nama Barang</label>
      <select id="select2AddStok" class="form-control select2 id_katalog" style="width:100%" name="id_katalog">
        <?php
        foreach($stok as $row) {?>
          <option value="<?php echo $row->id_katalog;?>"><?php echo $row->nama_barang;?>
        <?php }
        ?>
      </select>
      <label for="status">Status Masuk (+) / Keluar (-) Barang</label><input type="text" name="status" id="status" class="form-control status">
      <label for="keterangan">Keterangan</label><input type="text" name="keterangan" id="keterangan" class="form-control keterangan">
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
                        "buttons": [{extend:'csv',exportOptions: {columns: "thead th:not(.noExport)"}},
                        {extend:'excel',exportOptions: {columns: "thead th:not(.noExport)"}},
                        {extend:'pdf',exportOptions: {columns: "thead th:not(.noExport)"}},
                        {text: 'Tambah Data Stok',action: function (e, node, config){$('#addModal').modal('show')}}
                                  ],
                       

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');



  });


  $('.select2').select2()

  $('#select2AddStok').select2({
          dropdownParent: $('#addModal'),
      });



  $('#editModal').on('show.bs.modal', function (e) {
    var _button = $(e.relatedTarget);
    // console.log(_button, _button.parents("tr"));
    var _row = _button.parents("tr");
    var _id_katalog = _row.find(".id_katalog").text();
    var _status = _row.find(".status").text();
    var _id_stok = _row.find(".id_stok").text();
    var _stok = _row.find(".stok").text();
    var _nama_barang = _row.find(".nama_barang").text();
    
    var _keterangan = _row.find(".keterangan").text();
    $(this).find(".nama_barang").val(_nama_barang);
    $(this).find(".stok").val(_stok);
    $(this).find(".id_katalog").val(_id_katalog);
    $(this).find(".id_stok").val(_id_stok);
    $(this).find(".status").val(_status);
    $(this).find(".keterangan").val(_keterangan);
    });



$('#deleteModal').on('show.bs.modal', function (e) {

  var _button = $(e.relatedTarget);

  // console.log(_button, _button.parents("tr"));
  var _row = _button.parents("tr");
  var _id_katalog_delete = _row.find(".id_katalog").text();
  var _id_stok_delete = _row.find(".id_stok").text();
  
  var _stok_delete = _row.find(".stok").text();

  $(this).find(".id_katalog_delete").val(_id_katalog_delete);
  $(this).find(".id_stok_delete").val(_id_stok_delete);

  $(this).find(".stok_delete").val(_stok_delete);

});


function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  });
}

setInputFilter(document.getElementById("intTextBox"), function(value) {
  return /^-?\d*$/.test(value); });
</script>




</body>
</html>
