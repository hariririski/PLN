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
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
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
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $nama?></b>

                    </div>
                </div>
                <!--end  Welcome -->
            </div>


            <div class="row">
                <!--quick info section -->
				<div class="col-lg-3">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body yellow">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
							<?php
							  include'share/koneksi.php';
							  $tampil = "SELECT count(trafo.id_trafo) as jumlah from trafo INNER JOIN penyulang on trafo.id_peyulang=penyulang.id_penyulang INNER JOIN gardu_hubung on gardu_hubung.id_gardu_hubung=penyulang.id_gardu_hubung INNER JOIN gardu_induk on gardu_induk.id_gardu_induk=gardu_hubung.id_gardu_induk INNER JOIN rayon on rayon.id_rayon=gardu_induk.id_rayon INNER JOIN area on area.id_area=rayon.id_area INNER JOIN wilayah on wilayah.id_wilayah=area.id_wilayah INNER JOIN jenis_trafo on trafo.id_jenis_trafo=jenis_trafo.id_jenis_trafo INNER JOIN kapasitas_trafo on kapasitas_trafo.id_kapasitas_trafo= trafo.id_kapasitas_trafo INNER JOIN tipe_gardu on tipe_gardu.id_tipe_gardu = trafo.id_tipe_gardu ";
							  $sql = mysqli_query($con,$tampil);
							  while($data = mysqli_fetch_array($sql))
							   {
								   echo  "<h3>".$data['jumlah']."</h3>";
								   
								 
							   }
								  ?>
                           
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Trafo
                            </span>
                        </div>
                    </div>
				</div>
				<div class="col-lg-3">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <?php
							  include'share/koneksi.php';
							  $tampil = "select count(id_penyulang) as jumlah from penyulang";
							  $sql = mysqli_query($con,$tampil);
							  while($data = mysqli_fetch_array($sql))
							   {
								   echo  "<h3>".$data['jumlah']."</h3>";
								   
								 
							   }
								  ?>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Penyulang
                            </span>
                        </div>
                    </div>
				</div>
				<div class="col-lg-3">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body green">
                            <i class="fa fa fa-floppy-o fa-3x"></i>
                          <?php
							  include'share/koneksi.php';
							  $tampil = "select count(id_gardu_hubung) as jumlah from gardu_hubung";
							  $sql = mysqli_query($con,$tampil);
							  while($data = mysqli_fetch_array($sql))
							   {
								   echo  "<h3>".$data['jumlah']."</h3>";
								   
								 
							   }
								  ?>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Gardu Hubung
                            </span>
                        </div>
                    </div>
				</div>
				
				<div class="col-lg-3">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa-thumbs-up fa-3x"></i>
                            <?php
							  include'share/koneksi.php';
							  $tampil = "select count(id_gardu_induk) as jumlah from gardu_induk";
							  $sql = mysqli_query($con,$tampil);
							  while($data = mysqli_fetch_array($sql))
							   {
								   echo  "<h3>".$data['jumlah']."</h3>";
								   
								 
							   }
								  ?>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Gardu Induk
                            </span>
                        </div>
                    </div>
				</div>

            </div>

            <div class="row">
                <div class="col-lg-12">



                    <!--Area chart example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> 5 Trafo Baru Di Tambahkan
                            <div class="pull-right">
                                
                            </div>
                        </div>

                        <div class="panel-body">
                          <div >
			
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           5 Trafo
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Trafo</th>
                                            <th>Pemilik</th>
                                            <th>Jenis Trafo</th>
                                            <th>Tipe Gardu</th>
                                            <th>Kapasitas</th>
                                            <th>Penyulang</th>
                                            <th>Gardu Hubung</th>
                                            <th>Gardu Induk</th>
                                            <th>Rayon</th>
                                            <th>Area</th>
                                            <th>wilayah</th>
											<th>Tanggal</th>
											
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									    <?php
                  include'share/koneksi.php';
                  $i=0; 
                  $tampil = "SELECT * from trafo INNER JOIN penyulang on trafo.id_peyulang=penyulang.id_penyulang INNER JOIN gardu_hubung on gardu_hubung.id_gardu_hubung=penyulang.id_gardu_hubung INNER JOIN gardu_induk on gardu_induk.id_gardu_induk=gardu_hubung.id_gardu_induk INNER JOIN rayon on rayon.id_rayon=gardu_induk.id_rayon INNER JOIN area on area.id_area=rayon.id_area INNER JOIN wilayah on wilayah.id_wilayah=area.id_wilayah INNER JOIN jenis_trafo on trafo.id_jenis_trafo=jenis_trafo.id_jenis_trafo INNER JOIN kapasitas_trafo on kapasitas_trafo.id_kapasitas_trafo= trafo.id_kapasitas_trafo INNER JOIN tipe_gardu on tipe_gardu.id_tipe_gardu = trafo.id_tipe_gardu order by trafo.Tanggal DESC LIMIT 5";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
               
                   echo '
                   <tr class="odd gradeX">
                    <td width="30px">'.$i.'</td>
                    <td class="center">'.$data['id_trafo'].'</td>
                    <td class="center">'.$data['pemilik'].'</td>
                    <td class="center">'.$data['nama_jenis_trafo'].'</td>
                    <td class="center">'.$data['nama_tipe_gardu'].'</td>
                    <td class="center">'.$data['nama_kapasitas_trafo'].'</td>
                    <td class="center">'.$data['nama_penyulang'].'</td>
                    <td class="center">'.$data['id_gardu_hubung'].'</td>
                    <td class="center">'.$data['id_gardu_induk'].'</td>
                    <td class="center">'.$data['nama_rayon'].'</td>
                    <td class="center">'.$data['nama_area'].'</td>
                    <td class="center">'.$data['nama_wilayah'].'</td>
                    <td class="center">'.$data['Tanggal'].'</td>
                   
					';
                    
                    
                    
                    
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
                    <!--End area chart example -->
                    <!--Simple table example -->
                    
                </div>

                
            </div>

            
                    <!--End Chat Panel Example-->
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
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
	   
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
</body>

</html>
