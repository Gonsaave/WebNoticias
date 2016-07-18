<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\noticiaweeb */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noticiaweeb-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TituloWEEB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CuerpoWEEB')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'CategoriaWEEB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EstadoWEEB')->textInput() ?>

    <?= $form->field($model, 'FechaWEEB')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
