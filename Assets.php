<?php/** * @link https://www.humhub.org/ * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG * @license https://www.humhub.com/licences */namespace humhub\modules\staticpage;use yii\web\AssetBundle;class Assets extends AssetBundle {		// If your page needs special css, put the file in 'assets' folder and add it here.    public $css = [        'vaccordionstyle.css',    ];		// If your page needs special jquery, put the file in 'assets' folder and add it here.    public $js = [        'jquery.easing.1.3.js',		'jquery.vaccordion.js',    ];    public function init() {        $this->sourcePath = dirname(__FILE__) . '/assets';        parent::init();    }}