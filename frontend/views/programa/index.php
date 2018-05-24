<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProgramaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="programa-index">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Ponentes</h3>
    </div>
      <div class="box-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Programa'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'fecha',
            'hora',
            'latitud:ntext',
            //'longitud:ntext',
            //'descripcion:ntext',
            //'id_ponente',
            //'id_congreso',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
