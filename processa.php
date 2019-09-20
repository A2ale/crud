<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$nome= $_POST["NOME"];
echo "$nome, o seu cadastro foi criado com sucesso";
    if(strlen($nome) ==0){
    	echo "voce não preencheu o seu nome !";
    }
	?>
}

</body>
</html>