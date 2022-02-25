<?php

use app\assets\AuthAdminLteAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AuthAdminLteAsset::register($this);
$this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title ?? 'Login') ?> | <?= Yii::$app->params['APP_NAME'] ?></title>
    <link rel='icon' href='<?= Url::to("@web/favicon.ico") ?>'>
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>

<body class="hold-transition login-page">
    <?php $this->beginBody() ?>
    <div class="login-box" id="appVue">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= Url::base() ?>" class="h1"><?= Yii::$app->params['APP_NAME'] ?></a>
            </div>
            <div class="card-body">
                <?= $content ?>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>