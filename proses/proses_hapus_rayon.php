<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$id=$_GET['id'];
								

									$query="DELETE FROM `rayon` WHERE id_rayon='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../rayon.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menghapus Data rayon")</script>';
											echo '<script language="javascript">window.location.href = "../rayon.php"</script>';
									}
									
									

?>