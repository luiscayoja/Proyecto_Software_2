<?php

/**
 * This is the model class for table "tbl_empleadoo".
 *
 * The followings are the available columns in table 'tbl_empleadoo':
 * @property integer $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $sexo
 * @property string $telefono
 * @property integer $id_cargo
 * @property integer $id_area
 *
 * The followings are the available model relations:
 * @property Asistencia[] $asistencias
 * @property Cargo $idCargo
 * @property Area $idArea
 */
class Empleadoo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_empleadoo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, apellidos, id_cargo, id_area', 'required'),
			array('id_cargo, id_area', 'numerical', 'integerOnly'=>true),
			array('nombres, apellidos, telefono', 'length', 'max'=>50),
			array('sexo', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombres, apellidos, sexo, telefono, id_cargo, id_area', 'safe', 'on'=>'search'),
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
			'asistencias' => array(self::HAS_MANY, 'Asistencia', 'id_emp'),
			'idCargo' => array(self::BELONGS_TO, 'Cargo', 'id_cargo'),
			'idArea' => array(self::BELONGS_TO, 'Area', 'id_area'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'sexo' => 'Sexo',
			'telefono' => 'Telefono',
			'id_cargo' => 'Cargo',
			'id_area' => 'Area',
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
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('id_cargo',$this->id_cargo);
		$criteria->compare('id_area',$this->id_area);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function tolist(){
		$model = self::model()->findAll();
		return CHtml::listData($model,'id','nombres');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empleadoo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
