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
    <h3><div class="info"  style="margin-bottom:10px">
		<div class="tip icon-tip">&nbsp;</div>
		<div>Klik tombol pada datagrid toolbar untuk melakukan perubahan data
	</h3>
   
    <table align="center" id="dg" title="DATA BIMBINGAN" class="easyui-datagrid" style="height:300px"
			
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
             <?php
    if(empty($hasil)){
        echo "Tidak ada data";
    }
    else{
    ?>
         <thead>
			<tr>
				<th field="d_bimbingan" width="15">Tanggal Bimbingan</th>
				<th field="uraian" width="10">Uraian</th>
                <th field="ttd" width="10">TTD</th>
                <th field="npm" width="10">NPM</th>
                <th field="nik" width="12">NIK</th>
                <th field="keterangan" width="10">Keterangan</th>
			</tr>
          
  </thead>
        <?php
        $no = 1;
        foreach($hasil as $data) {
        ?>
        <tr>           
            <td><?php echo $data->d_bimbingan;?></td>
            <td><?php echo $data->uraian;?></td>
            <td><?php echo $data->ttd;?></td>
            <td><?php echo $data->npm;?></a></td>
            <td><?php echo $data->nik;?></td>
            <td> <a onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" class="easyui-linkbutton" iconCls="icon-remove" href="deletebimbingan/<?php echo $data->id_bimbingan;?>">
                Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
        </table>
 
    <?php
    }
    ?>
    
</body>
</html>