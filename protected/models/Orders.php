<?php

/**
 * This is the model class for table "orders".
 *
 * The followings are the available columns in table 'orders':
 * @property integer $id
 * @property string $price
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $address
 * @property integer $status
 * @property string $order_date
 * @property string $token
 * @property integer $payer_id
 *
 * The followings are the available model relations:
 * @property OrderStatus $status0
 */
class Orders extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Orders the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'orders';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('status, payer_id, user_id, country_id, b_country_id, tmp_product_id', 'numerical', 'integerOnly' => true),
            array('price, first_name, last_name, email, address, b_address, order_date, token, city, b_city, zipcode, b_zipcode, phone_no, b_phone_no, ', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, price, first_name, last_name, email, address, status, order_date, token, payer_id, tmp_product_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'status0' => array(self::BELONGS_TO, 'OrderStatus', 'status'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
            'shippingcountry' => array(self::BELONGS_TO, 'AllCountries', 'country_id'),
            'billingcountry' => array(self::BELONGS_TO, 'AllCountries', 'b_country_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'price' => 'Total Price',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'status' => 'Status',
            'order_date' => 'Order Date',
            'token' => 'Token',
            'payer_id' => 'Payer',
            'user_id' => 'User',
            'address' => 'Shipping Address',
            'country_id' => 'Shipping country',
            'city' => 'Shipping city',
            'zipcode' => 'Shipping zipcode',
            'phone_no' => 'Shipping phone number',
            'b_address' => 'Billing Address',
            'b_country_id' => 'Billing country',
            'b_city' => 'Billing city',
            'b_zipcode' => 'Billing zipcode',
            'b_phone_no' => 'Billing phone number',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('price', $this->price, true);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('order_date', $this->order_date, true);
        $criteria->compare('token', $this->token, true);
        $criteria->compare('payer_id', $this->payer_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}
