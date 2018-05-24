<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Documentos */


?>
<div class="documentos-create">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Nuevo Documento</h3>
    </div>
      <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
