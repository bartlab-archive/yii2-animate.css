<?php
namespace maybeworks/animatecss;

use \yii\web\AssetBundle;

class AnimateCssAsset extends AssetBundle {
	public $sourcePath = '@bower/animate.css';
	public $css = [
		'animate.min.css',
	];
}
