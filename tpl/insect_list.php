<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./../css/insect_list.css">
  <title>図鑑</title>
</head>

<body>
  <header>
    <!-- <div class="logo"></div> -->
    <p>ずかん</p>
  </header>
  <main>
    <h1 class="none">昆虫図鑑</h1>
    <ul class="sort-tab">
      <li class="active">カテゴリ</li>
      <li>ぶんるい</li>
      <li>五十音順</li>
    </ul>
    <!-- <div class="content-top-bg"></div> -->
    <div id="category-container">
      <?php foreach ($insect_list as $key => $insect_categories): ?>
      <section>
        <h2>
          <?php echo $key; ?>
        </h2>
        <div>
          <?php foreach ($insect_categories as $insect): ?>
          <ul>
            <li class="insect-img-container">
              <a href="./insect_detail.php?id=<?php echo $insect['insects_insect_id']; ?>">
                <img
                  src="<?php echo all_insect_check($_COOKIE['user_id'])[$insect['insects_insect_id']]? './../img/insects/kabutomushi.jpg' : './../img/icon/no-data-icon.png'; ?>"
                  alt="カブトムシの画像" width="80px" height="80px">
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
    </div>
  </main>
  <footer>
    <?php require_once 'footer.php'; ?>
  </footer>
</body>

</html>