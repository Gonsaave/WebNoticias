<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\noticiaweebSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Noticiaweebs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticiaweeb-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Noticiaweeb', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TituloWEEB',
            'CuerpoWEEB:ntext',
            'CategoriaWEEB',
            'EstadoWEEB',
            'FechaWEEB',
            // 'IdNoticiaWEEB',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
