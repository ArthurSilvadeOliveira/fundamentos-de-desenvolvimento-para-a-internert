<?php

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'world';

	$link = mysqli_connect($host,$usuario,$senha);
	if(!$link)
	{

		echo "Erro de conexao: " . mysqli_connect_error();
		die();
	}

	if(!mysqli_select_db($link, $banco))
	{
		echo "Erro na selecao do banco: " . mysqli_error($link);
		mysqli_close($link);
		die();
	}
	$resposta = mysqli_query($link, "select * from idioma");
	if($resposta)
	{
		$linha = mysqli_fetch_assoc($resposta);
		if(!$linha)
		{
			echo "Vazio";
		}
		else
		{
			echo "<hr />";
            echo "<p>Escolha o idioma de sua preferência:</p> ";
			while($linha)
			{
				echo "{$linha['nome_idioma']}: <input type='radio' name='idioma' ><br>";
				$linha = mysqli_fetch_assoc($resposta);
			}
		}
	}
	else
	{
		echo mysqli_error($link);
	}
	mysqli_close($link);