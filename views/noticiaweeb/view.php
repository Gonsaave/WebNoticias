<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\noticiaweeb */

$this->title = $model->IdNoticiaWEEB;
$this->params['breadcrumbs'][] = ['label' => 'Noticiaweebs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticiaweeb-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdNoticiaWEEB], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdNoticiaWEEB], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TituloWEEB',
            'CuerpoWEEB:ntext',
            'CategoriaWEEB',
            'EstadoWEEB',
            'FechaWEEB',
            'IdNoticiaWEEB',
        ],
    ]) ?>

</div>
