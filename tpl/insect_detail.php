<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../css/insect_detail.css">
  <title>詳細画面</title>
</head>

<body>
  <header>
    <div class="logo"></div>
  </header>
  <main>
    <?php foreach ($insect_data as $row) { ?>
      がくめい <?php echo $row['insect_scientific_name']; ?>
      <br>
      ぶんるい <?php echo $row['insect_moku']; ?>目
      <?php echo $row['insect_amoku']; ?>亜目
      <?php echo $row['insect_ka']; ?>科
      <?php echo $row['insect_aka']; ?>亜科
      <br>
      レア度 <?php for ($i=0; $i < $row['rarity'] ; $i++) { ?><?php echo ' ★ '; ?><?php } ?>
      <?php for ($i=0; $i < $rea; $i++) { ?><?php echo ' ☆ '; ?><?php } ?>
    <?php } ?>
  </main>
  <footer>
    <?php require_once 'footer.php'; ?>
  </footer>
</body>

</html>