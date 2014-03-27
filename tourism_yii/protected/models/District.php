<?php

/**
 * This is the model class for table "district".
 *
 * The followings are the available columns in table 'district':
 * @property integer $DISTRICT_ID
 * @property string $DISTRICT_ENG
 * @property string $DISTRICT_NEP
 * @property integer $STATUS
 */
class District extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'district';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('STATUS', 'numerical', 'integerOnly'=>true),
			array('DISTRICT_ENG', 'length', 'max'=>255),
			array('DISTRICT_NEP', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('DISTRICT_ID, DISTRICT_ENG, DISTRICT_NEP, STATUS', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DISTRICT_ID' => 'District',
			'DISTRICT_ENG' => 'District Eng',
			'DISTRICT_NEP' => 'District Nep',
			'STATUS' => 'Status',
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

		$criteria->compare('DISTRICT_ID',$this->DISTRICT_ID);
		$criteria->compare('DISTRICT_ENG',$this->DISTRICT_ENG,true);
		$criteria->compare('DISTRICT_NEP',$this->DISTRICT_NEP,true);
		$criteria->compare('STATUS',$this->STATUS);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return District the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
