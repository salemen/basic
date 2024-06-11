<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Organizers $model */

$this->title = 'Create Organizers';
$this->params['breadcrumbs'][] = ['label' => 'Organizers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
