<!DOCTYPE html>
<head>
	<title>retort-pack</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
	
</head>

<!-- List of valiables.
	$db_connect -> Database connect instance.
	$db_host -> Database Host IP Address.
	$db_user -> Database User.
	$db_password -> Database User's Password.
	$db_name -> Database's Name.
	$menu_sql -> SQL.
	$sql_result -> exec SQL Result.
	$menu_info -> Selected menu information.
-->

	<body>
		<?php
			require './batch/connect_to_db.php';
		?>
		<div id="master">
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
					$menu_sql = 'SELECT * FROM beer_menu;';
					require './batch/get_beer_menu.php';

					$sql_result->close();
					$db_connect->close();
				?>
			</table>
		</div>
	</body>
</html>
