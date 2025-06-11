<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    //db作成
        $db = new SQLite3("db_ehon");
        $query = "CREATE TABLE tbl_ehon(id INTEGER, title VARCHAR(10), price INTEGER)";
        $re = $db->exec($query);
        print("[db_ehon1]をさくせいしました");
        $db->close();
    ?>
</body>
</html>