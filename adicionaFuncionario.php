<?php
	require_once("conecta.php");
	require_once("dataBaseNorthwind.php");	

		$nome           = $_POST["nome"];
		$sobrenome      = $_POST["sobrenome"];
		$titulo         = $_POST["titulo"];
		$tituloCortesia = $_POST["tituloCortesia"];
		$notas          = $_POST["notas"];
		$dataNasc       = $_POST["dataNasc"];
		$dataAdm        = $_POST["dataAdm"];
		$telefone       = $_POST["telefone"];
		$reportase      = $_POST["reportase"];
		$endereco       = $_POST["endereco"];
		$cidade         = $_POST["cidade"];
		$regiao         = $_POST["regiao"];
		$cep            = $_POST["cep"];
	    $pais           = $_POST["pais"];
		$extensao       = $_POST["extensao"];

	$adicionaFuncionario = cadastraFuncionario($conecta,$nome,$sobrenome,$titulo,$tituloCortesia,$dataNasc,$dataAdm,$telefone,$endereco,$cidade,$regiao,$cep,$pais,$extensao,$notas,$reportase);

if($adicionaFuncionario){
		?>
		<script>
			alert("Funcionário cadastrado com sucesso");
			window.location.href = 'index.php';
		</script>
		<?php
	}else{
		?>
		<script>
			alert("Erro ao cadastrar");
		</script>
		<?php
	}  
?>