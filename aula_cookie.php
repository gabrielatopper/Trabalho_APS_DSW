

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

<?php
	//setcookie($cookie_name, $cookie_value(se não defininir um valor, nunca irá expirar), time(){finção} + 30{tempo q irá durar a sessão});
	setcookie("user", "Joao da Silva", time() + 30);
	/*if ( setcookie("user", "Joao da Silva", time() + 30)) {
	$criou = "Sim";
	}else {
		$criou = "Não";
	}*/
?>

</head>

<body>
 <?php
 
	//echo $criou."<hr>";
	
    echo "Cookie user criado com sucesso! <br>";
	echo "User: ".$_COOKIE['user'];

?>   

	<a href="testar_cookie.php">Testar Cookie</a> <!--link-->
    
</body>
</html>