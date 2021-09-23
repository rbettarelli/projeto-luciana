<h1> Inserir Nova Matricula </h1>
<form method="post" action="processa_matricula.php">
<br>
<p> Selecione o Aluno </p>

		<select class="form-control" name="escolha_aluno">
	<option> Selecione um Aluno </option>
		<?php
		while($linha = mysqli_fetch_array($consulta_alunos)){
					echo '<option value="'.$linha['ID_ALUNO'].'">'.$linha['NOME_ALUNO'].'</option>';
						}

							?>
		</select>

		<br><br>

		<select class="form-control" name="escolha_curso">
		<option> Selecione um curso </option>
		<?php
		
					while($linha = mysqli_fetch_array($consulta_cursos)){
					echo '<option value="'.$linha['ID_CURSO'].'">'.$linha['NOME_CURSO'].'</option>';
					}
			?>
		</select>
		<br><br>
		<input class="btn btn-success" type="submit" value="Matricular Aluno no Curso">

	</form>
