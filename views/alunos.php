<a class="btn btn-success" href="?pagina=inserir_aluno"> Inserir Novo Aluno </a><p><br></p>
<table class="table table-hover table-striped" id="alunos" >
	<thead>
	<tr>
			<th> Nome Aluno </th>
			<th> CPF </th>
			<th> Data Nascimento </th>
			<th> Email </th>
			<th> Endereco </th>
			<th> Editar </th>
			<th> Deletar </th>
		</tr>
</thead>
<tbody>
	
	<?php
	while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<tr><td >'.$linha['NOME_ALUNO'].'</td>';
				echo '<td>'.$linha['CPF'].'</td>';
				echo '<td>'.$linha['DATA_NASCIMENTO'].'</td>';
				echo '<td>'.$linha['EMAIL'].'</td>';
				echo '<td>'.$linha['ENDERECO'].'</td>';
				?>

				<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['ID_ALUNO']; ?>"><i class="fas fa-user-edit"></i></a></td>
				<td><a href="deleta_aluno.php?ID_ALUNO=<?php echo $linha['ID_ALUNO']; ?>"><i class="fas fa-trash-alt"></i></a></td></tr>
<?php
			}
	?>
</tbody>

</table>

