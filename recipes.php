<?php
// Include api.php to retrieve data from api.
include 'api.php';
$idMeals = $_GET['id'];

// Filter recipes by id.
$found = array_filter($data['recipes'], fn($val) => $val['id'] == $idMeals);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/main.css" type="text/css" media="all" />
  <title>Resep</title>
</head>
<body>
  <div class="container">
    <div class="rbox">
      <?php foreach ($found as $value): ?>
      <img src="<?=$value['image']?>" alt="" />
      <h3><?=$value['name']?></h3>
      <p>Ingredients:</p>
      <ul>
        <?php foreach($value['ingredients'] as $val):?>
          <li><?=$val?></li>
        <?php endforeach; ?>
      </ul>
      <p>Instructions:</p>
      <ul>
        <?php foreach($value['instructions'] as $val):?>
          <li><?=$val?></li>
        <?php endforeach; ?>
      </ul>
      <p 
        class="additional">
        Prepare time: <?=$value['prepTimeMinutes']?> Minutes
      </p>
      <p 
        class="additional">
        Cook time: <?=$value['cookTimeMinutes']?> Minutes
      </p>
      <p 
        class="additional">
        Servings: <?=$value['servings']?>
      </p>
      <p 
        class="additional">
        Cuisine: <?=$value['cuisine']?>
      </p>
      <p
        class="additional">
        Difficult: <?=$value['difficulty']?>
      </p>
    
      <?php endforeach; ?>
      
    </div>
  </div>
</body>
</html>