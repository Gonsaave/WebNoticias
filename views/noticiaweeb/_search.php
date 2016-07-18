<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\noticiaweebSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noticiaweeb-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'TituloWEEB') ?>

    <?= $form->field($model, 'CuerpoWEEB') ?>

    <?= $form->field($model, 'CategoriaWEEB') ?>

    <?= $form->field($model, 'EstadoWEEB') ?>

    <?= $form->field($model, 'FechaWEEB') ?>

    <?php // echo $form->field($model, 'IdNoticiaWEEB') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
