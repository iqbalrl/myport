<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penjualan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idJual')->textInput() ?>

    <?= $form->field($model, 'modeJual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'idBarang')->textInput() ?>

    <?= $form->field($model, 'jumlahBarang')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
