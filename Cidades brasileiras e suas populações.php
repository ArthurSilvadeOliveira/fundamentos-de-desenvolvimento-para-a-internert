<?php
    include 'banco.php';
	$link = bancoConecta();

	$sql = <<<EOT

        SELECT 
            ci.Name, ci.Population
        FROM 
            city as ci
        WHERE
            ci.CountryCode ='BRA'
EOT;
?>
<div class="container">
	<h1 class='text-center'>Cidades brasileiras e suas populações</h1>
	<table class="table table-striped table-sm table-bordered">
		<thead>
			<tr>
			<th scope="col">Nome</th>
			<th scope="col">População</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
				<tr>
					<td><?=$linha['Name']?></td>
					<td><?=$linha['Population']?></td>
				</tr>
			<?php } /*foreach*/ ?>
		</tbody>
	</table>
</div>