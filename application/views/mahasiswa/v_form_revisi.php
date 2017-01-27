<html>
<head>
<link rel="stylesheet" href="<?php echo base_url('mycss/bootstrap-responsive.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('jquery_easyui/themes/default/easyui.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('jquery_easyui/themes/icon.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('jquery_easyui/themes/style.css')?>"/>
<script type="text/javascript" src="<?php echo base_url('jquery_easyui/jquery.min.js')?>"/></script>
<script type="text/javascript" src="<?php echo base_url('jquery_easyui/jquery.easyui.min.js')?>"/></script>
<script type="text/javascript" src="<?php echo base_url('libs_js/user.js')?>"/></script>
    <title>Form Revisi</title>
</head>
<body>
    
    
    <h3>Form Revisi</h3>
    <div class="info"  style="margin-bottom:10px">
		<div class="tip icon-tip">&nbsp;</div>
		<div>Klik tombol pada datagrid toolbar untuk melakukan perubahan data.</div>
</div>
        <form method="get" action="<?php echo site_url('c_cari_data/updatedata'); ?>">
</form>
<table align="center" id="dg" title="DATA MAHASISWA" class="easyui-datagrid" style="height:300px"
			
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
  <?php foreach ($cari as $cari1) {
?>
    <thead>
			<tr>
            
				<th field="npm" width="15">Abstract</th>
				<th field="npm1" width="15">Latar Belakang</th>
				<th field="nama_lengkap" width="50">Identifikasi Masalah</th>
                <th field="kelas" width="15">Tujuan</th>
                <th field="jurusan" width="15">Ruang Lingkup</th>
                <th field="alamat" width="50">Landasan Teori</th>
                 <th field="alamat1" width="50">ket</th>
			
                
	  </tr>
          
  </thead>
       
        <tr>
            
            <td> <?php echo $cari1->abstract; 
  }
?></td>
          <td> <?php echo $cari1->latar_belakang; 

?></td>
            <td><?php echo $cari1->identifikasi_masalah;?></td>
            <td><?php echo $cari1->tujuan;?></td>
            <td><?php echo $cari1->	ruang_lingkup ;?></td>
            <td><?php echo $cari1->landasan_teori ;?></td>
            <?php $this->load->library('session');
	$session_id = $this->session->userdata('username');
	?>
              <td><a href="<?php echo site_url('mahasiswa/c_user_mhs/proposalrevisi',$session_id ) ?>">Revisi</a></td>
         
       
                  
            </td>
        </tr>
</table>
</body>
</html>