<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property integer $customerNumber
 * @property string $customerName
 * @property string $contactLastName
 * @property string $contactFirstName
 * @property string $phone
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $state
 * @property string $postalCode
 * @property string $country
 * @property integer $salesRepEmployeeNumber
 * @property string $creditLimit
 *
 * The followings are the available model relations:
 * @property Employees $salesRepEmployeeNumber0
 * @property Orders[] $orders
 * @property Payments[] $payments
 */
class Customers extends CActiveRecord
{
		
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, city, country', 'required'),
			array('customerNumber, salesRepEmployeeNumber', 'numerical', 'integerOnly'=>true),
			array('customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, country', 'length', 'max'=>50),
			array('postalCode', 'length', 'max'=>15),
			array('creditLimit', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit', 'safe', 'on'=>'search'),
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
			'salesRepEmployeeNumber0' => array(self::BELONGS_TO, 'Employees', 'salesRepEmployeeNumber'),
			'orders' => array(self::HAS_MANY, 'Orders', 'customerNumber'),
			'payments' => array(self::HAS_MANY, 'Payments', 'customerNumber'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'customerNumber' => 'Número do Cliente',
			'customerName' => 'Cliente',
			'contactLastName' => 'Contact Last Name',
			'contactFirstName' => 'Contact First Name',
			'phone' => 'Phone',
			'addressLine1' => 'Address Line1',
			'addressLine2' => 'Address Line2',
			'city' => 'City',
			'state' => 'State',
			'postalCode' => 'Postal Code',
			'country' => 'Country',
			'salesRepEmployeeNumber' => 'Sales Rep Employee Number',
			'creditLimit' => 'Credit Limit',
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

		$criteria->compare('customerNumber',$this->customerNumber);
		$criteria->compare('customerName',$this->customerName,true);
		$criteria->compare('contactLastName',$this->contactLastName,true);
		$criteria->compare('contactFirstName',$this->contactFirstName,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('addressLine1',$this->addressLine1,true);
		$criteria->compare('addressLine2',$this->addressLine2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('postalCode',$this->postalCode,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('salesRepEmployeeNumber',$this->salesRepEmployeeNumber);
		$criteria->compare('creditLimit',$this->creditLimit,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getCustomerName()
	{
		return ucfirst($this->customerName) . "*";
	}
}
