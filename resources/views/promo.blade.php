<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo</title>
</head>
<body>
   
   
    @if( $barang && $kode)
    promo untuk <strong>&nbsp;<?php echo  $barang ?></strong>
    dengan kode <strong>&nbsp;<?php echo  $kode ?></strong>
    
    @elseif($barang)
     promo untuk <strong>&nbsp;<?php echo  $barang ?></strong><br>
    @else
      semua promo barang
    @endif 
</body>
</html>