<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./../css/home.css">
  <title>ホーム</title>
</head>

<body>
  <header>
    <p>ホーム</p>
  </header>
  
  <main>
    <article class="user-area">
      <div class="rank">
        <div class="rank-background"></div>
        <div class="rank-center">
          <p>Rank</p>
          <p>12</p>
        </div>
      </div>
      <ul>
        <li class="user-title">むしはかせ</li>
        <li class="user-name">かわしま</li>
        <li class="rank-count">つぎのランクまで40</li>
      </ul>
    </article>

    <article class="link-area">
      <section>
        <a href="./info.php"><div id="newsbtn"></div></a>
        <p>おしらせ</p>
      </section>
      <section>
        <a href="./quest.php"><div id="questbtn"></div></a>
        <p>クエスト</p>
      </section>
      <section>
        <a href=""><div id="eventbtn"></div></a>
        <p>イベント</p>
      </section>
    </article>

    <article class="quest-area">
      <ul class="sort-tab">
        <li id="tab-1">ウィークリー</li>
        <li id="tab-2" class="active">メイン</li>
        <li id="tab-3">イベント</li>
      </ul>

      <div id="quest-1" class="inactive-content">
        <section>
          <div class=""></div>
          <p>むしを１０匹とうろくしてみよう！</p>
          <ul>
            <li>経験値 10</li>
            <li>期限 なし</li>
          </ul>
        </section>
        <section>
          <div class=""></div>
          <p>ヤマトシジミを見つけてみよう！</p>
          <ul>
            <li>経験値 10</li>
            <li>期限 なし</li>
          </ul>
        </section>
      </div>

      <div id="quest-2">
        <section>
          <div class=""></div>
          <p>むしを３匹とうろくしてみよう！</p>
          <ul>
            <li>経験値 3</li>
            <li>期限 なし</li>
          </ul>
        </section>
        <section>
          <div class=""></div>
          <p>アゲハチョウを見つけてみよう！</p>
          <ul>
            <li>経験値 5</li>
            <li>期限 なし</li>
          </ul>
        </section>
      </div>

      <div id="quest-3" class="inactive-content">
        <section>
          <div class=""></div>
          <p>アリを３匹とうろくしてみよう！</p>
          <ul>
            <li>経験値 10</li>
            <li>期限 あと５日</li>
          </ul>
        </section>
        <section>
          <div class=""></div>
          <p>セミを１匹見つけてみよう！</p>
          <ul>
            <li>経験値 10</li>
            <li>期限 あと５日</li>
          </ul>
        </section>
      </div>
    </article>
  </main>
  <footer>
    <?php require_once './footer.php'; ?>
  </footer>
  <script src="./../js/home.js"></script>
</body>

</html>