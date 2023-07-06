<?php 
error_reporting(0);
    if (isset($_POST['proses'])) {
    // Isset digunakan untuk memeriksa apakah suatu variabel sudah diperiksa atau belum
        
        // Variabel
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        // Intval digunakan untuk mengembalikan nilai integer variabel
        $jumlah = intval($jumlah);
        $harga_total = $harga * $jumlah;
        $bonus = "Sorry, Belom Bisa Dapet Bonus!";

        // Percabangan Switch Case untuk diskon
        switch ($jumlah) { 
            case $jumlah>=5 && $jumlah<10:
                $diskon = 5/100 * $harga_total;
                $bonus = "Voucher Belanja";
                break;
            case $jumlah>=10 && $jumlah<15:
                $diskon = 10/100 * $harga_total;
                $bonus = "Paket Alat Tulis";
                break;    
            case $jumlah>=15 && $jumlah<20:
                $diskon = 10/100 * $harga_total;
                $bonus = "Totebag";
                break;
            case $jumlah>=20:
                $diskon = 15/100 * $harga_total;
                $bonus = "Tas Ransel";
                break;

            default:
                $diskon = 0;
                break;
        }
        
        $total_bayar = $harga_total - $diskon;
    }
    elseif (isset($_POST['hilang'])) {
        $nama = "";
        $harga = "";
        $jumlah = "";
        $harga_total = "";
        $diskon = "";
        $total_bayar = "";
        $bonus = "";
    }
 ?>

<html>
    <head>
        <title>BOOK STORE</title>
        <style>
            * {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            body{
                background-size: auto;
            }
            .penjualan{
                margin-top: 5%;
                width: max-content;
                background-color: #b79676;
                border: 5px solid;
                padding: 3%;
                border-radius: 20px;
            }
            td{
                font-size: 18px;
            }
            input{
                border-radius: 5px;
            }
            select{
                border-radius: 5px;
            }
            textarea{
                border-radius: 5px;
            }

            .penjualan button {
                padding: 10px;         
                border-radius: 5px;
                background-color: #e9e0d6;
            }
        </style>
    </head>
    <body background="buku.jpg">
        <center>
            <div class="penjualan">
            <table cellpadding="5">
            <caption><h2>BOOK STORE GRAMEDIA</h2></caption>
            <form action="" method="post">
            <!-- Method Post yaitu metode pengiriman data yang datanya tidak disimpan di URL -->
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td>
                        <select name="nama" id="nama">
                            <option>Laut Bercerita<br>
                            <option>Bumi<br>
                            <option>Hujan<br>
                            <option>Negeri Di Ujung Tanduk<br>
                            <option>Negeri Para Bedebah<br>
                            <option>Tentang Kamu<br>
                        </select></td>
                </tr>
                <tr>
                    <td>Harga Barang</td>
                    <td>:</td>
                    <td><input type="text" name="harga" size="27" value="<?= $harga; ?>"  required></td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah" size="27" value="<?= $jumlah; ?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" name="proses">BELI</button>
                        <button type="submit" name="hilang">KOSONGKAN</button>
                    </td>
                </tr>
            </form>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td><input type="text" name="total" size="27" value="<?= $harga_total; ?>"></td>
            </tr>
            <tr>
                <td>Diskon</td>
                <td>:</td>
                <td><input type="text" name="diskon" size="27" value="<?= $diskon; ?>"></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td><input type="text" name="total_bayar" size="27" value="<?= $total_bayar; ?>"></td>
            </tr>
            <tr>
                <td>Bonus</td>
                <td>:</td>
                <td>
                <textarea name="bonus" id="bonus" cols="27" rows="4"><?= $bonus; ?></textarea>
                </td>
            </tr>
            </table>
            </div>
            </center>
    </body>
</html>