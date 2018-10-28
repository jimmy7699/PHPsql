&lt;form method="post" action="{$_SERVER['PHP_SELF']}" >
    &lt;legend>免費公車查詢&lt;/legend>
	&lt;ul>
		&lt;li>
			&lt;label for="bus_class">公車車次&lt;/label>
			&lt;select name="bus_class" id="bus_class">
				&lt;option value="">車次&lt;/option>
				
				//公車車次從mysql取出所有車次，用while迴圈取值印出
			
			&lt;/select>			
		&lt;/li>
		&lt;li>
			&lt;label>公車站名&lt;/label>
			起點站
			&lt;select name="bus_stop" id="bus_stop">
				&lt;option value="">站名&lt;/option>                    
				
				//透過jquery連結bus.php, 從bus.php查詢sql再將公車站名顯示出來
			
			&lt;/select>
			終點站
			&lt;select name="bus_stop1" id="bus_stop1">
				&lt;option value="">站名&lt;/option>

				//透過jquery連結bus.php, 從bus.php查詢sql再將公車站名顯示出來
				
			&lt;/select>
		&lt;/li>
		&lt;input type="hidden" name="op" value="search">
		&lt;input type="submit" value="送出查詢">
	&lt;/ul>        
&lt;/form>