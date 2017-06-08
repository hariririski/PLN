<html>
	<head>
		<title>Ajax Combobox Bertingkat</title>
								
		<script type="text/javascript" src="jquery_combo.js"></script> <!-- ajax-bertingkat -->
		<link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
		<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
		<link href="../assets/css/style.css" rel="stylesheet" />
		<link href="../assets/css/main-style.css" rel="stylesheet" />
		<link href="../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
		<script type='text/javascript'>
			var htmlobjek;
			$(document).ready(function() {
				$("#wilayah").change(function(){
					var kode_wilayah = $("#wilayah").val();
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "area.php",
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
						url: "rayon.php",
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
						url: "gardu_induk.php",
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
						url: "gardu_hubung.php",
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
						url: "penyulang.php",
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
		include "confg.php";
		$sql = $db->query("SELECT * FROM wilayah ");
	?>
	
	<table>
	
		<tr>
			<td><label>Wilayah</label></td>
			<td>:</td>
			<td><select name="wilayah" id="wilayah" class="form-control" > 
				<option value="">-Pilih-</option>
					<?php while ($data = $sql->fetch_array()){?>
				<option value="<?php echo $data['id_wilayah'];?>"><?php echo $data['nama_wilayah'];}?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>Area</label></td>
			<td>:</td>
			<td><select name="area" id="area" class="form-control">
					<option value="">-Pilih-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>Rayon</label></td>
			<td>:</td>
			<td><select name="rayon" id="rayon" class="form-control">
					<option value="">-Pilih-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>Gardu Induk</label></td>
			<td>:</td>
			<td><select name="gardu_induk" id="gardu_induk" class="form-control">
					<option value="">-Pilih-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>Gardu Hubung</label></td>
			<td>:</td>
			<td><select name="gardu_hubung" id="gardu_hubung" class="form-control">
					<option value="">-Pilih-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>Penyulang</label></td>
			<td>:</td>
			<td><select name="penyulang" id="penyulang" class="form-control">
					<option value="">-Pilih-</option>
				</select>
			</td>
		</tr>
	</table>
							
</body>
</html>

