<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$nama_lengkap =$_POST['nama_lengkap'];
								$username =$_POST['username'];
								$password =$_POST['password'];
							
									$query="INSERT INTO `admin`(`user`, `password`, `nama_lengkap`)
									VALUES ('$username','$password','$nama_lengkap')";
									$cek=mysqli_query($con,$query);
									
									if($cek){
											echo '<script language="javascript">window.location.href = "../admin.php"</script>';
										
									}else{
										
											echo '<script language="javascript">alert("Maaf Gagal Menambahakan admin Baru")</script>';
											echo '<script language="javascript">window.location.href = "../admin.php"</script>';
									}
									
									

?>