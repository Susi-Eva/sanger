<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TbSiswa */

$this->title = 'Tambah Siswa';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-siswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
