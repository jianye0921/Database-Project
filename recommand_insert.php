<html>
	<head>
		<title>第39組final project</title>
		<link rel="icon" href="/pngegg.png" type="image/x-icon" />
	</head>

	<body>
		<?php
			if($_POST['lat'] != NULL)
				$lat = $_POST['lat'];
			else
				$lat = 0;
			
			if($_POST['long'] != NULL)
				$long = $_POST['long'];
			else
				$long = 0;
			@$name = $_POST['name'];
			@$addr = $_POST['addr'];
			@$rec  = $_POST['rec'];


			$db_link = mysqli_connect("localhost", "root", "123456");
			/*
			if(!$db_link) {
					echo '伺服器連結失敗';}
			else {
					echo '伺服器連結成功';}*/
			mysqli_select_db($db_link,"fp");
			$query = "INSERT INTO `recommand`(`經度`, `緯度`, `地址`, `商家名`, `評論`) VALUES ('" 
			. $lat . "', '" . $long . "', '" . $addr . "', '" . $name . "', '" . $rec . "');" ;
			
			//echo $query;
			
			if(!is_numeric($_POST['lat']) || !is_numeric($_POST['long']) || is_null($_POST['name']) || is_null($_POST['addr'])){
				echo "輸入錯誤，請重新輸入";
			}
			else{
				$result = mysqli_query($db_link,$query);
				echo "輸入成功";
			}

			mysqli_close($db_link);
		?>
		<form action = 'index.php' method = 'post'>
		<button type = 'submit' >點我回首頁</button>
		</form>
	</body>
</html>