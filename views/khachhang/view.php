<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Khachhang */

$this->title = $model->id_kh;
$this->params['breadcrumbs'][] = ['label' => 'Khachhangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khachhang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kh], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kh], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kh',
            'ten_kh',
            'sdt',
            'diachi',
            'email:email',
        ],
    ]) ?>

</div>
