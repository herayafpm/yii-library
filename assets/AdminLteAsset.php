<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminLteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendor/adminlte/dist/css/adminlte.min.css?v=3.2.0',
        'vendor/adminlte/plugins/fontawesome-free/css/all.min.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
    ];
    public $js = [
        'vendor/adminlte/plugins/jquery/jquery.min.js',
        'vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/adminlte/dist/js/adminlte.min.js?v=3.2.0'
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
