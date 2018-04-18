<?php
	require_once("header.php");

?>
	<form action="adicionaFuncionario.php" method="Post">
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
		</div>
		<div class="form-group">
			<label for="sobrenome">Sobrenome</label>
			<input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
		</div>
		<div class="form-group">
			<label for="titulo">Titulo</label>
			<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
		</div>
		<div class="form-group">
			<label for="tituloCortesia">Titulo Cortesia</label>
			<input type="text" class="form-control" id="tituloCortesia" name="tituloCortesia" placeholder="Titulo Cortesia">
		</div>
		<div class="form-group">
			<label for="notas">Notas</label>
			<input type="text" class="form-control" id="notas" name="notas" placeholder="Notas">
		</div>
		<div class="form-group">
			<label for="dataNasc">Data de Nascimento</label>
			<input type="date" class="form-control" id="dataNasc" name="dataNasc" placeholder="Data de Nascimento" required>
		</div>
		<div class="form-group">
			<label for="dataAdm">Data de Admissao</label>
			<input type="date" class="form-control" id="dataAdm" name="dataAdm" placeholder="Data de Admissao" required>
		</div>
		<div class="form-group">
			<label for="telefone">Telefone</label>
			<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
		</div>
		<div class="form-group">
			<label for="reportase">Reportase</label>
			<input type="number" class="form-control" id="reportase" name="reportase" placeholder="Reportase" required>
		</div>
		<div class="form-group">
			<label for="endereco">Endereco</label>
			<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereco">
		</div>
		<div class="form-group">
			<label for="cidade">Cidade</label>
			<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
		</div>
		<div class="form-group">
			<label for="regiao">Regiao</label>
			<input type="text" class="form-control" id="regiao" name="regiao" placeholder="Regiao">
		</div>
		<div class="form-group">
			<label for="cep">CEP</label>
			<input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
		</div>
		<div class="form-group">
			<label for="cep">Pais</label>
			<input type="text" class="form-control" id="pais" name="pais" placeholder="Pais">
		</div>
		<div class="form-group">
			<label for="extensao">Extensão</label>
			<input type="number" class="form-control" id="extensao" name="extensao" placeholder="Extensao">
		</div>
		<button type="submit"  class="btn btn-primary">Cadastrar</button>
	</form>
<?php
	
	require_once("footer.php");
?>