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
			
			@$tag = $_POST['filter'];
			@$fav = array_sum($tag);
			
			$db_link = mysqli_connect("localhost", "root", "123456");
			/*
			if(!$db_link) {
					echo '伺服器連結失敗';}
			else {
					echo '伺服器連結成功';}*/
			mysqli_select_db($db_link,"fp");
			
			
			$query = "SELECT  g.站名, g.地址, g.電話, 
					ST_Distance(POINT(l.經度,l.緯度),POINT(" . $lat . "," . $long . ")) as 距離,
					l.經度,l.緯度
					FROM    gas_station as g, gas_station_loc as l
					WHERE   g.id = l.id";
			//echo $query;
			
			$query2 = array(
				" AND g.92無鉛 = 'TRUE' ",
				" AND g.95無鉛 = 'TRUE' ",
				" AND g.98無鉛 = 'TRUE' ",
				" AND g.超柴 = 'TRUE' ",
				" AND g.酒精汽油 = 'TRUE' ",
				" AND g.煤油 = '1' ",
				" AND g.會員卡 = 'TRUE' ",
				" AND g.刷卡自助 = 'TRUE' ",
				" AND g.自助柴油 = 'TRUE' ",
				" AND g.電子發票 = 'TRUE' ",
				" AND g.悠遊卡 = 'TRUE' ",
				" AND g.一卡通 = 'TRUE' ");
			
			for($i = 0; $i < 12; $i = $i + 1){
				if(($fav >> $i) % 2 == 1){
					$query = $query . $query2[$i];
				}
			}
			$query = $query . " ORDER BY 距離 ASC LIMIT 1;";
			//echo $query;
			$result = mysqli_query($db_link,$query);
			if($result == NULL || !is_numeric($_POST['lat']) || !is_numeric($_POST['long']) ){
				$rs[0] = "沒有匹配結果";
				for($i = 1; $i < 6; $i = $i + 1){
					$rs[$i] = "";
				}
			}
			else{
				$rs = mysqli_fetch_array($result);
			}
			
			
			
			if( !is_numeric($_POST['lat']) || !is_numeric($_POST['long']) ){
				$rs[0] = "輸入錯誤，請輸入正確經緯度";
			}
			mysqli_close($db_link);
		?>
		<font size="6">結果</font>
		<table border="1">
			　<tr>
			　<td>站名</td>
			　<td>地址</td>
			  <td>電話</td>
			  <td>經度</td>
			  <td>緯度</td>
			　</tr>
			　<tr>
			　<td><?php echo $rs[0];?></td>
			　<td><?php echo $rs[1];?></td>
			  <td><?php echo $rs[2];?></td>
			  <td><?php echo $rs[4];?></td>
			  <td><?php echo $rs[5];?></td>
			　</tr>
		</table>
		<form action = 'index.php' method = 'post'>
		<button type = 'submit' >點我回首頁</button>
		</form>
	</body>
</html>


