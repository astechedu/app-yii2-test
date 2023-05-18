<?php

/** @var yii\web\View $this */
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>  

    <div class="col-5">
        <?php $form = ActiveForm::begin(); ?> 

        <?= $form->field($model, 'firstname')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'lastname')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'phone')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'city')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'country')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <div class="form-group">
            <div class="offset-lg-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
    </div>

</div>
