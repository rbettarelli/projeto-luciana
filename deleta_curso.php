<?php
include 'db.php';

$id_curso = $_GET['ID_CURSO'];

$query ="DELETE FROM cursos WHERE ID_CURSO = $id_curso"	;

mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');
