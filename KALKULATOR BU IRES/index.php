
<?php
error_reporting(error_level: 0);
ini_set('display_errors', 0);
            if(isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $barang1 = $_POST['barang1'];
                $barang2 = $_POST['barang2'];
                $barang3 = $_POST['barang3'];

                $total_belanja=$barang1+$barang2+$barang3;
            } 

            
            if($total_belanja >= 50000){
                $diskon = $total_belanja*0.1;
            }
            $total_bayar = $total_belanja-$diskon;
             ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga dan Diskon</title>
    <style>
        table{
            border:1px solid black;
            border-collapse:collapse;
            width: 400px;
        }
    </style>
</head>
<body>
    <h2>Toko bungaaa</h2>
    <form action="index.php" method="post" enctype="">
        <table>
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            
            <tr>
                <td>Masukkan Barang 1</td>
                <td>:</td>
                <td><input type="text" name="barang1" required></td>
            </tr>

            <tr>
                <td>Masukkan Barang 2</td>
                <td>:</td>
                <td><input type="text" name="barang2" required></td>
            </tr>

            <tr>
                <td>Masukkan Barang 3</td>
                <td>:</td>
                <td><input type="text" name="barang3" required></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
            <br>


           
        </table>
    </form>
    
    <table margin="12px">
            <tr>
                <td align="center" colspan="2" style="border-bottom: 1<b>"> Toko bungaaa</td>
            </tr>

            <tr>
                <td>Nama Pembeli</td>
                <td>: &nbsp;<?php echo "$nama"; ?></td>
            </tr>

            <tr>
                <td>Total Belanja</td>
                <td>: &nbsp;<?php echo "Rp.$total_belanja"; ?></td>
            </tr>

            <tr>
                <td>Diskon</td>
                <td>: &nbsp;<?php echo "Rp.$diskon"; ?></td>
            </tr>

            <tr>
                <td>Total Bayar</td>
                <td>: &nbsp;<?php echo "Rp.$total_bayar"; ?></td>
            </tr>
    </table>
</body>
</html>