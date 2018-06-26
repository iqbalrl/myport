<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mngstock */

$this->title = 'Create Mngstock';
$this->params['breadcrumbs'][] = ['label' => 'Mngstocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mngstock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
