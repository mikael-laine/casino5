<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use kartik\markdown\Markdown;
use frontend\widgets\Banner;
use frontend\widgets\SideCategory;
use frontend\widgets\SideTop5;

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;

$guideImage = cloudinary_url($model->image_url, array("width" => 744, "height" => 347, "crop" => "fill"));
?>

<?= Banner::widget() ?>
<div class="top"></div>
<section id="guide">
	<div class="container">
	    <div class="main col-md-8">
	       <img src="<?= $guideImage ?>" class="img-responsive top-gs" alt="top-image">

            <span class="post-date">On <?= Yii::$app->formatter->asDate($model->created_at , 'long'); ?>  </span>
            <h3 class="gs-3"><?= $model->title ?></h3>

            <?= Markdown::convert($model->description) ?>
	        
	    </div>

	    <div class="sidebar col-md-4">
	 	<?= SideTop5::widget(['num'=>5]) ?>
	    <?= SideCategory::widget(['num'=>6]) ?>

	    <div class="side-wrapp-1">
	        <div class="side-letter">
	            <h3 class="newsletter">NEWSLETTER</h3>
	            <form action="#" method="POST">
	                <input type="text" class="form-control" id="side" placeholder="Type your email address ">
	                <div class="col-md-12" id="more">
	                <button type="button" class="btn btn-primary" id="news-sub">SIGN UP NOW</button>
	                </div>
	            </form>
	        </div>
	    </div>
	 </div>

	</div>
</section>