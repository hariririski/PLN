<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$id=$_GET['id'];
								

									$query="DELETE FROM `penyulang` WHERE id_penyulang='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../penyulang.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menghapus Data Pennyulang")</script>';
											echo '<script language="javascript">window.location.href = "../pennyulang.php"</script>';
									}
									
									

?>