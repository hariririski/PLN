 <?php
                  include'share/koneksi.php';
                  $id=$_GET['id'];
                 $tampil1 = "SELECT * from area inner join wilayah on area.id_wilayah=wilayah.id_wilayah where id_area='$id'";
                  $sql1 = mysqli_query($con,$tampil1);
                  while($data1 = mysqli_fetch_array($sql1))
                   {
                  
				   
?>
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Area</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_edit_area.php?id=<?php echo $id?>" method="POST">
									<div class="form-group">
                                            <label>Wilayah</label>
                                            <select name="wilayah"class="form-control" required>
                                               
                                               <?php
												  include'share/koneksi.php';
												  $i=0;
												echo' <option value="'.$data1['id_wilayah'].'">'.$data1['nama_wilayah'].'</option>';												  
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
                                            <label>Nama Area</label>
                                            <input name="area" class="form-control" required value="<?php echo $data1['nama_area']?>">
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