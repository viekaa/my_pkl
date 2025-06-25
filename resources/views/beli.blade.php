<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli</title>
</head>
<body>
    Barang : <b>{{$a}}</b> <br>
    Jumlah : <b>{{$b}}</b> <br>
    
    @if($b > 100)
    Anda dapat cashback sebesar 10% 
    @elseif($b >50)
     Anda dapat cashback sebesar 5%
    @else
    Anda tidak mendapatkan cashback
    @endif 
</body>
</html>