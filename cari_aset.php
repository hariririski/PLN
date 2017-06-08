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
                    <h1 class="page-header">Cari Data Aset</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
			<div class="col-lg-12">
			<form role="form" action="proses/proses_tambah_trafo.php" method="POST">
			<table width="90%" align="center">
				
					
				<tr>
					<td width="150px">
											<div class="form-group">
                                            <label>Wilayah</label>
											</div>
					</td>
					<td>
											<div class="form-group">
                                            <select name="wilayah" id="wilayah" class="form-control" required>
											<option value="">-Pilih-</option>
                                                <option value="semua">Semua</option>
                                               <?php
												  include'share/koneksi.php';
												  $i=0; 
												  $tampil = "SELECT * from wilayah";
												  $sql = mysqli_query($con,$tampil);
												  while($data = mysqli_fetch_array($sql))
												   {
													   echo' <option value="'.$data['id_wilayah'].'">'.$data['nama_wilayah'].'</option>';
												   }
												?>
                                            </select>
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
                                           <select name="area" id="area" class="form-control" required>
												<option value="">-Pilih-</option>
											</select>
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
                                            <select name="rayon" id="rayon" class="form-control" required>
												<option value="">-Pilih-</option>
											</select>
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
                                            <select name="gardu_induk" id="gardu_induk" class="form-control" required>
												<option value="">-Pilih-</option>
											</select>
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
                                            <select name="gardu_hubung" id="gardu_hubung" class="form-control" required>
												<option value="">-Pilih-</option>
											</select>
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
                                            <select name="penyulang" id="penyulang" class="form-control" required>
												<option value="">-Pilih-</option>
											</select>
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
                                            <select name="pemilik" class="form-control" required>
											<option value="">-Pilih-</option>
                                                  <option value="semua">Semua</option>
                                                <option  value="PLN">PLN</option>
                                                <option  value="NON PLN">NON PLN</option>
                                                
                                            </select>
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
                                            <select name="jenis_trafo" id="jenis_trafo"  class="form-control" required>
											<option value="">-Pilih-</option>
                                                 <option value="semua">Semua</option>
                                               <?php
												  include'share/koneksi.php';
												  $i=0; 
												  $tampil = "SELECT * from jenis_trafo";
												  $sql = mysqli_query($con,$tampil);
												  while($data = mysqli_fetch_array($sql))
												   {
													   echo' <option value="'.$data['id_jenis_trafo'].'">'.$data['nama_jenis_trafo'].'</option>';
												   }
												?>
                                            </select>
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
                                            <select name="kapasitas_trafo" id="kapasitas_trafo" class="form-control" required>
												<option value="">-Pilih-</option>
											</select>
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
                                            <select name="tipe_gardu"  class="form-control" required>
											<option value="">-Pilih-</option>
                                                   <option value="semua">Semua</option>
                                               <?php
												  include'share/koneksi.php';
												  $i=0; 
												  $tampil = "SELECT * from tipe_gardu	";
												  $sql = mysqli_query($con,$tampil);
												  while($data = mysqli_fetch_array($sql))
												   {
													   echo' <option value="'.$data['id_tipe_gardu'].'">'.$data['nama_tipe_gardu'].'</option>';
												   }
												?>
                                            </select>
                                        </div>
						</td>
					</tr>
					
				
				
					
		</table>
									<center>	<button align="center" type="sumbit" class="btn btn-primary">Cari</button></center>
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
