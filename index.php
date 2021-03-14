<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Multi User Level Dengan PHP dan MySQLi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Membuat Login Multi User Level Dengan PHP dan MySQLi <br/> SMKN 7 BALEENDAH</h1>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
		}
	}
	?>
	<div class="kotak_login">
		<p class="tulisan_login"> Silahkan login</p>
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="Username" class="form_login" placeholder="Username.." required="required">
			<label>Password</label>
			<input type="text" name="Password" class="form_login" placeholder="Password.." required="required">
			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
		</form>
	</div>
</body>
</html>