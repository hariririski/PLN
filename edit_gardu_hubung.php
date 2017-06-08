<html>
	<head>
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
		</script>
<head>
<body>
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Gardu Hubung</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_tambah_gardu_hubung.php" method="POST">
                                         <div class="form-group">
                                            <label>Wilayah</label>
                                            <select name="wilayah" id="wilayah" class="form-control" required>
                                                <option value="">Pilih Wilayah</option>
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
										<div class="form-group">
                                            <label>Area</label>
                                           <select name="area" id="area" class="form-control" required>
												<option value="">-Pilih-</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label>Rayon</label>
                                            <select name="rayon" id="rayon" class="form-control" required>
												<option value="">-Pilih-</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label>Gardu Induk</label>
                                            <select name="gardu_induk" id="gardu_induk" class="form-control" required>
												<option value="">-Pilih-</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label>No Bangunan</label>
                                            <input class="form-control" required name="no_bangunan" type="number">
                                        </div>
										<div class="form-group">
                                            <label>Nama Bangunan</label>
                                            <input class="form-control" required name="nama_bangunan">
                                        </div>
										
										
										<button type="sumbit" class="btn btn-primary">Tambah</button>
		</form>
		
		
         
	
        <div class="modal-footer">
          <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
		<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
	</div>
  </div>
  </div>
  </div>
   </body> 
 </html> 