<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>5555</title>
    </head>
    <body>
        接收到的姓名為 <? echo $_GET['username'];?><br>
        接收到的密碼為 <? echo $_GET['passed'];?><br> 
        <?php
echo substr("Hello world",0,10)."<br>";
echo substr("Hello world",1,8)."<br>";
echo substr("Hello world",0,5)."<br>";
echo substr("Hello world",6,6)."<br>";

echo substr("Hello world",0,-1)."<br>";
echo substr("Hello world",-10,-2)."<br>";
echo substr("Hello world",0,-6)."<br>";
echo substr("Hello world",-2-3)."<br>";
echo substr("a1vph7xa", 3, 2);
?>
    </body>
</html>
