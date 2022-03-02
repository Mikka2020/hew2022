<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php foreach ($insect_list as $key => $row) { ?>
            <?php foreach ($row as $key => $value) { ?>
                <tr>
                    <td>
                        <?php echo $value; ?>
                    </td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>
</body>
</html>