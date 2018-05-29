<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Cadastro de Monitores</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class='container'>
		<fieldset>
			<legend><h1>Formulário - Cadastro de Monitores</h1></legend>
			
			<form action="action_cliente.php" method="post" id='form-contato' enctype='multipart/form-data'>
				<div class="row">
					<label for="nomeidentificado">Selecionar Foto</label>
			      	<div class="col-md-2">
					    <a href="#" class="thumbnail">
					      <img src="fotos/padrao.jpg" height="190" width="150" id="foto">
					    </a>
				  	</div>
				  	<input type="file" name="foto" id="foto" value="foto" >
			  	</div>

			    <div class="form-group">
			      <label for="nomeidentificado">Nome do equipamento</label>
			      <input type="text" class="form-control" id="nomeidentificado" name="nomeidentificado" placeholder="Infome o Nome do equipamento">
			      <span class='msg-erro msg-nomeidentificado'></span>
			    </div>

			    <div class="form-group">
			      <label for="departamento">Departamento</label>
			      <input type="departamento" class="form-control" id="dpto" name="dpto" placeholder="Informe o Departamento">
			      <span class='msg-erro msg-departamento'></span>

			    <div class="form-group">
			      <label for="localidade">Localidade</label>
			      <input type="localidade" class="form-control" id="localidade" maxlength="14" name="localidade" placeholder="Informe a Localidade">
			      <span class='msg-erro msg-localidade'></span>
			    </div>

			    <div class="form-group">
			      <label for="responsavel">Responsavel</label>
			      <input type="responsavel" class="form-control" id="responsavel" maxlength="14" name="responsavel" placeholder="Informe o Responsavel do Equipamento">
			      <span class='msg-erro msg-responsavel'></span>
			    </div>

			    <div class="form-group">
			      <label for="equipamento">Equipamento</label>
			      <input type="equipamento" class="form-control" id="equipamento" maxlength="14" name="equipamento" placeholder="Informe o Equipamento">
			      <span class='msg-erro msg-equipamento'></span>
			    </div>

			    <div class="form-group">
			      <label for="marca">Marca</label>
			      <input type="marca" class="form-control" id="marca" maxlength="14" name="marca" placeholder="Informe a marca do Equipamento">
			      <span class='msg-erro msg-marca'></span>
			    </div>

			    <div class="form-group">
			      <label for="modelo">Modelo</label>
			      <input type="marca" class="form-control" id="modelo" maxlength="14" name="modelo" placeholder="Informe o modelo do Equipamento">
			      <span class='msg-erro msg-marca'></span>
			    </div>

			    <div class="form-group">
			      <label for="serie">Serie</label>
			      <input type="serie" class="form-control" id="serie" maxlength="14" name="serie" placeholder="Informe a Serie do Equipamento">
			      <span class='msg-erro msg-serie'></span>
			    </div>

			    <div class="form-group">
			      <label for="numativo">Nº do Ativo</label>
			      <input type="numativo" class="form-control" id="numativo" maxlength="14" name="numativo" placeholder="Informe o nº do ativo">
			      <span class='msg-erro msg-numativo'></span>
			    </div>

			    <div class="form-group">
			      <label for="polegadas">Polegadas do monitor</label>
			      <input type="polegadas" class="form-control" id="polegadas" maxlength="14" name="polegadas" placeholder="Informe do Monitor (Polegadas) >
			      <span class='msg-erro msg-polegadas'></span>
			    </div>

			    <div class="form-group">
			      <label for="manutencao">Tipo de Manutenção</label>
			      <input type="manutencao" class="form-control" id="manutencao" maxlength="14" name="manutencao" placeholder="Informe a manutenção do equipamento">
			      <span class='msg-erro msg-manutencao'></span>
			    </div>										    

			    <div class="form-group">
			      <label for="datacadastro">Data do Cadastro</label>
			      <input type="date" type="date" class="form-control" id="datacadastro" maxlength="10" name="datacadastro">
			      <span class='msg-erro msg-datacadastro'></span>
			    </div>

			    <div class="form-group">
			      <label for="datamanutencao">Data da Manutenção</label>
			      <input type="date" type="date" class="form-control" id="datamanutencao" maxlength="10" name="datamanutencao">
			      <span class='msg-erro msg-datamanutencao'></span>
			    </div>

			    <div class="form-group">
			      <label for="nomeidentificado">Nome de Identificação</label>
			      <input type="nomeidentificado" class="form-control" id="nomeidentificado" maxlength="14" name="nomeidentificado" placeholder="Informe o nome de identificação">
			      <span class='msg-erro msg-nomeidentificado'></span>
			    </div>

			    <div class="form-group">
			      <label for="status">Status</label>
			      <select class="form-control" name="status" id="status">
				    <option value="">Selecione o Status</option>
				    <option value="Ativo">Ativo</option>
				    <option value="Inativo">Inativo</option>
				  </select>
				  <span class='msg-erro msg-status'></span>
			    </div>

			    <input type="hidden" name="acao" value="incluir">
			    <button type="submit" class="btn btn-primary" id='botao'> 
			      Gravar
			    </button>
			    <a href='index.php' class="btn btn-danger">Cancelar</a>
			</form>
		</fieldset>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>