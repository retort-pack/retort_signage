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
			// This is Credential File. You Can ignore DocumentRoot.
			require '../../../credential/credential.php';

			$db_connect = new mysqli($db_host, $db_user, $db_password, $db_name);

			if ($db_connect->connect_error) {
				echo $db_connect->connect_error;
			        exit();
			} else {
				$db_connect->set_charset("utf8");
			}
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
					if ($sql_result = $db_connect->query($menu_sql)) {
						while ($menu_info = $sql_result->fetch_assoc()){
							print "<tr>\n";
							print "<td><span class=\"cNo\"><span class=\"No{$menu_info['no']}\">{$menu_info['no']}</span></span></td>\n";
	
							print "<td><span class=\"cBrewery\"><span class=\"No{$menu_info['no']}\">{$menu_info['brewery1']}</span></span><br>\n";
							print "<span class=\"cBrewery\"><span class=\"No{$menu_info['no']}\">{$menu_info['brewery2']}</span></span></td>\n";
							
							print "<td><span class=\"cBeername\"><span class=\"No{$menu_info['no']}\">{$menu_info['beername1']}</span></span><br>\n";
							print "<span class=\"cBeername\"><span class=\"No{$menu_info['no']}\">{$menu_info['beername2']}</span></span></td>\n";
	
							print "<td><span class=\"cLocality\"><span class=\"No{$menu_info['no']}\">{$menu_info['locality']}</span></span></td>\n";
	
							print "<td><span class=\"cStyle\"><span class=\"No{$menu_info['no']}\">{$menu_info['style1']}</span></span><br>\n";
							print "<span class=\"cStyle\"><span class=\"No{$menu_info['no']}\">{$menu_info['style2']}</span></span></td>\n";
	
							print "<td><span class=\"cABV\"><span class=\"No{$menu_info['no']}\">{$menu_info['abv']}</span></span></td>\n";
							print "</tr>\n\n";
						};
					};
				?>
			</table>
		</div>
	</body>
</html>
