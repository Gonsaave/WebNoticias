<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\noticiaweeb */

$this->title = 'Create Noticiaweeb';
$this->params['breadcrumbs'][] = ['label' => 'Noticiaweebs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticiaweeb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
