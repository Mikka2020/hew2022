<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./../css/insect_register_result.css">
  <title>とうろく</title>
</head>

<body>
  <header>
    <p>とうろく</p>
  </header>
  <main>
    <section id="img-container">
      <p>
        <img src="../users/<?php echo $user_id = 1; ?>/<?php echo $file_name; ?>" alt="判別した画像">
      </p>
    </section>
    <section id="text-container">
      <h2>
        <span><?php echo insert_insect_id($result_labels); ?></span>が
        <br>
        ずかんにとうろくされました！
      </h2>
      <dl>
        <div>
          <dt>みつけた種</dt>
          <dd><?php echo registered_counter($_COOKIE['user_id']); ?>種
          </dd>
        </div>
        <div>
          <dt>のこり</dt>
          <dd><?php echo(88 - registered_counter($_COOKIE['user_id'])); ?>種
          </dd>
        </div>
      </dl>
      <a href="./insect_list.php">
        <div class="link-container">
          <span>
            ずかんへ
          </span>
        </div>
      </a>
    </section>
  </main>
  <footer>
    <?php require_once 'footer.php';?>
  </footer>
</body>

</html>