<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MoviesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name')->label('Название фильма') ?>

    <?= $form->field($model, 'date_create')->label('Дата создания записи') ?>

    <?= $form->field($model, 'date_update')->label('Дата обновления записи') ?>

    <?= $form->field($model, 'preview')->label('Постер фильма') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'director_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
