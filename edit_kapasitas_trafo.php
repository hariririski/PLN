 <?php
                  include'share/koneksi.php';
                  $id=$_GET['id'];
                 $tampil1 = "SELECT * from kapasitas_trafo inner join jenis_trafo on kapasitas_trafo.id_jenis_trafo=jenis_trafo.id_jenis_trafo where kapasitas_trafo.id_kapasitas_trafo='$id'";
                  $sql1 = mysqli_query($con,$tampil1);
                  while($data1 = mysqli_fetch_array($sql1))
                   {
                  
				   
?>
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Kapasitas Trafo</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_edit_kapasitas_trafo.php?id=<?php echo $id?>" method="POST">
									<div class="form-group">
                                            <label>Jenis Trafo</label>
                                            <select name="jenis_trafo"class="form-control" required>
                                                <?php
												  include'share/koneksi.php';
												  $i=0;
												echo' <option value="'.$data1['id_jenis_trafo'].'">'.$data1['nama_jenis_trafo'].'</option>';												  
												  $tampil = "SELECT * from jenis_trafo";
												  $sql = mysqli_query($con,$tampil);
												  while($data = mysqli_fetch_array($sql))
												   {
													   if($data1['id_jenis_trafo']!=$data['id_jenis_trafo']){
													   echo' <option value="'.$data['id_jenis_trafo'].'">'.$data['nama_jenis_trafo'].'</option>';
													   }
												   }
												?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kapasitas Trafo</label>
                                            <input name="kapasitas_trafo" class="form-control" required value="<?php echo $data1['nama_kapasitas_trafo']?>">
                                            </div>
											<button type="summbit" class="btn btn-primary">Tambah</button>
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
    	   <?php }?>