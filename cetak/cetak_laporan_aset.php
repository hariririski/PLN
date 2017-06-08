<?php
										
										
include("../share/koneksi.php");

	
	

$id=$_GET['id'];
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";

									
								 $strhtml .= "
								 <table border='1' width='100%' >
								<thead>
								<center>
								<tr>
											<th rowspan='2'>No</th>
                                            <th colspan='5'>Trafo</th>
                                            <th colspan='3'>Penyulang</th>
                                            <th colspan='2'>Gardu Hubung</th>
                                            <th rowspan='2'>Gardu Induk</th>
                                            <th rowspan='2'>Rayon</th>
                                            <th rowspan='2'>Area</th>
                                            <th rowspan='2'>wilayah</th>
										
											
								   
									
									
								</tr>
								<tr>
											
                                            <th>Nama Trafo</th>
                                            <th>Pemilik</th>
                                            <th>Jenis Trafo</th>
                                            <th>Tipe Gardu</th>
                                            <th>Kapasitas</th>
											
                                            <th>Nama </th>
                                            <th>Wilayah Penyulang</th>
                                            <th>Pembagian Penyulang</th>
											
                                            <th>NO Bangunan</th>
                                            <th>Nama Bangunan</th>
											
											
								   
									
									
								</tr>
								</center>
								</thead>
								<tbody>
	
								 ";	
									$i=0; 
                  $tampil = "SELECT * from trafo INNER JOIN penyulang on trafo.id_peyulang=penyulang.id_penyulang INNER JOIN gardu_hubung on gardu_hubung.id_gardu_hubung=penyulang.id_gardu_hubung INNER JOIN gardu_induk on gardu_induk.id_gardu_induk=gardu_hubung.id_gardu_induk INNER JOIN rayon on rayon.id_rayon=gardu_induk.id_rayon INNER JOIN area on area.id_area=rayon.id_area INNER JOIN wilayah on wilayah.id_wilayah=area.id_wilayah INNER JOIN jenis_trafo on trafo.id_jenis_trafo=jenis_trafo.id_jenis_trafo INNER JOIN kapasitas_trafo on kapasitas_trafo.id_kapasitas_trafo= trafo.id_kapasitas_trafo INNER JOIN tipe_gardu on tipe_gardu.id_tipe_gardu = trafo.id_tipe_gardu";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
               
                   $strhtml .= '
                   <tr class="odd gradeX">
                    <td width="30px">'.$i.'</td>
                    <td class="center">'.$data['id_trafo'].'</td>
                    <td class="center">'.$data['pemilik'].'</td>
                    <td class="center">'.$data['nama_jenis_trafo'].'</td>
                    <td class="center">'.$data['nama_tipe_gardu'].'</td>
                    <td class="center">'.$data['nama_kapasitas_trafo'].'</td>
                    <td class="center">'.$data['nama_penyulang'].'</td>
                    <td class="center">'.$data['nama_wilayah_penyulang'].'</td>
                    <td class="center">'.$data['pembagian_penyulang'].'</td>
                    <td class="center">'.$data['no_bangunan'].'</td>
                    <td class="center">'.$data['nama_bangunan'].'</td>
                    <td class="center">'.$data['id_gardu_induk'].'</td>
                    <td class="center">'.$data['nama_rayon'].'</td>
                    <td class="center">'.$data['nama_area'].'</td>
                    <td class="center">'.$data['nama_wilayah'].'</td>
                    
                    
                    
                    
                    ';
					
					
                    
                    
                    
                    
                  $strhtml .= "
                  </tr>
                  ";
                   }
									
									
	
			$strhtml.="</tbody>
    </table>
	
	";
			
			include("mpdf60/mpdf.php");

			$mpdf=new mPDF ('utf-8','legal-L');
			$stylesheet = file_get_contents('styles2.css');
			$mpdf ->SetMargins (25.4,25.4,0,25.4);
			$mpdf->WriteHTML($stylesheet,1);
			$mpdf->WriteHTML($strhtml);
			$mpdf->Output();
			
			
			
			


?>