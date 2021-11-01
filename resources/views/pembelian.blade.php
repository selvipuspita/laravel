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
        @foreach ($pembelian as $data) 
        <strong> {{$data->nama_barang}} </strong><br>
        {{$data->nama_suplier}} <br>
        {{$data->qty}}<br>
        {{$data->tgl}} <hr>
        @endforeach
</fieldset>
</body>
</html>