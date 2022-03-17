<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./../css/quest.css" />
  <title>Document</title>
</head>

<body>
  <header>
    <p class="back-icon">
      <a href="#" onClick="history.back(); return false;">
        <img src="../img/icon/戻るアイコン.svg" alt="" width="24px" height="">
      </a>
    </p>
    <p>ホーム</p>
  </header>
  <main>
    <div id="quests">
      <h2>クエスト</h2>
      <ul>
        <li id="tab-1">ウィークリー</li>
        <li id="tab-2" class="active">メイン</li>
        <li id="tab-3">イベント</li>
      </ul>

      <div id="weekly-quest" class="inactive-content">
        <section>
          <div class="quest-container">
            <p>
              <?php echo "むしを１０匹とうろくしてみよう"; ?>
            </p>
            <p>
              経験値 <?php echo "10" ?>　期限 なし
            </p>
          </div>
          <div class="quest-container">
            <p>
              <?php echo "ヤマトシジミを見つけてみよう！"; ?>
            </p>
            <p>
              経験値 <?php echo "10" ?>　期限 なし
            </p>
          </div>
        </section>
      </div>

      <div id="main-quest">
        <section>
          <div class="quest-container">
            <p>
              <?php echo "むしを３匹とうろくしてみよう"; ?>
            </p>
            <p>
              経験値 <?php echo "5" ?>　期限 なし
            </p>
          </div>
          <div class="quest-container">
            <p>
              <?php echo "アゲハチョウを見つけてみよう！"; ?>
            </p>
            <p>
              経験値 <?php echo "3" ?>　期限 なし
            </p>
          </div>
          <div class="quest-container">
            <p>
              <?php echo "モンシロチョウを見つけてみよう！"; ?>
            </p>
            <p>
              経験値 <?php echo "3" ?>　期限 なし
            </p>
          </div>
          <div class="quest-container">
            <p>
              <?php echo "むしを１匹とうろくしてみよう"; ?>
            </p>
            <p>
              経験値 <?php echo "2" ?>　期限 なし
            </p>
          </div>
        </section>
      </div>

      <div id="event-quest" class="inactive-content">
        <section>
          <div class="quest-container">
            <p>
              <?php echo "アリを３匹とうろくしてみよう"; ?>
            </p>
            <p>
              経験値 <?php echo "10" ?>　期限 あと５日
            </p>
          </div>
          <div class="quest-container">
            <p>
              <?php echo "セミを１匹見つけてみよう！"; ?>
            </p>
            <p>
              経験値 <?php echo "10" ?>　期限 あと５日
            </p>
          </div>
        </section>
      </div>

      
    </div>
  </main>
  <footer>
    <?php require_once './footer.php'; ?>
  </footer>
  <script src="./../js/quest.js"></script>
</body>

</html>