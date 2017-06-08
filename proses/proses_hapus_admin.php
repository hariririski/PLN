<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$id=$_GET['id'];
								

									$query="DELETE FROM `admin` WHERE user='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../admin.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menghapus Data admin")</script>';
											echo '<script language="javascript">window.location.href = "../admin.php"</script>';
									}
									
									

?>