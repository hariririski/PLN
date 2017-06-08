<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$jenis_trafo=$_POST['jenis_trafo'];

							
									$query="INSERT INTO `jenis_trafo`(`nama_jenis_trafo`)
									VALUES ('$jenis_trafo')";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../jenis_trafo.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menambahakan area Baru")</script>';
											echo '<script language="javascript">window.location.href = "../jenis_trafo.php"</script>';
									}
									
									

?>