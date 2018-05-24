<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PonentesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ponentes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'especialidad') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'id_congreso') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
