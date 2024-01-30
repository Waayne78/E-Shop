<?php

include '../partials/header.php';
include '../config/cURL.php';

    ?>

<div class="wrapper">
    <h1>Page de produits</h1>

    <ul class="product-list">

        <?php foreach ($products as $product): ?>
            <li class=tiles>
                <a href="product.view.php?product=<?= $product['id'] ?>"><img src="<?= $product['image'] ?>" alt=""></a>
                <h2>
                    <?= $product['title'] ?>
                </h2>
                <h3>
                    <?= substr($product['description'], 0, 50) ?> ...
                </h3>
                <h2>
                    <?= $product['price'] ?> €
                </h2>
                <button>Ajouter au panier</button>
            </li>
        <?php endforeach ?>


    </ul>


</div>

<?php include '../partials/footer.php' ?>