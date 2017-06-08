<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$area=$_POST['area'];
							
								$rayon=$_POST['rayon'];
								$id=$_GET['id'];
							
									$query="UPDATE `rayon` SET `nama_rayon`='$rayon',`id_area`='$area' WHERE id_rayon='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../rayon.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Memperbaharui rayon Baru")</script>';
											echo '<script language="javascript">window.location.href = "../rayon.php"</script>';
									}
									
									

?>