<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../css/insect_determine.css">
  <title>はんていけっか</title>
</head>

<body>
  <header>
    <p>はんていけっか</p>
  </header>
  <main>
    <section id="img-container">
      <p>
        <img src="" alt="">
      </p>
    </section>
    <section id="text-container">
      <h2>
        「<?php echo "オオムラサキ"; ?>」
      </h2>
      <p class="others-text">他のこうほ</p>
      <form action="" method="post">
        <dl>

          <label for="radio-1">
            <dt>
              <input type="radio" name="radio" value="1" id="radio-1" checked>
              <span><?php echo "オオムラサキ"; ?></span>
            </dt>
            <dd>
              <?php echo "43"; ?>%
            </dd>
          </label>

          <label for="radio-2">
            <dt>
              <input type="radio" name="radio" id="radio-2" value="2">
              <span><?php echo "アゲハチョウ"; ?></span>
            </dt>
            <dd>
              <?php echo "22"; ?>%
            </dd>
          </label>
          <label for="radio-3">
            <dt>
              <input type="radio" name="radio" value="3" id="radio-3">
              <span><?php echo "カラスアゲハ"; ?></span>
            </dt>
            <dd>
              <?php echo "8" ?>%
            </dd>
          </label>
        </dl>
        <div class="btn-container">
          <button type="submit">とうろく</button>
        </div>
      </form>
    </section>
  </main>
  <footer></footer>
</body>

</html>