<?php
session_start()
 ?> 
<?php
include('../share/koneksi.php');
								//tangkap data dari form login
								$username =$_POST['username'];
								$password =$_POST['password'];
								 if(!empty($username)&&!empty($password)){
										if($mysqli=mysqli_query($con, "select * from admin where user='$username' and password='$password'")){
											$cek=mysqli_num_rows($mysqli);
										
											if($cek>0){
											$_SESSION['user'] = $username;
								
                  
													echo '<script language="javascript">window.location.href = "../home.php"</script>';
					   
											}else{
										//echo "<h1>Maaf User Atau Password Anda Salah</h1>";
										echo '<script language="javascript">window.location.href = "../index.php"</script>';
										}
  
											
										}
										else{
										//echo "<h1>Maaf User Atau Password Anda Salah</h1>";
										echo '<script language="javascript">window.location.href = "../index.php"</script>';
										}
								}
								
								else{
									//echo "<h1>Maaf User Atau Password Anda Salah</h1>";
									echo '<script language="javascript">window.location.href = "../index.php"</script>';
								}

?>