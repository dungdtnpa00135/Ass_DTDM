<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Loaisanpham */

$this->title = 'Update Loaisanpham: ' . ' ' . $model->id_lsp;
$this->params['breadcrumbs'][] = ['label' => 'Loaisanphams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lsp, 'url' => ['view', 'id' => $model->id_lsp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loaisanpham-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
