<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$jenis_trafo=$_POST['jenis_trafo'];
								$kapasitas_trafo=$_POST['kapasitas_trafo'];
							
									$query="INSERT INTO `kapasitas_trafo`( `nama_kapasitas_trafo`, `id_jenis_trafo`)
									VALUES ('$kapasitas_trafo','$jenis_trafo')";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../kapasitas_trafo.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menambahkan Kapasitas Trafo Baru")</script>';
											echo '<script language="javascript">window.location.href = "../kapasitas_trafo.php"</script>';
									}
									
									

?>