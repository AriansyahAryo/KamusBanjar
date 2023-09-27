<?php
require_once 'kamus.php';
require_once 'translate.php';
$kamus = new Kamus();
$translator = new Translate($kamus);
if (isset($_GET['indonesia'])) {
    $kataIndonesia = $_GET['indonesia'];
    $terjemahan = $translator->cariBanjar($kataIndonesia);
} else {
    $terjemahan = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamus Banjar</title>
</head>

<body>
    <center>
        <h2>Kamus Sederhana</h2>
        <br>
        <h2>INDONESIA - BANJAR</h2>
        <form action="">
            <label for="indonesia">Masukan Kata dalam bahasa indonesia</label>
            <br>
            <input type="text" name="indonesia">
            <br> <br>
            <input type="submit" value="Translate">
            <br><br>
            <textarea name="banjar" id="" cols="50" rows="10"><?php echo $terjemahan; ?></textarea>
        </form>
    </center>
</body>

</html>