<?php
include 'classes/Liste.php';
include 'classes/Moto.php';
include 'functions/database.php';

$username = "root";
$password = "root";
$db = "liste";

try{
    $dbh = new PDO('mysql:host=localhost;dbname='.$db, $username, $password);
}catch (PDOException $e){
    die("Connection failed: " . $e->getMessage());
}

if(isset($_POST['data'])){
    setData($dbh, $_POST['data']);
}

if(isset($_POST['id'])){
    deleteData($dbh, $_POST['id']);
}

?>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Bonjour !</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<H1>Liste de courses</H1>
<div class="list">
    <?php
        $moto = new Moto(0, "Orcal", "Astor", "Gris", "125CC");
        $moto->display();
    ?>
</div>
<form action="" method="post">
    <input type="text" name="data" placeholder="Ajouter...">
    <input type="submit">
</form>
</body>
</html>