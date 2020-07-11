
<html>
<head><center>
	<title>LOGIN</title>
	<link rel ="stylesheet" href="UAS.css" >

</head>
<body background="images/mixer.jpg">>

	<h1>LOGIN</h1>

	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<br>
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			<br>
			<input type="submit" class="tombol_login" value="LOGIN">
			<br>
			</center>
		</form>

	</div>


</body>
</html>
