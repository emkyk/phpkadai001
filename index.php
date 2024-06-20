<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ピアラーニング登録フォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
 <h1>ピアラーニング登録フォーム</h1>
<div class="form-container">
    <form action="write.php" method="post">
        <div class="form-group">
            <label for="idnumber">ID番号:</label>
            <input type="text" id="idnumber" name="idnumber" required>
        </div>
        <div class="form-group">
            <label for="name">名前:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="grade">学年:</label>
            <input type="text" id="grade" name="grade" required>
        </div>
        <div class="form-group">
            <label for="department">学科:</label>
            <input type="text" id="department" name="department" required>
        </div>
        <div class="form-group">
            <label>得意な教科:</label>
            <input type="radio" id="math1" name="favorite_subject" value="math" required>
            <label for="math1">数学</label>
            <input type="radio" id="english1" name="favorite_subject" value="english">
            <label for="english1">英語</label>
            <input type="radio" id="physics1" name="favorite_subject" value="physics">
            <label for="physics1">物理</label>
            <input type="radio" id="chemistry1" name="favorite_subject" value="chemistry">
            <label for="chemistry1">化学</label>
        </div>
        <div class="form-group">
            <label>苦手な教科:</label>
            <input type="radio" id="math2" name="weak_subject" value="math" required>
            <label for="math2">数学</label>
            <input type="radio" id="english2" name="weak_subject" value="english">
            <label for="english2">英語</label>
            <input type="radio" id="physics2" name="weak_subject" value="physics">
            <label for="physics2">物理</label>
            <input type="radio" id="chemistry2" name="weak_subject" value="chemistry">
            <label for="chemistry2">化学</label>
        </div>
        <div class="form-group">
            <button type="submit">送信</button>
        </div>
    </form>
</div>
<br>
<a href="read.php">登録内容を見る</a>
</body>
</html>

