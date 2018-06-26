<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MngstockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stok Gudang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mngstock-index">

    <h1><?= 'Data Stok' ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idBarang',
            'namaBarang',
            'jumlahStock',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
