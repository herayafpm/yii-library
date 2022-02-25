<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Akun');
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= $page_title ?? 'Accounts' ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="content">

    <div class="card">
        <div class="card-body">
            <div class="akun-index">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a(Yii::t('app', 'Create Akun'), ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?php Pjax::begin(); ?>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'username',
                        'nama',
                        'password',
                        'authKey',
                        //'accessToken',
                        [
                            'class' => ActionColumn::className(),
                            'urlCreator' => function ($action, $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'id' => $model->id]);
                            }
                        ],
                    ],
                ]); ?>

                <?php Pjax::end(); ?>

            </div>
        </div>
    </div>

</section>