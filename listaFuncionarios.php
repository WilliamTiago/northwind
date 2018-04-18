<?php
require_once("dataBaseNorthwind.php");
require_once("header.php");
require_once("conecta.php");

$funcionarios = listaFuncionarios($conecta);

?>
 <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
				<td>Id Funcionario</td>
                <td>Nome</td>
                <td>Sobrenome</td>
                <td>Titulo</td>
                <td>Titulo Cortesia</td>  
				<td>Notas</td>
                <td>Data de NAscimento</td>
				<td>Data Admissão</td>
                <td>Telefone Residencial</td>
				<td>Reportase</td>
                <td>Endereço</td>
                <td>Cidade</td>
                <td>Regiao</td>
				<td>Cep</td>
                <td>Pais</td>
				<td>Extenção</td>
                <!--<td>Foto Caminho</td>
                <td>Foto</td>-->
                <td>Alterar</td>
                <td>Excluir</td>
            </tr>
        </thead>
        <?php
            foreach ($funcionarios as $funcionario):
        ?>
        <tr>
			<td><?php echo $funcionario["IDFuncionario"]?></td>
            <td><?php echo $funcionario["Nome"]?></td>
            <td><?php echo $funcionario["Sobrenome"]?></td>
			<td><?php echo $funcionario["Titulo"]?></td>
            <td><?php echo $funcionario["TituloCortesia"]?></td>
			<td><?php echo $funcionario["Notas"]?></td>
            <td><?php echo $funcionario["DataNac"]?></td> 
			<td><?php echo $funcionario["DataAdmissao"]?></td>
            <td><?php echo $funcionario["TelefoneResidencial"]?></td>  
			<td><?php echo $funcionario["Reportase"]?></td>
            <td><?php echo $funcionario["Endereco"]?></td>  
			<td><?php echo $funcionario["Cidade"]?></td>
            <td><?php echo $funcionario["Regiao"]?></td>  
			<td><?php echo $funcionario["Cep"]?></td>
            <td><?php echo $funcionario["Pais"]?></td>  
			<td><?php echo $funcionario["Extensao"]?></td>
            <!--<td><?php echo $funcionario["FotoCaminho"]?></td>  
			<td><?php echo $funcionario["Foto"]?></td>-->
            <td>
                <a href="formAlteraFuncionario.php?id=<?php print($funcionario["IDFuncionario"])?>" class="btn btn-primary">...</a>
            </td>   
            <td>
                <a href="deleta.php?id=<?php print($funcionario["IDFuncionario"])?>" class="btn btn-primary">X</a>
            </td>  
        </tr>
        <?php
            endforeach;
        ?>
    </table>

<?php
require_once("footer.php");
?>