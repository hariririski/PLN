<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$nama_wilayah =$_POST['nama_wilayah'];
								$id=$_GET['id'];
									$query="UPDATE `wilayah` SET `nama_wilayah`='$nama_wilayah' WHERE id_wilayah='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../wilayah.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Memperbaharui Wilayah")</script>';
											echo '<script language="javascript">window.location.href = "../wilayah.php"</script>';
									}
									
									

?>