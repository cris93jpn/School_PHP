<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
</head>
<body>
<?php
    $db = new SQLite3("db_ank");
    $query = "CREATE TABLE tbl_anketo (why INTEGER, sei INTEGER)";
    $re = $db->exec($query);
    $db->close();
?>
</body>
</html>