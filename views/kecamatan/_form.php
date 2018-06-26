<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kecamatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kecamatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pro')->dropDownList(app\models\Propinsi::selectOptions(),['prompt' => ' --- PROVINSI --- ']) ?>

    <?= $form->field($model, 'id_kokab')->dropDownList(app\models\Kokab::selectOptions($model->id_pro),['prompt' => ' --- KOTA / KABUPATEN --- ']) ?>

    <?= $form->field($model, 'nm_kecamatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS
    $(function () {
        $('#kecamatan-id_pro').change(function() {
            $.post("index.php?r=kokab/kokab-with-pro&id_pro="+$(this).val(),function(data){
                $("#kecamatan-id_kokab").html( data );
            });
        });
    });    
JS;
$this->registerJs($script, yii\web\View::POS_END, 'javascriptku');