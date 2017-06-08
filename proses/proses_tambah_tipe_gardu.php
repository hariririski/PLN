<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$tipe_gardu=$_POST['tipe_gardu'];

							
									$query="INSERT INTO `tipe_gardu`( `nama_tipe_gardu`) 
									VALUES ('$tipe_gardu')";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../tipe_gardu.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menambahakan area Baru")</script>';
											echo '<script language="javascript">window.location.href = "../tipe_gardu.php"</script>';
									}
									
									

?>