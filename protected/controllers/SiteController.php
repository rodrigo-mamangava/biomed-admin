<?php

class SiteController extends Controller
{
	public $layout = 'page-home';
	
	public function actionEmpresa()
	{
		$this->render('empresa');
	}

	public function actionEventos()
	{
		$this->render('eventos');
	}

	public function actionFaleConosco()
	{
		$this->render('faleConosco');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionProduto($produto)
	{
		print_r($produto);
		$this->render('produto');
	}

	public function actionSuporte()
	{
		$this->render('suporte');
	}

	public function actionTrabalheConosco()
	{
		$this->render('trabalheConosco');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}