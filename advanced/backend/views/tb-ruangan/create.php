<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TbRuangan */

$this->title = 'Create Tb Ruangan';
$this->params['breadcrumbs'][] = ['label' => 'Tb Ruangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-ruangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
