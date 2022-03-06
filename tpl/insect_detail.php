<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../css/insect_detail.css">
  <title>詳細画面</title>
</head>

<body>
  <header>
    <p>カブトムシ</p>
  </header>
  <main>
    <div class="insect-img-container">
      <img src="./../img/insects/kabutomushi.jpg" alt="カブトムシの画像">
    </div>
    <ul class="contents-tabs">
      <li class="active">がいよう</li>
      <li>せつめい</li>
      <li>まめちしき</li>
    </ul>
    <section>
      <?php foreach ($insect_data as $row) : ?>
      <dl>
        <div class="data-1">
          <dt>がくめい</dt>
          <dd>
            <?php echo $row['insect_scientific_name']; ?>
          </dd>
        </div>
        <div class="data-1">
          <dt>ぶんるい</dt>
          <div>
            <dd>
              <?php echo $row['insect_moku']; ?>目
            </dd>
            <dd>
              <?php echo $row['insect_amoku']; ?>亜目
            </dd>
            <dd>
              <?php echo $row['insect_ka']; ?>科
            </dd>
            <dd>
              <?php echo $row['insect_aka']; ?>亜科
            </dd>
          </div>
        </div>
        <div class="data-1">
          <dt>レア度</dt>
          <dd>
            <?php
              for ($i=0; $i < $row['rarity'] ; $i++) {
                  echo ' ★ ';
              }
            ?>
            <?php
              for ($i=0; $i < $rea; $i++) {
                  echo ' ☆ ';
              }
            ?>
          </dd>
        </div>
      </dl>
      <?php endforeach; ?>
    </section>

  </main>
  <footer>
    <?php require_once 'footer.php'; ?>
  </footer>
</body>

</html>