<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Cadastro de Desktop</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class='container'>
		<fieldset>
			<legend><h1>Formulário - Cadastro de Desktop</h1></legend>
			
			<form action="action_dsk.php" method="post" id='form-contato' enctype='multipart/form-data'>
				<div class="row">
					<label for="nomeidentificadopc">Selecionar Foto</label>
			      	<div class="col-md-2">
					    <a href="#" class="thumbnail">
					      <img src="fotos/padrao.jpg" height="190" width="150" id="foto-cliente">
					    </a>
				  	</div>
				  	<input type="file" name="foto" id="foto" value="foto" >
			  	</div>

			    <div class="form-group">
			      <label for="nomeidentificadopc">Nome do equipamento</label>
			      <input type="text" class="form-control" id="nomeidentificadopc" name="nomeidentificadopc" placeholder="Infome o Nome do equipamentop">
			      <span class='msg-erro msg-nomeidentificadopc'></span>
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
			      <label for="processador">Processador</label>
			      <input type="processador" class="form-control" id="processador" maxlength="14" name="processador" placeholder="Informe o Processador">
			      <span class='msg-erro msg-processador'></span>
			    </div>

			    <div class="form-group">
			      <label for="plataforma">Plataforma</label>
			      <input type="plataforma" class="form-control" id="plataforma" maxlength="14" name="plataforma" placeholder="Informe a Plataforma do S.O.">
			      <span class='msg-erro msg-plataforma'></span>
			    </div>

                <div class="form-group">
			      <label for="memoria">Memória</label>
			      <input type="memoria" class="form-control" id="memoria" maxlength="14" name="memoria" placeholder="Informe a Memória">
			      <span class='msg-erro msg-memoria'></span>
			    </div>

			    <div class="form-group">
			      <label for="tipomemoria">Tipo da Memória</label>
			      <input type="tipomemoria" class="form-control" id="tipomemoria" maxlength="14" name="tipomemoria" placeholder="Informe o tipo da Memória">
			      <span class='msg-erro msg-tipomemoria'></span>
			    </div>

			    <div class="form-group">
			      <label for="qtdpentememoria">Quantidade do Pente de Memória</label>
			      <input type="qtdpentememoria" class="form-control" id="qtdpentememoria" maxlength="14" name="qtdpentememoria" placeholder="Informe a qtd de pende de Memória">
			      <span class='msg-erro msg-qtdpentememoria'></span>
			    </div>

			    <div class="form-group">
			      <label for="tamanhohd">Tamanho do HD</label>
			      <input type="tamanhohd" class="form-control" id="tamanhohd" maxlength="14" name="tamanhohd" placeholder="Informe o tamanhod do HD">
			      <span class='msg-erro msg-tamanhohd'></span>
			    </div>

			    <div class="form-group">
			      <label for="tipohd">Tipo do HD</label>
			      <input type="tipohd" class="form-control" id="tipohd" maxlength="14" name="tipohd" placeholder="Informe o tipo do HD">
			      <span class='msg-erro msg-tipohd'></span>
			    </div>

			    <div class="form-group">
			      <label for="so">Sistema Operacional</label>
			      <input type="so" class="form-control" id="so" maxlength="14" name="so" placeholder="Informe o Sistema Operacional">
			      <span class='msg-erro msg-so'></span>
			    </div>

			    <div class="form-group">
			      <label for="softwares">Softwares</label>
			      <input type="softwares" class="form-control" id="softwares" maxlength="14" name="softwares" placeholder="Informe os Softwares Instalado">
			      <span class='msg-erro msg-softwares'></span>
			    </div>

			    <div class="form-group">
			      <label for="manutencao">Tipo de Manutenção</label>
			      <input type="manutencao" class="form-control" id="manutencao" maxlength="14" name="manutencao" placeholder="Informe a manutenção do equipamento">
			      <span class='msg-erro msg-manutencao'></span>
			    </div>										    

			    <!--<div class="form-group">
			      <label for="datacadastro">Data do Cadastro</label>
			      <input type="date" type="date" class="form-control" id="datacadastro" maxlength="10" name="datacadastro">
			      <span class='msg-erro msg-datacadastro'></span>
			    </div>

			    <div class="form-group">
			      <label for="datamanutencao">Data da Manutenção</label>
			      <input type="date" type="date" class="form-control" id="datamanutencao" maxlength="10" name="datamanutencao">
			      <span class='msg-erro msg-datamanutencao'></span>
			    </div>!-->

			    <div class="form-group">
			      <label for="informacoes">Informações</label>
			      <input type="informacoes" class="form-control" id="informacoes" maxlength="14" name="informacoes" placeholder="Informemações necessárias">
			      <span class='msg-erro msg-informacoes'></span>
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