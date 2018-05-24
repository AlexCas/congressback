<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Programa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'hora')->textInput() ?>

    <?= $form->field($model, 'latitud')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'longitud')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_ponente')->textInput() ?>

    <?= $form->field($model, 'id_congreso')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
