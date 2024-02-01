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
        <input type="number" id="number-product" name="number" min="1" max="10" />
        <button>Ajouter au panier</button>
        </div>
        
    <?php endif ?>

<?php endforeach ?>

</div>