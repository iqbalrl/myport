<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mngstock */

$this->title = 'Update Mngstock: ' . $model->idBarang;
$this->params['breadcrumbs'][] = ['label' => 'Mngstocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idBarang, 'url' => ['view', 'id' => $model->idBarang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mngstock-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
