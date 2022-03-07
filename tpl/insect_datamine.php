<!DOCTYPE html>
<html lang="ja">
<?php var_dump($folder); ?>
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
        <img src="../model/python/tmp/<?php echo $_SESSION['file_name']; ?>" alt="判別した画像">
      </p>
    </section>
    <section id="text-container">
      <h2>
        「<?php echo $_SESSION['result'][0]['labels']; ?>」
      </h2>
      <p class="others-text">他のこうほ</p>
      <form action="" method="post">
        <dl>

          <label for="radio-1">
            <dt>
              <input type="radio" name="radio" id="radio-1" value="<?php echo$_SESSION['result'][0]['index']; ?>" checked>
              <span><?php echo $_SESSION['result'][0]['labels']; ?></span>
            </dt>
            <dd>
              <?php echo round($_SESSION['result'][0]['results'] * 100); ?>%
            </dd>
          </label>

          <label for="radio-2">
            <dt>
              <input type="radio" name="radio" id="radio-2" value="<?php echo $_SESSION['result'][1]['index']; ?>">
              <span><?php echo $_SESSION['result'][1]['labels']; ?></span>
            </dt>
            <dd>
              <?php echo round($_SESSION['result'][1]['results'] * 100); ?>%
            </dd>
          </label>
          <label for="radio-3">
            <dt>
              <input type="radio" name="radio" id="radio-3" value="<?php echo $_SESSION['result'][2]['index']; ?>">
              <span><?php echo $_SESSION['result'][2]['labels']; ?></span>
            </dt>
            <dd>
              <?php echo round($_SESSION['result'][2]['results'] * 100); ?>%
            </dd>
          </label>
        </dl>
        <div class="btn-container">
          <button type="submit" name="submit">とうろく</button>
        </div>
      </form>
    </section>
  </main>
  <footer>
    <?php require_once 'footer.php'; ?>
  </footer>
</body>

</html>