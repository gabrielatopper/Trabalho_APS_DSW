<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
 <?php
   if( isset( $_COOKIE['user']) ) { //testa se o cookie existe
	   echo "Cookie user existe, valor: ".$_COOKIE['user'];
   }else {
	   echo "Cookie user já expirou!";
   }

?>   
    
</body>
</html>