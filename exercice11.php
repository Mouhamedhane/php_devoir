<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux d'exercices</title>
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
        <h1>Tableaux d'exercices</h1>
    </header>

    <section>
        <?php
        $exercice8 = array(
            'mouhamed' => array('prenom' => 'maty', 'ville' => 'Dakar', 'age' => 22),
            'astou' => array('prenom' => 'astou', 'ville' => 'Thies', 'age' => 20),
            'maty' => array('prenom' => 'mouhamed', 'ville' => 'Saint_louis', 'age' => 26),
        );

        $exercice9 = array(
            'exercice1.php' => 'Exercice 1 - Squats',
            'exercice2.php' => 'Exercice 2 - Pompes',
            'exercice3.php' => 'Exercice 3 - Abdos',
        );

        function afficherTableau($tableau)
        {
            echo '<table>';
            echo '<tr><th>Clé</th><th>Attribut</th><th>Valeur</th></tr>';
            
            foreach ($tableau as $cle => $valeur) {
                if (is_array($valeur)) {
                    foreach ($valeur as $attribut => $v) {
                        echo '<tr>';
                        echo "<td>$cle</td>";
                        echo "<td>$attribut</td>";
                        echo "<td>$v</td>";
                        echo '</tr>';
                    }
                } else {
                    echo '<tr>';
                    echo "<td>$cle</td>";
                    echo "<td>N/A</td>";
                    echo "<td>$valeur</td>";
                    echo '</tr>';
                }
            }

            echo '</table>';
        }

        echo '<h2>Exercice 8</h2>';
        afficherTableau($exercice8);

        echo '<h2>Exercice 9</h2>';
        afficherTableau($exercice9);
        ?>
    </section>

</body>

</html>
