<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								
								$no_bangunan=$_POST['no_bangunan'];
								$nama_bangunan=$_POST['nama_bangunan'];
							
								$gardu_induk=$_POST['gardu_induk'];
							
									$query="INSERT INTO `gardu_hubung`(`no_bangunan`, `nama_bangunan`, `id_gardu_induk`) 
									VALUES ('$no_bangunan','$nama_bangunan','$gardu_induk')";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../gardu_hubung.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menambahakan Gardu Hubung Baru")</script>';
											echo '<script language="javascript">window.location.href = "../gardu_hubung.php"</script>';
									}
									
									

?>