 <?php
                  include'share/koneksi.php';
                  $id=$_GET['id'];
                 $tampil = "SELECT * from wilayah where id_wilayah='$id'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                  
				   
?>	
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Wilayah</h4>
		  
        </div>
        <div class="modal-body">
		<form action="proses/proses_edit_wilayah.php?id=<?php echo $data['id_wilayah']?>" method="POST">
                                        <div class="form-group">
                                            <label>Nama Wilayah</label>
                                            <input class="form-control" required name="nama_wilayah" value="<?php echo $data['nama_wilayah']?>">
                                           
                                        </div>
										<button type="submit" class="btn btn-primary">Tambah</button>
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