<?php
        $link = @mysql_connect("localhost","root","xXx39316");
        $link_db=mysql_select_db("dragalia lost");
        if($link){
            echo "connect連線成功...<br>";
            if($link_db){echo "connect連線成功...<br>";}
        }
 else {
     echo "connect連線失敗...<br>";
 }
?>
 