<html>
<head>
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
    
    
    <h3>Baca Data</h3>

    <div class="info"  style="margin-bottom:10px">
		<div class="tip icon-tip">&nbsp;</div>
		<div>Klik tombol pada datagrid toolbar untuk melakukan perubahan data.</div>
</div>
       <form method="get" action="<?php echo site_url('/mahasiswa/c_user_mhs/cariDosen1'); ?>">
<table>
 <?php $this->load->library('session');
	  $session_id = $this->session->userdata('username');
	  ?>

</tr>

</table>

<table class="easyui-datagrid" align="center" id="dg" title="DATA PEMBIMBING" tyle="height:300px"
			
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
 
    <thead>
			<tr>
            
				
				<th field="judul" width="15">Judul</th>
				<th field="ket" width="10">Keterangan</th>
                <th field="npm" width="15">Mahasiswa</th>
                <th  field="npm1" width="15">Dosen</th>                
                
                
			</tr>
           <?php 
  foreach ($cari as $tes) {
?>
  </thead>
       
        <tr>
            
            <td> <?php echo $tes->judul;;?></td>
			<td><?php echo $tes->ket;?></td>
            <td><?php echo $tes->npm;}?></td>
			<td><input type="hidden" value="<?php echo $tes->nik;?>" name="cari"><input type="submit" value="pembimbing">  </td>
            <td> 
                 
            </td>
        </tr>
	
</table>

</form>
</body>
</html>