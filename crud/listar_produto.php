<h1>Produtos em Estoque</h1>
<br><br>

	<div class="mb-3">
		<a href="?page=cadastro" class="btn btn-primary">Cadastrar</a>
	</div>
	

<?php

	$sql = "SELECT * FROM produtos";

	$resultado = $conexao->query($sql);

	$qtd = $resultado->num_rows;

	if ($qtd > 0) {
		print "<table class='table table-hover table-striped table-bordered'>";
			print "<tr>";
			print "<th>ID</th>";
			print "<th>Nome</th>";
			print "<th>Quantidade</th>";
			print "<th>Preço</th>";
			print "<th>Ações</th>";
			print "</tr>";
		while ($row = $resultado->fetch_object()) {
			print "<tr>";
			print "<td>".$row->id."</td>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->quantidade."</td>";
			print "<td>".$row->preco."</td>";
			print "<td><buttom onclick=\"location.href='?page=edicao&id=".$row->id."';\" class='btn btn-success'>Editar</buttom>
				<buttom onclick=\"location.href='?page=exclusao&id=".$row->id."';\" class='btn btn-danger'>Excluir</buttom>
					</td>";
			print "</tr>";
		}
		print "</table>";
	} else {
		print "<p class='alert alert-danger'>Nenhum dado localizado!</p>";
	}
	
?>