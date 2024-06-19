<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Arrays</title>
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
      ]];
  ?>
  
  <ul>
    <?php foreach ($semuabuku as $buku): ?>
      <li><?= "$buku[nama] ditulis oleh $buku[penulis] dari $buku[dari]"?></li>
    <?php endforeach; ?>
  </ul>

</body>
</html>