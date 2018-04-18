<?php 

function listaFuncionarios($conecta){
    $query    = "select * from funcionarios";
    $consulta = mysqli_query($conecta, $query);
    while($resultado = mysqli_fetch_assoc($consulta)){
		$funcionarios[]=$resultado;
	}   
    return $funcionarios;
};

function cadastraFuncionario($conecta,$sobrenome,$nome,$titulo,$tituloCortesia,$dataNasc,$dataAdi,$endereco,$cidade,$regiao,$cep,$pais,$telefone,$extensao,$notas,$reportase){
	$query   = "INSERT INTO `funcionarios` (`IDFuncionario`, `Sobrenome`, `Nome`, `Titulo`, `TituloCortesia`, `DataNac`, `DataAdmissao`, `Endereco`, `Cidade`, `Regiao`, `Cep`, `Pais`, `TelefoneResidencial`, `Extensao`, `Foto`, `Notas`, `Reportase`, `FotoCaminho`) VALUES 
	(".(rand(10,100)).", '".$sobrenome."', '".$nome."', '".$titulo."', '".$tituloCortesia."', '".$dataNasc."', '".$dataAdi."', '".$endereco."', '".$cidade."','".$regiao."', '".$cep."', '".$pais."', '".$telefone."', '".$extensao."','3333333','".$notas."','".$reportase."','44444');";
	$insere = mysqli_query($conecta, $query);
	return $insere;
}

function removeFuncionario($conecta,$id){
	$query = "delete from funcionarios where IDFuncionario =".$id;
	$deleta = mysqli_query($conecta,$query);
	return $deleta; 
}

function buscaFuncionario($conecta,$id){
	$query = "select * from funcionarios where IDFuncionario = ".$id;
	$busca = mysqli_query($conecta,$query);
	$resultado= mysqli_fetch_assoc($busca); 
	return $resultado;
}

function alteraFuncionario($conecta,$id,$Nome,$Sobrenome,$Titulo,$TituloCortesia,
$Notas,$DataNac,$DataAdmissao,$TelefoneResidencial,$TelefoneResidencial,$Reportase,
$Endereco,$Cidade,$Regiao,$Cep,$Pais,$Extensao){
	$query = "UPDATE funcionarios SET Sobrenome= '$Sobrenome',Nome= '$Nome',
	Titulo= '$Titulo',TituloCortesia= '$TituloCortesia',DataNac='$DataNac',DataAdmissao='$DataAdmissao',
	Endereco= '$Endereco',Cidade= '$Cidade',Regiao= '$Regiao',Cep= '$Cep',Pais= '$Pais',
	TelefoneResidencial='$TelefoneResidencial',Extensao= '$Extensao',Notas='$Notas',
	Reportase=$Reportase WHERE IDFuncionario = $id";
	$altera = mysqli_query($conecta, $query);
	return $altera;
}



