 <?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$db ="unicid2";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

	$query = "SELECT * FROM CURSOS"; 
	$consulta_cursos = mysqli_query($conexao, $query);

	$query = "SELECT * FROM ALUNOS"; 
	$consulta_alunos = mysqli_query($conexao, $query);

	$query = "SELECT alunos_cursos.ID, alunos.NOME_ALUNO, cursos.NOME_CURSO
	from alunos, cursos, alunos_cursos 
	WHERE alunos_cursos.ID_ALUNO = alunos.ID_ALUNO
	and alunos_cursos.ID_CURSO = cursos.ID_CURSO"; 
	$consulta_matriculas = mysqli_query($conexao, $query);


