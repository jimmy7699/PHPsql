<?php
header("Content-type:text/html;charset=UTF-8");
if(empty($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate:Basic realm="Please input"');
    headar('HTTP/1.0 4.1 Unauthorized');
    echo '請輸入正確的帳號與密碼';
}
else
{
    echo"帳號是".$_SERVER['PHP_AUTH_USER']."<br>";
    echo"帳號是".$_SERVER['PHP_AUTH_PW']."<br>";
    $username="php";
    $yourpass="mysql";
    if(($_SERVER['PHP_AUTH_USER']!= $username) or ($_SERVER['PHP_AUTH_PW']!= $yourpass))
        {
        echo"登入失敗";
    }
    else{
        echo"登入成功";
    }
}?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

