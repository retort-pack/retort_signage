<!DOCTYPE html>
<head>
	<title>retort-pack</title>
	
	
</head>

<!-- 
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
		<div id="master">

<!-- Connect to MySQL/MariaDB -->
<!-- This is TEST ONLY!!!!!! -->
			<?php
				$db_host = '127.0.0.1';
				$db_user = 'kingpelican_mgmt';
				$db_password = 'kingpelican2016';
				$db_name = 'kingpelican_bar';
			?>

			<?php
				$db_connect = new mysqli($db_host, $db_user, $db_password, $db_name);
	
				if ($db_connect->connect_error) {
					echo $db_connect->connect_error;
				        exit();
				} else {
					$db_connect->set_charset("utf8");
				}
			?>

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
				$index_no = 0;
				if ($sql_result = $db_connect->query($menu_sql)) {
					while ($menu_info = $sql_result->fetch_assoc()){
						print "<tr>";
							print "<td>{$menu_info['no']}</td>";
							print "<td>{$menu_info['brewery1']}</td>";
							print "<td>{$menu_info['brewery2']}</td>";
							print "<td>{$menu_info['beername1']}</td>";
							print "<td>{$menu_info['beername2']}</td>";
							print "<td>{$menu_info['locality']}</td>";
							print "<td>{$menu_info['style1']}</td>";
							print "<td>{$menu_info['style2']}</td>";
							print "<td>{$menu_info['abv']}</td>";
						print "</tr>";
					};
				};
			?>
			</table>
		</div>
	</body>
</html>
