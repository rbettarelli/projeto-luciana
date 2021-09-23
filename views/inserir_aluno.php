<?php if(!isset($_GET['editar'])) { ?>

<h1> Inserir Novo Aluno </h1>


<form  action="processa_aluno.php" method="post">
	<br>
	<label class="badge bg-secondary"> Nome Aluno: </label><br>
	<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o Nome do Aluno">
	<br><br>
	<label class="badge bg-secondary"> CPF: </label><br>
	<input class="form-control" type="text" name="CPF" placeholder="Insira o CPF do Aluno">
	<br><br>
    <label class="badge bg-secondary"> Data de Nascimento: </label><br>
	<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a Data de Nasciento">
	<br><br>
	<label class="badge bg-secondary"> E-mail: </label><br>
	<input class="form-control" type="text" name="email_aluno" placeholder="Insira o Email do Aluno">
	<br><br>
	<label class="badge bg-secondary"> Endereco: </label><br>
	<input class="form-control" type="text" name="endereco" placeholder="Insira o Endereco do Aluno">

	<input class="btn btn-success" type="submit" value="Inserir Aluno">

</form>

<?php } else {?>
  <?php while($linha = mysqli_fetch_array($consulta_alunos)){
   ?> 
   <?php if ($linha['ID_ALUNO'] == $_GET['editar']){?>

<h1> Editar Aluno </h1>
<form  action="edita_aluno.php" method="post">
	<input type="hidden" name="id_aluno" value="<?php echo $linha['ID_ALUNO'];?>">
	<br>
	<label class="badge bg-secondary"> Nome Aluno: </label><br>
	<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o Nome do Aluno" value="<?php echo $linha['NOME_ALUNO']?>">
	<br><br>
	<label class="badge bg-secondary"> CPF: </label><br>
	<input class="form-control" type="text" name="CPF" placeholder="Insira o CPF do aluno" value="<?php echo $linha['CPF']?>">
	<br><br>
    <label class="badge bg-secondary"> Data de Nascimento: </label><br>
	<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a Data de Nasciento" value="<?php echo $linha['DATA_NASCIMENTO']?>">
	<br><br>
	<label class="badge bg-secondary"> E-mail: </label><br>
	<input class="form-control" type="text" name="email_aluno" placeholder="Insira o Email do Aluno" value="<?php echo $linha['EMAIL']?>">
	<br><br>
	<label class="badge bg-secondary"> Endereço: </label><br>
	<input class="form-control" type="text" name="endereco" placeholder="Insira o Endereço" value="<?php echo $linha['ENDERECO']?>">
	<br><br>
	<input class="btn btn-success" type="submit" value="Editar Aluno">
	
	<br><br>
</form>

<?php } ?>
<?php } ?>
<?php } ?>

