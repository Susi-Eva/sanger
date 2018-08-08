<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TbPengajarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Pengajars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-pengajar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Pengajar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'alamat',
            'nomor_hp',
            'email_akun:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
