<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>PHP Веб-сайт</title>
</head>
<body>

<?php require "blocks/header.php" ?>

<div class="container mt-5">
    <h3 class="mb-5">Наші статті</h3>
  
    <div class="d-flex flex-wrap">
  <?php
    for($i = 0; $i < 5; $i++):
  ?>
  <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Просто текст</h4>
      </div>
    <div class="card-body">
      <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
      <ul class="list-unstyled mt-3 mb-4">
        <li>10 users included</li>
        <li>2 GB of storage</li>
        <li>Email support</li>
        <li>Help center access</li>
      </ul>
      <button type="button" class="btn btn-lg btn-block btn-outline-primary">Докладніше</button>
    </div>
  </div>
  <?php endfor; ?>
</div>
</div>

<?php require "blocks/footer.php" ?>

</body>
</html>