<?php

/**
 * This is the model class for table "Employee".
 *
 * The followings are the available columns in table 'Employee':
 * @property integer $id
 * @property integer $role_id
 * @property string $full_name
 * @property string $email_id
 * @property string $password
 * @property string $contact
 * @property integer $designation_id
 *
 * The followings are the available model relations:
 * @property Attendance[] $attendances
 * @property CVInfo[] $cVInfos
 * @property Designation $designation
 * @property Roles $role
 * @property Leave[] $leaves
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('role_id, full_name, email_id, password, contact, designation_id', 'required'),
			array('role_id, designation_id', 'numerical', 'integerOnly'=>true),
			array('full_name, email_id, password, contact', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
//			array('id, role_id, full_name, email_id, password, contact, designation_id', 'safe', 'on'=>'search'),
			array('id, role_id, full_name, email_id, contact, designation_id', 'safe', 'on'=>'search'),
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
			'attendances' => array(self::HAS_MANY, 'Attendance', 'emp_id'),
			'cVInfos' => array(self::HAS_MANY, 'CVInfo', 'emp_id'),
			'designation' => array(self::BELONGS_TO, 'Designation', 'designation_id'),
			'role' => array(self::BELONGS_TO, 'Roles', 'role_id'),
			'leaves' => array(self::HAS_MANY, 'Leave', 'emp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'role_id' => 'Role',
			'full_name' => 'Full Name',
			'email_id' => 'Email',
			'password' => 'Password',
			'contact' => 'Contact',
			'designation_id' => 'Designation',
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
		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('email_id',$this->email_id,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('designation_id',$this->designation_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
