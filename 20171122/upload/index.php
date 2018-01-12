<html>
<head>
    <meta charset="UTF-8">
    <title>xxx影院</title>
</head>
</html>
<?php
    session_start();
    if(!empty($_SESSION['Custid'])){
        echo $_SESSION['Custid']."，您好<BR>";
        echo"這是首頁<br/>";
        echo"個人資料<br/>";
        echo"歷史交易<br/>";
        echo"收藏<br/>";
        echo'<a href="changeinfo.php">修改資料</a><br/>';
        echo'<a href="cust_bookcheck.php">查看訂單</a><br/>';
        echo'<a href="cust_loggout.php">登出</a><br/>';
    }
    else{
        echo"請先登入<br/>";
        echo'<a href="cust_signin.php">注冊</a><br/>';
        echo'<a href="cust_loggin.php">登入</a><br/>';
    }
    