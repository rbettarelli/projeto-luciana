<a class="btn btn-success" href="?pagina=inserir_matricula"> Inserir Matricula </a><p><br></p>

<table class="table table-hover table-striped" id="matriculas" >
	<thead>
		<tr>
			<th> Nome Aluno </th>
			<th> Nome Curso </th>
			<th> Deletar </th>
		</tr>

</thead>
<tbody>
	<?php
	while($linha = mysqli_fetch_array($consulta_matriculas)){
				echo '<tr><td >'.$linha['NOME_ALUNO'].'</td>';
				echo '<td>'.$linha['NOME_CURSO'].'</td>';
?>
				<td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['ID']; ?>"><i class="fas fa-trash-alt"></i></a></td></tr>
<?php
			}
	?>
</tbody>

</table>

