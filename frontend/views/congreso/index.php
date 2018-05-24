<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CongresoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Congresos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congreso-index">

  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Congresos</h3>
    </div>
      <div class="box-body">

    <p>
        <?= Html::a(Yii::t('app', 'Nuevo Congreso'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'descripcion:ntext',
            'fechainicio',
            'fechafinal',
            //'latitud:ntext',
            //'logitud:ntext',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
