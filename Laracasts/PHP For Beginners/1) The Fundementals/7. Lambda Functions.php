<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lambda Functions</title>
</head>
<body>
  <?php
    $semuabuku = [
      [
        'nama' => 'Managing Effectively Academia',
        'penulis' => 'Graeme Wilkinson',
        'dari' => 'Sunway University Press',
        'tahun' => '1990'
      ],[
        'nama' => 'Dont Believe Everything You Think',
        'penulis' => 'Joseph Nguyen',
        'dari' => 'MPH',
        'tahun' => '1985'
      ],[
        'nama' => 'Log Book',
        'penulis' => 'Latihan Industri',
        'dari' => 'Politeknik Merlimau',
        'tahun' => '1954'
      ],[
        'nama' => 'Jurnal Refleksi',
        'penulis' => 'Latihan Industri',
        'dari' => 'Politeknik Dunggun',
        'tahun' => '2002'
      ]];
  // $filterbyauthor = function ($semuabuku, $penulis){
  //   $filterbuku = [];
  //   foreach ($semuabuku as $buku){
  //     if($buku['penulis'] === $penulis){
  //       $filterbuku[] = $buku;
  //     }
  //   }return $filterbuku;
  // };

  // $filterbuku = $filterbyauthor($semuabuku, 'Latihan Industri');

  function filter($items, $fn){
    $filteritem = [];
    foreach ($items as $item){
      if ($fn($item)){
        $filteritem[] = $item;
      }
    }return $filteritem;
  };

  // $filterbuku = filter($semuabuku, 'penulis','Latihan Industri');
  $filterbuku = array_filter($semuabuku, function($buku){
    return $buku['tahun'] >= 1990;
  });
  
  ?>
  
  <ul>
    <?php foreach ($filterbuku as $buku): ?>
        <li><?= "$buku[nama] ditulis oleh $buku[penulis] dari $buku[dari]"?></li>
    <?php endforeach; ?>
  </ul>

</body>
</html>