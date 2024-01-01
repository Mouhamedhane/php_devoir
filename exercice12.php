<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Adresse Client</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>

    <header>
        <h1>Formulaire Adresse Client</h1>
    </header>

    <section>
        <?php
        $nom = $prenom = $adresse = $ville = $codePostal = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
            $adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';
            $ville = isset($_POST['ville']) ? $_POST['ville'] : '';
            $codePostal = isset($_POST['code_postal']) ? $_POST['code_postal'] : '';

            echo '<table>';
            echo '<tr><th>Champ</th><th>Valeur</th></tr>';
            echo "<tr><td>Nom</td><td>$nom</td></tr>";
            echo "<tr><td>Prénom</td><td>$prenom</td></tr>";
            echo "<tr><td>Adresse</td><td>$adresse</td></tr>";
            echo "<tr><td>Ville</td><td>$ville</td></tr>";
            echo "<tr><td>Code Postal</td><td>$codePostal</td></tr>";
            echo '</table>';
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <fieldset>
                <legend>Adresse client</legend>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" value="<?php echo htmlspecialchars($nom); ?>" required>

                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" value="<?php echo htmlspecialchars($prenom); ?>" required>

                <label for="adresse">Adresse :</label>
                <input type="text" name="adresse" value="<?php echo htmlspecialchars($adresse); ?>" required>

                <label for="ville">Ville :</label>
                <input type="text" name="ville" value="<?php echo htmlspecialchars($ville); ?>" required>

                <label for="code_postal">Code Postal :</label>
                <input type="text" name="code_postal" value="<?php echo htmlspecialchars($codePostal); ?>" required>
            </fieldset>

            <input type="submit" value="Soumettre">
        </form>
    </section>

</body>

</html>
