<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KokabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kokabs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kokab-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kokab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kokab.pro.nm_pro',
            'kokab.nm_kokab',
            'nm_kecamatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
