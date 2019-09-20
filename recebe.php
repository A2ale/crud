<!DOCTYPE html>
<html>
<head>
	<title>Informaçoes</title>
</head>
<link rel="stylesheet" type="text/css" href="">

<body>
	<?php 
	// primeiros comandos fundamentais que devemos utilizar no PHP para processar formularios!!

	$nome = $_POST["nome"];
	$FILMES = $_POST["FILMES"];
	if (strlen($nome) <2){
		echo "Digite seu nome!";
	}else{
		if ($FILMES=="O Vin") {
			echo "<img src='https://http2.mlstatic.com/dvd-o-vingador-vin-diesel-aco-original-dublado-D_NQ_NP_21739-MLB20216979167_122014-F.jpg'>";
			echo "Sean Vetter (Vin Diesel) e Demetrius Hicks (Larenz Tate) são dois policiais que atuam na fronteira dos Estados Unidos com o México, no órgão de combate às drogas. Conhecidos pelo método violento com que agem, eles conseguem prender Memo Lucero (Geno Silva), o famoso líder do Cartel de Baja, o principal grupo traficante local. Após o encarceramento de Lucero em uma prisão de segurança máxima, Vetter acredita que poderá relaxar e ficar mais tempo em casa, com sua esposa Stacy (Jacqueline Obradors). Porém logo após um homem desconhecido, que age sob a alcunha de Diablo, começa a ascender na liderança do Cartel de Baja. Vetter e Hicks partem para tentar identificá-lo, mas Diablo reaje atingindo Vetter em seu ponto mais vulnerável: sua esposa. Arrasado com sua morte, Vetter decide usar todas as formas possíveis para encontrar Diablo e se vingar.";
			echo "O Vingador";
		}

		if ($FILMES=="Ca"){
			
			 echo "<img src='https://i.ytimg.com/vi/bFqSHOZxIOM/maxresdefault.jpg'>";
			  echo "Caça aos Gângsteres";
			  echo "Los Angeles, final da década de 1940. Mickey Cohen (Sean Penn) é um dos líderes da máfia do Brooklyn, usando a violência para conquistar espaço e respeito no meio. Quando ele decide expandir suas atividades pelo oeste dos Estados Unidos, um grupo especial da polícia é criado para capturá-lo. O encarregado por sua organização é John O'Mara (Josh Brolin), um policial incorruptível que escolhe a dedo os integrantes de sua grupo. Juntos eles precisam agir à margem da polícia, já que Mickey possui contatos dentro da corporação que permitem que saiba todos os movimentos antes mesmo que eles aconteçam. ";

		}
	}
	
?>
</body>
</html>