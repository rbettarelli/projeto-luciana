<?php
include 'db.php';

$id_aluno = $_GET['ID_ALUNO'];

$query ="DELETE FROM alunos WHERE ID_ALUNO = $id_aluno"	;

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
