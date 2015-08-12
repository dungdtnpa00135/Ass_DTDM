<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Khachhang */

$this->title = 'Update Khachhang: ' . ' ' . $model->id_kh;
$this->params['breadcrumbs'][] = ['label' => 'Khachhangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kh, 'url' => ['view', 'id' => $model->id_kh]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="khachhang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
