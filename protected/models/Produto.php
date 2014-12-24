<?php

/**
 * This is the model class for table "produto".
 *
 * The followings are the available columns in table 'produto':
 * @property integer $id
 * @property string $nome
 * @property string $resumo
 * @property string $descricao
 * @property string $foto_principal
 * @property integer $id_tipo
 *
 * The followings are the available model relations:
 * @property Modelo[] $modelos
 * @property Tipo $idTipo
 * @property ProdutoCategoria[] $produtoCategorias
 * @property ProdutoExame[] $produtoExames
 * @property Relacao[] $relacaos
 * @property Relacao[] $relacaos1
 */
class Produto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'produto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, resumo, descricao, foto_principal, id_tipo', 'required'),
			array('id_tipo', 'numerical', 'integerOnly'=>true),
			array('nome, resumo, descricao', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome, resumo, descricao, foto_principal, id_tipo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'modelos' => array(self::HAS_MANY, 'Modelo', 'id_produto'),
			'idTipo' => array(self::BELONGS_TO, 'Tipo', 'id_tipo'),
			'produtoCategorias' => array(self::HAS_MANY, 'ProdutoCategoria', 'id_produto'),
			'produtoExames' => array(self::HAS_MANY, 'ProdutoExame', 'id_produto'),
			'relacaos' => array(self::HAS_MANY, 'Relacao', 'id_produto'),
			'relacaos1' => array(self::HAS_MANY, 'Relacao', 'id_produto_relacionado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'resumo' => 'Resumo',
			'descricao' => 'Descricao',
			'foto_principal' => 'Foto Principal',
			'id_tipo' => 'Id Tipo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('resumo',$this->resumo,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('foto_principal',$this->foto_principal,true);
		$criteria->compare('id_tipo',$this->id_tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Produto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
