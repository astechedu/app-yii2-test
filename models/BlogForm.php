<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class BlogForm extends Model
{
    public $firstname;
    public $lastname; 
    public $email; 
    public $password;
    public $phone;
    public $city;
    public $country;   

    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['firstname', 'lastname', 'email', 'password', 'phone', 'city', 'country'], 'required'],
            //[['username', 'password'], 'required'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }


}
