<?php
// Include api.php to retrieve data.
include 'api.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/main.css" type="text/css" media="all" />
  <title>Daftar Resep</title>
</head>
<body>
  <div class="container">
    <?php foreach ($data['recipes'] as $value): ?>
  <!-- Redorect user to recipes.php and send the value id to it -->
  <a href="recipes.php?id=<?=$value['id']?>">
      <div class="rbox">
        <img src="<?=$value['image']?>" alt="" />
        <h3><?=$value['name']?></h3>
      </div>
    </a>
    <?php endforeach; ?>
  </div>
</body>
</html>