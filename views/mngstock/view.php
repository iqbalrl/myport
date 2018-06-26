<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mngstock */

$this->title = $model->idBarang;
$this->params['breadcrumbs'][] = ['label' => 'Mngstocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mngstock-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idBarang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idBarang], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idBarang',
            'namaBarang',
            'jumlahStock',
        ],
    ]) ?>

</div>
