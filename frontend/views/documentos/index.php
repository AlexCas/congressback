<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DocumentosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="documentos-index">

  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Nuevo Documento</h3>
    </div>
      <div class="box-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Nuevo Documento'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'descripcion:ntext',
            'url:url',
            'id_programa',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
