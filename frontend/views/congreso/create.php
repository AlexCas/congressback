<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Congreso */

$this->title = Yii::t('app', 'Create Congreso');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Congresos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congreso-create">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Nuevo Congreso</h3>
    </div>
      <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
