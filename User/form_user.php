<?php
	session_start();
	if($_SESSION['status'] != 'login') {
		header('location:login.php');
	}
?>
<html>
	
	<?php
		include "menu.php";
	?>
		
	<div class="container">
		
			<h3>hai ! <?php echo $_SESSION['user']; ?><h3>
				<h3> <?php
    $tanggal= mktime(date("m"),date("d"),date("Y"));
    echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
    date_default_timezone_set('Asia/Jakarta');
    $jam=date("H:i:s");
		print ("<br><br>");
		
    echo "| Pukul : <b>". $jam." "."</b>";
		print ("<br><br>");
    $a = date ("H");
		print ("<br><br>");
		
    if (($a>=6) && ($a<=11)){
    echo "<b>, Selamat Pagi !!</b>";
    }
    else if(($a>11) && ($a<=15))
    {
    echo ", Selamat Siang !!";}
    else if (($a>15) && ($a<=18)){
    echo ", Selamat Sore !!";}
    else { echo ", <b> Selamat Malam </b>";}
    ?></h3>
	
	<BR>
	<BR>

					<?php
						include "../koneksi/koneksi.php"; 
						$periksa=mysqli_query($konek, "select * from tb_buku where stok <=5");
						while($q=mysqli_fetch_array($periksa)){  
    						if($q['stok']<=5){    
        			?>  
        			<script>
            			$(document).ready(function(){
                		$('#pesan_sedia').css("color","blue");
                		$('#pesan_sedia').append("<span class='glyphicon glyphicon-asterisk'></span>");
            		});
        			</script>
        			<?php
       					 echo "<div style='padding:5px' class='alert alert-warning'><span class='glyphicon glyphicon-info-sign'></span> Stok  <a style='color:red'>". $q['judul']."</a> yang tersisa sudah kurang dari 5 . silahkan pesan lagi !!</div>"; 
   					 }
						}
					?>
	</div>

</body>
</html>