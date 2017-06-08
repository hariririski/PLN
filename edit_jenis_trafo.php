 <?php
                  include'share/koneksi.php';
                  $id=$_GET['id'];
                 $tampil = "SELECT * from jenis_trafo where id_jenis_trafo='$id'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                  
				   
?>				
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Jenis Trafo</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_edit_jenis_trafo.php?id=<?php echo $data['id_jenis_trafo']?>" method="POST">
                                        <div class="form-group">
                                            <label>Jenis Trafo</label>
                                            <input class="form-control" name="jenis_trafo" required value="<?php echo $data['nama_jenis_trafo']?>">
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
				   <?php }?>