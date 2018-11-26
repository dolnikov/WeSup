<?
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
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




                <?php
//                NavBar::begin([
////                            'brandLabel' => Yii::$app->name,
////                            'brandUrl' => Yii::$app->homeUrl,
//                    'options' => [
//                        'class' => 'nav-item',
//                    ],
//                ]);
//                $menuItems = [
//                    ['label' => 'Дом', 'url' => ['/site/index']],
//                    ['label' => 'Мои уроки YII2', 'items' => [
//                        ['label' => 'Урок1. Вывод на экран', 'url' => ['/lessons/lesson']],
//                        ['label' => 'Урок2. Формы', 'url' => ['/lessons/entry-form']],
//                        ['label' => 'Полезное', 'url' => ['/lessons/useful']],
//                    ]],
//                    ['label' => 'О нас', 'url' => ['/site/about']],
//                    ['label' => 'Контакты', 'url' => ['/site/contact']],
//                    ['label' => 'Блог', 'url' => ['/blog']],
//                    ['label' => 'Админка', 'url' => 'http://admin.yiilesson.ru/'],
//                ];
//
//                echo Nav::widget([
//                    'options' => ['class' => 'nav-item start active'],
//                    'items' => $menuItems,
//                ]);
//
//                NavBar::end();
                ?>




                <!-- Меню:начало -->
                <li class="nav-item start active">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">assignment</i>
                        <span class="title">Мои задачи</span>
                    </a>
                </li>




                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Панель задачь</span>
                        <span class="selected"></span>
                        <span class="arrow"></span>
                    </a>

                    <!--//подпункт меню-->
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                <span class="title">Все задачи</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                <span class="title">Статистика</span>
                            </a>
                        </li>
                    </ul>

                </li>
                <!-- Меню:Конец -->

            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu -->