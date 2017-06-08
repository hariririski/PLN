<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								
								$nama_penyulang=$_POST['nama_penyulang'];
								$nama_wilayah_penyulang=$_POST['nama_wilayah_penyulang'];
								$pembagian_penyulang=$_POST['pembagian_penyulang'];
								$gardu_hubung=$_POST['gardu_hubung'];
								
							
									$query="INSERT INTO `penyulang`(`nama_penyulang`, `nama_wilayah_penyulang`, `pembagian_penyulang`, `id_gardu_hubung`)
									VALUES ('$nama_penyulang','$nama_wilayah_penyulang','$pembagian_penyulang','$gardu_hubung')";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../penyulang.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menambahakan Penyulang Baru")</script>';
											echo '<script language="javascript">window.location.href = "../penyulang.php"</script>';
									}
									
									

?>