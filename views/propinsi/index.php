<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PropinsiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Propinsis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propinsi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Propinsi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nm_pro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
