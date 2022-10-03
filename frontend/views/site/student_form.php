<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Student Form';
?>

<?php if (Yii::$app->session->hasFlash('studentFormSubmitted')): ?>
<div class="row">
   <div class="col-lg-5">
       <div class="panel panel-default">
           <div class="panel-heading">Message Sent</div>
           <div class="panel-body">
                <table class="table">
                    <tr>
                        <th class="row">First Name</th>
                        <td><?=$model->vFirstName?></td>
                    </tr>
                    <tr>
                        <th class="row">Last Name</th>
                        <td><?=$model->vLastName?></td>
                    </tr>
                    <tr>
                        <th class="row">Email</th>
                        <td><?=$model->vEmail?></td>
                    </tr>
                    <tr>
                        <th class="row">DOB</th>
                        <td><?=$model->dDOB?></td>
                    </tr>
                    <tr>
                        <th class="row">School</th>
                        <td><?=$model->vSchool?></td>
                    </tr>
                    <tr>
                        <th class="row">Grade</th>
                        <td><?=$model->vGrade?></td>
                    </tr>
                    <tr>
                        <th class="row">Country</th>
                        <td><?=$model->vCountry?></td>
                    </tr>
                    <tr>
                        <th class="row">State</th>
                        <td><?=$model->vState?></td>
                    </tr>
                    <tr>
                        <th class="row">City</th>
                        <td><?=$model->vCity?></td>
                    </tr>
                    <tr>
                        <th class="row">Profile Picture</th>
                        <td><img src="<?=$model->vImagePath?>" /></td>
                    </tr>
                </table>
                <?= print_r($model->vImagePath);?>
           </div>
       </div>
       <div class="alert alert-success">
           Thank you for contacting us. We will respond to you as soon as possible.
       </div>
   </div>
</div>

<?php else: ?>

<div class="row">
<?php $form = ActiveForm::begin(['id' => 'student_registration', 'options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <!-- <label class="form-label" for="firstname">First name</label> -->
                <?= $form->field($model, 'vFirstName') ?>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <!-- <label class="form-label" for="lastname">Last name</label> -->
                <!-- <input type="text" id="lastname" name="lastname" class="form-control" /> -->
                <?= $form->field($model, 'vLastName') ?>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="form-group">
            <!-- <label class="form-label" for="email">Email address</label> -->
            <!-- <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder=""> -->
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            <?= $form->field($model, 'vEmail') ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-group">
                <!-- <label class="form-label" for="password">Password</label> -->
                <!-- <input type="password" class="form-control" id="password" name="password" placeholder=""> -->
                <?= $form->field($model, 'vPassword')->passwordInput(); ?>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <!-- <label class="form-label" for="dob">Date of Birth</label> -->
                <!-- <input type="date" class="form-control" id="dob" name="dob" placeholder=""> -->
                <?= $form->field($model, 'dDOB')->input('date'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-lg-10">
            <div class="form-group">
                <!-- <label class="form-label" for="school">School</label> -->
                <!-- <input type="text" class="form-control" id="school" name="school" aria-describedby="emailHelp" placeholder=""> -->
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                <?= $form->field($model, 'vSchool') ?>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <!-- <label class="form-label" for="grade">Grade</label> -->
                <!-- <input type="text" class="form-control" id="grade" name="grade" aria-describedby="emailHelp" placeholder=""> -->
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                <?= $form->field($model, 'vGrade') ?>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <!-- <div class="dropdown">
                <select class="form-select" id="country" name="country" aria-label="Default select example">
                    <option selected value="">Select Country</option>
                    <option value="india">India</option>
                    <option value="us">US</option>
                    <option value="other">Other</option>
                </select>
                <label for="country" class="error"></label>
            </div> -->
            <?php $items = array(
                'india' => 'India',
                'us' => 'US',
                'other' => 'Other',
            ); ?>
            <?= $form->field($model, 'vCountry') -> dropDownList(
                $items,           // Flat array ('id'=>'label')
                ['prompt'=>'Select Country']    // options
            );?>
        </div>
        <div class="col">
            <!-- <div class="dropdown">
                <select class="form-select" id="state" name="state" aria-label="Default select example">
                    <option selected value="">Select State</option>
                    <option value="state_a">State A</option>
                    <option value="state_b">State B</option>
                    <option value="state_c">State C</option>
                    <option value="state_d">State D</option>
                    <option value="state_e">State E</option>
                </select>
                <label for="state" class="error"></label>
            </div> -->
            <?php $items = array(
                'state_a' => 'State A',
                'state_b' => 'State B',
                'state_c' => 'State C',
                'state_d' => 'State D',
                'state_e' => 'State E',
            ); ?>
            <?= $form->field($model, 'vState') -> dropDownList(
                $items,           // Flat array ('id'=>'label')
                ['prompt'=>'Select State']    // options
            );?>
        </div>
        <div class="col">
            <!-- <div class="dropdown">
                <select class="form-select" id="city" name="city" aria-label="Default select example">
                    <option selected value="">Select City</option>
                    <option value="city_a">City A</option>
                    <option value="city_b">City B</option>
                    <option value="city_c">City C</option>
                    <option value="city_d">City D</option>
                    <option value="city_e">City E</option>
                </select>
            </div> -->
            <?php $items = array(
                'city_a' => 'City A',
                'city_b' => 'City B',
                'city_c' => 'City C',
                'city_d' => 'City D',
                'city_e' => 'City E',
            ); ?>
            <?= $form->field($model, 'vCity') -> dropDownList(
                $items,           // Flat array ('id'=>'label')
                ['prompt'=>'Select City']    // options
            );?>
        </div>
    </div>
    <div class="row-mb-4">
        <div class="form-group">
            <?= $form->field($model, 'bProfile')->input('file'); ?>
        </div>
    </div>
    <?= $form->field($model, 'eStatus')->hiddenInput(['value' => 'Active'])->label(false); ?>
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                   </div>
<?php ActiveForm::end(); ?>

<?php endif; ?>