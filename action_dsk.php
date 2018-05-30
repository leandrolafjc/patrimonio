<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class='container box-mensagem-crud'>
		<?php 
		require 'conexao.php';

		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();

		// Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		$idpc    = (isset($_POST['idpc'])) ? $_POST['idpc'] : '';
		$nomeidentificadopc  = (isset($_POST['nomeidentificadopc'])) ? $_POST['nomeidentificadopc'] : '';
		$dpto  = (isset($_POST['dpto'])) ? $_POST['dpto'] : '';		
		$localidade = (isset($_POST['localidade'])) ? $_POST['localidade'] : '';
		$responsavel  = (isset($_POST['responsavel'])) ? $_POST['responsavel'] : '';
		$equipamento  = (isset($_POST['equipamento'])) ? $_POST['equipamento'] : '';
		$marca  = (isset($_POST['marca'])) ? $_POST['marca'] : '';
		$modelo  = (isset($_POST['modelo'])) ? $_POST['modelo'] : '';
		$serie  = (isset($_POST['serie'])) ? $_POST['serie'] : '';
		$numativo  = (isset($_POST['numativo'])) ? $_POST['numativo'] : '';		
		$processador  = (isset($_POST['processador'])) ? $_POST['processador'] : '';
		$plataforma  = (isset($_POST['plataforma'])) ? $_POST['plataforma'] : '';
		$memoria  = (isset($_POST['memoria'])) ? $_POST['memoria'] : '';
		$tipomemoria  = (isset($_POST['tipomemoria'])) ? $_POST['tipomemoria'] : '';
		$qtdpentememoria  = (isset($_POST['qtdpentememoria'])) ? $_POST['qtdpentememoria'] : '';
		$tamanhohd  = (isset($_POST['tamanhohd'])) ? $_POST['tamanhohd'] : '';
		$tipohd  = (isset($_POST['tipohd'])) ? $_POST['tipohd'] : '';
		$so  = (isset($_POST['so'])) ? $_POST['so'] : '';
		$softwares  = (isset($_POST['softwares'])) ? $_POST['softwares'] : '';
		$manutencao  = (isset($_POST['manutencao'])) ? $_POST['manutencao'] : '';
		//$datacadastro  = (isset($_POST['datacadastro'])) ? $_POST['datacadastro'] : '';
		//$datamanutencao  = (isset($_POST['datamanutencao'])) ? $_POST['datamanutencao'] : '';
		$informacoes  = (isset($_POST['informacoes'])) ? $_POST['informacoes'] : '';
		$foto  = (isset($_POST['foto'])) ? $_POST['foto'] : '';
		$status  = (isset($_POST['status'])) ? $_POST['status'] : '';
		

		// Valida os dados recebidos
		$mensagem = '';
		if ($acao == 'editar' && $idpc == ''):
		    $mensagem .= '<li>ID do registros desconhecido.</li>';
	    endif;

	    // Se for ação diferente de excluir valida os dados obrigatórios
	    if ($acao != 'excluir'):
			if ($nomeidentificadopc == '' || strlen($nomeidentificadopc) < 3):
				//$mensagem .= '<li>Favor preencher o Nome.</li>';
		    endif;
		

			/*if ($datacadastro == ''): 		
				$mensagem .= '<li>Favor preencher a Data de Cadastro.</li>';
			else:
				$data = explode('/', $datacadastro);
				if (!checkdate($data[1], $data[0], $data[2])):
					$mensagem .= '<li>Formato da Data de Cadastro inválido.</li>';
				endif;
			endif;*/

			if ($status == ''):
			   $mensagem .= '<li>Favor preencher o Status.</li>';
			endif;

			if ($mensagem != ''):
				$mensagem = '<ul>' . $mensagem . '</ul>';
				echo "<div class='alert alert-danger' role='alert'>".$mensagem."</div> ";
				exit;
			endif;

			// Constrói a data no formato ANSI yyyy/mm/dd
			/*$data_temp = explode('/', $datacadastro);
			$data_ansi = $data_temp[2] . '/' . $data_temp[1] . '/' . $data_temp[0];*/
		endif;



		// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'):

			$foto = 'padrao.jpg';
			if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0):  

				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));

			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false):
			       echo "<h1>Extensão Inválida!</h1>";
			       exit;
			    endif;
 
			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto']['tmp_name'])):  
			             
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")):  
			               mkdir("fotos");  
			          endif;  
			  
			          // Monta o caminho de destino com o nome do arquivo  
			          $foto = date('dmY') . '_' . $_FILES['foto']['name'];  
			            
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$foto)):  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          endif;  
			     endif;  
			endif;

			$sql = 'INSERT INTO tabpc (dpto, localidade, responsavel, equipamento, marca, modelo, serie, numativo, nomeidentificadopc,
										processador, plataforma, memoria, tipomemoria, qtdpentememoria, tamanhohd, tipohd, so, softwares,
										manutencao, informacoes, foto, status)
							   VALUES(:dpto, :localidade, :responsavel, :equipamento, :marca, :modelo, :serie, :numativo, :nomeidentificadopc,
										:processador, :plataforma, :memoria, :tipomemoria, :qtdpentememoria, :tamanhohd, :tipohd, :so, 
										:softwares, :manutencao, :informacoes, :foto, :status)';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':dpto', $dpto);                
            $stm->bindValue(':localidade', $localidade);       
            $stm->bindValue(':responsavel', $responsavel);      
            $stm->bindValue(':equipamento', $equipamento);      
            $stm->bindValue(':marca', $marca);            
            $stm->bindValue(':modelo', $modelo);           
            $stm->bindValue(':serie', $serie);            
            $stm->bindValue(':numativo', $numativo);         
            $stm->bindValue(':nomeidentificadopc', $nomeidentificadopc); 
            $stm->bindValue(':processador', $processador);      
            $stm->bindValue(':plataforma', $plataforma);       
            $stm->bindValue(':memoria', $memoria);          
            $stm->bindValue(':tipomemoria', $tipomemoria);      
            $stm->bindValue(':qtdpentememoria', $qtdpentememoria);  
            $stm->bindValue(':tamanhohd', $tamanhohd);        
            $stm->bindValue(':tipohd', $tipohd);           
            $stm->bindValue(':so', $so);               
            $stm->bindValue(':softwares', $softwares);        
            $stm->bindValue(':manutencao', $manutencao);       
            //$stm->bindValue(':datacadastro', $datacadastro);     
            //$stm->bindValue(':datamanutencao', $datamanutencao);   
            $stm->bindValue(':informacoes', $informacoes);      
            $stm->bindValue(':foto', $foto);    		  
            $stm->bindValue(':status', $status);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro inserido com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao inserir registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=index.php'>";
		endif;


		// Verifica se foi solicitada a edição de dados
		if ($acao == 'editar'):

			if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0): 

				// Verifica se a foto é diferente da padrão, se verdadeiro exclui a foto antiga da pasta
				if ($foto_atual <> 'padrao.jpg'):
					unlink("fotos/" . $foto_atual);
				endif;

				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));

			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false):
			       echo "<h1>Extensão Inválida!</h1>";
			       exit;
			    endif;
 
			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto']['tmp_name'])):  
			             
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")):  
			               mkdir("fotos");  
			          endif;  
			  
			          // Monta o caminho de destino com o nome do arquivo  
			          $foto = date('dmY') . '_' . $_FILES['foto']['name'];  
			            
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$foto)):  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          endif;  
			     endif;
			else:

			 	$foto = $foto;

			endif;

			$sql = 'UPDATE tabpc SET dpto=:dpto, localidade=:localidade, responsavel=:responsavel, 
			equipamento=:equipamento, marca=:marca, modelo=:modelo, serie=:serie, numativo=:numativo, nomeidentificadopc=:nomeidentificadopc, processador=:processador, 
			plataforma=:plataforma, memoria=:memoria, tipomemoria=:tipomemoria, qtdpentememoria=:qtdpentememoria, tamanhohd=:tamanhohd, 
			tipohd=:tipohd, so=:so, softwares=:softwares, manutencao=:manutencao, informacoes=:informacoes, foto=:foto, status=:status';
			$sql.= 'WHERE idpc = :idpc';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':idpc', $idpc);	
           	$stm->bindValue(':dpto', $dpto);                
            $stm->bindValue(':localidade', $localidade);       
            $stm->bindValue(':responsavel', $responsavel);      
            $stm->bindValue(':equipamento', $equipamento);      
            $stm->bindValue(':marca', $marca);            
            $stm->bindValue(':modelo', $modelo);           
            $stm->bindValue(':serie', $serie);            
            $stm->bindValue(':numativo', $numativo);
            $stm->bindValue(':nomeidentificadopc', $nomeidentificadopc);				
            $stm->bindValue(':processador', $processador);      
            $stm->bindValue(':plataforma', $plataforma);       
            $stm->bindValue(':memoria', $memoria);          
            $stm->bindValue(':tipomemoria', $tipomemoria);      
            $stm->bindValue(':qtdpentememoria', $qtdpentememoria);  
            $stm->bindValue(':tamanhohd', $tamanhohd);        
            $stm->bindValue(':tipohd', $tipohd);           
            $stm->bindValue(':so', $so);               
            $stm->bindValue(':softwares', $softwares);        
            $stm->bindValue(':manutencao', $manutencao);       
            //$stm->bindValue(':datacadastro', $datacadastro);     
            //$stm->bindValue(':datamanutencao', $datamanutencao);   
            $stm->bindValue(':informacoes', $informacoes);      
            $stm->bindValue(':foto', $foto);    		  
            $stm->bindValue(':status', $status);					
			$retorno = $stm->execute();
			

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro editado com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao editar registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=index.php'>";
		endif;


		// Verifica se foi solicitada a exclusão dos dados
		if ($acao == 'excluir'):

			// Captura o nome da foto para excluir da pasta
			$sql = "SELECT foto FROM tabpc WHERE idpc = :idpc AND foto <> 'padrao.jpg'";
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':idpc', $idpc);
			$stm->execute();
			$patrimoniop7 = $stm->fetch(PDO::FETCH_OBJ);

			if (!empty($patrimoniop7) && file_exists('fotos/'.$patrimoniop7->foto)):
				unlink("fotos/" . $patrimoniop7->foto);
			endif;

			// Exclui o registro do banco de dados
			$sql = 'DELETE FROM tabpc WHERE idpc = :idpc';
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':idpc', $idpc);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro excluído com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao excluir registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=index.php'>";
		endif;
		?>

	</div>
</body>
</html>
