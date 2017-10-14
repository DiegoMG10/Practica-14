<Body bgcolor="#39FFE7">
<font face="Comic Sans MS, arial, verdana" size="4">
<?php

if ($_POST ["valor1"] !="" and $_POST ["valor2"]!="")
	{
	if ($_POST["operador"] == "suma")
		{
			echo 'El resultado de la suma es: <br>';
			echo $resultado = $_POST ["valor1"] + $_POST ["valor2"];
			echo '<br /><a href="index.php">Volver</a>';
		}
	elseif ($_POST["operador"] == "resta")
		{
				echo 'El resultado de la resta es: <br>';
				echo $resultado = $_POST ["valor1"] - $_POST ["valor2"];
				echo '<br /><a href="index.php">Volver</a>';
		}
	elseif ($_POST["operador"] == "multiplicacion")
		{
				print('El resultado de la multiplicacion es: <br>');
				print($resultado = $_POST ["valor1"] * $_POST["valor2"]);
				print('<br /><a href="index.php">Volver</a>');
		}
	elseif ($_POST["operador"] == "division")
		{
				print('El resultado de la division es: <br>');
				print($resultado = $_POST ["valor1"] / $_POST["valor2"]);
				print('<br /><a href="index.php">Volver</a>');
		}
	}
else
	{
		print("Ingresa alg&uacute;n valor");
		print ('<br /><a href="index.php">Volver</a>');
	}
		