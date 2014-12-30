<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link href="<?php echo Yii::app()->baseUrl; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->baseUrl; ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->baseUrl; ?>/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->baseUrl; ?>/assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo Yii::app()->baseUrl; ?>/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
                            <li >
                                <?php echo CHtml::link('Resumo geral',array('admin/index')); ?>
                            </li>
                            <li >
                                <?php echo CHtml::link('Gerenciar páginas',array('paginas/index')); ?>
                            </li>
                            <li>
								<?php echo CHtml::link('Configurações',array('configuracoes/index')); ?>
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
                        <li >
                            <?php echo CHtml::link('Exames',array('exame/admin')); ?>
                        </li>                        
                        <li>
                            <?php echo CHtml::link('Categorias',array('categoria/admin')); ?>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl("admin/produto")?>">Produtos</a>
                        </li>
                        <li>
                            <?php echo CHtml::link('Modelos',array('modelo/admin')); ?>
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
        <script src="<?php echo Yii::app()->baseUrl; ?>/vendors/jquery-1.9.1.min.js"></script>
        <script src="<?php echo Yii::app()->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->baseUrl; ?>/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo Yii::app()->baseUrl; ?>/assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>