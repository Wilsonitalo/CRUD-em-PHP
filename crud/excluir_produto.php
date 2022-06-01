<h1>Excluir Produtos</h1>
<br><br>

<?php 
	$sql = "SELECT * FROM produtos WHERE id=".$_REQUEST['id'];
	$resultado = $conexao->query($sql); 
	$row = $resultado->fetch_object();
?>

<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="excluir">
	<input type="hidden" name="id" value="<?php print $row->id; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control" readonly>
	</div>
	<div class="mb-3">
		<label>Quantidade</label>
		<input type="number" name="quantidade" value="<?php print $row->quantidade; ?>" min="1" max="999" class="form-control" readonly>
	</div>
	<div class="mb-3">
		<label>Preço</label>
		<input type="number" name="preco" value="<?php print $row->preco; ?>" min="1" max="50000" class="form-control" readonly>
	</div>
	<p class='alert alert-danger'>TEM CERTEZA QUE DESEJA DELETAR ESSE PRODUTO?</p>
	<div class="mb-3">
		<a href="?page=exibicao" class="btn btn-primary">Cancelar</a>
		<button type="submit" class="btn btn-primary">Excluir</button>
	</div>
</form>