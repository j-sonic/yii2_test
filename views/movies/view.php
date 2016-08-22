<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Movies */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Фильмы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'label' => 'Название фильма',
                'value' => $model->name,
            ],
            [
                'label' => 'Дата создания записи',
                'value' => $model->date_create,
            ],
            [
                'label' => 'Дата обновления записи',
                'value' => $model->date_update,
            ],
            [
                'label' => 'Постер фильма',
                'value' => $model->preview,
            ],
            [
                'label' => 'Дата выхода фильма',
                'value' => $model->date,
            ],
            [
                'label' => 'Ид режиссера',
                'value' => $model->director_id,
            ],
        ],
    ]) ?>

</div>
