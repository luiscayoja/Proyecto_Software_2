<?php

/**
 * This is the model class for table "tbl_asistencia".
 *
 * The followings are the available columns in table 'tbl_asistencia':
 * @property integer $id
 * @property string $fecha
 * @property string $hora_i
 * @property string $hora_s
 * @property string $observaciones
 * @property integer $id_emp
 *
 * The followings are the available model relations:
 * @property Empleadoo $idEmp
 */
class Asistencia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_asistencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_emp', 'numerical', 'integerOnly'=>true),
			array('fecha, hora_i, hora_s, observaciones', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha, hora_i, hora_s, observaciones, id_emp', 'safe', 'on'=>'search'),
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
			'idEmp' => array(self::BELONGS_TO, 'Empleadoo', 'id_emp'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha' => 'Fecha',
			'hora_i' => 'Hora Inicio',
			'hora_s' => 'Hora Salida',
			'observaciones' => 'Observaciones',
			'id_emp' => 'Empleado',
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
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora_i',$this->hora_i,true);
		$criteria->compare('hora_s',$this->hora_s,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('id_emp',$this->id_emp);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Asistencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
