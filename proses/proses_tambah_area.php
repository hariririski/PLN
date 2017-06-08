<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$area=$_POST['area'];
								$wilayah=$_POST['wilayah'];
							
									$query="INSERT INTO `area`(`nama_area`, `id_wilayah`)
									VALUES ('$area','$wilayah')";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../area.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menambahakan area Baru")</script>';
											echo '<script language="javascript">window.location.href = "../area.php"</script>';
									}
									
									

?>