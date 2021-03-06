<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./../css/mypage.css">
  <title>マイページ</title>
</head>

<body>
  <h1 class="none">むしコレ</h1>
  <header>
    <h2>マイページ</h2>
    <form action="" method="post">
      <div>
        <button type="submit" name="btn"><img src="./../img/icon/ログアウトアイコン.png" alt="ログアウトアイコン"></button>
        <p>ログアウト</p>
      </div>
    </form>
  </header>

  <main>
    <article class="user-area">
      <div class="rank">
        <div class="rank-background"></div>
        <div class="rank-center">
          <p class="rank-text">Rank</p>
          <p class="user-rank">12</p>
        </div>
      </div>
      <ul>
        <li class="user-title">むしはかせ</li>
        <li class="user-name">かわしま</li>
      </ul>
    </article>

    <article class="btn-area">
      <section>
        <a href=""><div class="mypagebtn" id="musikagobtn"></div></a>
        <p>むしかご</p>
      </section>
      <section>
        <a href=""><div class="mypagebtn" id="itembtn"></div></a>
        <p>もちもの</p>
      </section>
      <section>
        <a href=""><div class="mypagebtn" id="profilebtn"></div></a>
        <p>プロフィール</p>
      </section>
      <section>
        <a href=""><div class="mypagebtn" id="playbtn"></div></a>
        <p>あそびかた</p>
      </section>
      <section>
        <a href=""><div class="mypagebtn" id="helpbtn"></div></a>
        <p>ヘルプ</p>
      </section>
      <section>
        <a href=""><div class="mypagebtn" id="settingbtn"></div></a>
        <p>せってい</p>
      </section>
    </article>
  </main>

  <footer>
    <?php require_once './footer.php'; ?>
  </footer>

</body>

</html>