<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

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

<!-- navigation -->
<header>
    <div class="navigation">
        <div class="container">
            <div class="menu-content">
                <a href="/" class="act">На главную</a>
                <a href="#" class="act">Админка</a>
                <a href="#" onclick="openCart(event)">Корзина<span class="menu-quantity">(<?= $_SESSION['cart.totalQuantity'] ? $_SESSION['cart.totalQuantity'] : 0;  ?>)</span></a>
                <form action="<?=Url::to(['category/search']) ?>" method="get">
                <input type="text" style="width: 90px" placeholder="Поиск..." name="search" >
                </form>
            </div>
        </div>
    </div>
</header>
<!-- //navigation -->

       <div class="container">
           <?= $content ?>
       </div>

<!-- footer -->
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <p>&copy; 2020 Electronic Store. All rights reserved | Design by w3layouts.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- //footer -->

<!-- modal-cart -->
<div id="cart" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div style="padding: 15px" class="modal-content">
        </div>
    </div>
</div>
<!-- modal-cart -->

<!-- modal-order -->
<div id="order" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div style="padding: 15px" class="modal-content">
        </div>
    </div>
</div>
<!-- modal-order -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
