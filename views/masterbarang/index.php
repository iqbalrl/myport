<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MasterbarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Masterbarangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masterbarang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Masterbarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idBarang',
            'namaBarang',
            'jumlahStock',
            'hargaSatuan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
