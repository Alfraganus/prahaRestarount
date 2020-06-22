<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
\app\assets\BackendAsset::register($this);
$this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=Yii::$app->homeUrl?>images/favicon.ico">
    <?php $this->registerCsrfMetaTags(); ?>
    <title><?= Html::encode($this->title); ?></title>
    <?php $this->head(); ?>
</head>

<body data-sidebar="dark">
    <?php $this->beginBody(); ?>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="<?= $app->homeUrl; ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?=Yii::$app->homeUrl?>images/logo-sm-dark.png" alt="" height="30">
                    </span>
                            <span class="logo-lg">
                        <img src="<?=Yii::$app->homeUrl?>images/logo-dark.png" alt="" height="35">
                    </span>
                        </a>

                        <a href="<?= $app->homeUrl; ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?=Yii::$app->homeUrl?>images/logo-sm-dark.png" alt="" height="30">
                    </span>
                            <span class="logo-lg">
                        <img src="<?=Yii::$app->homeUrl?>images/logo-dark.png" alt="" height="35">
                    </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="ri-search-line"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="" src="<?=Yii::$app->homeUrl?>images/flags/us.jpg" alt="Header Language" height="16">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="<?=Yii::$app->homeUrl?>images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="<?=Yii::$app->homeUrl?>images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="<?=Yii::$app->homeUrl?>images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="<?=Yii::$app->homeUrl?>images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-apps-2-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <div class="px-lg-2">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="<?=Yii::$app->homeUrl?>images/brands/github.png" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="<?=Yii::$app->homeUrl?>images/brands/bitbucket.png" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="<?=Yii::$app->homeUrl?>images/brands/dribbble.png" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row no-gutters">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="<?=Yii::$app->homeUrl?>images/brands/dropbox.png" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="<?=Yii::$app->homeUrl?>images/brands/mail_chimp.png" alt="mail_chimp">
                                            <span>Mail Chimp</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="<?=Yii::$app->homeUrl?>images/brands/slack.png" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-notification-3-line"></i>
                            <span class="noti-dot"></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="ri-shopping-cart-line"></i>
                                    </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Your order is placed</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="<?=Yii::$app->homeUrl?>images/users/avatar-3.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">James Lemire</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">It will seem like simplified English.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="ri-checkbox-circle-line"></i>
                                    </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="<?=Yii::$app->homeUrl?>images/users/avatar-4.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?=Yii::$app->homeUrl?>images/users/avatar-2.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ml-1">Avlo Admin</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="#">
                                <i class="ri-user-line align-middle mr-1"></i> Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="ri-wallet-2-line align-middle mr-1"></i> My Wallet
                            </a>
                            <a class="dropdown-item d-block" href="#">
                                <span class="badge badge-success float-right mt-1">11</span>
                                <i class="ri-settings-2-line align-middle mr-1"></i> Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="ri-lock-unlock-line align-middle mr-1"></i> Lock screen
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="<?= Yii::$app->homeUrl; ?>auth/logout">
                                <i class="ri-shut-down-line align-middle mr-1 text-danger"></i> Logout
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- Left Sidebar Start -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li>
                            <a href="<?= $app->homeUrl; ?>" class="waves-effect">
                                <i class="ri-dashboard-line"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-line-chart-line"></i>
                                <span>Orders</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= $app->homeUrl; ?>orders">All orders</a></li>
                                <li><a href="<?= $app->homeUrl; ?>orders/new">New orders</a></li>
                                <li><a href="<?= $app->homeUrl; ?>orders/pending">Pending orders</a></li>
                                <li><a href="<?= $app->homeUrl; ?>orders/cancelled">Cancelled orders</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-shopping-cart-2-line"></i>
                                <span>Products</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= $app->homeUrl; ?>products/add">Add new</a></li>
                                <li><a href="<?= $app->homeUrl; ?>products/all">All products</a></li>
                                <li><a href="<?= $app->homeUrl; ?>products/campaigns">Campaigns</a></li>
                                <li><a href="<?= $app->homeUrl; ?>products/new">Sponsored products</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-menu-2-fill"></i>
                                <span>Fields</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= $app->homeUrl; ?>fields/brands">Brands</a></li>
                                <li><a href="<?= $app->homeUrl; ?>category">Categories</a></li>
                                <li><a href="<?= $app->homeUrl; ?>fields/custom">Custom fields</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-checkbox-multiple-blank-line"></i>
                                <span>Content</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= $app->homeUrl; ?>content/posts">Posts</a></li>
                                <li><a href="<?= $app->homeUrl; ?>content/tags">Tags</a></li>
                                <li><a href="<?= $app->homeUrl; ?>content/pages">Pages</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['media/index'])?>">Media</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-store-2-line"></i>
                                <span>Vendors</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= $app->homeUrl; ?>vendors/add">Add new</a></li>
                                <li><a href="<?= $app->homeUrl; ?>vendors/all">All vendors</a></li>
                                <li><a href="<?= $app->homeUrl; ?>vendors/new">New vendors</a></li>
                                <li><a href="<?= $app->homeUrl; ?>vendors/pending">Pending vendors</a></li>
                                <li><a href="<?= $app->homeUrl; ?>vendors/blocked">Blocked vendors</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-group-line"></i>
                                <span>Customers</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=\yii\helpers\Url::to(['user/create'])?>">Add new</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['user/'])?>">All customers</a></li>
                                <!-- <li><a href="<?/*= $app->homeUrl; */?>customers/new">New customers</a></li>
                        <li><a href="<?/*= $app->homeUrl; */?>customers/pending">Pending customers</a></li>
                        <li><a href="<?/*= $app->homeUrl; */?>customers/blocked">Blocked customers</a></li>-->
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-settings-3-line"></i>
                                <span>System</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#"></a></li>
                                <li><a href="">Settings Create</a></li>
                                <li><a href="<?= $app->homeUrl; ?>system/languages">Languages</a></li>
                                <li><a href="<?= $app->homeUrl; ?>system/payments">Payments</a></li>
                                <li><a href="<?= $app->homeUrl; ?>system/locations">Locations</a></li>
                                <li><a href="<?= $app->homeUrl; ?>system/trashbox">Trashbox</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-code-fill"></i>
                                <span>Developer</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= $app->homeUrl; ?>developer/submenu">Sub menu</a></li>
                                <li><a href="<?= $app->homeUrl; ?>developer/submenu">Sub menu</a></li>
                                <li><a href="<?= $app->homeUrl; ?>developer/submenu">Sub menu</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->
        <div class="main-content">
            <div class="page-content">

                <div class="card p-3">
                    <?= $content ?>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            © AVLO UZ. All rights reserved.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Dashboard version: 0.1.1
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="<?=Yii::$app->homeUrl?>images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                    <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="<?=Yii::$app->homeUrl?>images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                    <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="<?=Yii::$app->homeUrl?>images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-5">
                    <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                    <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                </div>
            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php $this->endBody(); ?>

</body>

</html>
<?php $this->endPage(); ?>