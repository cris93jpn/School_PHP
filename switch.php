<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
        $kuji = mt_rand(1,6);
        switch($kuji) {
            case 1:
                print "大吉です";
                break;
            case 2:
                print "中吉です";
                break;
            case 3:
                print "小吉です";
                break;
            case 4:
                print "吉です";
                break;
            case 5:
                print "末吉です";
                break;
            case 6:
                print "凶吉です";
                break;

        }
    ?>
</body>
</html>