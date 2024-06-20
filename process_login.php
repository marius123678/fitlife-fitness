<?php
// process_login.php

// Vérifiez si la requête est une requête POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insérez les données dans la base de données
     $servername = "localhost";
$username = "root";
$password = "";
$dbname = "Toka";

// Créez la connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifiez la connexion
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
echo "Connected successfully";
    // Remplacez ceci par votre propre logique de connexion
    // Exemple : vérification des données et insertion dans la base de données
    //...

    // Si la connexion est réussie, retournez une réponse JSON indiquant le succès
    echo json_encode(['success' => true]);
} else {
    // Si la requête n'est pas une requête POST, retournez une réponse indiquant une erreur
    echo json_encode(['success' => false]);
}
?>
