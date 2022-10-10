<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentSearch represents the model behind the search form of `app\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iStudent'], 'integer'],
            [['vFirstName', 'vLastName', 'vEmail', 'vMobile', 'vPassword', 'dDOB', 'vSchool', 'vGrade', 'vCountry', 'vState', 'vCity', 'vParentName', 'vParentEmail', 'vParentMobile', 'bProfile', 'vImagePath', 'eStatus'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Student::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'iStudent' => $this->iStudent,
            'dDOB' => $this->dDOB,
        ]);

        $query->andFilterWhere(['like', 'vFirstName', $this->vFirstName])
            ->andFilterWhere(['like', 'vLastName', $this->vLastName])
            ->andFilterWhere(['like', 'vEmail', $this->vEmail])
            ->andFilterWhere(['like', 'vMobile', $this->vMobile])
            ->andFilterWhere(['like', 'vPassword', $this->vPassword])
            ->andFilterWhere(['like', 'vSchool', $this->vSchool])
            ->andFilterWhere(['like', 'vGrade', $this->vGrade])
            ->andFilterWhere(['like', 'vCountry', $this->vCountry])
            ->andFilterWhere(['like', 'vState', $this->vState])
            ->andFilterWhere(['like', 'vCity', $this->vCity])
            ->andFilterWhere(['like', 'vParentName', $this->vParentName])
            ->andFilterWhere(['like', 'vParentEmail', $this->vParentEmail])
            ->andFilterWhere(['like', 'vParentMobile', $this->vParentMobile])
            ->andFilterWhere(['like', 'bProfile', $this->bProfile])
            ->andFilterWhere(['like', 'vImagePath', $this->vImagePath])
            ->andFilterWhere(['like', 'eStatus', $this->eStatus]);

        return $dataProvider;
    }
}
