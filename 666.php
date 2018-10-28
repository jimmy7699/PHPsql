<?php 
	    $do = $_POST["do"]; 
	    $num = $_POST["num"]; 
	    if($do == "a"){ 
	        if($num % 2 == 0){ 
	            echo "雙"; 
	        }else{ 
	            echo "單"; 
	        } 
	    }else if($do == "b"){ 
	        if($num > 3){ 
	        }else{ 
	            echo "小"; 
	        } 
	    }else{ 
	        echo "動作錯誤!"; 
	    } 
	?> 
