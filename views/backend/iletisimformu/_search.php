<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\iletisimformu\models\DataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'birthday') ?>

    <?= $form->field($model, 'mail') ?>

    <?= $form->field($model, 'tel') ?>

    <?= $form->field($model, 'preference') ?>

    <?php // echo $form->field($model, 'departmant') ?>

    <?php // echo $form->field($model, 'subject') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'message') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
