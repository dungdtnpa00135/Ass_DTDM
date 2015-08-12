<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chitiethoadon */

$this->title = 'Update Chitiethoadon: ' . ' ' . $model->id_cthd;
$this->params['breadcrumbs'][] = ['label' => 'Chitiethoadons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_cthd, 'url' => ['view', 'id' => $model->id_cthd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chitiethoadon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
