<html>
	<head>
		<title>第39組final project</title>
		<link rel="icon" href="/pngegg.png" type="image/x-icon" />
	</head>

	<body>
		<font size="6">查詢附近商家評論：</font>
		<form action = 'recommand_search.php' method = 'post'>
			請輸入您的經度：
			<input type='text' name = 'lat'/>
			<br>
			請輸入您的經度：
			<input type='text' name = 'long'/>
			<br>
			請輸入查詢限額(1~20)：
			<input type='text' name = 'num'/>
			<br>
		<button type = 'submit' >送出</button>
		</form>
		
		
		
		
		
		
		<font size="6">增加商家評論：</font>
		<form action = 'recommand_insert.php' method = 'post'>
			請輸入商家的經度：
			<input type='text' name = 'lat'/>
			<br>
			請輸入商家的經度：
			<input type='text' name = 'long'/>
			<br>
			請輸入您想推薦的商家名：
			<input type='text' name = 'name'/>
			<br>
			請輸入商家地址：
			<input type='text' name = 'addr'/>
			<br>
			請輸入您的評論：
			<input type='text' name = 'rec'/>
			<br>
		<button type = 'submit' >送出</button>
		</form>
		
		<form action = 'index.php' method = 'post'>
		<button type = 'submit' >點我回首頁</button>
		</form>
	</body>
</html>