<h3 style="text-align: center">Корзина</h3>
<?php
if ($session['cart']):
?>

<table class="table table-striped">

    <thead>
        <tr>
            <th scope="col">Фото</th>
            <th scope="col">Наименование</th>
            <th scope="col">Количество</th>
            <th scope="col">Цена</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    <? foreach ($session['cart'] as $id => $good):?>
        <tr>
            <td width="150px"><img class="img-responsive" src="/images/<?= $good['img'] ?>" alt="$good['name']"></td>
            <td><?= $good['name'] ?></td>
            <td><?= $good['goodQuantity'] ?></td>
            <td><?= $good['price'] * $good['goodQuantity'] ?>  рублей</td>
            <td class="delete" data-id="<?= $id ?>" style="text-align: center cursor: pointer; vertical-align: middle; color: red" >
                <span>&#10006</span>
            </td>
        </tr>
    <?php endforeach; ?>
        <tr style="border-top: 4px solid black">
            <td colspan="4">Всего товаров</td>
            <td class="total-quantity"><?= $session['cart.totalQuantity'] ?></td>
        </tr>

        <tr>
            <td colspan="4">На сумму</td>
            <td style="font-weight: 700"><?= $session['cart.totalSum'] ?> рублей</td>
        </tr>
    </tbody>
</table>


<div class="modal-button">
    <button type="button" class="btn btn-danger" onclick="clearCart(event)">Очистить корзину</button>
    <button type="button" class="btn btn-secondary btn-close">Продолжить покупки</button>
    <button type="button" class="btn btn-success btn-next">Оформить заказ</button>
</div>

<?php else: ?>

<div style="justify-content: center">
    <h4>Ваша корзина пуста</h4>
        <button type="button" class="btn btn-secondary btn-close">Начать покупки</button>
</div>

<?php endif; ?>