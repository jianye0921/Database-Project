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
			
			if($_POST['num'] != NULL)
				$num = $_POST['num'];
			else
				$num = 5;
			if($num > 20)
				$num = 20;
			
			$db_link = mysqli_connect("localhost", "root", "123456");
			/*
			if(!$db_link) {
					echo '伺服器連結失敗';}
			else {
					echo '伺服器連結成功';}*/
			mysqli_select_db($db_link,"fp");
			$query = "SELECT  g.商家名, g.地址, 
					ST_Distance(POINT(g.經度,g.緯度),POINT(" . $lat . "," . $long . ")) as 距離,
					g.經度, g.緯度, g.評論
					FROM    recommand as g
					ORDER BY 距離 ASC 
					LIMIT " . $num . ";";
			
			$result = mysqli_query($db_link,$query);
			if($result == NULL || !is_numeric($_POST['lat']) || !is_numeric($_POST['long']) ){
				die("輸入錯誤，請重新輸入");
				for($i = 1; $i < 6; $i = $i + 1){
					$rs[$i] = "";
				}
			}			
			
			if( !is_numeric($_POST['lat']) || !is_numeric($_POST['long']) ){
				$rs[0] = "輸入錯誤，請輸入正確經緯度";
			}
			mysqli_close($db_link);
		?>
		<font size="6">結果</font>
		<table border="1">
			<tr>
			<td>商家名</td>
			<td>地址</td>
			<td>經度</td>
			<td>緯度</td>
			<td>評論</td>
			</tr>
			<?php
			for($i = 0; $i < $num; $i = $i + 1){
				if( is_null( $rs = mysqli_fetch_array($result) ) ){
					break;
				}
				echo "<tr>";
				echo "<td>" . $rs[0] . "</td>";
				echo "<td>" . $rs[1] . "</td>";
				echo "<td>" . $rs[3] . "</td>";
				echo "<td>" . $rs[4] . "</td>";
				echo "<td>" . $rs[5] . "</td>";
				echo "</tr>";
			}
			?>
		</table>	
		<form action = 'index.php' method = 'post'>
		<button type = 'submit' >點我回首頁</button>
		</form>
	</body>
</html>