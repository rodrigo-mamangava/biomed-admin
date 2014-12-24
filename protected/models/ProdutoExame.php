<?php

/**
 * This is the model class for table "produto_exame".
 *
 * The followings are the available columns in table 'produto_exame':
 * @property integer $id
 * @property integer $id_produto
 * @property integer $id_exame
 *
 * The followings are the available model relations:
 * @property Produto $idProduto
 * @property Exame $idExame
 */
class ProdutoExame extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'produto_exame';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_produto, id_exame', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_produto, id_exame', 'safe', 'on'=>'search'),
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
			'idProduto' => array(self::BELONGS_TO, 'Produto', 'id_produto'),
			'idExame' => array(self::BELONGS_TO, 'Exame', 'id_exame'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_produto' => 'Id Produto',
			'id_exame' => 'Id Exame',
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
		$criteria->compare('id_produto',$this->id_produto);
		$criteria->compare('id_exame',$this->id_exame);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProdutoExame the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
