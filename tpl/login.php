<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../css/insect_detail.css">
  <title>Document</title>
</head>

<body>
  <header>
    <div class="logo"></div>
  </header>
  <main>
    <form action="" method="post">
      <input type="text" name="login_id">
      <input type="password" name="password">
      <input type="email" name="mail">
      <input type="datetime" name="birth_day">
      <button type="submit">登録</button>
    </form>
  </main>
  <footer>
    <?php require_once 'footer.php'; ?>
  </footer>
</body>

</html>