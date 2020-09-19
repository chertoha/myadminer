<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="utf-8">
        <title><?= Yii::$app->name ?></title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--<link rel="shortcut icon" href="favicon_16.ico"/>-->
        <!--<link rel="bookmark" href="favicon_16.ico"/>-->

        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <!--header-->
        <div class="container-fluid">
            <header id="main_header">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?= \yii\helpers\Url::toRoute('site/index') ?>">item-adminer</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-shopping-cart"></i> products <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= Url::toRoute('item/index') ?>">items </a></li>
                                        <li><a href="<?= Url::toRoute('brand/index') ?>">brands </a></li>
                                        <!--<li><a href="<?php // echo Url::toRoute('supplier/index') ?>">suppliers </a></li>-->
                                        <!--<li><a href="<?php // echo Url::toRoute('item-supply/index') ?>">items sypply (test) </a></li>-->
                                        
                                        <li role="separator" class="divider"></li>
                                        
                                        <li><a href="<?= Url::toRoute('feature/index') ?>">features </a></li>
                                        <li><a href="<?= Url::toRoute('feature-value/index') ?>">feature values </a></li>
                                        
                                        <li role="separator" class="divider"></li>
                                        
                                        
                                    </ul>
                                </li>
                                
                            </ul><!--.nav. navbar-nav-->

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?= Url::toRoute('/gii') ?>">gii</a></li>
                                <li>
                                    <form class="navbar-form navbar-right" method="POST" action="">                            
                                        <button type="submit" name="logout" class="btn btn-default">exit</button>
                                    </form>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </header>

            <!--documents-->
            <div class="row row-offcanvas row-offcanvas-left">

                <div class="col-xs-12 content">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Panel Title</h3>
                        </div>
                        <div class="panel-body">
                            <?=
                            yii\widgets\Breadcrumbs::widget([
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ])
                            ?>
                            <?= $content ?>

                        </div><!-- panel body -->
                    </div>
                </div><!-- content -->
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>