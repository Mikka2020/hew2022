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
  <title>ログイン</title>
</head>

<body>
  <header>
    <div class="logo"></div>
  </header>
  <main>
    <form action="" method="post">
      <input type="text" name="login_id">
      <input type="password" name="password">
      <button type="submit" name="btn">ログイン</button>
    </form>
  </main>
  <footer>
    <?php require_once 'footer.php'; ?>
  </footer>
</body>

</html>