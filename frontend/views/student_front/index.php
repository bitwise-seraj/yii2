<?php
use app\models\StudentLogin;

?>
<?= $this->render('/student/nav')?>

<h1 class="display-4 text-center">Hello <b><?=Yii::$app->session->get('student')['full_name']?>, </b> you're a <br>
<b>
    <?php
    $stdlogin = new StudentLogin();
    echo $stdlogin->isPaid() ? 'Paid' : 'Free'?>
</b> member of out community.
</h1>