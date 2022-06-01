<h1>Editar Produtos</h1>
<br><br>

<?php 
	$sql = "SELECT * FROM produtos WHERE id=".$_REQUEST['id'];
	$resultado = $conexao->query($sql); 
	$row = $resultado->fetch_object();
?>

<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id" value="<?php print $row->id; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" min="1" maxlength="50" value="<?php print $row->nome; ?>" class="form-control" pattern="[a-zA-Z\s]+$" placeholder="Digite apenas letras" required>
	</div>
	<div class="mb-3">
		<label>Quantidade</label>
		<input type="number" name="quantidade" value="<?php print $row->quantidade; ?>" min="1" max="999" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Preço</label>
		<input type="number" name="preco" value="<?php print $row->preco; ?>" min="1" max="50000" class="form-control" required>
	</div>
	<div class="mb-3">
		<a href="?page=exibicao" class="btn btn-primary">Cancelar</a>
		<button type="submit" class="btn btn-primary">Salvar Alteração</button>
	</div>
</form>