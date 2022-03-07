<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
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
      <img class="<?php echo insect_check($_COOKIE['user_id'], $_GET['id'])? "insect-img" : "no-insect-img"; ?>"
        src="<?php echo insect_check($_COOKIE['user_id'], $_GET['id'])? "./../users/".$_COOKIE['user_id']."/".$_COOKIE['user_id']."_".$insect_data['insect_id'].'_1'.$insect_data['ext'] : "./../img/icon/no-data-detail.svg"; ?>"
        alt="<?php echo $insect_data['insect_name']; ?>の画像">
    </div>
    <ul class="contents-tabs">
      <li id="tab-1" class="active-tab">がいよう</li>
      <li id="<?php echo $tab_id[2]; ?>">せつめい</li>
      <li id="<?php echo $tab_id[3]; ?>">まめちしき</li>
    </ul>
    <section id="content-1" class="active-content">
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
    <section id="content-2" class="inactive-content">
      <p>
        <?php echo $insect_data['insect_text']; ?>
      </p>
    </section>
    <section id="content-3" class="inactive-content">
      <?php echo $insect_data['insect_trivia']; ?>
    </section>
  </main>
  <footer>
    <?php require_once 'footer.php'; ?>
  </footer>
  <script src="./../js/insect_detail.js"></script>
</body>

</html>