<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Revisi</title>
</head>
<body>
    <h1>Looping dengan Pendekatan Berbeda</h1>

    <?php
    echo "<h3>Soal No 1: Looping I Love PHP (Revisi)</h3>";

    function displayLoop($start, $end, $step) {
        while ($start <= $end) {
            echo "$start - I Love PHP<br>";
            $start += $step;
        }
    }

    // Looping Ascending
    echo "LOOPING PERTAMA<br>";
    displayLoop(2, 20, 2);

    echo "<br>LOOPING KEDUA<br>";
    displayLoop(20, 2, -2);

    echo "<h3>Soal No 2: Looping Array Modulo (Revisi)</h3>";
    $numbers = [18, 45, 29, 61, 47, 34];
    $rest = array_map(fn($num) => $num % 5, $numbers);
    echo "Array sisa baginya adalah: ";
    print_r($rest);
    echo "<br>";

    echo "<h3>Soal No 3: Loop Associative Array (Revisi)</h3>";
    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];

    $assocItems = array_map(function($item) {
        return [
            "id" => $item[0],
            "name" => $item[1],
            "price" => $item[2],
            "description" => $item[3],
            "source" => $item[4]
        ];
    }, $items);

    echo "<pre>";
    print_r($assocItems);
    echo "</pre>";

    echo "<h3>Soal No 4: Asterix 5x5 (Revisi)</h3>";
    $n = 5;
    $i = 1;
    while ($i <= $n) {
        echo str_repeat("* ", $i) . "<br>";
        $i++;
    }
    ?>

</body>
</html>
