<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$id=$_GET['id'];
							
									$query="DELETE FROM `wilayah` WHERE id_wilayah='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../wilayah.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menambahakan Wilayah Baru")</script>';
											echo '<script language="javascript">window.location.href = "../wilayah.php"</script>';
									}
									
									

?>