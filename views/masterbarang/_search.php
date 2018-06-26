<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterbarangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="masterbarang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idBarang') ?>

    <?= $form->field($model, 'namaBarang') ?>

    <?= $form->field($model, 'jumlahStock') ?>

    <?= $form->field($model, 'hargaSatuan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
