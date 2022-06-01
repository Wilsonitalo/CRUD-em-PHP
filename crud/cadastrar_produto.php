<h1>Cadastrar Produtos</h1>
<br><br>

<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" min="1" maxlength="50" class="form-control" pattern="[a-zA-Z\s]+$" placeholder="Digite apenas letras" required>
	</div>
	<div class="mb-3">
		<label>Quantidade</label>
		<input type="number" name="quantidade" min="1" max="999" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Preço</label>
		<input type="number" name="preco" min="1" max="50000" class="form-control" required>
	</div>
	<div class="mb-3">
		<a href="?page=exibicao" class="btn btn-primary">Cancelar</a>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>