<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de personnes</title>
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
        <h1>Tableau de personnes</h1>
    </header>

    <section>
        <?php
        $personnes = array(
            'john_doe' => array('prenom' => 'John', 'ville' => 'Paris', 'age' => 30),
            'jane_doe' => array('prenom' => 'Jane', 'ville' => 'Lyon', 'age' => 25),
            'alice_smith' => array('prenom' => 'Alice', 'ville' => 'Marseille', 'age' => 28),
        );

        echo '<table>';
        echo '<tr><th>Nom</th><th>Prénom</th><th>Ville de résidence</th><th>Âge</th></tr>';
        foreach ($personnes as $nom => $infos) {
            echo '<tr>';
            echo "<td>$nom</td>";
            echo "<td>{$infos['prenom']}</td>";
            echo "<td>{$infos['ville']}</td>";
            echo "<td>{$infos['age']}</td>";
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </section>

</body>

</html>
