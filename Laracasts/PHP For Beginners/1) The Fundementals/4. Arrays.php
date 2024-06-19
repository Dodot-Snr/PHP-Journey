<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
  <?php
    $semuabuku = ["Managing Effectively Academia","Don't Believe Everything You Think","Log Book",];
  ?>
  <h1>Recommand Buku</h1>

  <ul>
    <!-- <?php foreach ($semuabuku as $buku){
      echo "<li> $buku </li>";
    }
    ?> -->

    <?php foreach ($semuabuku as $buku) : ?>
      <li><?=$buku ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>