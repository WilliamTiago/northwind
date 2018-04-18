<?php 
      include_once("header.php");
      include_once("conecta.php");
      include_once("dataBaseNorthwind.php");
      $funcionario = buscaFuncionario($conecta,$_GET["id"]);
?>
<form action="AlteraFuncionario.php" method="Post">
  <input value="<?php print $_GET['id']?>" name="id" type="hidden"></input>
  <div class="form-group">
    <label for="Nome">Nome</label>
    <input type="text" class="form-control" id="Nome" name="Nome" value="<?php print $funcionario["Nome"]?>">
  </div>
  <div class="form-group">
    <label for="Sobrenome">Sobrenome</label>
    <input type="text" class="form-control" id="Sobrenome" name="Sobrenome" value="<?php print $funcionario["Sobrenome"]?>">
  </div>
  <div class="form-group">
    <label for="Titulo">Titulo</label>
    <input type="text" class="form-control" id="Titulo" name="Titulo" value="<?php print $funcionario["Titulo"]?>">
  </div>
  <div class="form-group">
    <label for="TituloCortesia">Titulo Cortesia</label>
    <input type="text" class="form-control" id="TituloCortesia" name="TituloCortesia" value="<?php print $funcionario["TituloCortesia"]?>">
  </div>
  <div class="form-group">
    <label for="Notas">Notas</label>
    <input type="text" class="form-control" id="Notas" name="Notas" value="<?php print $funcionario["Notas"]?>">
  </div>
  <div class="form-group">
    <label for="DataNac">Data Nascimento</label>
    <input type="text" class="form-control" id="DataNac" name="DataNac" value="<?php print $funcionario["DataNac"]?>">
  </div>
  <input value="<?php print $_GET['id']?>" name="id" type="hidden"></input>
  <div class="form-group">
    <label for="DataAdmissao">Data Admissao</label>
    <input type="text" class="form-control" id="DataAdmissao" name="DataAdmissao" value="<?php print $funcionario["DataAdmissao"]?>">
  </div>
  <div class="form-group">
    <label for="TelefoneResidencial">Telefone Residencial</label>
    <input type="text" class="form-control" id="TelefoneResidencial" name="TelefoneResidencial" value="<?php print $funcionario["TelefoneResidencial"]?>">
  </div>
  <div class="form-group">
    <label for="Reportase">Reportase</label>
    <input type="number" class="form-control" id="Reportase" name="Reportase" value="<?php print $funcionario["Reportase"]?>">
  </div>
  <div class="form-group">
    <label for="Endereco">Endereco</label>
    <input type="text" class="form-control" id="Endereco" name="Endereco" value="<?php print $funcionario["Endereco"]?>">
  </div>
  <div class="form-group">
    <label for="Cidade">Cidade</label>
    <input type="text" class="form-control" id="Cidade" name="Cidade" value="<?php print $funcionario["Cidade"]?>">
  </div>
  <div class="form-group">
    <label for="Regiao">Regiao</label>
    <input type="text" class="form-control" id="Regiao" name="Regiao" value="<?php print $funcionario["Regiao"]?>">
  </div>
  <div class="form-group">
    <label for="Cep">Cep</label>
    <input type="text" class="form-control" id="Cep" name="Cep" value="<?php print $funcionario["Cep"]?>">
  </div>
  <div class="form-group">
    <label for="Pais">Pais</label>
    <input type="text" class="form-control" id="Pais" name="Pais" value="<?php print $funcionario["Pais"]?>">
  </div>
  <div class="form-group">
    <label for="Extensao">Extensao</label>
    <input type="text" class="form-control" id="Extensao" name="Extensao" value="<?php echo $funcionario["Extensao"]?>">
  </div>
  <button type="submit" class="btn btn-primary">Alterar</button>
  <a href="listProduto.php" class="btn btn-primary">Cancelar</a>
  <button type="reset" class="btn btn-primary">Limpar</button>
</form>

<?php 
mysqli_close($conecta);
include_once("footer.php"); 
?>

