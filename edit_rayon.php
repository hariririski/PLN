<?php
											    include'share/koneksi.php';
											   $id_rayon=$_GET['id'];
											   ?>
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
			
		
		</script>
<head>
<body>
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Rayon</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_edit_rayon.php?id=<?php echo $id_rayon?>" method="POST">
									<div class="form-group">
                                            <label>Wilayah</label>
                                            <select name="wilayah" id="wilayah" class="form-control" required>
                                               
                                               <?php
											
											  $i=0; 
											  $tampil1 = "SELECT * from rayon inner join area on rayon.id_area=area.id_area inner join wilayah 
											  on wilayah.id_wilayah=area.id_area  where id_rayon='$id_rayon'";
											  $sql1 = mysqli_query($con,$tampil1);
											  while($data1 = mysqli_fetch_array($sql1))
											   {
											     echo' <option value="'.$data1['id_wilayah'].'">'.$data1['nama_wilayah'].'</option>';
											   
												 
												  $i=0; 
												  $tampil = "SELECT * from wilayah";
												  $sql = mysqli_query($con,$tampil);
												  while($data = mysqli_fetch_array($sql))
												   {
													   if($data1['id_wilayah']!=$data['id_wilayah']){
														     echo' <option value="'.$data['id_wilayah'].'">'.$data['nama_wilayah'].'</option>';
													   }
													 
												   }
												?>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Area</label>
                                           <select name="area" id="area" class="form-control" required>
											  <?php
											    
												  $i=0; 
												  $tampil = "SELECT * from area inner join wilayah on area.id_wilayah=wilayah.id_wilayah";
												  $sql = mysqli_query($con,$tampil);
												  while($data = mysqli_fetch_array($sql))
												   {
													   if($data1['id_area']!=$data['id_area']){
														     echo' <option value="'.$data['id_area'].'">'.$data['nama_area'].'</option>';
													   }
													 
												   }
												?>
											</select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Rayon</label>
                                            <input name="rayon" class="form-control" required value="<?php echo $data1['nama_rayon'];?>">
                                            </div>
											<button type="sumbit" class="btn btn-primary">Tambah</button>
		</form>
		
		
         
											   <?php }?>
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