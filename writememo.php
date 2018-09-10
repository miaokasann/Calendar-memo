<?php
  session_set_cookie_params(3000);//セッションの時間を変更する場合もこの部分に記述する
  session_start();//セッションを利用するのでセッションを始めるための関数を呼び出す
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>備忘録入力</title>
</head>
<body>
<?php
$date = $_COOKIE['mycookie'];//memo.phpの変数を伝達する
$myfile = fopen("$date.txt", "a");//創建 or open 変数命名のファイル
@$jishi=$_POST['jishi'];//textareaの内容をもらって＝＞変数$jishi
fwrite($myfile,$jishi);//変数$jishiの内容ファイルに保存して
fclose($myfile);//ファイルを閉める
?>
<form action="" method="post">
<h2>記事を入力してください</h2>
<textarea rows="10" cols="50" name = "jishi"/></textarea>
<input type="submit" value="保存" />
</form>
<a href = "calendar.php">カレンダーに戻る</a><br>
<?php
echo'<a href = "memo.php?date='.$date.'">本日メモを戻す</a>';
?>
<br><a href="exit.php">退出登録</a>
</body>
</html>