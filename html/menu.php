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
	$menu_index -> DB Data Number List.
	$menu_no -> Number of Menu list.
	$menu_sql -> SQL.
	$sql_result -> exec SQL Result.
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
<!-- For test comment out
			<table>
For test comment out ここでループの実験中。続きは明日・・・。 -->
			<?php
				$menu_sql = 'SELECT * FROM beer_menu;';
				if ($sql_result = $db_connect->query($menu_sql)) {
					$menu_index = $sql_result->fetch_array();
				}
				foreach ($menu_index as $menu_no){
					print $menu_no;
				}
				$result->close();

				unset($menu_no);
			?>
<!-- For test comment out
				<tr>
					<th>
					</th>
				</tr>

				<tr>
					<td>
					</td>
				</tr>
			</table>
For test comment out -->
		</div>
	</body>
</html>
