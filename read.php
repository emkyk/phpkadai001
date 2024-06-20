<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>登録内容を見る</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>登録内容</h2>
    <table>
        <thead>
            <tr>
                <th>ID番号</th>
                <th>名前</th>
                <th>学年</th>
                <th>学科</th>
                <th>得意な教科</th>
                <th>苦手な教科</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // CSVファイルからデータを読み込み、表示する
            $file = 'data.csv';
            if (($handle = fopen($file, "r")) !== false) {
                while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                    echo "<tr>";
                    for ($i = 0; $i < count($data); $i++) {
                        echo "<td>" . htmlspecialchars($data[$i]) . "</td>";
                    }
                    echo "</tr>";
                }
                fclose($handle);
            } else {
                echo "<tr><td colspan='6'>データがありません</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="index.php">戻る</a>
</div>
</body>
</html>

