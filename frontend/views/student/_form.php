<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Student $model */
/** @var yii\widgets\ActiveForm $form */
?>
<?= $this->render('/site/nav')?>

<div class="student-form">

<?php $form = ActiveForm::begin(['id' => 'student_registration', 'options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <?= $form->field($model, 'vFirstName') ?>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <?= $form->field($model, 'vLastName') ?>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="form-group">
                <?= $form->field($model, 'vEmail') ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="form-group">
                <?= $form->field($model, 'vMobile') ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-group">
                    <?= $form->field($model, 'vPassword')->passwordInput(); ?>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <?= $form->field($model, 'dDOB')->input('date'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-10">
                <div class="form-group">
                    <?= $form->field($model, 'vSchool') ?>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <?php $items = array(
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                        '9' => '9',
                        '10' => '10',
                    ); ?>
                    <?= $form->field($model, 'vGrade')->dropDownList(
                        $items,           // Flat array ('id'=>'label')
                        ['prompt' => 'Select Grade']    // options
                    ); ?>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <?php $items = array(
                    'india' => 'India',
                    'us' => 'US',
                    'other' => 'Other',
                ); ?>
                <?= $form->field($model, 'vCountry')->dropDownList(
                    $items,           // Flat array ('id'=>'label')
                    ['prompt' => 'Select Country']    // options
                ); ?>
            </div>
            <div class="col">
                <?php $items = array(
                    'state_a' => 'State A',
                    'state_b' => 'State B',
                    'state_c' => 'State C',
                    'state_d' => 'State D',
                    'state_e' => 'State E',
                ); ?>
                <?= $form->field($model, 'vState')->dropDownList(
                    $items,           // Flat array ('id'=>'label')
                    ['prompt' => 'Select State']    // options
                ); ?>
            </div>
            <div class="col">
                <?php $items = array(
                    'city_a' => 'City A',
                    'city_b' => 'City B',
                    'city_c' => 'City C',
                    'city_d' => 'City D',
                    'city_e' => 'City E',
                ); ?>
                <?= $form->field($model, 'vCity')->dropDownList(
                    $items,           // Flat array ('id'=>'label')
                    ['prompt' => 'Select City']    // options
                ); ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="form-group">
                <?= $form->field($model, 'vParentName'); ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="form-group">
                <?= $form->field($model, 'vParentEmail'); ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="form-group">
                <?= $form->field($model, 'vParentMobile'); ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-group">
                    <?= $form->field($model, 'bProfile')->input('file'); ?>
                </div>
            </div>
            <div class="col">
                <?php $items = array(
                    'free' => 'Free',
                    'paid' => 'Paid',
                ); ?>
                <?= $form->field($model, 'vToken')->dropDownList(
                    $items,           // Flat array ('id'=>'label')
                    ['prompt' => 'Select Plan']    // options
                ); ?>
            </div>
        </div>
        <?= $form->field($model, 'eStatus')->hiddenInput(['value' => 'Active'])->label(false); ?>
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary mt-4', 'name' => 'contact-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
