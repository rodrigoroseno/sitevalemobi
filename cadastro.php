<!DOCTYPE html>
<!-- Início do HTML -->
<html lang="pt-br">
  <!-- Início do cabeçalho -->
  <head>
	<!-- Meta Tags Necessárias para o Web Site, como de exemplo: Autour, Descrição, Keyboard, Linguagem -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para efetuar o cadastro das mercadorias no sistema">
    <meta name="author" content="Rodrigo Roseno">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Cadastrar Mercadoria</title>

    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    
  </head>
  <!-- Fim do cabeçalho -->
  
  <!-- Início do corpo -->
  <body role="document">

  <!-- Início das DIVS do Menu -->
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php"><img src="imagens/logooo.fw.png"></a>
            </div>
			<!-- Links Para navegação no Menu -->
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="cadastro.php">Cadastro de Mercadorias</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
	<!-- Fim das DIVS do Menu -->
    
	<!-- Início do Conteúdo -->
    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Cadastrar Mercadorias</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form class="form-horizontal" name="F_Cad_Mercadorias" method="post" action="listaCadastrado.php">
		  
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Código Mercadoria</label>
				<div class="col-sm-10">
				  <input type="text" name="codigo_mercadoria" class="form-control" id="inputEmail3" placeholder="Código da Mercadoria">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
				  <input type="text" name="nome_mercadoria" class="form-control" id="inputEmail3" placeholder="Digite o Nome da Mercadoria">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Tipo</label>
				<div class="col-sm-10">
				  <input type="text" name="tipo_mercadoria" class="form-control" id="inputEmail3" placeholder="Digite o Tipo de Mercadoria">
				</div>
			  </div>
			  
			  
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Quantidade</label>
				<div class="col-sm-10">
				  <input type="text" name="qtd_mercadoria" class="form-control" id="inputEmail3" placeholder="Digite a Quantidade de Mercadoria">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Preço</label>
				<div class="col-sm-10">
				  <input type="text" name="preco_mercadoria" class="form-control" id="inputEmail3" placeholder="Digite o Preço da Mercadoria">
				</div>
			  </div>
			  <br/>	
					  
			  
		    <div class="form-group	">
			 Tipos de Negócio <br/>
			  <select name="tipo_negocio">
				<option value="C">Compra</option>
				<option value="V">Venda</option>
			  </select>
			</div> 
			  
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-info">Cadastrar</button>
				  <button type="reset" class="btn btn-info">Limpar Campos</button>
				  <button class="btn btn-info" action="listaCadastrado.php">ver Mercadorias</button>
				  
				</div>
			  </div>
			</form>
			<br/>
        </div>
    </div>
	<!-- Fim do Conteúdo -->
	
	  <!-- Início do Rodapé -->
      <footer>
        <p class="pull-right"><a href="#">Voltar para o Topo</a></p>
        <p>&copy; CopyRight 2016. Todos os Direitos reservados. &middot; </p>
      </footer>
	  <!-- Fim do Rodapé -->
	  
  </body>
  <!-- Fim do Corpo -->
</html>
<!-- Fim do HTML -->