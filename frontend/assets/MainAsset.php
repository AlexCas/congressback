<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend/assets';
    public $css = [
        'css/site.css',
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        'bower_components/Ionicons/css/ionicons.min.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
        'bower_components/morris.js/morris.css',
        'bower_components/jvectormap/jquery-jvectormap.css',
        'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'bower_components/bootstrap-daterangepicker/daterangepicker.css',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_editor.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_style.min.css',
        'summer/summernote.css',
    ];
    public $js = [
      'bower_components/bootstrap/dist/js/bootstrap.min.js',
      'bower_components/raphael/raphael.min.js',
      'bower_components/raphael/raphael.min.js',
      'bower_components/morris.js/morris.min.js',
      'bower_components/jquery-sparkline/dist/jquery.sparkline.min.js',
      'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
      'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
      'bower_components/jquery-knob/dist/jquery.knob.min.js',
      'bower_components/moment/min/moment.min.js',
      'bower_components/bootstrap-daterangepicker/daterangepicker.js',
      'bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
      'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
      'bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
      'bower_components/fastclick/lib/fastclick.js',
      'dist/js/adminlte.min.js',
      'dist/js/pages/dashboard.js',
      'dist/js/demo.js',
      'summer/summernote.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];
}
