<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

?>
<p class="login-box-msg">Login Admin</p>
<?php $form = ActiveForm::begin([
    // 'fieldConfig' => [
    //     'template' => "{input}\n{error}",
    //     'inputOptions' => ['class' => 'form-control'],
    //     'errorOptions' => ['class' => 'invalid-feedback'],
    // ],
]) ?>
<?= $form->field($login_model, 'username', [
    'template' => "
        <div class=\"input-group mb-3\">
            {input}
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <span class=\"fas fa-user\"></span>
                </div>
            </div>
            {error}
        </div>"
])->textInput([
    'autofocus' => true, 'placeholder' => "Username"
]); ?>
<!-- <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user"></span>
        </div>
    </div> -->

<?= $form->field($login_model, 'password',[
    'template' => "
    <div class=\"input-group mb-3\">
        {input}
        <div class=\"input-group-append\">
            <div class=\"input-group-text\">
                <span class=\"fas fa-lock\"></span>
            </div>
        </div>
        {error}
    </div>"
])->passwordInput(['placeholder' => 'Password']); ?>
<div class="form-group">
    <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block']) ?>
</div>
<?php ActiveForm::end() ?>