<?php
    include 'banco.php';
	$link = bancoConecta();

	$sql = <<<EOT

        SELECT 
            c.Name, c.Continent, cl.IsOfficial, cl.Percentage
        FROM 
            country as c,  
            countrylanguage as cl
        WHERE
            c.Code = cl.CountryCode and
            cl.Language = 'English'
        ORDER BY 
            c.GNP ASC
EOT;
?>


<div class="container">
	<h1 class='text-center'>Países que falam ingles classificados pelo seu PIB</h1>
	<table class="table table-striped table-sm table-bordered">
		<thead >
			<tr>
			<th scope="col">Nome</th>
			<th scope="col">Continente</th>
			<th scope="col">Oficial</th>
			<th scope="col">Percentual</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
				<tr>
					<td><?=$linha['Name']?></td>
					<td><?=$linha['Continent']?></td>
					<td><?=$linha['IsOfficial']?></td>
					<td><?=$linha['Percentage']?></td>
				</tr>
			<?php } /*foreach*/ ?>
		</tbody>
	</table>
</div>