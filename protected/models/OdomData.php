<?php

/**
 * This is the model class for table "odom_data".
 *
 * The followings are the available columns in table 'odom_data':
 * @property integer $id
 * @property string $odo_begin
 * @property string $odo_end
 * @property integer $auto
 //* @property string $data_ins
 * @property string $data_upd
 * @property integer $arch
 * @property string $data_vvod
 //* @property string $data_del
 */
class OdomData extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'odom_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('auto', 'numerical', 'integerOnly'=>true),
            array('odo_begin, odo_end, auto, data_vvod','required'),
			array('odo_begin, odo_end, data_vvod', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, odo_begin, odo_end, auto, data_vvod', 'safe', 'on'=>'search'),
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
            'auto_type' =>array(self::BELONGS_TO, 'Auto','id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'odo_begin' => 'Начальные показания ',
			'odo_end' => 'Конечные показания',
			'auto' => 'Объект учета',
//			'data_ins' => 'Data Ins',
//			'data_upd' => 'Data Upd',
//			'arch' => 'Arch',
			'data_vvod' => 'Дата учета',
//			'data_del' => 'Data Del',
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
		$criteria->compare('odo_begin',$this->odo_begin,true);
		$criteria->compare('odo_end',$this->odo_end,true);
		$criteria->compare('auto',$this->auto);
//		$criteria->compare('data_ins',$this->data_ins,true);
//		$criteria->compare('data_upd',$this->data_upd,true);
//		$criteria->compare('arch',$this->arch);
//		$criteria->compare('data_vvod',$this->data_vvod,true);
//		$criteria->compare('data_del',$this->data_del,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OdomData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
