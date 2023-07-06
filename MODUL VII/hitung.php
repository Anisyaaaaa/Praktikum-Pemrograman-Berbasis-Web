<!DOCTYPE html>
<html>
<head>
    <title>Hasil</title>
</head>
<body>
    
    <h1>Hasil Perhitungan</h1>
    
    <?php
    // Mendapatkan data dari form
    $data = $_POST['data'];

    // Memisahkan data menjadi array
    $data_array = explode(',', $data);

    // Menghapus spasi pada setiap elemen array
    $data_array = array_map('trim', $data_array);

    // Menghitung jumlah data
    $jumlah_data = count($data_array);

    // Menghitung mean
    $mean = array_sum($data_array) / $jumlah_data;

    // Menghitung modus
    $frekuensi = array_count_values($data_array);
    $modus = array_keys($frekuensi, max($frekuensi));

    // Menghitung maksimum dan minimum
    $max = max($data_array);
    $min = min($data_array);
    ?>

    <center>
    <div class="result">
        <table border="1">
            <tr>
                <td>Data</td>
                <td>:</td>
                <td><?php echo $data; ?></td>
            </tr>
            <tr>
                <td>Jumlah Data</td>
                <td>:</td>
                <td><?php echo $jumlah_data; ?></td>
            </tr>
            <tr>
                <td>Mean</td>
                <td>:</td>
                <td><?php echo $mean; ?></td>
            </tr>
            <tr>
                <td>Modus</td>
                <td>:</td>
                <td><?php echo implode(', ', $modus); ?> </td>
            </tr>
            <tr>
                <td>Maksimum</td>
                <td>:</td>
                <td><?php echo $max; ?></td>
            </tr>
            <tr>
                <td>Minimun</td>
                <td>:</td>
                <td><?php echo $min; ?></td>
            </tr>
        </table>
    </div>
</center>
</body>

<style>
        body {
            text-align: center;
            font-family: Verdana;
        }
        h1 {
            margin-top: 7%;
            color: #997950;
        }
        table tr td{
            padding: 15px;
            font-size: 25px;
            text-align: center;
        }
    </style>
    
</html>
