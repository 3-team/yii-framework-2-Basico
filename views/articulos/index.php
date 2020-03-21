<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<?php $form = ActiveForm::begin(['id' => 'articulos-form']); ?>
<?= $form->field($model, 'producto')->textInput(['autofocus' => true]) ?>
<?= $form->field($model, 'cantidad') ?>
<?= $form->field($model, 'precio') ?>
<?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
<?php ActiveForm::end(); ?>