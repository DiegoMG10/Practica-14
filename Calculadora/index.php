<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
		<style type="text/css">
		.auto-style1 {
			margin-left: 130px;
			margin-top: 30px;
		}
		.auto-style2 {
			margin-left: 130px
		}
		.auto-style3 {
			margin-left: 130px;
		}
		</style>
	</head>
<Body bgcolor="#98DE6D">
<body>
</br></br>
	<div style="background-color:#FF0000;margin-left:270px; width:390px">
		<form action="operaciones.php" method="post">
			<select name="operador" class="auto-style1" style="width: 169px">
			<option value="suma">Suma</option>
			<option value="resta">Resta</option>
			<option value="multiplicacion">Multiplicacion</option>
			<option value="division">Division</option>
			</select><br/>
			<p style="color:whide; text-aling:center">Valor 1:</p>
			<input type="text" name="valor1" class="auto-style2"><br>
			<p style="color:whide; text-aling:center">Valor 2:</p>
			<input type="text" name="valor2" class="auto-style2"><br>
			<br>
			<input type="submit" value="calcular" class="auto-style3"><br>
		</form>
	</div>
	</br></br></br></br></br>
	<p ALIGN="RIGHT">Diego Morales Gomez<br> Lic. Sistemas Computacionales<br>"5°B"</p>
</body>
</html>
