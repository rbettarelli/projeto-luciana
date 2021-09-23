

<?php if(!isset($_GET['editar'])) {?>

<h1> Inserir Novo Curso </h1>


<form  action="processa_curso.php" method="post">
	<br>
	<label class="badge bg-secondary"> Nome Curso: </label><br>
	<input class="form-control"type="text" name="nome_curso" placeholder="Insira o nome do curso">
	<br><br>
	<label class="badge bg-secondary"> Carga Horaria:</label><br>
	<input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horaria">
	<input class="btn btn-success" type="submit" value="Inserir Curso">
</form>

<?php } else {?>
<?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
	<?php if ($linha['ID_CURSO'] == $_GET['editar']){?>

<h1> Editar Curso </h1>
<form  action="edita_curso.php" method="post">
	<input type="hidden" name="id_curso" value="<?php echo $linha['ID_CURSO'];?>">
	<br>
	<label class="badge bg-secondary" > Nome Curso: </label>
	<br>
	<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['NOME_CURSO'];?>">
	<br><br>
	<label class="badge bg-secondary"> Carga Horaria:</label><br>
	<input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horaria" value="<?php echo $linha['DURACAO'];?>">
	<input class="btn btn-success" type="submit" value="Editar Curso">
</form>
<?php } ?>
<?php } ?>
<?php } ?>
