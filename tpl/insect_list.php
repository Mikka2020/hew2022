<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../css/destyle.css">
  <link rel="stylesheet" href="./../css/insect_list.css">
  <title>図鑑</title>
</head>

<body>
  <header></header>
  <main>
    <h1 class="none">昆虫図鑑</h1>
    <section>
      <h2>カブトムシ</h2>
      <div>
        <ul>
          <li class="insect-img-container">
            <a href="">
              <img src="./../img/insects/kabutomushi.jpg" alt="カブトムシの画像" width="80px" height="80px">
            </a>
          </li>
          <li class="insect-name">カブトムシ</li>
        </ul>
        <ul>
          <li class="insect-img-container">
            <a href="">
              <img src="./../img/insects/kokabutomushi.jpeg" alt="コカブトムシの画像" width="80px" height="80px">
            </a>
          </li>
          <li>コカブトムシ</li>
        </ul>
        <ul>
          <li class="insect-img-container">
            <a href="">
              <img src="./../img/insects/saikabuto.jpg" alt="サイカブトの画像" width="80px" height="80px">
            </a>
          </li>
          <li>サイカブト</li>
        </ul>
      </div>
    </section>
    <section>
      <h2>クワガタムシ</h2>
      <div>
        <ul>
          <li class="insect-img-container">
            <a href="">
              <img src="./../img/insects/kabutomushi.jpg" alt="カブトムシの画像" width="80px" height="80px">
            </a>
          </li>
          <li>カブトムシ</li>
        </ul>
        <ul>
          <li class="insect-img-container">
            <a href="">
              <img src="./../img/insects/kokabutomushi.jpeg" alt="コカブトムシの画像" width="80px" height="80px">
            </a>
          </li>
          <li>コカブトムシ</li>
        </ul>
        <ul>
          <li class="insect-img-container">
            <a href="">
              <img src="./../img/insects/saikabuto.jpg" alt="サイカブトの画像" width="80px" height="80px">
            </a>
          </li>
          <li>サイカブト</li>
        </ul>
        <ul>
          <li class="insect-img-container">
            <a href="">
              <img src="./../img/insects/kabutomushi.jpg" alt="カブトムシの画像" width="80px" height="80px">
            </a>
          </li>
          <li>カブトムシ</li>
        </ul>
      </div>

    </section>

    <?php // ユーザーが登録しているむしの一覧を表示?>
    <?php for ($i=0; $i < count($insect_list); $i++) { ?>
    <?php if ($i == 0) { ?>
    <ul>
      <li class="insect-img-container">
        <img src="./../img/<?php echo $insect_list[$i]['insect_photo']; ?>"
          alt="<?php echo $data_list[$i]['insect_name'] . 'の画像'; ?>" width="80px" height="80px">
      </li>
      <li class="insect-img-container">
        <?php echo $data_list[$i]['insect_name']; ?>
      </li>
    </ul>
    <?php } else { ?>
    <ul>
      <li class="insect-img-container">
        <img src="./../img/<?php echo $insect_list[$i]['insect_photo']; ?>"
          alt="<?php echo $data_list[$i+1]['insect_name'] . 'の画像'; ?>" width="80px" height="80px">
      </li>
      <li class="insect-img-container">
        <?php echo $data_list[$i+1]['insect_name']; ?>
      </li>
    </ul>
    <?php } ?>
    <?php } ?>
  </main>
  <footer></footer>
</body>

</html>