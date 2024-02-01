<?php

// FICHIER DE FONCTIONS UTILES

// SIGNUP

function checkExists($field, $param, $pdo) {
    // Vérifier si le nom et l'email ne sont pas déjà en BDD
    $sql = "SELECT * FROM eshop_signup WHERE $field = ?";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute([$param]);
    
    return ($stmt->rowCount() > 0) ? true : false;
}

