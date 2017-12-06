<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = "@bower/backend/";
    public $css = [
         //'bootstrap/css/bootstrap.css',
        'bootstrap/css/bootstrap.min.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
        'plugins/iCheck/flat/blue.css',
        'plugins/morris/morris.css',
        'plugins/iCheck/all.css',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        'plugins/datepicker/datepicker3.css',
        'plugins/daterangepicker/daterangepicker-bs3.css',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'dist/css/jquery.tag-editor.css',
		'plugins/select2/select2.min.css',
    ];
    public $js = [
            'plugins/input-mask/jquery.inputmask.js',
            'plugins/input-mask/jquery.inputmask.date.extensions.js',
            'plugins/input-mask/jquery.inputmask.extensions.js',
            'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
            'plugins/sparkline/jquery.sparkline.min.js',
            'bootstrap/js/bootstrap.min.js',
            'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
            'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
            'plugins/knob/jquery.knob.js',
            'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',
            'plugins/daterangepicker/daterangepicker.js',
            'plugins/datepicker/bootstrap-datepicker.js',
            'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
            'plugins/slimScroll/jquery.slimscroll.min.js',
            'plugins/fastclick/fastclick.min.js',
            'plugins/iCheck/icheck.min.js',
            'dist/js/app.min.js',
            'dist/js/pages/dashboard.js',
            'dist/js/demo.js',
            'dist/js/jquery.caret.min.js',
            'dist/js/jquery.tag-editor.js',  
			'plugins/select2/select2.full.min.js',	
    ];
	public $jsOptions = array(
		'position' => \yii\web\View::POS_HEAD
	);
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
