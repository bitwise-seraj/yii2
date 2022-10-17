<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class StudentLogin extends Model
{
    public $email;
    public $password;
    public $rememberMe = true;

    private $_user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // email and password are both required
            [['email', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            // ['password', 'validatePassword'],
        ];
    }

    public function login()
    {
        // print_r($_POST);exit;
        if ($this->validate()) {
            return $this->getUser();
        }
        
        return false;
    }

    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = Student::verifyStudent($this->email, $this->password);
            // create a session for student login
            if(!empty($this->_user)){
                Yii::$app->session->set('student', array(
                    'id' => $this->_user->iStudent,
                    'full_name' => $this->_user->vFirstName . ' ' . $this->_user->vLastName,
                    'email' => $this->_user->vEmail,
                    'mobile' => $this->_user->vMobile,
                    'dob' => $this->_user->dDOB,
                    'school' => $this->_user->vSchool,
                    'grade' => $this->_user->vGrade,
                    'country' => $this->_user->vCountry,
                    'state' => $this->_user->vState,
                    'city' => $this->_user->vCity,
                    'parent_name' => $this->_user->vParentName,
                    'parent_email' => $this->_user->vParentEmail,
                    'parent_mobile' => $this->_user->vParentMobile,
                    'profile' => $this->_user->vImagePath,
                    'token' => $this->_user->vToken,
                    'status' => $this->_user->eStatus,
                ));
            }
        }

        return $this->_user;
    }

    public function isPaid(){
        // $free = $this->_user->vEmail . "free";
        $session =  Yii::$app->session->get('student');
        $paid = md5($session['email'] . "paid");
        if($paid === $session['token']) return true;
        else return false;
    }

    public static function isGuest(){
        return empty(Yii::$app->session->get('student'));
        // print_r(Yii::$app->session->get('student'));exit;
    }

    public function logout(){
        Yii::$app->session->remove('student');
        return true;
    }
}
