<?php

/**
 * WebloaderAsset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\webuploader;

use yii\web\AssetBundle;

class WebuploaderAsset extends AssetBundle {

    public $sourcePath = '@bower/fex-webuploader/dist';
    public $basePath = '@webroot/assets';
    public $css = ['webuploader.css'];
    public $js = ['webuploader.js'];

}
