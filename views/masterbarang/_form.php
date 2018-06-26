<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Masterbarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="masterbarang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idBarang')->textInput() ?>

    <?= $form->field($model, 'namaBarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlahStock')->textInput() ?>

    <?= $form->field($model, 'hargaSatuan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
