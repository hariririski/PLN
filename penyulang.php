<!DOCTYPE html>
<html>

<head>
     <?php include'share/title.php'?>
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>
<?php
				include 'share/modala.php'
				?>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
         <?php include'share/atas.php'?>
		 <!-- end navbar top -->

        <!-- navbar side -->
		<?php include'share/menu.php'?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Data Penyulang</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
			<div class="col-lg-12">
			<a href="tambah_penyulang.php" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-primary btn-lg btn-block">Tambah Penyulang</button></a>
                <br>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Data Admin
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Penyulang</th>
                                            <th>Nama Wilayah Penyulang</th>
                                            <th>Pembagian_penyulang</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									    <?php
                  include'share/koneksi.php';
                  $i=0; 
                  $tampil = "SELECT * from penyulang inner join gardu_hubung on penyulang.id_gardu_hubung=gardu_hubung.id_gardu_hubung inner join gardu_induk on gardu_hubung.id_gardu_induk=gardu_induk.id_gardu_induk inner join rayon on gardu_induk.id_rayon=rayon.id_rayon inner join area on rayon.id_area=area.id_area inner join wilayah 
				  on wilayah.id_wilayah=area.id_area";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
               
                   echo '
                   <tr class="odd gradeX">
                    <td width="30px">'.$i.'</td>
                    <td class="center">'.$data['nama_penyulang'].'</td>
                    <td class="center">'.$data['nama_wilayah_penyulang'].'</td>
                    <td class="center">'.$data['pembagian_penyulang'].'</td>
                   
                    
                    ';
					
					echo"
                    <td class='center'><a href='edit_penyulang.php?id=".$data['id_penyulang']."' data-toggle='modal' data-target='#myModal' >
					<button type='button' class='btn btn-primary btn-circle '><i class='fa fa-list'></i>
                    </button></a>
					</td>
					";
					echo"
                    <td class='center'><a href='proses/proses_hapus_penyulang.php?id=".$data['id_penyulang']."
					'onclick=\"return confirm('Apakah Anda ingin mengedit data atas nama $data[nama_penyulang]?') 
					\" title='edit'>
					<button type='button' class='btn btn-warning btn-circle '><i class='fa fa-times'></i>
                            </button></a>
					</td>
					";
					
                    
                    
                    
                    
                  echo'  
                  </tr>
                  ';
                   }
  ?>
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
           </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
	<?php include('share/footer.php')?>
</body>

</html>
