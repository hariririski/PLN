<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$id=$_GET['id'];
								

									$query="DELETE FROM `gardu_induk` WHERE id_gardu_induk='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../gardu_induk.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menghapus Data Gardu induk")</script>';
											echo '<script language="javascript">window.location.href = "../gardu_induk.php"</script>';
									}
									
									

?>