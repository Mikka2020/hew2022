<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../css/insect_list.css">
  <title>図鑑</title>
</head>

<body>
  <header>
    <div class="logo"></div>
  </header>
  <main>
    <h1 class="none">昆虫図鑑</h1>
    <?php foreach ($insect_list as $key => $insect_categories): ?>
    <section>
      <h2>
        <?php echo $key; ?>
      </h2>
      <div>
        <?php foreach ($insect_categories as $insect): ?>
        <ul>
          <li class="insect-img-container">
            <a href="./insect_detail.php">
              <img src="./../img/insects/kabutomushi.jpg" alt="カブトムシの画像" width="80px" height="80px">
            </a>
          </li>
          <li class="insect-name">
            <?php echo $insect['insect_name']; ?>
          </li>
        </ul>
        <?php endforeach; ?>
      </div>
    </section>
    <?php endforeach; ?>
  </main>
  <footer>
    <?php require_once 'footer.php'; ?>
  </footer>
</body>

</html>