<?php 
    include_once("conecta.php");
    include_once("dataBaseNorthwind.php");
    
$deletaFuncionario = removeFuncionario($conecta,$_GET['id']);
if($deletaFuncionario){
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