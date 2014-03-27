<?php

/**
 * This is the model class for table "tourism_firm".
 *
 * The followings are the available columns in table 'tourism_firm':
 * @property integer $TOURISM_FIRM_ID
 * @property integer $FIRM_ID
 * @property string $COM_NAME
 * @property string $COM_ADDRESS
 * @property string $COM_ADDRESS1
 * @property string $COM_ADDRESS2
 * @property integer $PDISTRICT_ID
 * @property integer $COM_PO_BOX
 * @property string $COM_PHONE
 * @property string $COM_FAX
 * @property string $COM_EMAIL
 * @property string $COM_WEBSITE
 * @property double $AUTHORISED_CAPITAL
 * @property double $ISSUED_CAPITAL
 * @property double $PAIDUP_CAPITAL
 * @property double $FIXED_CAPITAL
 * @property double $CURRENT_CAPITAL
 * @property integer $TOTAL_ROOM
 * @property integer $TOTAL_BED
 * @property string $HTYPE_ID
 * @property integer $EMP_MALE
 * @property integer $EMP_FEMALE
 * @property string $REG_DATE
 * @property string $VAT_REGD_NO
 * @property double $SHARE_CAPITAL
 * @property integer $BRANCH_NO
 * @property integer $INSIDE_NEPAL
 * @property integer $OUTSIDE_NEPAL
 * @property integer $PRO_OFFICER
 * @property integer $PRO_TRK_OFFICER
 * @property integer $PRO_ADMIN
 * @property integer $PRO_ACCOUNTANT
 * @property integer $PRO_OTHER
 * @property integer $REGISTERED
 * @property integer $IS_EXPIRED
 * @property string $REG_NO
 * @property string $ENTRY_DATE
 * @property string $VALID_UPTO
 * @property integer $CREATED_BY
 * @property string $CREATED_ON
 * @property integer $UPDATED_BY
 * @property string $UPDATED_ON
 * @property string $IP
 * @property integer $CATEGORY_ID
 */
class TourismFirm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tourism_firm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COM_NAME, COM_ADDRESS, PDISTRICT_ID, CREATED_BY, CREATED_ON', 'required'),
			array('FIRM_ID, PDISTRICT_ID, COM_PO_BOX, TOTAL_ROOM, TOTAL_BED, EMP_MALE, EMP_FEMALE, BRANCH_NO, INSIDE_NEPAL, OUTSIDE_NEPAL, PRO_OFFICER, PRO_TRK_OFFICER, PRO_ADMIN, PRO_ACCOUNTANT, PRO_OTHER, REGISTERED, IS_EXPIRED, CREATED_BY, UPDATED_BY, CATEGORY_ID', 'numerical', 'integerOnly'=>true),
			array('AUTHORISED_CAPITAL, ISSUED_CAPITAL, PAIDUP_CAPITAL, FIXED_CAPITAL, CURRENT_CAPITAL, SHARE_CAPITAL', 'numerical'),
			array('COM_NAME, COM_EMAIL, COM_WEBSITE, REG_NO', 'length', 'max'=>100),
			array('COM_ADDRESS, COM_ADDRESS1, COM_ADDRESS2', 'length', 'max'=>200),
			array('COM_PHONE, COM_FAX, IP', 'length', 'max'=>30),
			array('HTYPE_ID, REG_DATE, VAT_REGD_NO, ENTRY_DATE, VALID_UPTO, UPDATED_ON', 'safe'),
                        array('COM_EMAIL', 'email'),
                        array('COM_WEBSITE', 'url'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TOURISM_FIRM_ID, FIRM_ID, COM_NAME, COM_ADDRESS, COM_ADDRESS1, COM_ADDRESS2, PDISTRICT_ID, COM_PO_BOX, COM_PHONE, COM_FAX, COM_EMAIL, COM_WEBSITE, AUTHORISED_CAPITAL, ISSUED_CAPITAL, PAIDUP_CAPITAL, FIXED_CAPITAL, CURRENT_CAPITAL, TOTAL_ROOM, TOTAL_BED, HTYPE_ID, EMP_MALE, EMP_FEMALE, REG_DATE, VAT_REGD_NO, SHARE_CAPITAL, BRANCH_NO, INSIDE_NEPAL, OUTSIDE_NEPAL, PRO_OFFICER, PRO_TRK_OFFICER, PRO_ADMIN, PRO_ACCOUNTANT, PRO_OTHER, REGISTERED, IS_EXPIRED, REG_NO, ENTRY_DATE, VALID_UPTO, CREATED_BY, CREATED_ON, UPDATED_BY, UPDATED_ON, IP, CATEGORY_ID', 'safe', 'on'=>'search'),
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
			'TOURISM_FIRM_ID' => 'Tourism Firm',
			'FIRM_ID' => 'Firm',
			'COM_NAME' => 'Name of the Agency',
			'COM_ADDRESS' => 'Address',
			'COM_ADDRESS1' => 'Com Address1',
			'COM_ADDRESS2' => 'Com Address2',
			'PDISTRICT_ID' => 'Pdistrict',
			'COM_PO_BOX' => 'P.O. Box Number',
			'COM_PHONE' => 'Phone Number',
			'COM_FAX' => 'Fax',
			'COM_EMAIL' => 'Email',
			'COM_WEBSITE' => 'Website',
			'AUTHORISED_CAPITAL' => 'Authorized Capital',
			'ISSUED_CAPITAL' => 'Issued Capital',
			'PAIDUP_CAPITAL' => 'Paid Up Capital',
			'FIXED_CAPITAL' => 'Fixed Capital',
			'CURRENT_CAPITAL' => 'Current Capital',
			'TOTAL_ROOM' => 'Number of Room',
			'TOTAL_BED' => 'Number of Bed',
			'HTYPE_ID' => 'Hotel Type',
			'EMP_MALE' => 'Emp Male',
			'EMP_FEMALE' => 'Emp Female',
			'REG_DATE' => 'Registration Date',
			'VAT_REGD_NO' => 'Vat Regd No',
			'SHARE_CAPITAL' => 'Share Capital',
			'BRANCH_NO' => 'Branch Number',
			'INSIDE_NEPAL' => 'Inside Nepal',
			'OUTSIDE_NEPAL' => 'Outside Nepal',
			'PRO_OFFICER' => 'Proposed Officer',
			'PRO_TRK_OFFICER' => 'Proposed Trekking Officer',
			'PRO_ADMIN' => 'Proposed Administration Staff',
			'PRO_ACCOUNTANT' => 'Proposed Accountant',
			'PRO_OTHER' => 'Proposed Other Staff',
			'REGISTERED' => 'Registered',
			'IS_EXPIRED' => 'Is Expired',
			'REG_NO' => 'Reg No',
			'ENTRY_DATE' => 'Entry Date',
			'VALID_UPTO' => 'Valid Upto',
			'CREATED_BY' => 'Created By',
			'CREATED_ON' => 'Created On',
			'UPDATED_BY' => 'Updated By',
			'UPDATED_ON' => 'Updated On',
			'IP' => 'IP',
			'CATEGORY_ID' => 'Category',
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

		$criteria->compare('TOURISM_FIRM_ID',$this->TOURISM_FIRM_ID);
		$criteria->compare('FIRM_ID',$this->FIRM_ID);
		$criteria->compare('COM_NAME',$this->COM_NAME,true);
		$criteria->compare('COM_ADDRESS',$this->COM_ADDRESS,true);
		$criteria->compare('COM_ADDRESS1',$this->COM_ADDRESS1,true);
		$criteria->compare('COM_ADDRESS2',$this->COM_ADDRESS2,true);
		$criteria->compare('PDISTRICT_ID',$this->PDISTRICT_ID);
		$criteria->compare('COM_PO_BOX',$this->COM_PO_BOX);
		$criteria->compare('COM_PHONE',$this->COM_PHONE,true);
		$criteria->compare('COM_FAX',$this->COM_FAX,true);
		$criteria->compare('COM_EMAIL',$this->COM_EMAIL,true);
		$criteria->compare('COM_WEBSITE',$this->COM_WEBSITE,true);
		$criteria->compare('AUTHORISED_CAPITAL',$this->AUTHORISED_CAPITAL);
		$criteria->compare('ISSUED_CAPITAL',$this->ISSUED_CAPITAL);
		$criteria->compare('PAIDUP_CAPITAL',$this->PAIDUP_CAPITAL);
		$criteria->compare('FIXED_CAPITAL',$this->FIXED_CAPITAL);
		$criteria->compare('CURRENT_CAPITAL',$this->CURRENT_CAPITAL);
		$criteria->compare('TOTAL_ROOM',$this->TOTAL_ROOM);
		$criteria->compare('TOTAL_BED',$this->TOTAL_BED);
		$criteria->compare('HTYPE_ID',$this->HTYPE_ID,true);
		$criteria->compare('EMP_MALE',$this->EMP_MALE);
		$criteria->compare('EMP_FEMALE',$this->EMP_FEMALE);
		$criteria->compare('REG_DATE',$this->REG_DATE,true);
		$criteria->compare('VAT_REGD_NO',$this->VAT_REGD_NO,true);
		$criteria->compare('SHARE_CAPITAL',$this->SHARE_CAPITAL);
		$criteria->compare('BRANCH_NO',$this->BRANCH_NO);
		$criteria->compare('INSIDE_NEPAL',$this->INSIDE_NEPAL);
		$criteria->compare('OUTSIDE_NEPAL',$this->OUTSIDE_NEPAL);
		$criteria->compare('PRO_OFFICER',$this->PRO_OFFICER);
		$criteria->compare('PRO_TRK_OFFICER',$this->PRO_TRK_OFFICER);
		$criteria->compare('PRO_ADMIN',$this->PRO_ADMIN);
		$criteria->compare('PRO_ACCOUNTANT',$this->PRO_ACCOUNTANT);
		$criteria->compare('PRO_OTHER',$this->PRO_OTHER);
		$criteria->compare('REGISTERED',$this->REGISTERED);
		$criteria->compare('IS_EXPIRED',$this->IS_EXPIRED);
		$criteria->compare('REG_NO',$this->REG_NO,true);
		$criteria->compare('ENTRY_DATE',$this->ENTRY_DATE,true);
		$criteria->compare('VALID_UPTO',$this->VALID_UPTO,true);
		$criteria->compare('CREATED_BY',$this->CREATED_BY);
		$criteria->compare('CREATED_ON',$this->CREATED_ON,true);
		$criteria->compare('UPDATED_BY',$this->UPDATED_BY);
		$criteria->compare('UPDATED_ON',$this->UPDATED_ON,true);
		$criteria->compare('IP',$this->IP,true);
		$criteria->compare('CATEGORY_ID',$this->CATEGORY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TourismFirm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
