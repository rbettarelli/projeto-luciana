<?php 
include 'db.php';

$id_aluno = $_POST['id_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email_aluno'];
$CPF =$_POST['CPF'] ;
$endereco =$_POST['endereco'];   

$query ="UPDATE alunos SET NOME_ALUNO = '$nome_aluno', EMAIL = '$email', DATA_NASCIMENTO = '$data_nascimento',  CPF = '$CPF', ENDERECO = '$endereco' WHERE ID_ALUNO = $id_aluno";


mysqli_query($conexao, $query);


header('location:index.php?pagina=alunos');