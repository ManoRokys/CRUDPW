<?php 
include("../models/conexao.php");

mysqli_query($conexao, "UPDATE alunos SET nome='".$_POST["AlunoNome"]."', cidade='".$_POST["AlunoCidade"]."', sexo='".$_POST["AlunoSexo"]."' WHERE codigo =" . $_POST["AlunoCodigo"]);

header("location:../");
?>