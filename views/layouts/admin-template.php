<?php

use app\assets\AdminLteAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AdminLteAsset::register($this);
$this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title ?? 'Login') ?> | <?= Yii::$app->params['APP_NAME'] ?></title>
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>

    <script nonce="675c781e-5d2c-4135-a04b-3f8513078814">
        (function(w, d) {
            ! function(a, e, t, r, z) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
                    deferred: []
                };
                var s = e.getElementsByTagName("title")[0];
                s && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.dataLayer = a.dataLayer || [], a.zaraz.track = (e, t) => {
                    for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
                }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
                    a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
                }, a.dataLayer.push({
                    "zaraz.start": (new Date).getTime()
                }), a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r);
                    z.defer = !0, z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
                }))
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="<?= Url::toRoute('admin/dashboard') ?>" class="brand-link">
                <img src="<?= Url::to("/vendor/adminlte/dist/img/AdminLTELogo.png") ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?=Yii::$app->params['APP_NAME']?></span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= Url::to("/vendor/adminlte/dist/img/user2-160x160.jpg") ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?=Yii::$app->user->identity->nama?></a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= Url::toRoute("/admin/dashboard") ?>" class="nav-link <?= $this->context->route === 'admin/dashboard/index' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= Url::toRoute("/admin/accounts") ?>" class="nav-link <?= $this->context->route === 'admin/accounts/index' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Accounts
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= Url::toRoute("/admin/buku") ?>" class="nav-link <?= $this->context->route === 'admin/buku/index' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Buku
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= Url::toRoute("/admin/peminjaman") ?>" class="nav-link <?= $this->context->route === 'admin/peminjaman/index' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Peminjaman
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= Url::toRoute("/admin/pengembalian") ?>" class="nav-link <?= $this->context->route === 'admin/pengembalian/index' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Pengembalian
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= Url::toRoute("/auth/logout") ?>" class="nav-link">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">

            <?= $content ?>

        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>