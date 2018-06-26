<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Propinsi */

$this->title = 'Update Propinsi: ' . $model->id_pro;
$this->params['breadcrumbs'][] = ['label' => 'Propinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pro, 'url' => ['view', 'id' => $model->id_pro]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="propinsi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
