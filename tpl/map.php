<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./../css/map.css" />
  <title>マップ</title>
</head>

<body>
  <header>
    <p>マップ</p>
  </header>
  <main>
    <p class="explanation-text">図鑑に登録して全てのむしを集めよう！</p>
    <article id="map-container">
      <section class="ratio-container">
        <ul>
          <li>コンプリート率</li>
          <li>
            <?php echo registered_counter($_COOKIE['user_id']); ?>/88
          </li>
        </ul>
      </section>
      <section id="hokkaidoProgressbar" class="progressbar-container">
        <div>
        </div>
      </section>
      <section id="tohokuProgressbar" class="progressbar-container">
        <div>
        </div>
      </section>
      <section id="kantoProgressbar" class="progressbar-container">
        <div>
        </div>
      </section>
      <section id="chubuProgressbar" class="progressbar-container">
        <div>
        </div>
      </section>
      <section id="kinkiProgressbar" class="progressbar-container">
        <div>
        </div>
      </section>
      <section id="chugokuProgressbar" class="progressbar-container">
        <div>
        </div>
      </section>
      <section id="shikokuProgressbar" class="progressbar-container">
        <div>
        </div>
      </section>
      <section id="kyushuProgressbar" class="progressbar-container">
        <div>
        </div>
      </section>
    </article>
    <div class="modal-bg"></div>
    <article id="modal-container">
      <section class="hokkaido-modal-container modal-content">
        <h3>北海道</h3>
        <ul>
          <li>
            <img src="./../img/icon/no-data-icon.png" alt="">
          </li>
          <li>
            <img src="./../img/icon/no-data-icon.png" alt="">
          </li>
          <li>
            <img src="./../img/icon/no-data-icon.png" alt="">
          </li>
        </ul>
      </section>
    </article>
  </main>
  <footer>
    <?php require_once './footer.php'; ?>
  </footer>
  <script src="./../js/progressbar.js"></script>
  <script src="./../js/map.js"></script>
</body>

</html>