 <style>
	tr, td{
		padding:3px 8px 3px 10px;
	}
</style> 
</style>
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
<h1><center>Contoh Web Service</center></h1> 
<?php //echo anchor('rest_client_barang/form_add_barang', '<h3>Input</h3>')?>
  <div id="wrapper">
<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div align="justify" class="panel panel-default">
  <div align="justify" class="panel-heading"><b>Client</b></div>
  <div  align="justify" class="panel-body">
<table border="1" style="border-collapse:collapse" width="50%" align="center" class="table table-striped" >
	<tr>
		<td>No.</td>
		<td>Judul Proposal</td>
		<td>Tanggal upload</td>
		<td>keterangan</td>
		<td>NPM</td>
	
		<td>file</td>
	</tr>
	<?php $i=1; 
	 if(isset($dataws)){
		foreach($dataws as $brg){ ?>
	<tr>
		<td><?php echo $i++?></td>
		<td><?php echo $brg->judul;?></td>
		<td><?php echo $brg->D_proposal;?></td>
		<td><?php echo $brg->ket;?></td>
		<td><?php echo $brg->npm;?></td>
		<td><?php echo $brg->file;?></td>
	</tr>
	<?php } 
	 }
	?>
</table>