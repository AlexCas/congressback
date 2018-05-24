<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TemarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Temarios');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temario-index">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Temas</h3>
    </div>
      <div class="box-body">
    <p>
        <?= Html::a(Yii::t('app', 'Create Temario'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_programa',
            'tema',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
