<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="../css/estilo.css">
    <script src="../js/Java.js"></script>
</head>
<body>
<?php 
$usuario="";
$clave= "";
//include("menu.php");
?>
	<div class="contenido">
	<table>
		<form class="" method="post" action="logeando.php">
			<h2>Ingreso</h2>
			<tr>
				<td>
					<label>Usuario</label>
				</td>
				<td>
					<input type"text" name="nombre" class="" placeholder="" required autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<label>Contraseña</label>
				</td>
				<td>	
					<input type="password" name="password" class="" placeholder="" required onfocus="">
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<input type="submit" name="submit" class="" value="Entrar">
				</td>
			</tr>
		</form>
	</table>
	</div>
	<div>
		<table>
			<form class="" method="post" action="registro.php">
				<h2>Registro</h2>
				<tr>
					<td>
						<label>Usuario</label>
					</td>
					<td>
						<input type"text" name="nombre" class="" placeholder="" required >
					</td>
				</tr>
				<tr>
					<td>
						<label>Contraseña</label>
					</td>
					<td>
						<input type="password" name="password" class="" placeholder="" required onfocus="">
					</td>
				</tr>
				<tr>
					<td>
						<label>Repite Contraseña</label>
					</td>
					<td>
						<input type="password" name="password2" class="" placeholder="" required onfocus="">
					</td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<input type="submit" name="registrar" class="" value="Registrar">
					</td>
				</tr>
			</form>
		</div>
	
</body>

