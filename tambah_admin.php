
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Admin</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_tambah_admin.php" method="POST">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" required name="nama_lengkap">
                                            </div>
										<div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" required name="username">
                                            </div>
										<div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" required name="password">
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
  