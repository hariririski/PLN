<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$id=$_GET['id'];
								

									$query="DELETE FROM `tipe_gardu` WHERE id_tipe_gardu='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../tipe_gardu.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menghapus Data Tipe Gardu")</script>';
											echo '<script language="javascript">window.location.href = "../tipe_gardu.php"</script>';
									}
									
									

?>