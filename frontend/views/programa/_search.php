<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProgramaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'hora') ?>

    <?= $form->field($model, 'latitud') ?>

    <?php // echo $form->field($model, 'longitud') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'id_ponente') ?>

    <?php // echo $form->field($model, 'id_congreso') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
