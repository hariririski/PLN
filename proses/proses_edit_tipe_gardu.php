<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$tipe_gardu=$_POST['tipe_gardu'];
								$id=$_GET['id'];
							
									$query="UPDATE `tipe_gardu` SET `nama_tipe_gardu`='$tipe_gardu' WHERE id_tipe_gardu='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../tipe_gardu.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal update Tipe Gardu Baru")</script>';
											echo '<script language="javascript">window.location.href = "../tipe_gardu.php"</script>';
									}
									
									

?>