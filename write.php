
// データベース接続情報
// $servername = "mysql.emkyk.sakura.ne.jp";
// $username = "emkyk_user";
// $password = "3.jsg9hpURbN";
// $dbname = "emkyk_database";

// // データベースに接続
// $conn = new mysqli($servername, $username, $password, $dbname);

// // 接続をチェック
// if ($conn->connect_error) {
//     die("接続失敗: " . $conn->connect_error);
// }


<?php
// POSTリクエストでアクセスされたか確認
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームデータを取得
    $idnumber = $_POST['idnumber'] ?? '';
    $name = $_POST['name'] ?? '';
    $grade = $_POST['grade'] ?? '';
    $department = $_POST['department'] ?? '';
    $favorite_subject = $_POST['favorite_subject'] ?? '';
    $weak_subject = $_POST['weak_subject'] ?? '';

    // データを保存するファイル名とパス
    $file = 'data.csv'; // ファイル名は任意のものを選択できます

    // ファイルが存在するかどうかを確認
    if (!file_exists($file)) {
        // ファイルが存在しない場合、新規に作成するかエラーメッセージを出力するなどの処理が必要
        echo "ファイル $file が見つかりません。";
        exit;
    }

    // データをCSV形式で書き込む
    $data = "$idnumber,$name,$grade,$department,$favorite_subject,$weak_subject\n";

    // ファイルに追記モードでデータを書き込む
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) === false) {
        echo "ファイル $file への書き込みに失敗しました。";
    } else {
        echo "データを $file に正常に書き込みました。";
    }
} else {
    // POST以外の方法でアクセスされた場合、リダイレクトするなどの対応が必要です
    header("Location: index.php");
    exit();
}
?>

