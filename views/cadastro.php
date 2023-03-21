<?php include("blades/header.php"); ?>
 <div class="container border rounded mt-5 bg-white">
    <form action="../controllers/cadastrarAluno.php" method="post">
        <div class="row mt-3" >
            <div class="col">
         <label class="label">Nome</label>
         <input class="form-control" type="text" name="AlunoNome"><br>
            </div>
            <div class="col">
         <label class="label">Cidade</label>
         <input class="form-control"type="text" name="AlunoCidade"><br>           
            </div>
        </div>
        
        <input class="form-check-input" type="radio" value="Masculino" name="AlunoSexo">
        <label class="radio-inline">Masculino</label><br>
        <input class="form-check-input" type="radio" value="Feminino" name="AlunoSexo">
        <label class="radio-inline">Feminino</label><br>
        <input class=" mt-2 mb-3 btn btn-success" type="submit" value="Cadastrar">
       
    </form>  
</div>
    <?php include("blades/footer.php"); ?>