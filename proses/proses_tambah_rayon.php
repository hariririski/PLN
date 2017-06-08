<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$area=$_POST['area'];
							
								$rayon=$_POST['rayon'];
							
									$query="INSERT INTO `rayon`(`nama_rayon`, `id_area`) 
									VALUES ('$rayon','$area')";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../rayon.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menambahakan rayon Baru")</script>';
											echo '<script language="javascript">window.location.href = "../rayon.php"</script>';
									}
									
									

?>