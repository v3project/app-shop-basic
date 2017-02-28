<?php/** * @author Semenov Alexander <semenov@skeeks.com> * @link http://skeeks.com/ * @copyright 2010 SkeekS (СкикС) * @date 06.03.2015 */use yii\helpers\Html;use frontend\assets\AppAsset;/* @var $this \yii\web\View *//* @var $content string */AppAsset::register($this);?><?php $this->beginPage() ?><!DOCTYPE html><html lang="<?= Yii::$app->language ?>" prefix="og: http://ogp.me/ns#"><head>    <meta charset="<?= Yii::$app->charset ?>"/>    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <?= Html::csrfMetaTags() ?>    <title><?= Html::encode($this->title) ?></title>    <link rel="icon" href="/favicon.ico?v=<?= @filemtime(\Yii::getAlias('@app/web/favicon.ico'));?>"  type="image/x-icon" />    <?php $this->head() ?></head><body class="smoothscroll enable-animation">    <?php $this->beginBody() ?>		<div id="wrapper">            <?= $this->render('@app/views/header'); ?>            <div id="sx-center-wrapper" class="container">                <?= $content; ?>                <?= $this->render('@app/views/footer'); ?>                <?= $this->render('@app/views/modals'); ?>            </div>        </div>		<a href="#" id="toTop"></a>    <?php $this->endBody() ?></body></html><?php $this->endPage() ?>