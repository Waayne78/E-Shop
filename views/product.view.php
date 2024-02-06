<?php  

include '../partials/header.php';
include '../config/cURL.php';

if (isset($_GET['product'])) {
    $id = $_GET['product'];
}

?>

<div class="wrapper">
<h1>Page de produit</h1>

<?php foreach ($products as $product): ?>
    <?php if ($id == $product['id']): ?>
        <div class="product">
            <img class="img-product" src="<?= $product['image'] ?>" alt="">
            <div class="detail">
            <h2><?= $product['title'] ?></h2>
            <h3><?= $product['description'] ?></h3>
            <h2><?= $product['price'] ?> €</h2>
            </div>
        </div>
        <div class="buy-button">
        <button><a href="cart.view.php?product=<?= $product['id'] ?>">Ajouter au panier</a></button>
        </div>
        
    <?php endif ?>

<?php endforeach ?>

</div>