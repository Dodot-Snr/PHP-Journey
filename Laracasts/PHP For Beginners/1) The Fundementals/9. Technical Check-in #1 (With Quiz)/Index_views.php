<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Technical Check-in #1 (With Quiz)</title>
</head>
<body>
  <h1><?=$Pelajar['nama'] ?></h1>

  <ul>
    <?php foreach($Pelajar['belajar'] as $student): ?>
      <li><?=$student ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>