<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$gardu_induk=$_POST['gardu_induk'];
							
								$rayon=$_POST['rayon'];
							
									$query="INSERT INTO `gardu_induk`(`id_gardu_induk`, `id_rayon`)
									VALUES ('$gardu_induk','$rayon')";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../gardu_induk.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menambahakan Gardu Induk Baru")</script>';
											echo '<script language="javascript">window.location.href = "../gardu_induk.php"</script>';
									}
									
									

?>