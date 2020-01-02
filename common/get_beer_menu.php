<?php
	if ($sql_result = $db_connect->query($menu_sql)) {
		while ($menu_info = $sql_result->fetch_assoc()){
			if ($menu_info['brewery']) {
				print "<tr>\n";
				print "<td><span class=\"cBrewery\"><span class=\"No{$menu_info['no']}\">{$menu_info['brewery']}</span></span></td>\n";
				print "<td><span class=\"cBeername\"><span class=\"No{$menu_info['no']}\">{$menu_info['beername']}</span></span></td>\n";
				print "<td><span class=\"cValue\"><span class=\"No{$menu_info['no']}\">{$menu_info['value']}</span></span></td>\n";
				print "</tr>\n\n";
			};
		};
	};
?>
