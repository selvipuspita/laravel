<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
</head>
<body>
    <fieldset>
        <legend>Data Pembelian</legend>
        <br>
        <strong>   {{ $singlepembelian['id'] }} </strong><br>
        {{ $singlepembelian['nama_barang'] }} <br>
        {{ $singlepembelian['nama_suplier'] }} <br>
        {{ $singlepembelian['qty'] }} <br>
        {{ $singlepembelian['tgl'] }} <hr>
</fieldset>
</body>
</html>
