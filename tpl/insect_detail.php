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
    <p class="back-icon">
      <a href="#" onClick="history.back(); return false;">
        <img src="../img/icon/戻るアイコン.svg" alt="" width="24px" height="">
      </a>
    </p>
    <p>
      <?php echo $insect_data['insect_name']; ?>
    </p>
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
      <dl>
        <div class="data-1">
          <dt>なまえ</dt>
          <dd>
            <?php echo $insect_data['insect_name']; ?>
          </dd>
        </div>
        <div class="data-1">
          <dt>がくめい</dt>
          <dd>
            <?php echo $insect_data['insect_scientific_name']; ?>
          </dd>
        </div>
        <div class="data-1">
          <dt>ぶんるい</dt>
          <div>
            <dd>
              <?php echo $insect_data['insect_moku']; ?>目
            </dd>
            <dd>
              <?php echo $insect_data['insect_amoku']; ?>亜目
            </dd>
            <dd>
              <?php echo $insect_data['insect_ka']; ?>科
            </dd>
            <dd>
              <?php echo $insect_data['insect_aka']; ?>亜科
            </dd>
          </div>
        </div>
        <div class="data-1">
          <dt>レア度</dt>
          <dd>
            <?php
              for ($i=0; $i < $insect_data['rarity'] ; $i++) {
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
    </section>

  </main>
  <footer>
    <?php require_once 'footer.php'; ?>
  </footer>
</body>

</html>