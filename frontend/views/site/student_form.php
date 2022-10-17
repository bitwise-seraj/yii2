<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Student Form';
?>
<?= $this->render('nav')?>


<?php if (Yii::$app->session->hasFlash('studentFormSubmitted')) : ?>
    <div class="row">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Registration Successfully Submitted!</h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        </div>
    </div>
<?php endif; ?>

<?php //else : ?>

    <div class="row">
        <?php $form = ActiveForm::begin(['id' => 'student_registration', 'options' => ['enctype' => 'multipart/form-data']]); ?>
        <h4 class="card-title mb-4 text-center">Registration Form</h4>
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
            <div class="form-group">
                <?= $form->field($model, 'bProfile')->input('file'); ?>
            </div>
        </div>
        <?= $form->field($model, 'eStatus')->hiddenInput(['value' => 'Active'])->label(false); ?>
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary mt-4', 'name' => 'contact-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
