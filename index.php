<center><h1>Bahan Bakar</h1></center> 
<?php 
include 'proses.php';
$proses = new Beli();
$proses->setHarga(15420, 16130, 18310, 16510);//parameter yg tdi
if (isset($_POST['kirim'])) {
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];
   
    $proses->hargaBeli();
    $proses->cetakPembelian();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <center>       
        <table>
            <tr>
                <td>Masukan Jumlah Liter</td>
                <td>:</td>
                <td><input type="number" id="liter" name="liter" size="25"></td>
            </tr>
            <tr>
                <td>Pilih Tipe Bahan Bahan Bakar</td>
                <td>:</td>
                <td>
                    <select name="jenis" id="jenis">
                        <option value="SSuper">Shell power</option>
                        <option value="SVPower">Shell V-power</option>
                        <option value="SVPowerDiesel">Shell V-power Diesel</option>
                        <option value="SVPowerNitro">Shell V-power nitro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><button name="kirim" type="submit">Beli</button></td>
            </tr>
        </table>
    </center>
 </form>
  

</body>
</html>