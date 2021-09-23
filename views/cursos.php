<a class="btn btn-success" href="?pagina=inserir_curso"> 
Inserir Novo Curso </a><p><br></p>


<table class="table table-hover table-striped" id="cursos">
	
<thead>
	<tr>
			<th> Nome Curso </th>
			<th> Carga Horaria </th>
			<th> Editar </th>
			<th> Deletar </th>
		</tr>

</thead>
<tbody>
	<?php 
	while($linha = mysqli_fetch_array($consulta_cursos)){
				echo '<tr><td >'.$linha['NOME_CURSO'].'</td>';
				echo '<td>'.$linha['DURACAO'].'</td>';
			?>
			<td><a href="?pagina=inserir_curso&editar=<?php echo $linha['ID_CURSO']; ?>"><i class="fas fa-user-edit"></i></a></td>
				<td><a href="deleta_curso.php?ID_CURSO=<?php echo $linha['ID_CURSO']; ?>"><i class="fas fa-trash-alt"></i></a></td></tr>
				

<?php
			}
	?>

	</tbody>


</table>





