<?php
session_set_cookie_params(3000);//セッションの時間を変更する場合もこの部分に記述する
session_start();//セッションを利用するのでセッションを始めるための関数を呼び出す
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>備忘録</title>
</head>
<body>
<?php echo $_GET['date']?>
<?php
       $date=$_GET['date'];//$_GET  get URL
       setcookie('mycookie',$date);//$dateの数値cookieに保存して、writememo.phpを使用する
?>
<?php
$date=$_GET['date'];
if(file_exists("$date.txt")){//fileはあるかどうか判断
 echo'<h2>　　　　　　　</h2><br />';
 echo file_get_contents("$date.txt");//あったら,open file
 }else{
 echo'<br/><h1>メモがありません</h1>';//ありません、echo"メモがありません"
 }
?>
<form action = "writememo.php" method = "post">
<br><br>
<input type="submit" value="新規追加"name="sub" />
</form>
<br>
<a href = "calendar.php">カレンダーに戻る</a><br>
<br><a href="exit.php">退出登録</a>

</body>
</html>