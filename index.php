<?php
require 'config.php';
include 'src/Fornecedor.php';

$forne = new Fornecedor($mysql);
$fornecedores = $forne->exibirTodos();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$fornEditar = new Fornecedor($mysql);
	$fornEditar->editar($_POST['idFornecedor']);
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Lista de Fornecedores</title>
</head>


<div id="container">
	<div align="right" ><a class="botao botao-block" href="incluir.php">Incluir Fornecedor</a></div>

	<h3  align="center" class="panel-title">Lista de Fornecedores</h3>		
	
	<form role='form' id='formEditarFornecedor' method='POST' action='detalheFornecedor'>
	
	<table class="table table-striped table-hover table-bordered display responsive" id="tblFornecedor" cellspacing="0" width="100%"> 
		<thead>
			<tr>
				<th align="left">Nome do fornecedor</th>
				<th align="left">cidade</th>
				<th align="left">endereço</th>
				<th align="left">CEP</th>
				<th align="left">UF</th>
				<th align="left">placa</th>
			</tr>
			
		</thead>
		<tbody>
		
			<?php foreach ( $fornecedores as $f) : ?>
				
				<tr>
					<td class="text-center"><a href="detalheFornecedor.php?idFornecedor=<?php echo $f['idFornecedor']; ?>"> <?php echo $f['noFornecedor'];?></a></td>
					<td class="text-center"><?php echo $f['cidadeFornecedor'];?></td>
					<td class="text-center"><?php echo $f['endFornecedor'];?></td>
					<td class="text-center"><?php echo $f['cepFornecedor'];?></td>
					<td class="text-center"><?php echo $f['ufFornecedor'];?></td>
					<td class="text-center"><?php echo $f['placaFornecedor'];?></td>
				</tr>
				
				<tr>
					<p><th align="left">Observação</th></p>
				</tr>	
				<tr>
					<td class="text-center"><?php echo nl2br($f['obsFornecedor']); ?></td>

				</tr>			
				<tr>
					<td align="right" colspan="6">
						<!-- <button type="submit" class="btn btn-primary  fa fa-pencil-square-o btnEditar" onclick="btnEditar();"  value="<?php echo $f['idFornecedor'];?>" >Alterar <input type="hidden" name="idFornecedor" id="idFornecedor" value="<?php echo $f['idFornecedor'];?>"></input> </button> -->
						<a class="botao btn-primary" href="editarFornecedor.php?idFornecedor=<?php echo $f['idFornecedor']; ?>">Alterar</a>
						<a class="botao btn-primary" href="excluirFornecedor.php?idFornecedor=<?php echo $f['idFornecedor']; ?>">Excluir</a>
						<!-- <button name='editarFornecedor' type='submit' class='btn btn-primary  fa fa-pencil-square-o btnEditar'>Alterar</button>  -->
					</td>

				</tr>			
				<tr><td> <br></td> 	</tr>
			<?php endforeach; ?>
			
		</tbody>
	</table>

</div> 
			
</html>

<script type="text/javascript">
  
	function btnEditar() { 
       alert(document.getElementById("idFornecedor").value); 
	}
  	
	/*$("#formEditarFornecedor").on("click", ".btnEditar", function() {
	   var idFornecedor = $(this).closest(".idFornecedor").val();

	   $.ajax({
			type: "POST",
			url: "editarFornecedor.php",
			data: {idFornecedor: idFornecedor},
			success: function( data )
			{
				location.reload();
			}
		});

	});
	
	
	
	jQuery('#form_delete_action').submit(function(){
    var dados = jQuery( this ).serialize();

    jQuery.ajax({
        type: "POST",
        url: "editarFornecedor.php",
        data: dados,
        success: function( data )
        {
            alert($("#idFornecedor").val() + " - "+ $("#noFornecedor").val() + " - "+ $("#CidadeFornecedor").val() + " - "+ $("#CepFornecedor").val());
            location.reload();
        }
    });

    return false;
	
	
});
	*/
</script>