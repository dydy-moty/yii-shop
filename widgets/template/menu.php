<?php

use yii\helpers\Url;

?>

<div class="container">
    <nav class="nav nav-menu" style="justify-content: center">
        <a class="nav-link active" href="/">Все меню</a>
        <? foreach ($data as $item): ?>
        <a class="nav-link " href="<?= Url::to(['category/view', 'id' => $item['cat_name']])?>" ><?= $item["browser_name"] ?></a>
        <? endforeach; ?>
    </nav>
</div>
