<?php

/**
 * This is the model class for table "tour".
 *
 * The followings are the available columns in table 'tour':
 * @property integer $id
 * @property string $name
 * @property string $location
 * @property string $description
 * @property string $img
 * @property double $price
 * @property integer $person
 * @property integer $promotion_id
 *
 * The followings are the available model relations:
 * @property Booking[] $bookings
 * @property Promotion $promotion
 */
class Tour extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tour';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, location, description, img, price, person, promotion_id', 'required'),
			array('person, promotion_id', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('name, location, img', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, location, description, img, price, person, promotion_id', 'safe', 'on'=>'search'),
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
			'bookings' => array(self::HAS_MANY, 'Booking', 'tour_id'),
			'promotion' => array(self::BELONGS_TO, 'Promotion', 'promotion_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'location' => 'Location',
			'description' => 'Description',
			'img' => 'Img',
			'price' => 'Price',
			'person' => 'Person',
			'promotion_id' => 'Promotion',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('person',$this->person);
		$criteria->compare('promotion_id',$this->promotion_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tour the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
