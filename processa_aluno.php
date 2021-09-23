<?php

include 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];
$email_aluno =$_POST['email_aluno'];
$CPF =$_POST['CPF'] ;
$endereco =$_POST['endereco'];   


$query = "INSERT INTO alunos(NOME_ALUNO, EMAIL, DATA_NASCIMENTO, CPF, ENDERECO) 
values ('$nome_aluno', '$email_aluno','$data_nascimento','$CPF' , '$endereco')"; 


mysqli_query($conexao, $query) or die("Erro na inserção do Aluno: " . mysqli_error($conexao)) ;

header('location:index.php?pagina=alunos');


?>