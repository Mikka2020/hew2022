<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="./../css/map.css" />
  <title>マップ</title>
</head>

<body>
  <header>
    <p>マップ</p>
  </header>
  <main>
    <div class="example-container" id="example-circle-container"></div>
    <p class="explanation-text">図鑑にとうろくして全てのむしを集めよう！</p>
    <div id="map-container">
      <div class="ratio-container">
        <ul>
          <li>コンプリート率</li>
          <li>42/88</li>
        </ul>
      </div>
      <div id="hokkaidoProgressbar" class="progressbar-container">
        <div>
          北海道
        </div>
      </div>
      <div id="tohokuProgressbar" class="progressbar-container">
        <div>
          東北
        </div>
      </div>
      <div id="kantoProgressbar" class="progressbar-container">
        <div>
          関東
        </div>
      </div>
      <div id="chubuProgressbar" class="progressbar-container">
        <div>
          中部
        </div>
      </div>
      <div id="kinkiProgressbar" class="progressbar-container">
        <div>
          近畿
        </div>
      </div>
      <div id="chugokuProgressbar" class="progressbar-container">
        <div>
          中国
        </div>
      </div>
      <div id="shikokuProgressbar" class="progressbar-container">
        <div>
          四国
        </div>
      </div>
      <div id="kyushuProgressbar" class="progressbar-container">
        <div>
          九州
          沖縄
        </div>
      </div>
    </div>
  </main>
  <footer>
    <?php require_once './footer.php'; ?>
  </footer>
  <script src="./../js/progressbar.js"></script>
  <script src="./../js/map.js"></script>
</body>

</html>