<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Название фильма') ?>

    <?= $form->field($model, 'date_create')->textInput()->label('Дата создания записи') ?>

    <?= $form->field($model, 'date_update')->textInput()->label('Дата обновления записи') ?>

    <?= $form->field($model, 'preview')->textarea(['rows' => 6])->label('Постер фильма') ?>

    <?= $form->field($model, 'date')->textInput()->label('Дата выхода фильма') ?>

    <?= $form->field($model, 'director_id')->textInput()->label('Ид режиссера') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
