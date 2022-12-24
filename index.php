<?php 
    include('_config.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form action="traitement.php" method="post">
            <label for="quantite">Quantite :</label>
            <select name="quantite" id="quantite">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <p>Tarif : <span class="orangered"><?= TARIF; ?> euros </span></p>
            <p><span class="orangered"> En commandant maintenant, vous aurez droit à une remise immediate de <?= REMISE; ?> euros</span></p>
            <p><input type="submit" value="Commander"></p>
        </form>
        <img src="images/chocolat.jpg" alt="Chocolat">
    </div>
</body>
</html>