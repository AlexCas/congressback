<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Temario */


?>
<div class="temario-create">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Nuevo Tema</h3>
    </div>
      <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
