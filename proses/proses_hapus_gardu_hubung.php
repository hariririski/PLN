<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$id=$_GET['id'];
								

									$query="DELETE FROM `gardu_hubung` WHERE id_gardu_hubung='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../gardu_hubung.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menghapus Data Gradu Hubung")</script>';
											echo '<script language="javascript">window.location.href = "../gardu_hubung.php"</script>';
									}
									
									

?>