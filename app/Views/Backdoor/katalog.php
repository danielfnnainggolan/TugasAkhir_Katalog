<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KGA | Daftar Katalog</title>
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
              <th style="text-align: center;">id_katalog</th>
              <th style="text-align: center;">Nama Barang</th>
              <th class="noExport" style="text-align: center;">ID Merek</th>
              <th style="text-align: center;">Merek</th>
              <th style="text-align: center;">Kategori</th>
              <th class="noExport" style="text-align: center;">ID Kategori</th>
              <th style="text-align: center;">Harga</th>
              <th style="text-align: center;">Stok</th>
              <th class="noExport" style="text-align: center;">Aksi</th>

            </tr>
            </thead>
            <tbody>
          <?php

          $num = 1;
          foreach ($katalog as $row) { ?>
            <tr>
              <td class="num" style="text-align: center;"><?php echo $num;?></td>
              <td class="id_katalog" style="text-align: center;"><?php echo $row->id_katalog;?></td>
              <td class="nama_barang" style="text-align: center;"><?php echo $row->nama_barang; ?></td>
              <td class="id_merek" style="text-align: center;"><?php echo $row->id_merek; ?></td>
              <td class="nama_merek" style="text-align: center;"><?php echo $row->nama_merek; ?></td>
              <td class="nama_kategori" style="text-align: center;"><?php echo $row->nama_kategori; ?></td>
              <td class="id_kategori" style="text-align: center;"><?php echo $row->id_kategori; ?></td>
              <td class="harga" style="text-align: center;"><?php echo "Rp. ".number_format($row->harga,0,',','.'); ?> </td>
              <td class="stok" style="text-align: center;"><?php echo $row->stok; ?></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url('Backdoor/Edit_Katalog'); ?>">

        <div class="form-group">
        <input type="text" name="id_katalog"  class="form-control id_katalog" hidden>
        <label for="namaBarang">Nama Barang</label><input type="text" name="nama_barang" class="form-control nama_barang">
        <label for="namaMerek">Merek</label>
        <select id="select2EditMerek" class="form-control select2 id_merek" style="width:100%" name="id_merek">
          <?php
          foreach($merek as $row) { ?>
            <option value="<?php echo $row['id_merek'];?>"><?php echo $row['nama_merek'];?>


          <?php }
          ?>
        </select>
        <label for="namaKategori">Kategori</label>
        <select id="select2EditKategori" class="form-control select2 id_kategori" style="width:100%" name="id_kategori">
          <?php foreach($kategori as $row) { ?>
            <?php if(!is_null($row['parent_kategori'])) { ?>
              <?php foreach($kategori as $row1) { ?>
                  <?php if($row1['parent_kategori'] == $row['id_kategori']) { ?>
              <option value="<?php echo $row1['id_kategori'];?>"><?php echo $row1['nama_kategori'];?>
            <?php }} ?>
          <?php }} ?>
        </select>
        <label for="harga">Harga</label><input type="text" name="harga" id="harga" class="form-control harga">
        <label for="stok">Stok</label><input type="number" name="stok"  class="form-control stok">
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
      <h5 class="modal-title" id="exampleModalLabel">Hapus Barang</h5>
      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="POST" action="<?php echo base_url('Backdoor/Delete_Katalog'); ?>">
      <div class="form-group">
      <input type="text" name="id_katalog"  class="form-control id_katalog_delete" hidden>
      <p> Apakah Anda yakin ingin menghapus barang ini? </p>
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
      <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="POST" action="<?php echo base_url('Backdoor/Add_Katalog'); ?>">
      <div class="form-group">

      <label for="namaBarang">Nama Barang</label><input type="text" name="nama_barang" class="form-control" required>
      <label for="harga">Harga</label><input type="text" name="harga" id="harga_add" class="form-control" required>
      <label for="merek">Merek</label>
      <select id="select2AddMerek" class="form-control select2 id_merek" style="width:100%" name="id_merek">
        <?php
        foreach($merek as $row) { ?>
          <option value="<?php echo $row['id_merek'];?>"><?php echo $row['nama_merek'];?>


        <?php }
        ?>
      </select>
      <label for="kategori">Kategori</label>
      <select id="select2AddKategori" class="form-control select2 id_kategori" style="width:100%" name="id_kategori">
        <?php foreach($kategori as $row) { ?>
          <?php if(!is_null($row['parent_kategori'])) { ?>
            <?php foreach($kategori as $row1) { ?>
                <?php if($row1['parent_kategori'] == $row['id_kategori']) { ?>
            <option value="<?php echo $row1['id_kategori'];?>"><?php echo $row1['nama_kategori'];?>
          <?php }} ?>
        <?php }} ?>
      </select>
      <label for="harga">Stok</label><input type="number" name="stok"  class="form-control">
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
                        {text: 'Tambah Barang',action: function (e, node, config){$('#addModal').modal('show')}}
                                  ],
                        "aoColumnDefs": [ { "sClass": "dpass", "aTargets": [ 1,3,6 ] } ]

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');



  });


  $('.select2').select2()

  $('#select2EditMerek').select2({
          dropdownParent: $('#editModal'),
      });

  $('#select2EditKategori').select2({
          dropdownParent: $('#editModal'),
      });

  $('#select2AddMerek').select2({
          dropdownParent: $('#addModal'),
      });

  $('#select2AddKategori').select2({
          dropdownParent: $('#addModal'),
      });




  new AutoNumeric('#harga', {
      allowDecimalPadding: false,
      currencySymbol: "Rp. ",
      decimalCharacter: ",",
      digitGroupSeparator: ".",
      formatOnPageLoad: false,
  });

  new AutoNumeric('#harga_add', {
      allowDecimalPadding: false,
      currencySymbol: "Rp. ",
      decimalCharacter: ",",
      digitGroupSeparator: ".",
      formatOnPageLoad: false,
  });



  $('#editModal').on('show.bs.modal', function (e) {
    var _button = $(e.relatedTarget);
    // console.log(_button, _button.parents("tr"));
    var _row = _button.parents("tr");
    var _nama_barang = _row.find(".nama_barang").text();
    var _id_merek = _row.find(".id_merek").text();
    var _harga = _row.find(".harga").text();
    var _id_katalog = _row.find(".id_katalog").text();
    var _id_kategori= _row.find(".id_kategori").text();
    var _stok = _row.find(".stok").text();



    $(this).find(".nama_barang").val(_nama_barang);
    AutoNumeric.getAutoNumericElement('#harga').set(_harga);
    $(this).find(".id_katalog").val(_id_katalog);
    $(this).find(".stok").val(_stok);
    $('#select2EditMerek').val(_id_merek);
    $('#select2EditMerek').trigger('change');

    $('#select2EditKategori').val(_id_kategori);
    $('#select2EditKategori').trigger('change');

    });



$('#deleteModal').on('show.bs.modal', function (e) {

  var _button = $(e.relatedTarget);

  // console.log(_button, _button.parents("tr"));
  var _row = _button.parents("tr");
  var _id_katalog_delete = _row.find(".id_katalog").text();
  $(this).find(".id_katalog_delete").val(_id_katalog_delete);

});




</script>




</body>
</html>
