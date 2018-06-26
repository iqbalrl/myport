<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kokab */

$this->title = 'Create Kokab';
$this->params['breadcrumbs'][] = ['label' => 'Kokabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kokab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
