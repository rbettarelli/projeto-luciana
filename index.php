<?php

#base de dados
include 'db.php';

#cabecalho
include 'header.php';

#conteudo da página
if(isset($_GET['pagina'])){
$pagina = $_GET['pagina'];
}
else{
	$pagina ='home';
}
switch($pagina){
	case 'cursos': include 'views/cursos.php'; break;
	case 'alunos': include 'views/alunos.php'; break;
	case 'matriculas': include 'views/matriculas.php'; break;
	case 'inserir_aluno': include 'views/inserir_aluno.php'; break;
	case 'inserir_matricula': include 'views/inserir_matricula.php'; break;
	case 'inserir_curso': include 'views/inserir_curso.php'; break;
	default: include 'views/home.php'; break;
}
#rodapé
include 'footer.php';

