<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								
								$id_trafo=$_POST['id_trafo'];
								$pemilik=$_POST['pemilik'];
								$jenis_trafo=$_POST['jenis_trafo'];
								$tipe_gardu=$_POST['tipe_gardu'];
								$kubikel=$_POST['kubikel'];
								$jumlah=$_POST['jumlah'];
								$kapasitas_trafo=$_POST['kapasitas_trafo'];
								$penyulang=$_POST['penyulang'];
								
								
							
									$query="INSERT INTO `trafo`(`id_trafo`, `pemilik`, `id_jenis_trafo`, `id_tipe_gardu`, `kubikel`, `jumlah`, `id_kapasitas_trafo`, `id_peyulang`)
									VALUES ('$id_trafo','$pemilik','$jenis_trafo','$tipe_gardu','$kubikel','$jumlah','$kapasitas_trafo','$penyulang')";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../trafo.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menambahakan Trafo Baru")</script>';
											echo '<script language="javascript">window.location.href = "../trafo.php"</script>';
									}
									
									

?>