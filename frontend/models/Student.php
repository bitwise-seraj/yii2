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
            [['vFirstName', 'vLastName', 'vEmail', 'vMobile', 'vPassword', 'dDOB', 'vSchool', 'vGrade', 'vCountry', 'vState', 'vCity', 'vParentName', 'vParentEmail', 'vParentMobile', 'eStatus'], 'required'],
            [['vMobile', 'vParentMobile'], 'number', 'min' => 10],
            [['dDOB'], 'safe'],
            [['eStatus'], 'string'],
            [['vFirstName', 'vLastName', 'vEmail', 'vGrade', 'vCountry', 'vState', 'vCity'], 'string', 'max' => 64],
            [['vPassword', 'vSchool'], 'string', 'max' => 128],
            // [['bProfile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
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
            'vMobile' => 'Mobile',
            'vPassword' => 'Password',
            'dDOB' => 'DOB',
            'vSchool' => 'School',
            'vGrade' => 'Grade',
            'vCountry' => 'Country',
            'vState' => 'State',
            'vCity' => 'City',
            'vParentName' => 'Parent Name',
            'vParentEmail' => 'Parent Email',
            'vParentMobile' => 'Parent Mobile',
            'bProfile' => 'Profile Picture',
            'vImagePath' => 'Image Path',
            'eStatus' => 'Status',
        ];
    }

    public function upload()
    {
        $file = \yii\web\UploadedFile::getInstance($this, 'bProfile');
        $imagename = $file->fullPath;

        $this->vImagePath = '/uploads/images/' . md5(time()) . $imagename;
        // print_r($file);exit;
        return $file->saveAs(Yii::getAlias('@webroot') . $this->vImagePath);
    }
    
    static public function getStudents()
    {
        return Student::find()
            ->orderBy('iStudent DESC')
            ->limit(100)
            ->all();
    }
}
