<?php include("models/conexao.php");  ?>
<?php include("views/blades/header.php"); ?>

<div class="container bg-white rounded-2 mt-5 pt-3 pb-3 ps-3 pe-3">
    <a href="views/cadastro.php"><button type="button" class="btn btn-success">Cadastrar</button></a><hr>
    <hr>
    
    <form action="index.php" method="post">
    <input class="form-control" type="text" name="buscar" size="30" placeholder="Buscar">

    </form>
    <hr>

    <?php
    if(empty($_POST["buscar"])){
        echo "Nenhum resultado";
    }
    else{
    $varBusca = $_POST["buscar"];
    
    echo "<table class='table table-bordered table-striped table-hover' border='1' width='800'><tr><td>Frase</td><td>Editar</td><td>Excluir </td></tr>" ; 
    
    


     $query = mysqli_query($conexao, "select * from alunos where nome like '%$varBusca%'");
     while  ($exibe = mysqli_fetch_array($query)){
        $varSexo = ($exibe[3] == "Masculino") ? "o":"a";
        echo "<tr>" , "<td>" , strtoupper($varSexo) , " alun$varSexo <b>" , $exibe[1] , "</b> mora na cidade de " , $exibe[2] , ".</td>" , 
             "<td><a href='views/cadastroAtualiza.php?ida=".$exibe[0]."'><button type='button' class='btn btn-primary'>Editar</button></a></td>" , 
             "<td><a href='controllers/deletarAluno.php?ida=".$exibe[0]."'><button type='button' class='btn btn-danger'>Excluir</button></a></td>",
             "</tr>";
     } 
     echo "</table>";
    
    } 
 ?>
</div>
<?php include("views/blades/footer.php"); ?>
