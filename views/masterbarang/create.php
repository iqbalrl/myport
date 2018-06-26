<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Masterbarang */

$this->title = 'Create Masterbarang';
$this->params['breadcrumbs'][] = ['label' => 'Masterbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masterbarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>