<?php

/**
 * This is the model class for table "films".
 *
 * The followings are the available columns in table 'films':
 * @property string $code
 * @property string $title
 * @property integer $did
 * @property string $date_prod
 * @property string $kind
 * @property string $len
 */
class Films extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'films';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTEE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, title, did', 'required'),
			array('did', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>5),
			array('title', 'length', 'max'=>40),
			array('kind', 'length', 'max'=>10),
            //array('kind', 'compare', 'compareAttribute'=>'title','message' => 'WTF?'),
            array('title,kind','valid'),
			array('date_prod, len', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('code, title, did, date_prod, kind, len', 'safe', 'on'=>'search'),
		);
	}

    public function valid($attributes, $params)
    {

        $a=$this->$attributes;
        if ($a != 1) {
            $this->addError('$attributes','Херня какаято!');
        }
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'code' => 'Код фильма',
			'title' => 'Название фильма',
			'did' => 'Дид!',
			'date_prod' => 'Дата выход фильма',
			'kind' => 'Тематика фильма',
			'len' => 'Продолжительность фильма',
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

		$criteria->compare('code',$this->code,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('did',$this->did);
		$criteria->compare('date_prod',$this->date_prod,true);
		$criteria->compare('kind',$this->kind,true);
		$criteria->compare('len',$this->len,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Films the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
