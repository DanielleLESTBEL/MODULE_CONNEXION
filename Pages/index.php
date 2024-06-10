<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module de connexion</title>
    <link rel="stylesheet" href="../Css/index.css?v=<?php echo time(); ?>">
</head>
<body>
<?php
include '../Includes/_Header.php'
?>

    <section class="titles">
        <h1 class="titre1_index"> Conduite accompagnée</h1>
        <h1 class="titre1_index"> 2023-2024 </h1>
        <h2 class="sous_titre_km"> Ajoute tes km ! </h2>
        </section>
        
        <section class="button_cnctn">
        <form action="connexion.php" method="post">
        <button class= "connexion" type= "submit"> Connexion </button>
        </section>

<?php
include '../Includes/_Footer.php'
?>

</body>
</html>



