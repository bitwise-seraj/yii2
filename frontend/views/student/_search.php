<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\StudentSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'iStudent') ?>

    <?= $form->field($model, 'vFirstName') ?>

    <?= $form->field($model, 'vLastName') ?>

    <?= $form->field($model, 'vEmail') ?>

    <?= $form->field($model, 'vMobile') ?>

    <?php // echo $form->field($model, 'vPassword') ?>

    <?php // echo $form->field($model, 'dDOB') ?>

    <?php // echo $form->field($model, 'vSchool') ?>

    <?php // echo $form->field($model, 'vGrade') ?>

    <?php // echo $form->field($model, 'vCountry') ?>

    <?php // echo $form->field($model, 'vState') ?>

    <?php // echo $form->field($model, 'vCity') ?>

    <?php // echo $form->field($model, 'vParentName') ?>

    <?php // echo $form->field($model, 'vParentEmail') ?>

    <?php // echo $form->field($model, 'vParentMobile') ?>

    <?php // echo $form->field($model, 'bProfile') ?>

    <?php // echo $form->field($model, 'vImagePath') ?>

    <?php // echo $form->field($model, 'eStatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
