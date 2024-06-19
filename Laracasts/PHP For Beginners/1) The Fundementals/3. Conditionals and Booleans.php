<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditionals and Booleans</title>
  <style>
    body{
      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif0;
    }
  </style>
</head>
<body>
  <?php
    $nama = "Managing Effectively Academia";
    $baca = true;

    // if($baca){
    //   $mesej = "Kamu dah baca $nama";
    // }else{
    //   $mesej = "Kamu belum baca $nama";
    // }
    $mesej = $baca ? "Kamu dah baca $nama" : "Kamu belum baca $nama";
  ?>


  <h1>
    <!-- <?php echo $mesej;?>  -->
    <?=$mesej ?>
  </h1>
</body>
</html>