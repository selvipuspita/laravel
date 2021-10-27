<html>
    <head>
        <title>Belajar Laravel</title>
</head>
<body>
    @if($nama == null)
    Silahkan isi biodata anda
    @elseif ($nama != null)
    nama : {{$nama}} <br>
    @endif
    @if ($alamat != null)
    alamat : {{$alamat}}<br>
    @endif
    @if ($jk != null)
    jenis kelamin : {{$jk}} <br>
    @endif
    @if ($tb != null)
    tinggi badan : {{$tb}} <br>
    @endif
    @if ($bb != null)
    berat badan : {{$bb}} <br>
    @endif j
</body>
</html>