<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Student $model */

$this->title = $model->iStudent;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?= $this->render('/site/nav')?>

<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'iStudent' => $model->iStudent], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'iStudent' => $model->iStudent], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'iStudent',
            'vFirstName',
            'vLastName',
            'vEmail:email',
            'vMobile',
            'vPassword',
            'dDOB',
            'vSchool',
            'vGrade',
            'vCountry',
            'vState',
            'vCity',
            'vParentName',
            'vParentEmail:email',
            'vParentMobile',
            'bProfile' => [
                'attribute' => 'Profile Picture',
                'value' => '../../' . $model->vImagePath,
                'format' => ['image', ['class' => 'col-md-6']],
            ],
            'vImagePath',
            'vToken',
            'eStatus',
        ],
    ]) ?>

</div>
