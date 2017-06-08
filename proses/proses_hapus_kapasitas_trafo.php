<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$id=$_GET['id'];
								

									$query="DELETE FROM kapasitas_trafo WHERE id_kapasitas_trafo='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../kapasitas_trafo.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menghapus Data kapasitas_trafo")</script>';
											echo '<script language="javascript">window.location.href = "../kapasitas_trafo.php"</script>';
									}
									
									

?>