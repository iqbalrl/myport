<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kokab */

$this->title = 'Update Kokab: ' . $model->id_kokab;
$this->params['breadcrumbs'][] = ['label' => 'Kokabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kokab, 'url' => ['view', 'id' => $model->id_kokab]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kokab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
