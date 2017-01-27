<html>
<head>
<style>
<style type="text/css">
.textarea-resize{
 width: 300px;
 height: 85px;
}

.textarea-none-resize{
 width: 300px;
 height: 85px;
 resize: none;
}</style>
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
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo base_url('mycss/bootstrap-responsive.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('jquery_easyui/themes/default/easyui.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('jquery_easyui/themes/icon.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('jquery_easyui/themes/style.css')?>"/>
<script type="text/javascript" src="<?php echo base_url('jquery_easyui/jquery.min.js')?>"/></script>
<script type="text/javascript" src="<?php echo base_url('jquery_easyui/jquery.easyui.min.js')?>"/></script>
<script type="text/javascript" src="<?php echo base_url('libs_js/user.js')?>"/></script>

    <title>Membaca Data</title>
</head>
<body>
    <h3></h3>
    <div id="container">
      
    <br>
    <div id="wrapper">
<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div align="justify" class="panel panel-default">
  <div align="justify" class="panel-heading"><b>From Bimbingan</b></div>
  <div  align="justify" class="panel-body">
    <form action="<?php echo site_url('dosen/c_bimbingan/tambahdata'); ?>" method="post" enctype="multipart/form-data">
    <?php $this->load->library('session');
	  $session_id = $this->session->userdata('username');
	  ?>
 
 <table align="center" border="2" class="table table-striped"  frame="box">
<tr align="center">
            <td>Tanggal</td>
            <td>NPM</td>
            <td>Uraian</td>
            <td>Tdd</td>
            <td></td>
            
        </tr>
       
        <tr align="center">
              <?php $this->load->helper('date');
		 $sekarang = time();
		 $gmt = local_to_gmt($sekarang) ;
		  $format = 'DATE_W3C';
		 $waktu = time($gmt); ?>
            <td><input align="middle" class="form-control" type="text" name="d_bimbingan1" size="11" value="<?php echo date("d/m/Y");?>" readonly>
            <input type="hidden" name="d_bimbingan" class="form-control" size="11" value="<?php echo date("Y/m/d");?>">
            </td>
            <td>  <input type="hidden" name="npm" class="form-control" size="11" value="<?php echo  $hasil->npm;?>"> <input type="text" class="form-control" name="npm" size="11" value="<?php echo  $hasil->npm;?>" readonly></td>
            
            <td>
              <textarea class="form-control"  name="uraian"  maxlength="100" class="textarea-none-resize" ></textarea></td>
            <td><input type="hidden" class="form-control" name="nik" value="<?php echo $session_id ?>" size="10"><input type="checkbox"  class="form-control" value="validate" name="ttd" size="10" required></td>
            
         <td> <button name="submit">Simpan</button></td>
        </tr>
    
    </table>
    
 </form>
 </div>
</body>
</html>