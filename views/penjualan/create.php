<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Penjualan */

$this->title = 'Create Penjualan';
$this->params['breadcrumbs'][] = ['label' => 'Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php
$script = <<< JS
        $(function () {
        $('#penjualan-idjual').on('click', function (){
            
        });
        });
JS;
$this->registerJs($script, yii\web\View::POS_END, 'my-jscript');