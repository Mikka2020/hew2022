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
    <section id="kabutomushi-container">
      <h2>カブトムシ</h2>
      <div>
        <ul>
          <li class="insect-img-container">
            <img src="./../img/kabutomushi.jpg" alt="カブトムシの画像" width="80px" height="80px">
          </li>
          <li class="insect-name">カブトムシ</li>
        </ul>
        <ul>
          <li class="insect-img-container">
            <img src="./../img/kokabutomushi.jpeg" alt="コカブトムシの画像" width="80px" height="80px">
          </li>
          <li>コカブトムシ</li>
        </ul>
        <ul>
          <li class="insect-img-container">
            <img src="./../img/saikabuto.jpg" alt="サイカブトの画像" width="80px" height="80px">
          </li>
          <li>サイカブト</li>
        </ul>
      </div>
    </section>
    <section id="kuwagatamushi-container">
      <h2>クワガタムシ</h2>
      <div>
        <ul>
          <li class="insect-img-container">
            <img src="./../img/kabutomushi.jpg" alt="カブトムシの画像" width="80px" height="80px">
          </li>
          <li>カブトムシ</li>
        </ul>
        <ul>
          <li class="insect-img-container">
            <img src="./../img/kokabutomushi.jpeg" alt="コカブトムシの画像" width="80px" height="80px">
          </li>
          <li>コカブトムシ</li>
        </ul>
        <ul>
          <li class="insect-img-container">
            <img src="./../img/saikabuto.jpg" alt="サイカブトの画像" width="80px" height="80px">
          </li>
          <li>サイカブト</li>
        </ul>
        <ul>
          <li class="insect-img-container">
            <img src="./../img/kabutomushi.jpg" alt="カブトムシの画像" width="80px" height="80px">
          </li>
          <li>カブトムシ</li>
        </ul>
      </div>

    </section>
    <table>
      <?php foreach ($insect_list as $key => $row) { ?>
      <?php foreach ($row as $key => $value) { ?>
      <tr>
        <td>
          <?php echo $key; ?>
        </td>
      </tr>
      <?php } ?>
      <?php } ?>
    </table>
  </main>
  <footer></footer>
</body>

</html>