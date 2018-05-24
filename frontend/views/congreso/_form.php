<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Congreso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="congreso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fechainicio')->textInput() ?>

    <?= $form->field($model, 'fechafinal')->textInput() ?>

    <?= $form->field($model, 'latitud')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'logitud')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
