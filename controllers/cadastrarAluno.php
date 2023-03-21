<?php
include("../models/conexao.php");

mysqli_query($conexao, "INSERT INTO alunos (nome, cidade, sexo) VALUES ('".$_POST["AlunoNome"]."', '".$_POST["AlunoCidade"]."', '".$_POST["AlunoSexo"]."')");

header("location:../");
?>
