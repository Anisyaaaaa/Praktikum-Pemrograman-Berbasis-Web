<?php
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

if (isset($_POST['n'])) {
    $num = $_POST['n'];
    $result = factorial($num);
} else {
    $num = '';
    $result = '';
}

if (isset($_POST['hapus'])) {
    $num = '';
    $result = '';
}
?>

<?php
error_reporting(0);
$angkaa = $_POST['a'];
$value = array();

if ($angkaa >= 1 && $angkaa <= 100) {
    $deret[1] = 0;
    $deret[2] = 1;
    $value[] = $deret[1];
    $value[] = $deret[2];

    for ($i = 3; $i <= $angkaa; $i++) {
        $deret[$i] = $deret[$i-1] + $deret[$i-2];
        $value[] = $deret[$i];
    }
}

if(isset($_POST['hapus'])) {
    $value = array();
    $angkaa = '';
}
?>

<?php 
error_reporting(0);

function suhu($satuan, float $angka){
    switch ($satuan){
        case "C":
            return [
                "celcius" => $angka,
                "fahrenheit" => 9/5 * $angka + 32,
                "reamur" => 4/5 * $angka,
                "kelvin" => $angka + 273
            ];
            break;
        case "R":
            return[
                "celcius" => 5/4 * $angka,
                "fahrenheit" => 9/4 * $angka + 32,
                "reamur" => $angka,
                "kelvin" => 5/4 * $angka + 273
            ];
            break;
        case "F":
            return [
                "celcius" => 5/9 * ($angka - 32),
                "fahrenheit" => $angka,
                "reamur" => 4/9 * ($angka - 32),
                "kelvin" => 5/9 * ($angka - 32) + 273
            ];
            break;
        case "K":
            return [
                "celcius" => $angka - 273,
                "fahrenheit" => 9/5 * ($angka - 273) + 32,
                "reamur" => 4/5 * ($angka - 273),
                "kelvin" => $angka
            ];
            break;
        default:
            echo "satuan tidak ada";
    } 
}

if (isset($_POST['submit'])) {
    $temperatur = floatval($_POST['temperatur']);
    $suhu = $_POST['suhu'];
    $hasil = suhu($suhu, $temperatur);

}

if(isset($_POST['hapus'])) {
    $temperatur = '';
    $suhu = '';
    $hasil = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>APLIKASI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <p>PROGRAM PERHITUNGAN<br>FAKTORIAL, FIBONACCI, KONVERSI SUHU</p>
    </div>
    <hr>
    <form action="" method="post">
        <table class="table1">
        <td colspan="3" class="judul">Faktorial</td>
            <tr>
                <td><label for="n">Masukkan bilangan :</label></td>
                <td><input type="number" name="n" id="n" value="<?= $num; ?>"></td>
            </tr>
            <tr>
                <td>Hasil :</td>
                <td><textarea style="font-size: 25px" type="text" name="hasil" id="hasil" readonly><?=$result; ?></textarea>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Hitung</button>
                <button type="submit" name="hapus">Hapus</button>
                </td>
            </tr>
        </table>
    </form>
    <form action="" method="post">
        <table class="table2">
        <td colspan="3" class="judul">Fibonacci</td>
            <tr>
                <td><label for="a">Masukkan angka :</label></td>
                <td><input type="number" name="a" id="a" value="<?= $angkaa; ?>"></td>
            </tr>
            <tr>
                <td>Hasil :</td>
                <td>
                <textarea style="font-size: 25px" name="hasil" id="hasil" readonly><?= implode(", ", $value); ?></textarea>
                </td>
            </tr>
            <tr>
            <td></td>
                <td><button type="submit">Hitung</button>
                <button type="submit" name="hapus">Hapus</button>
                </td>
            </tr>
        </table>
    </form>
    <form action="" method="post">
        <table class="table3">
        <td colspan="3" class="judul">Suhu</td>
                <td colspan="3"></td>
                <tr>
                    <td>Besar Suhu</td>
                    <td>
                        <input style="width: 95px" type="text" placeholder="0°" name="temperatur" value="<?= $temperatur; ?>">
                        <select class="option" style="width: 100px; height: 43px; font-size: 25px; border-radius: 5px" name="suhu" id="suhu">
                            <option disabled selected hidden>Satuan</option>
                            <option value="C">Celcius</option>
                            <option value="R">Reamur</option>
                            <option value="F">Fahrenheit</option>
                            <option value="K">Kelvin</option>
                        </select>
                    </td>
                </tr>
                <td></td>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Konversi</button>
                        <button type="submit" name="hapus">Hapus</button></td>           
                </tr>
                <td colspan="2">
                    <div class="hasil">
                    <?php foreach ($hasil as $key => $value):?>
                        <span><?= ucwords($key) ." = ".$value. "°" ?></span>
                            <?php endforeach;?>
                    </div>
                </td>
                </tr>
            </table>
        </form>
</body>
</html>