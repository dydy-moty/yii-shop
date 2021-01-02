<?php
use app\widgets\MenuWidget;
use yii\helpers\Url;
?>

<?= MenuWidget::widget()?>
<div class="container">
    <div class="row">
        <?php foreach ($goods as $good): ?>
        <div class="my_cart">
            <div class="col-sm-6 col-md-4" >
                <div class="thumbnail" >
                    <img class="img-responsive" src="/images/<?= $good['img'] ?>" alt="..." width="180" height="230">
                        <div class="caption">
                            <h5><b><?= $good['name'] ?></b></h5>
                            <p><?= $good['description'] ?></p>
                            <p><b><?= $good['price'] ?></b></p>
                                <div class="product-button">
                                    <a href="#" data-name = "<?=$good['name']?>" class="button_add btn btn-success">Заказть</a>
                                    <a type="button" href="<?=Url::to(['good/index', 'name' => $good['name']]) ?>" class="btn btn-primary">Подробнее</a>
                                </div>
                        </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>

