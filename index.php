<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>FizzBuzz問題</title>
</head>
<body>
<h1>FizzBuzz問題</h1>
<form action="index.php" method="post">
    <p>FizzNum：<input type="text" id="fizzNum" name="fizzNum" placeholder="整数値を入力してください" value=<?php echo $_POST['fizzNum'] ?? ''; ?>></p>
    <p>BuzzNum：<input type="text" id="buzzNum" name="buzzNum" placeholder="整数値を入力してください" value=<?php echo $_POST['buzzNum'] ?? ''; ?>></p>
    <p>
        <input type="submit" name="submit" value="実行">
    </p>
</form>
<p>【出力】</p>
</body>
</html>
<?php
// submitを押されたか判定
if (empty($_POST['submit'])) {
    return;
}
// postした値を取得
$fizzNum = $_POST['fizzNum'];
$buzzNum = $_POST['buzzNum'];
// 空か判定
if (empty($fizzNum) && empty($buzzNum)) {
    echo '整数値を入力してください';
    return;
}
// 数値か判定
if (!is_numeric($fizzNum) || !is_numeric($buzzNum)) {
    echo '整数値を入力してください';
    return;
}
// 小数か判定
if (preg_match('/^([1-9]\d*|0)\.(\d+)?$/', $fizzNum)
    || preg_match('/^([1-9]\d*|0)\.(\d+)?$/', $buzzNum)) {
    echo '整数値を入力してください';
    return;
}
// fizzBuzzを出力
for ($i = 1; $i <= 99; $i++) {
    if ($i % $fizzNum === 0 && $i % $buzzNum === 0) {
        echo 'FizzBuzz ' . $i . '<br>';
    } elseif ($i % $fizzNum === 0) {
        echo 'Fizz ' . $i . '<br>';
    } elseif ($i % $buzzNum === 0) {
        echo 'Buzz ' . $i . '<br>';
    }
}
?>