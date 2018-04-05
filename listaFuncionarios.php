<?php
require_once("dataBaseNorthwind.php");
require_once("header.php");

$funcionarios = listaFuncionarios($conecta);

?>
 <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <td>Nome</td>
                <td>Nome</td>
                <td>Nome</td>
                <td>Nome</td>
                <         
            </tr>
        </thead>
        <?php 
            $i=0;
            foreach ($funcionarios[]$i as $funcionario):
                $i+=1;
        ?>
        <tr>
            <td><?php echo $funcionario["Nome"]?></td>
            <td><?php echo $funcionario["Titulo"]?></td>  
            <td>
                <a href=<?php print("formUpdateProduto.php?id=".$produto["id"]);?> class="btn btn-primary"></a>
            </td>   
            <td>
                <a href=<?php print("deleteProduto.php?id=".$produto["id"]);?> class="btn btn-primary"></a>
            </td>  
        </tr>
        <?php
            endforeach;
        ?>
    </table>

<?php
require_once("footer.php");
?>