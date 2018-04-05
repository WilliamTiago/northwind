<?php 
require_once("conecta.php");

function listaFuncionarios($conecta){
    $query     = "select Nome, Titulo from funcionarios";
    $consulta  = mysqli_query($conecta, $query);
    $funcionarios = mysqli_fetch_all($consulta);   
    return $funcionarios;
};



