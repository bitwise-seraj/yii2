<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
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
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
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

}
