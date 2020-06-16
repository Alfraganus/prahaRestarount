<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="wrap">
<header id="wrap-header">
    <div class="container">
        <!--menu + logo-->
        <nav class="navbar navbar-default menu-nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--logo-->
                    <a href="#" class="navbar-brand logo">
                        <img src="images/logo.png" alt="image" width="150">
                    </a>
                    <!--/logo-->
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="active" href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="reservation.html">Reservation</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blogdetail.html">Blog single</a></li>
                                <li><a href="error_404.html">Error_404</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/menu + logo-->
    </div>
</header>
    <div id="wrap-body">
        <?=$content?>
        <footer id="wrap-footer" class="color-w">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <a href="#" class="logo">
                                <img src="images/logo.png" alt="image">
                            </a>
                            <ul>
                                <li>Add<span class="pull-right">300 E-Block Building, Malaysia</span></li>
                                <li>Phone<span class="pull-right">+880 1973 833 508</span></li>
                                <li>Email<span class="pull-right">ndktheme@gmail.com</span></li>
                                <li>Website<span class="pull-right">http://www.ndktheme.com</span></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <h4>Opening hour</h4>
                            <ul>
                                <li>Monday<span class="pull-right">8:00 Am - 22:00 Pm</span></li>
                                <li>Tuesday<span class="pull-right">8:00 Am - 22:00 Pm</span></li>
                                <li>Wednesday<span class="pull-right">8:00 Am - 22:00 Pm</span></li>
                                <li>Thursday<span class="pull-right">8:00 Am - 22:00 Pm</span></li>
                                <li>Friday<span class="pull-right">8:00 Am - 22:00 Pm</span></li>
                                <li>Saturday<span class="pull-right">10:00 Am - 23:00 Pm</span></li>
                                <li>Sunday<span class="pull-right">Closed</span></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <h4>Gallery</h4>
                            <ul class="gallery-2">
                                <li class="gallery-item">
                                    <a href="images/thumbs-large/default-large.png" class="hover-img image-zoom">
                                        <img src="images/default.png" alt="image">
                                        <div class="hover-caption color-w"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </li>
                                <li class="gallery-item">
                                    <a href="images/thumbs-large/default-large.png" class="hover-img image-zoom">
                                        <img src="images/default.png" alt="image">
                                        <div class="hover-caption color-w"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </li>
                                <li class="gallery-item">
                                    <a href="images/thumbs-large/default-large.png" class="hover-img image-zoom">
                                        <img src="images/default.png" alt="image">
                                        <div class="hover-caption color-w"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </li>
                                <li class="gallery-item">
                                    <a href="images/thumbs-large/default-large.png" class="hover-img image-zoom">
                                        <img src="images/default.png" alt="image">
                                        <div class="hover-caption color-w"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </li>
                                <li class="gallery-item">
                                    <a href="images/thumbs-large/default-large.png" class="hover-img image-zoom">
                                        <img src="images/default.png" alt="image">
                                        <div class="hover-caption color-w"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </li>
                                <li class="gallery-item">
                                    <a href="images/thumbs-large/default-large.png" class="hover-img image-zoom">
                                        <img src="images/default.png" alt="image">
                                        <div class="hover-caption color-w"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </li>
                                <li class="gallery-item">
                                    <a href="images/thumbs-large/default-large.png" class="hover-img image-zoom">
                                        <img src="images/default.png" alt="image">
                                        <div class="hover-caption color-w"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </li>
                                <li class="gallery-item">
                                    <a href="images/thumbs-large/default-large.png" class="hover-img image-zoom">
                                        <img src="images/default.png" alt="image">
                                        <div class="hover-caption color-w"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </li>
                                <li class="gallery-item">
                                    <a href="images/thumbs-large/default-large.png" class="hover-img image-zoom">
                                        <img src="images/default.png" alt="image">
                                        <div class="hover-caption color-w"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <h4>Flow us on</h4>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ant</p>
                            <ul class="list-inline social-default social-bg-gray">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-youtube-play"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <p>Designed by <a href="#">ndktheme</a>. All Rights Reserved</p>
                </div>
            </div>
        </footer>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
