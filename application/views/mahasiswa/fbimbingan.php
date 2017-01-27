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
    <title>Membaca Data</title>
</head>
<body>
    
    

<?php
    if(empty($cari)){
        echo "<script>alert('Anda Belum Pernah Bimbingan, Segera Hubungan Pembimbing Anda');history.go(-1);</script>";
    }
    else{
    ?>
    <div class="info"  style="margin-bottom:10px">
		<div class="tip icon-tip"></div>
</div>
        <form method="post" action="<?php echo site_url('/mahasiswa/c_user_mhs/uploadlaporan'); ?>">
<table>
 <?php $this->load->library('session');
	  $session_id = $this->session->userdata('username');
	  ?>
<td></td><td><input type="hidden" name="cari" value="<?php echo $session_id; ?>"></td>
</tr>
<tr>
<td></td><td><input type="submit" value="UPLOAD DRAF"></td>
</tr>
<tr>
<td></td><td><button onClick="window.print();">Print</button><br></td> 
</tr>
</table>
</form>
<table>
<tr>
<td>  <img src="<?php echo base_url('mycss/images/logo poltekpos.png')?>"width="90" height="90" /></td>
<td>&nbsp;&nbsp; &nbsp;</td>
<td>POLITEKNIK POS INDONESIA<br>
PROGRAM STUDI D4 TEKNIK INFORMATIKA<br>
JL. SARIASIH NO. 54 BANDUNG – 40151<br>
Telp. 022-2009562, 2009570<br>
Fax. 022-2009568<br />
</td>
</tr>
</table>
<h4 align="center">FORMULIR KEGIATAN<br>
PROYEK 2</h4>
<table>
<tr>
<td> Nama Mahasiswa </td>
<td> :</td>
<td>
 <?php 
  $no = 1;
  foreach ($cari1 as $tes1) {
?><?php echo $tes1->nama_lengkap;?><?php
        }
        ?> </td>
</tr>
<tr>
<tr></tr>
<td> NPM </td>
<td>: </td>
<td><?php echo $tes1->npm;?> </td>
</tr>
<tr></tr>
<tr>
<td> Judul Proyek2 </td>
<td>: </td>
<td><?php 
  $no = 1;
  foreach ($cari2 as $tes2) {
?><?php echo $tes2->judul;?><?php
        }
        ?> </td>
</tr>
<tr></tr>
</table>
<br>
<table align="left" id="dg" title="DATA PEMBIMBING"  border="2"  class="table table-striped" >
 
    <thead>
			<tr>
            
				
				
				<th  >Tanggal</th>
                <th  >Uraian</th>
                <th  >Keterangan</th>
			</tr>
            <?php 
  $no = 1;
  foreach ($cari as $tes) {
?>
  </thead>
       
        <tr>
            
            
            <td><?php echo date("d F Y",strtotime($tes->d_bimbingan));?> </td>
			<td> <?php echo $tes->uraian; ?></td>
  <td><?php echo $tes->ttd;}?></td>

            
           
        </tr>
		<?php
        }
        ?>
</table>
 <?php $this->load->helper('date');
		 $sekarang = time();
		 $gmt = local_to_gmt($sekarang) ;
		  $format = 'DATE_RFC822';
		 $waktu = time($gmt); ?>
<table align="right">
<tr>
<td align="center">Bandung,<?php echo date("d F Y");?></td>

</tr>
<tr>
<td align="center">Pembimbing</td>
<td align="right"><br></td>
</tr>
<tr>
<td align="center"></td>
<td align="right"><br><br></td>
</tr>


</table>
</body>
</html>