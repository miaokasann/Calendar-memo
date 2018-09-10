<?php  
session_set_cookie_params(3000);//セッションの時間を変更する場合もこの部分に記述する
session_start();//セッションを利用するのでセッションを始めるための関数を呼び出す
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>登録界面</title>
<style type="text/css">
        table {
            width: 500px;
			height:400px;
            border: solid 1px #333;
            border-collapse: collapse;
            text-align: center;
			
			bgcolor: lightyellow;
        }
 
        th,td {
            border: solid 2px orange;
        }
 
      
    </style>
</head>
<center>
<body>
<form  action="" method="POST">
<table style="margin:auto">
        <tr>
            <td align="center" valign="middel">ログインID</td>
            <td align="center" valign="middel"><input type="text" name="id"></td>
        </tr>
        <tr>
            <td align="center" valign="middel">パスワード</td>
            <td align="center" valign="middel">
               <input type="password" name="password">
            </td>
        </tr>
        <tr>
            <td align="center" valign="middel"colspan="2">
                
                <input type="submit" value="ログイン">
            </td>
        </tr>
    </table>
</form>
<?php
$username1 = "admin1"; //登録名１
$pwd1 = "123456"; //登録のパスワード２
$username2 = "admin2"; //登録名２
$pwd2 = "123456"; //登録のパスワード２
if (isset($_REQUEST["id"]) && isset($_REQUEST["password"])){//formから情報をget
if ($username1==$_POST['id']&&$pwd1==$_POST['password'])//検証,同じならsessionに保存する
{
$_SESSION['user_name']="$username1";
header("Location:calendar.php");//跳转
}else if($username2==$_POST['id']&&$pwd2==$_POST['password']){//検証,同じならsessionに保存する
$_SESSION['user_name']="$username2";
header("Location:calendar.php");//跳转
}
else{
echo "账号或密码错误";
exit();
}
}
?>
</body>
</center>
</html>