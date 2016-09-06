<?php

/**
 * WebloaderAsset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\webuploader;

use yii\web\AssetBundle;

class WebuploaderCustomAsset extends AssetBundle {

    public $sourcePath = '@bower/fex-webuploader/dist';
    public $basePath = '@webroot/assets';
    public $css = ['webuploader.css'];
    public $js = ['webuploader.custom.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
