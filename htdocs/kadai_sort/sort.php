<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        $array = [15, 4, 18, 23, 10];

        function sort_2way($array, $order) {
          if ($order) {
            sort($array);
            echo '昇順にソートします<br>';
          } else {
            rsort($array);
            echo '降順にソートします<br>';
          }

          foreach ($array as $num) {
            echo $num . '<br>';
          }
        }

        sort_2way($array, true);

        echo '<br>';

        sort_2way($array, false);

        ?>
    </p>
</body>

</html>
