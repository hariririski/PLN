<?php

											 include'share/koneksi.php';
											   $id=$_GET['id'];
										
											
											  $i=0; 
											  $tampil1 = "SELECT * from trafo INNER JOIN penyulang on trafo.id_peyulang=penyulang.id_penyulang INNER JOIN gardu_hubung on gardu_hubung.id_gardu_hubung=penyulang.id_gardu_hubung INNER JOIN gardu_induk on gardu_induk.id_gardu_induk=gardu_hubung.id_gardu_induk INNER JOIN rayon on rayon.id_rayon=gardu_induk.id_rayon INNER JOIN area on area.id_area=rayon.id_area INNER JOIN wilayah on wilayah.id_wilayah=area.id_wilayah INNER JOIN jenis_trafo on trafo.id_jenis_trafo=jenis_trafo.id_jenis_trafo INNER JOIN kapasitas_trafo on kapasitas_trafo.id_kapasitas_trafo= trafo.id_kapasitas_trafo INNER JOIN tipe_gardu on tipe_gardu.id_tipe_gardu = trafo.id_tipe_gardu where trafo.id_trafo='$id'";
												$sql1 = mysqli_query($con,$tampil1);
											  while($data1 = mysqli_fetch_array($sql1))
											   {
												   
?>
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
			
			
			
			$(document).ready(function() {
				$("#jenis_trafo").change(function(){
					var jenis_trafo = $("#jenis_trafo").val();
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "pln/kapasitas_trafo.php",
						data: "jenis_trafo="+jenis_trafo,
						cache: false,
						success: function(msg){
						// jika tidak ada data
						if(msg == ''){
							alert('Tidak ada data Matakuliah');
							}
						else{
							$("#kapasitas_trafo").html(msg);
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
                    <h1 class="page-header">Tambah Trafo</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
			<div class="col-lg-12">
			<form role="form" action="proses/proses_tambah_trafo.php" method="POST">
			<table width="90%" align="center">
				<tr>
						<td>
										<div class="form-group">
                                            <label>Id Trafo</label>
										</div>
						</td>
						<td>
										<div class="form-group">
                                            <input name="id_trafo" class="form-control" required  value="<?php echo $data1['id_trafo']?>" readonly>
                                        </div>
						</td>
					</tr>
					
				<tr>
					<td width="150px">
											<div class="form-group">
                                            <label>Wilayah</label>
											</div>
					</td>
					<td>
											<div class="form-group">
                                             <input name="id_trafo" class="form-control" required  value="<?php echo $data1['nama_wilayah']?>" readonly>
                                        </div>
					</td>
					
					<tr>
						<td>
										<div class="form-group">
                                            <label>Area</label>
										</div>
						</td>
						<td>
										<div class="form-group">
                                          <input name="id_trafo" class="form-control" required  value="<?php echo $data1['nama_area']?>" readonly>
                                        </div>
						</td>
					</tr>	
						
					<tr>
						<td>
										<div class="form-group">
                                            <label>Rayon</label>
										</div>
						</td>
						<td>
										<div class="form-group">
                                           <input name="id_trafo" class="form-control" required  value="<?php echo $data1['nama_rayon']?>" readonly>
                                        </div>
						</td>
					</tr>
					
					<tr>
						<td>
										<div class="form-group">
                                            <label>Gardu Induk</label>
										</div>
						</td>
						<td>
										<div class="form-group">
                                            <input name="id_trafo" class="form-control" required  value="<?php echo $data1['id_gardu_induk']?>" readonly>
                                        </div>
						</td>
					</tr>
					
					<tr>
						<td>
										<div class="form-group">
                                            <label>Gardu Hubung</label>
										</div>
						</td>
						<td>
										<div class="form-group">
                                            <input name="id_trafo" class="form-control" required  value="<?php echo $data1['id_gardu_hubung']?>" readonly>
                                        </div>
						</td>
					</tr>
					
					<tr>
						<td>
										 <div class="form-group">
                                            <label>Penyulang</label>
										</div>
						</td>
						<td>
										<div class="form-group">
                                            <input name="id_trafo" class="form-control" required  value="<?php echo $data1['nama_penyulang']?>" readonly>
                                        </div>
						</td>
					</tr>
					
					
					<tr>
						<td>
										<div class="form-group">
                                            <label>Pemilik</label>
										</div>
						</td>
						<td>
										<div class="form-group">
                                            <input name="id_trafo" class="form-control" required  value="<?php echo $data1['pemilik']?>" readonly>
                                        </div>
						</td>
					</tr>
					
					<tr>
						<td>
										<div class="form-group">
                                            <label>Jenis Trafo</label>
										</div>
						</td>
						<td>
										<div class="form-group">
                                            <input name="id_trafo" class="form-control" required  value="<?php echo $data1['nama_jenis_trafo']?>" readonly>
                                        </div>
						</td>
					</tr>
					<tr>
						<td>
										<div class="form-group">
                                            <label>Kapasitas Trafo</label>
										</div>
						</td>
						<td>
										<div class="form-group">
                                           <input name="id_trafo" class="form-control" required  value="<?php echo $data1['nama_kapasitas_trafo']?>" readonly>
                                        </div>
						</td>
					</tr>
					
					<tr>
						<td>
										<div class="form-group">
                                            <label>Tipe Gardu</label>
										</div>
						</td>
						<td>
										<div class="form-group">
                                           <input name="id_trafo" class="form-control" required  value="<?php echo $data1['nama_tipe_gardu']?>" readonly>
                                        </div>
						</td>
					</tr>
					
					<tr>
						<td>
										<div class="form-group">
                                            <label>Kubikel</label>
										</div>
						</td>
						<td>
										<div class="form-group">
                                           <input name="id_trafo" class="form-control" required  value="<?php echo $data1['kubikel']?>" readonly>
                                        </div>
						</td>				
					</tr>
					
					<tr>
						<td>
										<div class="form-group">
                                            <label>Jumlah</label>
										</div>
						</td>
						<td>
										<div class="form-group">
                                          <input name="id_trafo" class="form-control" required  value="<?php echo $data1['jumlah']?>" readonly>
                                        </div>
						</td>
					</tr>
					
					
		</table>
									<center>	
									<?php
									echo"
									<a href='edit_trafo.php?id=".$data1['id_trafo']."' ><button type='button' class='btn btn-warning '><i class='fa fa-edit'></i></button></a>
									<a href='proses/proses_hapus_trafo.php?id=".$data1['id_trafo']."' ><button type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></a>
									";
									?>
									</center>
		</form>
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
											   <?php }?>