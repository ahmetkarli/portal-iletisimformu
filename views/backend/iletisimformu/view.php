<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\iletisimformu\models\Data */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'mail' => $model->mail, 'tel' => $model->tel], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'mail' => $model->mail, 'tel' => $model->tel], [
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
            'name',
            'birthday',
            'mail',
            'tel',
            'preference',
            'departmant',
            'subject',
            'title',
            'message',
        ],
    ]) ?>

</div>
