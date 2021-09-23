<?php 

include 'db.php';

$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query ="UPDATE cursos SET NOME_CURSO='$nome_curso', DURACAO='$carga_horaria' where ID_CURSO = $id_curso";


mysqli_query($conexao, $query);



header('location:index.php?pagina=cursos');

 ?>