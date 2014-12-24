<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Vincent Gabriel <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Resumo geral</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Gerenciar páginas<b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
  
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Empresa</a>
                                    </li>
<!--                                     <li class="divider"></li> -->
                                    <li>
                                        <a href="#">Suporte</a>
                                    </li>
                                    <li>
                                        <a href="#">Eventos</a>
                                    </li>
                                    <li>
                                        <a href="#">Fale conosco</a>
                                    </li>
                                    <li>
                                        <a href="#">Trabalhe conosco</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Configurações<i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">SEO</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Usuários</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <?php echo CHtml::link('Exames',array('exame/index')); ?>
                        </li>
                        <li >
                            <?php echo CHtml::link('Equipamentos',array('exame/index')); ?>
                        </li>
                        <li>
                            <?php echo CHtml::link('Acessórios',array('exame/index')); ?>
                        </li>
                        <li>
                            <?php echo CHtml::link('Categorias',array('exame/index')); ?>
                        </li>
                        <li>
                            <?php echo CHtml::link('Modelos',array('exame/index')); ?>
                        </li>                   
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
					
					<!--YII CONTENT -->
						<?php if(isset($this->breadcrumbs)):?>
	
					<div class="container-fluid barra-local">
						<div class="row">
							

							<div class="col-xs-6 migalha">
							<?php $this->widget('zii.widgets.CBreadcrumbs', array(
								'links'=>$this->breadcrumbs,
							)); ?><!-- breadcrumbs -->
								
							</div>	
						
							
						</div>
							
					</div>
					<?php endif?>
					
						<?php echo $content; ?>		
					<div class="clear"></div>
                    
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; MAMANGAVA</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>