<?
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

$link = Yii::$app->controller->id;
?>

<!-- start sidebar menu -->
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll">
            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

                <!-- Кнопка при сворачивании меню -->
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>



                <!-- Меню:начало -->



<!--                <li class="nav-item start --><?//=$link == 'site'?'active':''?><!--">-->
<!--                    <a href="--><?//=Yii::$app->homeUrl;?><!--" class="nav-link nav-toggle">-->
<!--                        <i class="material-icons">dashboard</i>-->
<!--                        <span class="title">Все задачи</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item --><?//=$link == 'issue'?'active':''?><!--">-->
<!--                    <a href="--><?//=Url::to(['issue/index'])?><!--" class="nav-link nav-toggle">-->
<!--                        <i class="material-icons">assignment</i>-->
<!--                        <span class="title">Мои задачи</span>-->
<!--                    </a>-->
<!--                </li>-->


                <li class="nav-item <? if($link == 'site' or $link == 'issue'){echo "active open";}?>">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">assignment</i>
                        <span class="title">Задачи</span>
                        <span class="arrow <? if($link == 'site' or $link == 'issue'){echo "open";}?>"></span>
                    </a>


                    <ul class="sub-menu">
                        <li class="nav-item <?=$link == 'site'?'active':''?>">
                            <a href="<?=Yii::$app->homeUrl;?>" class="nav-link">
                                <span class="title">Все задачи</span>
                                <?=$link == 'status'?'<span class="selected"></span>':''?>
                            </a>
                        </li>
                        <li class="nav-item <?=$link == 'issue'?'active':''?>">
                            <a href="<?=Url::to(['issue/index'])?>" class="nav-link">
                                <span class="title">Мои задачи</span>
                                <?=$link == 'chat'?'<span class="selected"></span>':''?>
                            </a>
                        </li>
                    </ul>
                </li>









                <li class="nav-item <? if($link == 'status' or $link == 'chat'){echo "active open";}?>">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">local_library</i>
                        <span class="title">Справочники</span>
                        <span class="arrow <? if($link == 'status' or $link == 'chat'){echo "open";}?>"></span>
                    </a>


                    <ul class="sub-menu">
                        <li class="nav-item <?=$link == 'status'?'active':''?>">
                            <a href="<?=Url::to(['status/index'])?>" class="nav-link">
                                <span class="title">Статусы</span>
                                <?=$link == 'status'?'<span class="selected"></span>':''?>
                            </a>
                        </li>
                        <li class="nav-item <?=$link == 'chat'?'active':''?>">
                            <a href="<?=Url::to(['chat/index'])?>" class="nav-link">
                                <span class="title">Чаты</span>
                                <?=$link == 'chat'?'<span class="selected"></span>':''?>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu -->