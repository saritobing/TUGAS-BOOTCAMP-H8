<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function Conditional Revisi</title>
</head>
<body>
    <h1>Function & Conditional dengan Pendekatan Berbeda</h1>

    <?php
    echo "<h3>Soal No 1: Greetings (Revisi)</h3>";

    function greetings($name) {
        return "Halo $name, Selamat Datang di Garuda Cyber Institute!";
    }
    echo greetings("Bagas") . "<br>";
    echo greetings("Wahyu") . "<br>";
    echo greetings("Nama Peserta") . "<br>";

    echo "<br><h3>Soal No 2: Reverse String (Revisi)</h3>";

    function reverseString($str) {
        $reversed = '';
        $index = strlen($str) - 1;
        while ($index >= 0) {
            $reversed .= $str[$index];
            $index--;
        }
        return $reversed;
    }
    echo reverseString("abdul") . "<br>";
    echo reverseString("Garuda Cyber Institute") . "<br>";
    echo reverseString("We Are GC-InsDeveloper") . "<br>";

    echo "<br><h3>Soal No 3: Palindrome (Revisi)</h3>";

    function palindrome($str) {
        return reverseString($str) === $str ? "true" : "false";
    }
    echo palindrome("civic") . "<br>";
    echo palindrome("nababan") . "<br>";
    echo palindrome("jambaban") . "<br>";
    echo palindrome("racecar") . "<br>";

    echo "<br><h3>Soal No 4: Tentukan Nilai (Revisi)</h3>";

    function tentukan_nilai($nilai) {
        switch (true) {
            case ($nilai >= 85 && $nilai <= 100):
                return "Sangat Baik";
            case ($nilai >= 70 && $nilai < 85):
                return "Baik";
            case ($nilai >= 60 && $nilai < 70):
                return "Cukup";
            default:
                return "Kurang";
        }
    }
    echo tentukan_nilai(98) . "<br>";
    echo tentukan_nilai(76) . "<br>";
    echo tentukan_nilai(67) . "<br>";
    echo tentukan_nilai(43) . "<br>";
    ?>

</body>
</html>
