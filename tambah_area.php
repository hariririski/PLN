
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Area</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_tambah_area.php" method="POST">
									<div class="form-group">
                                            <label>Wilayah</label>
                                            <select name="wilayah"class="form-control" required>
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
                                            <label>Nama Area</label>
                                            <input name="area" class="form-control" required>
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
  