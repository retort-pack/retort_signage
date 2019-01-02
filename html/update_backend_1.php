<!DOCTYPE html>
<head>
	<title>retort-pack</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/update_backend_1.css">
	
</head>

<!-- List of valiables.
	$update_sql -> For Update Data SQL.
	$sql_result -> exec SQL Result.
	$index_no -> DB Record Inedex no(as filename)
-->

	<body>
		<?php
			require './batch/connect_to_db.php';

			for ($index_no=1; $index_no<=7; $index_no++){
				require "./batch/updateQuery_no{$index_no}.php";
				$db_connect->query($update_sql);
			};
		?>

		<div id="master">
			<h3>プレビュー</h3>
			<table>
				<tr>
					<th>NO</th>
					<th>BREWERY</th>
					<th>BEERNAME</th>
					<th>Locality</th>
					<th>Style</th>
					<th>ABV</th>
				</tr>
				<?php
					$menu_sql = 'SELECT * FROM beer_menu_tran;';
					require './batch/get_beer_menu.php';
					$sql_result->close();
					$db_connect->close();
				?>
			</table>
			<input type="button" value="決定" onClick="location.href='./update_backend_2.php'"><br><br> 
			<input type="button" value="キャンセル" onClick="location.href='update_frontend.php'">
		</div>
	</body>
</html>
