<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$id=$_GET['id'];
								

									$query="DELETE FROM `jenis_trafo` WHERE id_jenis_trafo='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../jenis_trafo.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menghapus Data Jenis Trafo")</script>';
											echo '<script language="javascript">window.location.href = "../jenis_trafo.php"</script>';
									}
									
									

?>