<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Djava-ui">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-responsive.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>"/>
    <style type="text/css">
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
    </style>

    <!-- Fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/logo_himatif.ico')?>">


</head>

<body>
<div class="container">

    <style type="text/css">
        body{
            background-color: #ffffff;
        }
        [class*="span"] {
            float: left;
            min-height: 1px;
            margin-left: 5px;
        }
        .span {
            width: 220px;
        }
        .sign{
            height: 100px;
            border-bottom: 1px solid #000000;
        }
        .text-center{
            text-align: center
        }

    </style>
  <div align="left">
        <?php
        $no = 1;
        foreach($data as $hasil) {
        ?>
            <strong style="font-size: x-large; float: left; color: #3a87ad;"><?php echo $row->nama?></strong> <br/><br/>
            <strong style="font-size: large; float: left; color: #3a87ad;"><?php echo $row->desc?></strong> <br/>
        <?php } ?>
        <hr/>
    </div>
    <br/>

    <div align="center">
        <h3 style="border: 1px solid #333;">Form Bimbingan</h3>
        <br/>
        <div align="left">
            <table>
                <?php //if(isset($data_laporan)){ foreach($data_laporan as $row) { ?>
                  
                    <tr>
                        <td width="65%"><strong>Admin : </strong> <?php echo $this->session->userdata('USERNAME')?></td>
                       
                    </tr>

                <!--<?php// } } ?> -->
            </table>

        </div>
        <br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>NO</th>
        <th>ID Jadwal</th>
        <th>NPM</th>
        <th>Nama Anggota</th>
        <th>Keterangan</th>
        <th>Waktu</th>
            </tr>
            </thead>
       
            <tr>
                <td><?php echo $no++; ?></td>
        <td><?php echo $row->id_jadwal; ?></td>
        <td><?php echo $hasil->npm; ?></td>
        <td><?php echo $row->nama_anggota; ?></td>
        <td><?php echo $row->keterangan; ?></td>
        <td><?php echo date("d M Y  H:i:s",strtotime($row->waktu));?></td>
            </tr>
           
            </tbody>
        </table>
      <!--  <?php if(isset($dt_penjualan)){ foreach($dt_penjualan as $row) { ?>
            <h5 style="float:right;">
                Total : <?php echo currency_format($row->total_harga)?>
            </h5>
        <?php }}?>-->
    </div>
    <br/>
    <hr/>

    <div class="span center">
        
                <h5 class="text-center">Koor.Kesekretariatan</h5>
                <div class="sign"></div>
                <h6 class="text-center"></h6>
       
    </div>
    <div class="span center" style="float: right">
        <?php
        if(isset($dt_contact)){
            foreach($dt_contact as $row) { ?>
                <h5 class="text-center"><?php echo $row->nama?></h5>
                <div class="sign"></div>
                <h6 class="text-center">Ketua Himpunan : <?php echo $row->owner?></h6>
            <?php }
        }
        ?>
    </div>

    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.printPage.js')?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".btnPrint").printPage();
            //$(".btnPrint").printPage()
        })
    </script>

</div>
</body>

