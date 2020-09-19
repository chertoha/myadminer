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
        <link rel="shortcut icon" href="favicon_16.ico"/>
        <link rel="bookmark" href="favicon_16.ico"/>
        <!-- site css -->
<!--        <link rel="stylesheet" href="dist/css/site.min.css">-->
        <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">-->
        <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        <!--<script type="text/javascript" src="dist/js/site.min.js"></script>-->
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <!--nav-->
        <nav role="navigation" class="navbar navbar-custom">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?= \yii\helpers\Url::toRoute('site/index')?>" class="navbar-brand"><?= Yii::$app->name ?></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="getting-started.html">Getting Started</a></li>
                        <li class="active"><a href="<?= Url::toRoute('/gii')?>">gii</a></li>
                        <!-- <li class="disabled"><a href="#">Link</a></li> -->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Silverbux <b class="caret"></b></a>
                            <ul role="menu" class="dropdown-menu">
                                <li class="dropdown-header">Setting</li>
                                <li><a href="#">Action</a></li>
                                <li class="divider"></li>
                                <li class="active"><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li class="disabled"><a href="#">Signout</a></li>
                            </ul>
                        </li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--header-->
        <div class="container-fluid">
            <!--documents-->
            <div class="row row-offcanvas row-offcanvas-left">
                <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
                    <ul class="list-group panel">
                        <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>SIDE PANEL</b></li>
                        <!--<li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>-->
                        <li class="list-group-item"><a href="<?= Url::toRoute('item/index')?>"><i class="glyphicon glyphicon-shopping-cart"></i>Items </a></li>
                        <li class="list-group-item"><a href="<?= Url::toRoute('brand/index')?>"><i class="glyphicon glyphicon-shopping-cart"></i>Brands </a></li>
                        <li class="list-group-item"><a href="<?= Url::toRoute('supplier/index')?>"><i class="glyphicon glyphicon-shopping-cart"></i>Поставщики </a></li>
                        <li class="list-group-item"><a href="<?= Url::toRoute('item-supply/index')?>"><i class="glyphicon glyphicon-shopping-cart"></i>Items supply </a></li>
                        <!--<li class="list-group-item"><a href="index.html"><i class="glyphicon glyphicon-shopping-cart"></i>Товары </a></li>-->
                        <!--<li class="list-group-item"><a href="index.html"><i class="glyphicon glyphicon-home"></i>Dashboard</a></li>-->
                        <!--<li class="list-group-item"><a href="panel_original/icons.html"><i class="glyphicon glyphicon-certificate"></i>Icons </a></li>-->
                        <!--<li class="list-group-item"><a href="panel_original/list.html"><i class="glyphicon glyphicon-th-list"></i>Tables and List </a></li>-->
                        <!--<li class="list-group-item"><a href="panel_original/forms.html"><i class="glyphicon glyphicon-list-alt"></i>Forms</a></li>-->
                        <!--<li class="list-group-item"><a href="panel_original/alerts.html"><i class="glyphicon glyphicon-bell"></i>Alerts</li>-->
                        <!--<li class="list-group-item"><a href="panel_original/timeline.html" ><i class="glyphicon glyphicon-indent-left"></i>Timeline</a></li>-->
                        <!--<li class="list-group-item"><a href="panel_original/calendars.html" ><i class="glyphicon glyphicon-calendar"></i>Calendars</a></li>-->
                        <!--<li class="list-group-item"><a href="panel_original/typography.html" ><i class="glyphicon glyphicon-font"></i>Typography</a></li>-->
                        <!--<li class="list-group-item"><a href="panel_original/footers.html" ><i class="glyphicon glyphicon-minus"></i>Footers</a></li>-->
                        <!--<li class="list-group-item"><a href="panel_original/panels.html" ><i class="glyphicon glyphicon-list-alt"></i>Panels</a></li>-->
                        <!--<li class="list-group-item"><a href="panel_original/navs.html" ><i class="glyphicon glyphicon-th-list"></i>Navs</a></li>-->
                        <!--<li class="list-group-item"><a href="panel_original/colors.html" ><i class="glyphicon glyphicon-tint"></i>Colors</a></li>-->
                        <!--<li class="list-group-item"><a href="panel_original/flex.html" ><i class="glyphicon glyphicon-th"></i>Flex</a></li>-->
                        <!--<li class="list-group-item"><a href="panel_original/login.html" ><i class="glyphicon glyphicon-lock"></i>Login</a></li>-->
<!--                        <li>
                            <a href="#demo3" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-shopping-cart"></i>Товары   <span class="glyphicon glyphicon-chevron-right"></span></a>
                            <div class="collapse" id="demo3">
                                <a href="<?//= Url::toRoute('item-supply/index')?>" class="list-group-item">Изделия</a>
                                <a href="<?//= Url::toRoute('product/article')?>" class="list-group-item">Артикулы</a>
                                <a href="<?//= Url::toRoute('brand/index')?>" class="list-group-item">Производители</a>
                                <a href="<?//= Url::toRoute('supplier/index')?>" class="list-group-item">Поставщики</a>
                            </div>
                        </li>-->
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-9 content">
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
        <!--footer-->
        <div class="site-footer">
            <div class="container">
                <div class="copyright clearfix">
                    <p><b>Bootflat</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="getting-started.html">Getting Started</a>&nbsp;&bull;&nbsp;<a href="index.html">Documentation</a>&nbsp;&bull;&nbsp;<a href="https://github.com/Bootflat/Bootflat.UI.Kit.PSD/archive/master.zip">Free PSD</a>&nbsp;&bull;&nbsp;<a href="colors.html">Color Picker</a></p>
                    <p>Code licensed under <a href="http://opensource.org/licenses/mit-license.html" target="_blank" rel="external nofollow">MIT License</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/" rel="external nofollow">CC BY 3.0</a>.</p>
                </div>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>