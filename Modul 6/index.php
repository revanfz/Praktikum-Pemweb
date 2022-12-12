<?php
function intToRoman($target)
{
    $hasil = '';

    $kamus = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    foreach ($kamus as $roman => $integer) {
        $i = 0;
        $repeat = floor($target / $integer);
        while ($i < $repeat) {
            $hasil .= $roman;
            $i++;
        }
        $target = $target % $integer;
    }
    return $hasil;
}
?>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 6</title>
</head>

<body>
    <form action="#" method="POST">
        <label for="angka">
            Angka :
            <input type="number" name="angka" id="angka">
        </label>
        <button type="submit">Konversi</button>
        <div id="hasil"></div>
        <h2>Romawi: <?php error_reporting(0);
                    echo intToRoman($_POST["angka"]); ?></h2>
    </form>
</body>

</html>