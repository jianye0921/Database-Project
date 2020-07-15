<html>
	<head>
		<title>第39組final project</title>
		<link rel="icon" href="/pngegg.png" type="image/x-icon" />
	</head>

	<body>
		<font size="6">搜尋最近的加油站：</font>
		<form action = 'gas_station.php' method = 'post'>
			請輸入您的經度：
			<input type='text' name = 'lat'/>
			<br>
			請輸入您的經度：
			<input type='text' name = 'long'/>
			<br>
			請輸入篩選條件：<br>
			油類：<br>
			<input type="checkbox" name="filter[]"value="1" />92無鉛<br>
			<input type="checkbox" name="filter[]"value="2" />95無鉛<br>
			<input type="checkbox" name="filter[]"value="4" />98無鉛<br>
			<input type="checkbox" name="filter[]"value="8" />超級柴油<br>
			<input type="checkbox" name="filter[]"value="16" />酒精汽油<br>
			<input type="checkbox" name="filter[]"value="32" />煤油<br>
			付款方式：<br>
			<input type="checkbox" name="filter[]"value="64" />會員卡<br>
			<input type="checkbox" name="filter[]"value="128" />刷卡自助<br>
			<input type="checkbox" name="filter[]"value="256" />自助柴油<br>
			<input type="checkbox" name="filter[]"value="512" />電子發票<br>
			<input type="checkbox" name="filter[]"value="1024" />悠遊卡<br>
			<input type="checkbox" name="filter[]"value="2048" />一卡通<br>
			
			<button type = 'reset'>重設</button>
			<button type = 'submit' >送出</button>
		</form>
		
		
		<font size="6">搜尋最近的WIFI熱點：</font>
		<form action = 'hot_spot.php' method = 'post'>
			請輸入您的經度：
			<input type='text' name = 'lat'/>
			<br>
			請輸入您的經度：
			<input type='text' name = 'long'/>
			<br>
			請輸入您想查詢的縣市：
			<select name="Location">
			<option value="臺北市">臺北市</option>
			<option value="基隆市">基隆市</option>
			<option value="新北市">新北市</option>
			<option value="連江縣">連江縣</option>
			<option value="宜蘭縣">宜蘭縣</option>
			<option value="新竹市">新竹市</option>
			<option value="新竹縣">新竹縣</option>
			<option value="桃園市">桃園市</option>
			<option value="苗栗縣">苗栗縣</option>
			<option value="臺中市">臺中市</option>
			<option value="彰化縣">彰化縣</option>
			<option value="南投縣">南投縣</option>
			<option value="嘉義市">嘉義市</option>
			<option value="嘉義縣">嘉義縣</option>
			<option value="雲林縣">雲林縣</option>
			<option value="臺南市">臺南市</option>
			<option value="高雄市">高雄市</option>
			<option value="澎湖縣">澎湖縣</option>
			<option value="金門縣">金門縣</option>
			<option value="屏東縣">屏東縣</option>
			<option value="臺東縣">臺東縣</option>
			<option value="花蓮縣">花蓮縣</option>
		</select>
		<br>
		<button type = 'submit' >送出</button>
		</form>
		
		
		<font size="6">商家推薦系統：</font>
		<form action = 'recommand.php' method = 'post'>
		<button type = 'submit' >點我進入</button>
		</form>
		
	</body>
</html>

  




