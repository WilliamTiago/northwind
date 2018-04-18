<?php 
    include_once("conecta.php");
    include_once("dataBaseNorthwind.php");
    
$alteraFuncionario = alteraFuncionario($conecta,$_POST['id'],$_POST['Nome'],$_POST['Sobrenome'],$_POST['Titulo'],$_POST['TituloCortesia'],
$_POST['Notas'],$_POST['DataNac'],$_POST['DataAdmissao'],$_POST['TelefoneResidencial'],$_POST['TelefoneResidencial'],$_POST['Reportase'],
$_POST['Endereco'],$_POST['Cidade'],$_POST['Regiao'],$_POST['Cep'],$_POST['Pais'],$_POST['Extensao']);
if($alteraFuncionario){
    ?>
    <script>
        alert("Deu boa");
        window.location.href = 'listaFuncionarios.php';
    </script>    
    <?php 
}else{
    echo"Não deu cara!";    
}
?>