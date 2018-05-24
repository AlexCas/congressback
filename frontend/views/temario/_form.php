<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Temario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="temario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_programa')->textInput() ?>

    <?= $form->field($model, 'tema')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
