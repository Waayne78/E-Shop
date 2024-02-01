<?php

ob_start();

include '../partials/header.php';
session_start();
ob_end_flush();

?>

<div class="wrapper">
    <h1>Personnal info</h1>
    <img class="profile-avatar" src="../uploads/avatar/default.png" alt="">
    <h2>Profil de
        <?= $_SESSION['user']['name'] ?>
    </h2>
    <h2>adresse mail :
        <?= $_SESSION['user']['email'] ?>
    </h2>
    <br>
    <button>Changer de photo de profil</button>
</div>

<?php include '../partials/footer.php' ?>