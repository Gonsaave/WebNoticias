<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\noticiaweeb */

$this->title = 'Update Noticiaweeb: ' . $model->IdNoticiaWEEB;
$this->params['breadcrumbs'][] = ['label' => 'Noticiaweebs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdNoticiaWEEB, 'url' => ['view', 'id' => $model->IdNoticiaWEEB]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="noticiaweeb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
