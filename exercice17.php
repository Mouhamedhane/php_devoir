<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 18</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>

    <section>
        <?php
        function afficherTableauMultidimensionnel($tableau)
        {
            echo '<table>';
            echo '<tr>';
            foreach ($tableau as $cle => $element) {
                echo '<th>' . htmlspecialchars($cle) . '</th>';
            }
            echo '</tr>';

            $maxRows = max(array_map('count', $tableau));
            for ($i = 0; $i < $maxRows; $i++) {
                echo '<tr>';
                foreach ($tableau as $element) {
                    echo '<td>';
                    if (isset($element[$i])) {
                        echo htmlspecialchars($element[$i]);
                    }
                    echo '</td>';
                }
                echo '</tr>';
            }

            echo '</table>';
        }

        $tableauMultidimensionnel = [
            '1' => [1],
            '22' => [2, 2],
            '333' => [3, 3, 3],
            '4444' => [4, 4, 4, 4],
            '55555' => [5, 5, 5, 5, 5],
            '666666' => [6, 6, 6, 6, 6, 6],
            '7777777' => [7, 7, 7, 7, 7, 7, 7],
            '88888888' => [8, 8, 8, 8, 8, 8, 8, 8],
            '999999999' => [9, 9, 9, 9, 9, 9, 9, 9, 9],
            '10101010101010101010' => [10, 10, 10, 10, 10, 10, 10, 10, 10, 10],
        ];

        afficherTableauMultidimensionnel($tableauMultidimensionnel);
        ?>
    </section>

</body>

</html>
