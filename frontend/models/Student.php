<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "student".
 *
 * @property int $iStudent
 * @property string $vFirstName
 * @property string $vLastName
 * @property string $vEmail
 * @property string $vPassword
 * @property string $dDOB
 * @property string $vSchool
 * @property string $vGrade
 * @property string $vCountry
 * @property string $vState
 * @property string $vCity
 * @property string $eStatus
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vFirstName', 'vLastName', 'vEmail', 'vPassword', 'dDOB', 'vSchool', 'vGrade', 'vCountry', 'vState', 'vCity', 'eStatus'], 'required'],
            [['dDOB'], 'safe'],
            [['eStatus'], 'string'],
            [['vFirstName', 'vLastName', 'vEmail', 'vGrade', 'vCountry', 'vState', 'vCity'], 'string', 'max' => 64],
            [['vPassword', 'vSchool'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iStudent' => 'I Student',
            'vFirstName' => 'First Name',
            'vLastName' => 'Last Name',
            'vEmail' => 'Email',
            'vPassword' => 'Password',
            'dDOB' => 'DOB',
            'vSchool' => 'School',
            'vGrade' => 'Grade',
            'vCountry' => 'Country',
            'vState' => 'State',
            'vCity' => 'City',
            'eStatus' => 'Status',
        ];
    }

}
