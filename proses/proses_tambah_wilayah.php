<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$nama_wilayah =$_POST['nama_wilayah'];
							
									$query="INSERT INTO `wilayah`(`nama_wilayah`) VALUES ('$nama_wilayah')";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../wilayah.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menambahakan Wilayah Baru")</script>';
											echo '<script language="javascript">window.location.href = "../wilayah.php"</script>';
									}
									
									

?>