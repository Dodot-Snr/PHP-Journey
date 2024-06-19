<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions and Filters</title>
</head>
<body>
  <?php
    $semuabuku = [
      [
        'nama' => 'Managing Effectively Academia',
        'penulis' => 'Graeme Wilkinson',
        'dari' => 'Sunway University Press'
      ],[
        'nama' => 'Dont Believe Everything You Think',
        'penulis' => 'Joseph Nguyen',
        'dari' => 'MPH'
      ],[
        'nama' => 'Log Book',
        'penulis' => 'Latihan Industri',
        'dari' => 'Politeknik Merlimau'
      ],[
        'nama' => 'Jurnal Refleksi',
        'penulis' => 'Latihan Industri',
        'dari' => 'Politeknik Dunggun'
      ]];
  function filterbyauthor($semuabuku, $penulis){
    $filterbuku = [];
    foreach ($semuabuku as $buku){
      if($buku['penulis'] === $penulis){
        $filterbuku[] = $buku;
      }
    }return $filterbuku;
  }
  
  ?>
  
  <ul>
    <?php foreach (filterbyauthor($semuabuku, 'Latihan Industri') as $buku): ?>
        <li><?= "$buku[nama] ditulis oleh $buku[penulis] dari $buku[dari]"?></li>
    <?php endforeach; ?>
  </ul>

</body>
</html>