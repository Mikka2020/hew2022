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
        <div id="newsbtn"><a href=""></a></div>
        <p>おしらせ</p>
      </section>
      <section>
        <div id="questbtn"><a href="./quest.php"></a></div>
        <p>クエスト</p>
      </section>
      <section>
        <a href=""><div id="eventbtn"></div></a>
        <p>イベント</p>
      </section>
    </article>

    <article class="quest-area">
      <ul class="sort-tab">
        <li class="active">ウィークリー</li>
        <li>メイン</li>
        <li>イベント</li>
      </ul>
      <div class="quest">
        <section>
          <div class=""></div>
          <p>むしを３匹とうろくしてみよう！</p>
          <ul>
            <li>経験値 10</li>
            <li>期限 なし</li>
          </ul>
        </section>
        <section>
          <div class=""></div>
          <p>むしを３匹とうろくしてみよう！</p>
          <ul>
            <li>経験値 10</li>
            <li>期限 なし</li>
          </ul>
        </section>
      </div>
    </article>
  </main>

  <footer>
    <?php require_once './footer.php'; ?>
  </footer>
</body>

</html>