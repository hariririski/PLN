<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$jenis_trafo=$_POST['jenis_trafo'];
								$id=$_GET['id'];

							
									$query="UPDATE `jenis_trafo` SET `nama_jenis_trafo`='$jenis_trafo' WHERE id_jenis_trafo='$id'";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../jenis_trafo.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Memperbaharui jenis_trafo")</script>';
											echo '<script language="javascript">window.location.href = "../jenis_trafo.php"</script>';
									}
									
									

?>