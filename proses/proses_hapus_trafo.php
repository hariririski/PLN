<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$id=$_GET['id'];
								

									$query="DELETE FROM trafo WHERE id_trafo='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../trafo.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menghapus Data trafo")</script>';
											echo '<script language="javascript">window.location.href = "../trafo.php"</script>';
									}
									
									

?>