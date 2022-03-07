<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./../css/insect_register.css">
  <title>とうろく</title>
</head>

<body>
  <header>
    <p>とうろく</p>
  </header>
  <main>
    <form action="" method="post" enctype="multipart/form-data">
      <section id="select-container">
        <label>
          <input type="file" name="insect_img" class="input-img" id="myImage" accept="image/*">
          <img id="preview">
        </label>
      </section>
      <section id="text-container">
        <h2>つかいかた</h2>
        <p>むしの写真をえらぶと自動でむしの名前を教えてくれます！</p>
        <p>はんていした写真をずかんにとうろくできるよ！</p>
        <div class="btn-container">
          <button type="submit" name="submit">はんてい</button>
        </div>
      </section>
    </form>
  </main>
  <footer>
    <?php require_once 'footer.php'; ?>
  </footer>
  <script src="./../js/insect_register.js"></script>
</body>

</html>