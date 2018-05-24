<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Documentos */

?>
<div class="documentos-update">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Actualizar Documento</h3>
    </div>
      <div class="box-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
