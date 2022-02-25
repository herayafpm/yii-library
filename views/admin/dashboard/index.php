<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?=$page_title ?? 'Dashboard'?></h1>
            </div>
        </div>
    </div>
</section>

<section class="content">

    <div class="card">
        <div class="card-body">
            Selamat Datang <?=Yii::$app->user->identity->nama?>
        </div>
    </div>

</section>