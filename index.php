<?php
require 'conexao.php';

// Recebe o termo de pesquisa se existir
$termo = (isset($_GET['termo'])) ? $_GET['termo'] : '';

// Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
if (empty($termo)):

	$conexao = conexao::getInstance();
		$sql = 'SELECT idpc, dpto, localidade, responsavel, equipamento, marca, modelo, serie, numativo, nomeidentificadopc, processador, 
		   plataforma, memoria, tipomemoria, qtdpentememoria, tamanhohd, tipohd, so, softwares, manutencao, datacadastro, foto, status, informacoes, foto, status FROM tabpc';
	$stm = $conexao->prepare($sql);
	$stm->execute();
	$patrimonio = $stm->fetchAll(PDO::FETCH_OBJ);

else:

	// Executa uma consulta baseada no termo de pesquisa passado como parâmetro
	$conexao = conexao::getInstance();
	$sql = 'SELECT idpc, dpto, localidade, responsavel, equipamento, marca, modelo, serie, numativo, nomeidentificadopc, processador, 
       plataforma, memoria, tipomemoria, qtdpentememoria, tamanhohd, tipohd, so, softwares, manutencao, datacadastro, foto, status, informacoes, foto, status FROM tabpc WHERE nomeidentificadopc LIKE :nomeidentificadopc';
	$stm = $conexao->prepare($sql);
	$stm->bindValue(':nomeidentificadopc', $termo.'%');
	//$stm->bindValue(':numativo', $termo.'%');
	$stm->execute();
	$patrimonio = $stm->fetchAll(PDO::FETCH_OBJ);

endif;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Ativos Imobilizados de T.I.</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">  
</head>
<body>
	<div class='container'>
		<fieldset>

			<!-- Cabeçalho da Listagem -->
			<legend><h1>Ativos Imobilizados de T.I.</h1></legend>

			<!-- Formulário de Pesquisa -->
			<form action="" method="get" id='form-contato' class="form-horizontal col-md-10">
				<label class="col-md-2 control-label" for="termo">Pesquisar</label>
				<div class='col-md-7'>
			    	<input type="text" class="form-control" id="termo" name="termo" placeholder="Infome o Nome do Ativo ou Identificação">
				</div>
			    <button type="submit" class="btn btn-primary">Pesquisar</button>
			    <a href='index.php' class="btn btn-primary">Ver Todos</a>
			</form>

			<!-- Link para página de cadastro -->
			<a href='cadastrodsk.php' class="btn btn-success pull-right">Cadastrar Descktop</a>
			<div class='clearfix'></div>
			<a href='cadastrontb.php' class="btn btn-success pull-right">Cadastrar Notebook</a>
			<div class='clearfix'></div>
			<a href='cadastromnt.php' class="btn btn-success pull-right">Cadastrar Monitor</a>
			<div class='clearfix'></div>


			<?php if(!empty($patrimonio)):?>

				<!-- Tabela de Clientes -->
				<table class="table table-striped">
					<tr class='active'>
						<th>Foto</th>
						<th>Nome do equipamento</th>
						<th>Responsavel</th>
						<th>Nº do Ativo</th>
						<th>Data do Cadastro</th>
						<th>Informações</th>
						<th>Status</th>
					</tr>
					<?php foreach($patrimonio as $tabpc):?>
						<tr>
							<td><img src='fotos/<?=$tabpc->foto?>' height='40' width='40'></td>
							<td><?=$tabpc->nomeidentificadopc?></td>
							<td><?=$tabpc->responsavel?></td>
							<td><?=$tabpc->numativo?></td>
							<td><?=$tabpc->datacadastro?></td>
							<td><?=$tabpc->informacoes?></td>
							<td><?=$tabpc->status?></td>
							<td>
								<a href='editar.php?idpc=<?=$tabpc->idpc?>' class="btn btn-primary">Editar</a>
								<a href='javascript:void(0)' class="btn btn-danger link_exclusao" rel="<?=$tabpc->idpc?>">Excluir</a>
							</td>
						</tr>	
					<?php endforeach;?>
				</table>

			<?php else: ?>

				<!-- Mensagem caso não exista clientes ou não encontrado  -->
				<h3 class="text-center text-primary">Não existem equipamentos cadastrados!</h3>
			<?php endif; ?>
		</fieldset>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>