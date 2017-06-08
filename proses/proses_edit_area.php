<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$area=$_POST['area'];
								$wilayah=$_POST['wilayah'];
								$id=$_GET['id'];
							
									$query="UPDATE `area` SET `nama_area`='$area',`id_wilayah`='$wilayah' WHERE id_area='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../area.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Memperbaharui area ")</script>';
											echo '<script language="javascript">window.location.href = "../area.php"</script>';
									}
									
									

?>