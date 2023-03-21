
<?php  include("../models/conexao.php");  ?>
<?php  include("blades/header.php");   ?>

    <?php
     $varIda = $_GET["ida"];
     $query = mysqli_query($conexao,"SELECT * FROM alunos WHERE codigo = $varIda");
     while($exibe = mysqli_fetch_array($query)){
    ?>
<div class="container border rounded mt-5 bg-white">
    <form action="../controllers/atualizarAluno.php" method="post">
        <input type = "hidden" name ="AlunoCodigo" value="<?php echo $exibe[0] ?>">
     <div class="row mt-3" >
            <div class="col">
        <label class="label">Nome</label>
        <input class="form-control" type="text" name="AlunoNome" value="<?php echo $exibe[1] ?>"><br>
            </div>
            <div class="col">
        <label class="label">Cidade</label>
        <input class="form-control" type="text" name="AlunoCidade" value="<?php echo $exibe[2] ?>"><br>
            </div>
    </div>

        <?php
         $varCheck = ($exibe[3] == "Masculino") ?
         "<input class='form-check-input' type='radio' value='Masculino' name='AlunoSexo' checked>  <label class='radio-inline'> Masculino</label><br> 
          <input class='form-check-input' type='radio' value='Feminino' name='AlunoSexo'>          <label class='radio-inline'>Feminino</label><br>"
         : 
         "<input  class='form-check-input' type='radio' value='Masculino' name='AlunoSexo'>        <label class='radio-inline'> Masculino</label><br> 
          <input  class='form-check-input' type='radio' value='Feminino' name='AlunoSexo' checked> <label class='radio-inline'>Feminino</label><br>";
        echo $varCheck
       ?>
        <input class=" mt-2 mb-3 btn btn-success" type="submit" value="Atualizar">
    </form> 
</div>   
    <?php } ?>  
    <?php  include("blades/footer.php");   ?>
