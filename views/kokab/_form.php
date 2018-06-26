<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kokab */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kokab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pro')->textInput() ?>

    <?= $form->field($model, 'nm_kokab')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
