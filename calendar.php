
<?php
error_reporting(0);
session_set_cookie_params(3000);
session_start();
if(isset($_SESSION['user_name'])){
    echo '<h2 color = "lightblue">登録成功！</h2>';
	echo'<h2>こんにちは　'.$_SESSION['user_name'].'</h2>';

}else{
    echo  '<script>alert("登録しない！ ");history.back(-1);</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>カレンダー</title>
    <style type="text/css">
        body{
          background: url(beijing.jpg) no-repeat center;
        }
        table {
            width: 500px;
			      height:300px;
            border: solid 1px #333;
            border-collapse: collapse;
            text-align: center;

        }

        th,td {
            border: solid 2px green;
        }

        .name-cell {
            background: #3CBED5;
        }
    </style>
</head>
<body>

<?php
function _get($year){//声明変数
$val = !empty($_GET[$year])?$_GET[$year] : null;
return $val;}
$year = _get('year')?(int)_get('year'):date('Y');//目前の年をもらって
function _get1($month){//声明変数
$val = !empty($_GET[$month])?$_GET[$month] : null;
return $val;}
$month = _get1('month')?(int)_get1('month'):date('m');//目前の月をもらって

draw_month_cal($year,$month);//関数を使用する

function draw_month_cal($year,$month)//声明calendar関数
{
   if(checkdate($month,1,$year)){
        //計算毎月第一天の位置
		if(!$f_day = date("w",mktime(0,0,0,$month,1,$year)))  $f_day = 7;

		echo'
		     <table align = "center">
			      <tr>
				       <th colspan=1>
					          <a href="?month='.$month.'&year='.($year-1).'">去　年</a>
					   </th>
					   <th colspan=1>
					   <a href="?month=' . date('m',mktime(0,0,0,$month-1,1,$year)) . '&year=' .(($month==1)?($year-1):$year) . '">先　月</a>
					   </th>
					   <th colspan=3>
					      <a href="?month='.date('m').'$year='.date('Y').'">'.$year.'-'.$month.'</a>
					   </th>
					   <th colspan=1>
					      <a href="?month='.date('m',mktime(0,0,0,$month+1,1,$year)).'&year='.(($month==12)?($year+1):$year).'">来　月</a>
					   </th>
					   <th colspan=1>
					      <a href="?month='.$month.'&year='.($year+1).'">来　年</a>
						 </th>
			     </tr>
				 <tr>';
				 //月を漢字になっている
				 for($w=1;$w<8;$w++){
				     switch($w){
					 case 1:$day = '一';break;
					 case 2:$day = '二';break;
					 case 3:$day = '　三　';break;
					 case 4:$day = '　四　';break;
					 case 5:$day = '　五　';break;
					 case 6:$day = '六';break;
					 case 7:$day = '七';break;
					 }
					echo'<th>'.$day.'</th>';
					}
					//if spaceを出力
					echo'</tr><tr>'.str_repeat('<td>&nbsp;</td>',--$f_day);

					while(checkdate($month,++$d,$year)){
					      echo'<td><a href = "memo.php?date='.$year.'-'.$month.'-'.$d.'">'.$d.'</a></td>';
						  if(!(++$f_day %7))echo'</tr><tr>';//if 7を超える、次の行を出力
						  }
						  echo'</tr></table>';

		}

}


   ?>
   </body>
   </html>
