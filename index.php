<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.css">
		<title>Script Captcha Php</title>
	</head>
    <body>
	<div class="container">
		<h1>Cadastrar usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		
		<form method="POST" action="processa.php">
			<label>Nome</label>
			<input type="text" name="nome" required><br><br>
			
			<label>E-mail</label>
			<input type="email" name="email" required><br><br>

			<img src="captcha.php" alt="Código captcha"><br>
			
			<label>Digite o código</label>
			<input type="text" name="captcha" required><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
		
		
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	
	</div>
	
	</body>
</html>