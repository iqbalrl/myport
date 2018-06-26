<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenjualanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjualan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idJual') ?>

    <?= $form->field($model, 'modeJual') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'idBarang') ?>

    <?= $form->field($model, 'jumlahBarang') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
