<?php require_once 'layouts/header.php'; ?>

<div class="container">
    
<h2 class="text-center">Корзина</h2>

    <?php if ($productsInCart) : ?>
        <p><strong>Вы выбрали такие товары:</strong></p>
        <table class="table">
            <tr>
                <th>Код товара</th>
                <th>Название</th>
                <th>Стомость, $</th>
                <th>Количество, шт</th>
            </tr>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['title']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $productsInCart[$product['id']-1]; ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3">Общая стоимость:</td>
                <td>$ <?php echo $totalPrice; ?></td>
            </tr>

        </table>
    <?php else : ?>
        <p>Корзина пуста</p>
    <?php endif; ?>

</div>

<?php require_once 'layouts/footer.php'; ?>