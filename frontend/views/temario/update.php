<?php

use yii\helpers\Html;


?>
<div class="temario-update">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Actualizar Tema</h3>
    </div>
      <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
