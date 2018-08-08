<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbRuangan */

$this->title = 'Update Tb Ruangan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Ruangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-ruangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
