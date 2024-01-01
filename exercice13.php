<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        output {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Calcul TVA</h1>
    </header>

    <section>
        <?php
        $prixHT = isset($_POST['prix_ht']) ? $_POST['prix_ht'] : '';
        $tauxTVA = isset($_POST['taux_tva']) ? $_POST['taux_tva'] : '';
        $montantTVA = '';
        $prixTTC = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (is_numeric($prixHT) && is_numeric($tauxTVA)) {
                $montantTVA = $prixHT * ($tauxTVA / 100);
                $prixTTC = $prixHT + $montantTVA;
            } else {
                echo '<p style="color: red;">Veuillez saisir des valeurs numériques valides.</p>';
            }
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="prix_ht">Prix HT :</label>
            <input type="text" name="prix_ht" value="<?php echo htmlspecialchars($prixHT); ?>" required>

            <label for="taux_tva">Taux de TVA :</label>
            <input type="text" name="taux_tva" value="<?php echo htmlspecialchars($tauxTVA); ?>" required>

            <input type="submit" value="Calculer">
        </form>

        <?php if ($montantTVA !== '' && $prixTTC !== '') : ?>
            <output>
                <p>Montant de la TVA : <?php echo number_format($montantTVA, 2, ',', ' '); ?> €</p>
                <p>Prix TTC : <?php echo number_format($prixTTC, 2, ',', ' '); ?> €</p>
            </output>
        <?php endif; ?>
    </section>

</body>

</html>
