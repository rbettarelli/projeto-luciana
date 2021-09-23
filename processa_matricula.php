<?php

include 'db.php';

$id_aluno = $_POST['escolha_aluno'];
$id_curso = $_POST['escolha_curso'];



$query = "INSERT INTO alunos_cursos(ID_ALUNO, ID_CURSO) VALUES ('$id_aluno', '$id_curso')";


mysqli_query($conexao, $query) or die("Erro na inserção do Aluno: " . mysqli_error($conexao)) ;

header('location:index.php?pagina=matriculas');


?>