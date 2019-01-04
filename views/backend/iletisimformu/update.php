<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\iletisimformu\models\Data */

$this->title = 'Update Data: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'mail' => $model->mail, 'tel' => $model->tel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
