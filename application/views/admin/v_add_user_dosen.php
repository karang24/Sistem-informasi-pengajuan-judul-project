<html>
<head>
<head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="<?php echo base_url('asset/bootstrap_3_2_0/css/bootstrap.min.css"')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap_3_2_0/css/bootstrap-theme.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/hovernav/hovernav.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap_datepicker/css/datepicker.css')?> rel="stylesheet">
    <link href="<?php echo base_url('asset/css/style.css')?> rel="stylesheet">
    <title>form mahasiswa</title> <!-- variabel diambil dari controller -->
    
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet"> <!-- Custom styles for this template -->
<style>

    body{
        margin:20px 10%;
    }
</style>
    <title>Menambahkan Data</title>
</head>
<body>
<div id="wrapper">
<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div align="justify" class="panel panel-default">
  <div align="justify" class="panel-heading"><b><h3>Tambah Data</h3></b></div>
  <div  align="justify" class="panel-body">
  <?=$this->session->flashdata('pesan')?>
     <form  action="<?php echo site_url('/admin/c_user_dosen/tambahdata'); ?>" method="post" enctype="multipart/form-data">
   
    <?php
    echo form_open('admin/c_user_dosen/tambahdata');
    ?>
<table class="table table-striped" align="center">
       <tr>
        <td style="width:55%;">NIK</td>
        <td>:</td>
        <td><div class="col-sm-15"><div class="col-sm-10"><input name="nik" type="text" class="form-control"></div></div></td>
    </tr>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><div class="col-sm-10"><input name="nama" type="text" class="form-control"></div></td>
    </tr>
    <tr>
        <td>No. HP</td>
        <td>:</td>
        <td><div class="col-sm-10"><input name="no_hp" type="text"  class="form-control"></div></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><div class="col-sm-10"><input name="password1" value="12345" type="password" readonly class="form-control">
<input name="password" value="12345" type="hidden" readonly>	</div>	</td>
    </tr>
    <tr>
        <td>Level</td>
        <td>:</td>
        <td><div class="col-sm-10"><input name="dosen1" type="text" readonly value="dosen" class="form-control"></div>
<input name="level" value="dosen" type="hidden" readonly></td>
    </tr>
    <tr>
        <td><?php echo form_submit('submit','Simpan','id="submit"'); ?></td>
    </tr>
</table>
<?php echo form_close(); ?>
</body>
</html>