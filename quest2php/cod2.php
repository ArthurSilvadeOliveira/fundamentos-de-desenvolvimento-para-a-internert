<?php
  $cidade=$_POST['cidade'];
  $f=fopen("violencia-domestica-df.csv","r");
  $confirmacao=0;
  $dados=fgetcsv($f);
    while($dados)
	{
		if(($dados[0]==$cidade))
		{
            echo "<p>";
            echo $dados[0];
            echo "</p>";
            echo "<p>";
            echo $dados[1];
            echo "</p>";
            echo "<p>";
            echo $dados[2];
            echo "</p>";
            echo "<p>";
            echo $dados[3];
            echo "</p>";
            echo "<p>";
            echo $dados[4];
            echo "</p>";
            echo "<p>";
            echo $dados[5];
            echo "</p>";
            echo "<p>";
            echo $dados[6];
            echo "</p>";
		}
		$dados=fgetcsv($f);
	}
	fclose($f);
?>