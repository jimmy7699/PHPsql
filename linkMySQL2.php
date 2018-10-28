<html><head>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
        <title>Rever連線</title></head>
    <body>
        <?php
 include("server.php");
 $sql = "insert into a values('謝其均','國中')";
 $error_message="目前故障";
 //mysql_query($sql)or die ($error_message);
 $Result = mysql_query("SELECT * FROM a");
 $num_rows = mysql_num_rows($Result);
 $sql2="select 姓名,學歷 from a limit 0,".(string)$num_rows;
 $sql3=mysql_query($sql2) or die (mysql_error());
 echo $sql3;
 echo "<table border='1'";
 echo "<tr><td><b>姓名</b></td>";
 echo "<td><b>學歷</b></tb>";
 while($list3=mysql_fetch_array($sql3))
 {
     echo "<tr><td>".$list3['姓名']."</td>";
     echo "<td>".$list3['學歷']."</td></tr>";
 }
 echo "</table>";
 echo "總共有".$num_rows." 筆資料";
 echo $sql2;
 echo "<br>完成";
 //if(mysql_close($link)){echo "關閉成功";}
 //else {echo "關閉資料庫失敗";}
// mysql_free_result($sql3);
 $a1=mysql_real_escape_string($_POST['keyword']);
 $a2=mysql_real_escape_string($_POST['selecttype']);
 $sql1="select 姓名,學歷 from a where ".$a2."  like '%$a1%'";
 echo "SQL語法:".$sql1."<br>";
 $sql4=mysql_query($sql1) or die(mysql_error());
 $rows2=mysql_num_rows($sql4);
 if($rows2==""){
     echo "查無資料";
 }
 else{
     echo"有".$rows2."筆資料喔!";
 }
 echo $row2;
 echo "<table border='1'";
 echo "<tr><td><b>姓名</b></td>";
 echo "<td><b>學歷</b></tb>";
 while($list5=mysql_fetch_array($sql4))
 {
    if($a2=="姓名")
      {
        $str= str_replace($a1,"<span style='background:yellow;'>".$a1."</span>",$list5[$a2]);
        echo "<tr><td>".$str."</td>";
        echo "<td>".$list5['學歷']."</td></tr>";
     }
     else {
         $str= str_replace($a1,"<span style='background:yellow;'>".$a1."</span>",$list5[$a2]);
        echo "<tr><td>".$list5['姓名']."</td>";
        echo "<td>".$str."</td></tr>";
     }
 }
 echo "</table>";
 ?>
    </body>
</html>

