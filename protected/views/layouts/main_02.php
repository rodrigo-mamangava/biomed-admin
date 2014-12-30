<!DOCTYPE html>
<html  ng-app="myApp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="pt-br" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/style.css">

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/angular.min.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/controller/mainController.js"></script>


<title>BIOMED HTML</title>
</head>
<body>

	<header class="container">
		<nav class="navbar navbar-default " role="navigation">
		<div ng-controller="menuController">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo Yii::app()->createUrl("site/index")?>">
		      	<img alt="Biomed" class="biomed-logo" >
		      </a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	      
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="<?php echo Yii::app()->createUrl("site/empresa")?>">Empresa</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		          	Produtos		          	
		          </a>
		          
		          <ul class="dropdown-menu dropdown-menu-left menu-padrao" role="menu">					
		            	<div ng-repeat="item in menu" >
			            	<li><a href=<?php echo Yii::app()->getBaseUrl();?>/produto/{{item.url}}>{{item.nome}}</a></li>		            	
		            	</div>		          	
		          </ul>		          
		        </li>
		        <li><a href="<?php echo Yii::app()->createUrl("site/suporte")?>">Suporte</a></li>
		        <li><a href="<?php echo Yii::app()->createUrl("site/eventos")?>">Eventos</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		          	Contato		          	
		          </a>
		          <ul class="dropdown-menu dropdown-menu-left menu-padrao" role="menu">
		            <li><a href="<?php echo Yii::app()->createUrl("site/faleConosco")?>">Fale conosco</a></li>
		            <li><a href="<?php echo Yii::app()->createUrl("site/trabalheConosco")?>">Trabalhe conosco</a></li>
		          </ul>
		        </li>
		        <li>
			        <form class="navbar-form navbar-right" role="search">
				        <div class="input-group form-buscar">
					      <input type="text" class="form-control" placeholder="Faça aqui sua busca">
					      <span class="input-group-btn">
					        <button class="btn btn-default btn-find" type="button"><i class="fa fa-search"></i></button>
					      </span>
					    </div><!-- /input-group -->
				   </form>
		        </li>
		      </ul>	      
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		  </div>
		</nav><!-- /nav -->
		
	</header> <!-- /header -->
	
	
	<?php echo $content; ?>	
	
	
	
	<footer class="container-fluid">
	<div class="container sessao-footer">
		<div class="row">
			<div class="col-sm-3">
				<p class="titulo-footer">Onde nos encotrar</p>
				<p>Av. das Américas, n°500</p>
				<p>Mauris pretium massa augue, quis dapibus erat interdum ac. 
				Fusce blandit, metus eget hendrerit venenatis, dui lectus porta lorem, 
				tempor malesuada ex massa sed erat.</p>
				<p class="titulo-footer">Onde nos encotrar</p>
				<p>Av. das Américas, n°500</p>
				<p>Mauris pretium massa augue, quis dapibus erat interdum ac. 
				Fusce blandit, metus eget hendrerit venenatis, dui lectus porta lorem, 
				tempor malesuada ex massa sed erat.</p>
			</div>
			<div class="col-sm-3">
				<p class="titulo-footer">Onde nos encotrar</p>
				<p>Av. das Américas, n°500</p>
				<p>Mauris pretium massa augue, quis dapibus erat interdum ac. 
				Fusce blandit, metus eget hendrerit venenatis, dui lectus porta lorem, 
				tempor malesuada ex massa sed erat.</p>
			</div>
			<div class="col-sm-3">
				<p class="titulo-footer">Onde nos encotrar</p>
				<p>Av. das Américas, n°500</p>
				<p>Mauris pretium massa augue, quis dapibus erat interdum ac. 
				Fusce blandit, metus eget hendrerit venenatis, dui lectus porta lorem, 
				tempor malesuada ex massa sed erat.</p>
				<p class="titulo-footer">Onde nos encotrar</p>
				<p>Av. das Américas, n°500</p>
				<p>Mauris pretium massa augue, quis dapibus erat interdum ac. 
				Fusce blandit, metus eget hendrerit venenatis, dui lectus porta lorem, 
				tempor malesuada ex massa sed erat.</p>
			</div>
			<div class="col-sm-3">
				<p class="titulo-footer">Onde nos encotrar</p>
				<p>Av. das Américas, n°500</p>
				<p>Mauris pretium massa augue, quis dapibus erat interdum ac. 
				Fusce blandit, metus eget hendrerit venenatis, dui lectus porta lorem, 
				tempor malesuada ex massa sed erat.</p>
			</div>
		
		
		</div>
	
	</div>
		
	</footer>
	<!-- /footer -->


</body>
</html>
	
