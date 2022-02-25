<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Akun */

$this->title = Yii::t('app', 'Update Akun: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Akuns'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= Html::encode($this->title) ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="content">

    <div class="card">
        <div class="card-body">
            <div class="akun-update">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</section>