<?php
    session_start();//セッションを利用するのでセッションを始めるための関数を呼び出す
    setCookie('PHPSESSID','',time()-1800);//過去の時間を設定してクッキーを削除
    session_destroy();//セッション内容をすべて削除
	echo "<script>alert('もう退出しました！');parent.location.href='login.php';</script>";//弹出对话框
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>追加登録</title>
</head>
<body>

<hr />
追加で登録する場合は<a href="login.php">こちらへ</a><br />
</body>
</html>