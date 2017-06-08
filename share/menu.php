<nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><?php
                  include'koneksi.php';
                  $i=0; 
				  $nama;
                  $tampil = "SELECT * from admin where user='$user'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
					   echo $data['nama_lengkap'];
					   $nama=$data['nama_lengkap'];
				   }
					  ?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <span ></span>&nbsp; Menu
                                
                           
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="home.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
					
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Data Aset <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="trafo.php">Data Aset</a>
                            </li>
							<!-- 
                            <li>
                                <a href="cari_aset.php">Cari Data Aset</a>
                            </li>
							 -->
                        </ul>
                        
                    </li>
                   <li>
                        <a href="cetak/cetak_laporan_aset.php"><i class="fa fa-bar-chart-o fa-fw"></i>Cetak Data Aset</a>
                       
                        <!-- second-level-items -->
                    </li>
                   
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Setting<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="wilayah.php">Wilayah</a>
                            </li>
                            <li>
                                <a href="area.php">Area</a>
                            </li>
							 <li>
                                <a href="rayon.php">Rayon</a>
                            </li>
							
							<li>
                                <a href="gardu_induk.php">Gardu Induk</a>
                            </li>
							<li>
                                <a href="gardu_hubung.php">Gardu hubung</a>
                            </li>
							<li>
                                <a href="penyulang.php">Penyulang</a>
                            </li>
							
							
							<li>
                                <a href="tipe_gardu.php">Tipe Gardu</a>
                            </li>
							<li>
                                <a href="jenis_trafo.php">Jenis Trafo</a>
                            </li>
							<li>
                                <a href="kapasitas_trafo.php">Kapasitas Trafo</a>
                            </li>
							
							<li>
                                <a href="admin.php">Admin</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>