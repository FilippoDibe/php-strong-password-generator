<?php
// gestione pagina mostrapassword


session_start();

if(!isset($_SESSION['generate_password'])){
    header ('Location: index.php');
    exit();
}
$password = $_SESSION['generate_password'];

unset($_SESSION['generate_password']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h2 class="mt-4">La tua Password Generata</h2>
        <div class="alert alert-success mt-3"><?= $password ?></div>
        <a href="index.php" class="btn btn-primary">Genera una Nuova Password</a>
    </div>
</body>
</html>