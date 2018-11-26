<?
use yii\helpers\Html;

?>

<!-- start header -->
<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">


        <!-- logo start -->
        <div class="page-logo">
            <a href="<?=Yii::$app->homeUrl;?>">
                <?=Html::img('@web/assets/img/logo.png', ['alt' => 'logo'])?>
                <span class="logo-default" >Support</span>
            </a>
        </div>

        <!-- logo end -->
        <ul class="nav navbar-nav navbar-left in">
            <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
        </ul>

        <!-- start mobile menu -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- end mobile menu -->



        <!-- start header menu -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">

                <!-- start manage user dropdown -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                       <span class="username username-hide-on-mobile">
                            <? if (!Yii::$app->user->isGuest) {
                                echo Yii::$app->user->identity->username .' (' . Yii::$app->user->identity->login . ')';
                            }?>
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default animated fadeIn">
                        <li>
                            <? if (!Yii::$app->user->isGuest) {
                                echo Html::a(" <i class='icon-logout'></i> Выйти", ['/site/logout'], [
                                    'data' => ['method' => 'post'],
                                ]);
                            }?>
                        </li>
                    </ul>
                </li>

                <!-- end manage user dropdown -->

            </ul>

        </div>
    </div>
</div>
<!-- end header -->