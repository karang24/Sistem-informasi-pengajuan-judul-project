<html>
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

</head>
<body>
<div id="wrapper">
<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div align="justify" class="panel panel-default">
  <div align="justify" class="panel-heading"><b>From Revisi</b></div>
  <div  align="justify" class="panel-body">
<form  action="<?php echo site_url('kordinator/c_kordinator_proposal/tampil33'); ?>" method="post" >
<?php
    echo form_open('kordinator/c_kordinator_proposal/tampil33',$hasil4->npm);
    ?>
  <table class="table table-striped" align="center">
  
<thead>
    <tr>
				 <th field="ket" >Mahasiswa </th><td><div class="col-sm-20"><select name="npm" style="width:140px;" class="form-control" required="true">
          <option value="<?php echo $hasil4->npm;?>"> <?php echo $hasil4->nama_lengkap;?></option>
     
        </select></div></td></tr>
            <tr>
				 <th field="ket1" >NPM </th><td><div class="col-sm-20"><select name="npm" style="width:140px;" class="form-control" required="true">
          <option value="<?php echo $hasil4->npm;?>"> <?php echo $hasil4->npm;?></option>
     
        </select></div></td></tr>
			
            <tr align="center">
            
				<th field="judul" style="width:55%;" align="center">Abstract</th>
                <td style="width:55%;" > <div class="col-sm-15">
           <div class="col-sm-15"><textarea   name="abstract"  maxlength="100" class="textarea-none-resize" ></textarea>
            </div> </td><tr><tr align="center">
            
				<th field="judul" style="width:55%;" align="center">Latar Belakang</th>
                <td style="width:55%;" > <div class="col-sm-15">
           <div class="col-sm-15"><textarea   name="latar_belakang"  maxlength="100" class="textarea-none-resize" ></textarea>
            </div> </td><tr>
				<th field="d_update" >Identifikasi Masalah</th>
				<td style="width:55%;"><div class="col-sm-20">
				<textarea   name="identifikasi_masalah"  maxlength="100" class="textarea-none-resize" ></textarea></div></td></tr>
            <tr>
				<th field="d_acc" >Tujuan</th>   
			  <td style="width:55%;"><textarea   name="tujuan"  maxlength="100" class="textarea-none-resize" ></textarea></td></tr>
          <tr>
                <th field="d_upload" >Ruang Lingkup</th> <td><textarea   name="ruang_lingkup"  maxlength="100" class="textarea-none-resize"></textarea></td>
          </tr>
            <tr>
                <th field="file" >Sistematika Penulisan</th> <td><textarea   name="sistematika_penulisan"  maxlength="100" class="textarea-none-resize" ></textarea></td></tr>
                <tr>
				 <th field="type_file" >Landasan Teori</th>
                 <td style="width:55%;" >
        <textarea    name="landasan_teori"  maxlength="100" class="textarea-none-resize" ></textarea></td></tr>
    
				 
			
	</thead>
        <tr>
    
		
          <td height="70"><?php echo form_submit('submit','Simpan', 'id="submit"');?><?php echo form_close(); ?> <button type="reset" class="btn btn-default">Batal</button> </td>
        </tr>
        
   </table>
  <?php form_close(); ?>
  </form>
</body>
</html>