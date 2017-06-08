
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Kapasitas Trafo</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_tambah_kapasitas_trafo.php" method="POST">
									<div class="form-group">
                                            <label>Jenis Trafo</label>
                                            <select name="jenis_trafo"class="form-control" required>
                                                <option value="">Pilih Jenis Trafo</option>
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
                                        <div class="form-group">
                                            <label>Kapasitas Trafo</label>
                                            <input name="kapasitas_trafo" class="form-control" required>
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
  