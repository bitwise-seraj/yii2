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

<div class="mathquill-embedded-latex mathquill-rendered-math new-calculator-template">
<div class="text-heading" data-text-heading=""><span class="text">Add Square Roots</span></div>
<div class="text-message"> Enter the values = &radic;a + &radic;b</div>
<div class="input-fields-box-vertical">
<div class="input-group">
<div class="prepend-text"><span>‘a’ = </span></div>
    <p><input id="a" class="oInp" data-input="" size="3" type="text"></p>
    <p></p>
</div>
<div class="input-group">
<div class="prepend-text"><span> ‘b’ = </span></div>
<p><input id="b" class="oInp"data-input="" size="3" type="text"></p>
<p></p></div>
</div>
<p><input class="clcbtn" data-clcbtn="" type="button" value="Calculate"></p>
<div class="refresh-icon" data-refresh-icon=""> <img src="https://cdn1.byjus.com/byjusweb/img/reload-grey-icon.svg">
</div>
<div class="output-box-vertical" data-output-box="">
    <div class="output-group">
<div class="prepend-text">Answer = </div>
<p><input id="_ans" class="oInpResult oOutp" data-output="" disabled="disabled" size="3" type="text"> </p>
<p></p></div>
</div>
</div>

<script type="text/javascript" id="WolframAlphaScript485a4d76c09275ffa2315ce0a06c0fa9" src="//www.wolframalpha.com/widget/widget.jsp?id=485a4d76c09275ffa2315ce0a06c0fa9"></script>
<script type="text/javascript" id="WolframAlphaScript664bbe5f2d199ca6a658c86b21a1aaa9" src="//www.wolframalpha.com/widget/widget.jsp?id=664bbe5f2d199ca6a658c86b21a1aaa9"></script>

<style>
.mathquill-rendered-math {
    font-variant: normal;
    font-weight: 400;
    font-style: normal;
    font-size: 115%;
    line-height: 1;
    display: -moz-inline-box;
    display: inline-block;
    width: 100%;
    text-align: center;
    margin-bottom: 50px;
    padding-left: 5px;
    padding-right: 5px;
    box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2), 0 2px 10px 0 rgba(0, 0, 0, 0.19);
}
.mathquill-rendered-math .text-heading {
    font-size: 24px;
    margin-bottom: 10px;
    font-weight: 600;
    padding: 12px;
    width: 100%;
    margin-bottom: 15px;
    box-shadow: 5px 10px 8px 0px whitesmoke;
}
.mathquill-rendered-math * {
    font-size: inherit;
    line-height: inherit;
    display: -moz-inline-box;
    display: inline-block;
    margin: 0;
    padding: 0;
}
.mathquill-rendered-math .text-message {
    color: red;
    display: inline-block;
    margin: 10px;
    width: 100%;
    font-weight: 600;
}
.mathquill-rendered-math .input-fields-box-vertical {
    margin: 5px 0px 15px 0px;
    width: auto;
    display: grid;
}
.mathquill-rendered-math .refresh-icon {
    vertical-align: middle;
}
.mathquill-rendered-math .output-box-vertical {
    width: 100%;
    margin-bottom: 20px;
    display: grid;
}
.mathquill-rendered-math .input-fields-box-vertical .input-group {
    position: relative;
}
.input-group {
    position: relative;
    display: table;
    border-collapse: separate;
}
.prepend-text {
    color: white;
    background: #686868;
    padding: 0px 12px;
    padding-top: 9px;
    padding-bottom: 8px;
    margin-left: 5px;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.oInp, .oOutp {
    padding: 6px;
    text-align: left;
    text-indent: 5px;
    margin-right: 10px;
    margin-left: -6px;
}
.oInp, .oOutp {
    margin: 5px 0px;
    border: 1px solid #888;
    width: 5em;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.mathquill-rendered-math .clcbtn {
    background: linear-gradient(to right, #5C72FF, #8C3FFF);
    color: white;
    padding: 8px 20px;
    border-radius: 4px;
    margin: 10px;
    border: none;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
.mathquill-rendered-math .output-box-vertical .output-group {
    position: relative;
}
</style>


<?php 
$script = <<<JS

$(".clcbtn").on("click", () => {
    let a = $("#a").val();
    let b = $("#b").val();

    let result = Math.sqrt(a) + Math.sqrt(b);
    $("#_ans").val(result.toFixed(3));
})

JS;

$this->registerJs($script);
?>