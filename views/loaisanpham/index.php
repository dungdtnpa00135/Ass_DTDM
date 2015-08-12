<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loaisanphams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaisanpham-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Loaisanpham', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_lsp',
            'ten_loai',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
