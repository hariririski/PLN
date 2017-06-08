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
	<script type="text/javascript" src="pln/jquery_combo.js"></script> <!-- ajax-bertingkat -->
<script type='text/javascript'>
			var htmlobjek;
			$(document).ready(function() {
				$("#wilayah").change(function(){
					var kode_wilayah = $("#wilayah").val();
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "pln/area.php",
						data: "kode_wilayah="+kode_wilayah,
						cache: false,
						success: function(msg){
						// jika tidak ada data
						if(msg == ''){
							alert('Tidak ada data Matakuliah');
							}
						else{
							$("#area").html(msg);
						}
					}
					});
				});
			});
			
			
			$(document).ready(function() {
				$("#area").change(function(){
					var kode_area = $("#area").val();
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "pln/rayon.php",
						data: "kode_area="+kode_area,
						cache: false,
						success: function(msg){
						// jika tidak ada data
						if(msg == ''){
							alert('Tidak ada data Matakuliah');
							}
						else{
							$("#rayon").html(msg);
						}
					}
					});
				});
			});
			$(document).ready(function() {
				$("#rayon").change(function(){
					var kode_rayon = $("#rayon").val();
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "pln/gardu_induk.php",
						data: "kode_rayon="+kode_rayon,
						cache: false,
						success: function(msg){
						// jika tidak ada data
						if(msg == ''){
							alert('Tidak ada data Matakuliah');
							}
						else{
							$("#gardu_induk").html(msg);
						}
					}
					});
				});
			});
		
		$(document).ready(function() {
				$("#gardu_induk").change(function(){
					var kode_gardu_induk = $("#gardu_induk").val();
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "pln/gardu_hubung.php",
						data: "kode_gardu_induk="+kode_gardu_induk,
						cache: false,
						success: function(msg){
						// jika tidak ada data
						if(msg == ''){
							alert('Tidak ada data Matakuliah');
							}
						else{
							$("#gardu_hubung").html(msg);
						}
					}
					});
				});
			});
			
			$(document).ready(function() {
				$("#gardu_hubung").change(function(){
					var kode_gardu_hubung = $("#gardu_hubung").val();
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "pln/penyulang.php",
						data: "kode_gardu_hubung="+kode_gardu_hubung,
						cache: false,
						success: function(msg){
						// jika tidak ada data
						if(msg == ''){
							alert('Tidak ada data Matakuliah');
							}
						else{
							$("#penyulang").html(msg);
						}
					}
					});
				});
			});
		</script>
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
                    <h1 class="page-header">Data Trafo</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
			<div class="col-lg-12">
			<a href="tambah_trafo.php" ><button type="button" class="btn btn-primary btn-lg btn-block">Tambah Trafo</button></a>
                <br>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Nama Area
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
											<th>Hapus</th>
											<th>Detail</th>
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									    <?php
                  include'share/koneksi.php';
                  $i=0; 
                  $tampil = "SELECT * from trafo INNER JOIN penyulang on trafo.id_peyulang=penyulang.id_penyulang INNER JOIN gardu_hubung on gardu_hubung.id_gardu_hubung=penyulang.id_gardu_hubung INNER JOIN gardu_induk on gardu_induk.id_gardu_induk=gardu_hubung.id_gardu_induk INNER JOIN rayon on rayon.id_rayon=gardu_induk.id_rayon INNER JOIN area on area.id_area=rayon.id_area INNER JOIN wilayah on wilayah.id_wilayah=area.id_wilayah INNER JOIN jenis_trafo on trafo.id_jenis_trafo=jenis_trafo.id_jenis_trafo INNER JOIN kapasitas_trafo on kapasitas_trafo.id_kapasitas_trafo= trafo.id_kapasitas_trafo INNER JOIN tipe_gardu on tipe_gardu.id_tipe_gardu = trafo.id_tipe_gardu";
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
                   
                   
                    
                    ';
					
					echo"
                    <td class='center'><a href='proses/proses_hapus_trafo.php?id=".$data['id_trafo']."'  >
					<button type='button' class='btn btn-danger btn-circle '><i class='fa fa-times'></i>
                    </button></a>
					</td>
					";
					echo"
                    <td class='center'><a href='detail_trafo.php?id=".$data['id_trafo']."'>
					
					<button type='button' class='btn btn-primary btn-circle '><i class='fa fa-list'></i>
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
