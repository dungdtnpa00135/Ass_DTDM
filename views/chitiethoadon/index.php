<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chitiethoadons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitiethoadon-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Chitiethoadon', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_cthd',
            'id_hd',
            'id_sp',
            'soluong',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
