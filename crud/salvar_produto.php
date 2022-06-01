<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome = $_POST["nome"];
			$quantidade = $_POST["quantidade"];
			$preco = $_POST["preco"];

			$sql = "INSERT INTO produtos (nome, quantidade, preco) VALUES ('{$nome}', '{$quantidade}', '{$preco}')";

			$resultado = $conexao->query($sql);

			if($resultado==true){
				print "<script>alert('Cadastro com sucesso!');</script>";
				print "<script>location.href='?page=exibicao';</script>";
			}else{
				print "<script>alert('Erro ao cadastrar!');</script>";
				print "<script>location.href='?page=exibicao';</script>";
			}
		break;

		case 'editar':
			$nome = $_POST["nome"];
			$quantidade = $_POST["quantidade"];
			$preco = $_POST["preco"];

			$sql = "UPDATE produtos SET nome='{$nome}',quantidade='{$quantidade}',preco='{$preco}' WHERE id=".$_REQUEST["id"];

			$resultado = $conexao->query($sql);

			if($resultado==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=exibicao';</script>";
			}else{
				print "<script>alert('Erro ao editar!');</script>";
				print "<script>location.href='?page=exibicao';</script>";
			}
		break;

		case 'excluir':
			$nome = $_POST["nome"];
			$quantidade = $_POST["quantidade"];
			$preco = $_POST["preco"];

			$sql = "DELETE FROM produtos WHERE id=".$_REQUEST["id"];

			$resultado = $conexao->query($sql);

			if($resultado==true){
				print "<script>alert('Excluído com sucesso!');</script>";
				print "<script>location.href='?page=exibicao';</script>";
			}else{
				print "<script>alert('Erro ao excluir!');</script>";
				print "<script>location.href='?page=exibicao';</script>";
			}
		break;
	}