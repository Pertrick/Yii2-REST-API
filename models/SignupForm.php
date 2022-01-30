<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $repeat_password;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username','email', 'password', 'repeat_password'], 'required'],
            [['username'], 'string','min' => 3],
            [['password', 'repeat_password'],'string', 'min'=> 7],
            [['email'], 'email'],
            [['repeat_password'], 'compare', 'compareAttribute' => 'password'],


            
        ];
    }
    

    /**
     * signup
     * This method serves as the inline validation for password.
   */
    public function signup()
    {
        $user = new User();
        if($this->validate()) {
           $user->username = $this->username;
           $user->email = $this->email;
           $user->setPassword($this->password);
           $user->generateAccessToken();
           $user->generateAuthKey();
           $user->save();

           if($user->save()){
               return $user;
           }
           else{
               return \Yii::error('Registration Failed');
           }
        }

        else{
            return \Yii::error('Registration Failed');
        }
    }

    
}
