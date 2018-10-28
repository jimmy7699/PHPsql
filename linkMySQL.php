<html><head>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
        <title>Rever連線</title></head>
    <body>
        <?php
        $link = @mysql_connect("localhost","root","xXx39316");
        $link_db=mysql_select_db("test2");
        if($link){
            echo "connect連線成功...<br>";
            if($link_db){echo "connect連線成功...<br>";}
        }
 else {
     echo "connect連線失敗...<br>";
 }
 $sql = "insert into a values('謝其均','國中')";
 $error_message="目前故障";
 mysql_query($sql)or die ($error_message);
 echo $sql;
 echo "<br>完成";
 ?>
    </body>
</html>