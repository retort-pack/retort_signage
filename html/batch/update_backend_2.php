<!DOCTYPE html>
<head>
	<title>retort-pack</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/update_backend_2.css">
	
</head>

<!-- List of valiables.
	$menu_sql -> For Get Data SQL.
	$menu_tran_sql -> For Get Data SQL.
	$update_sql -> For Update Data SQL.
	$sql_result -> $menu_sql Result.
	$tran_sql_result -> $menu_tran_sql Result
	$index_no -> 
-->

	<body>
		<?php
			require "./batch/connect_to_db.php";

			for ($index_no=1; $index_no<=7; $index_no++){
				$menu_sql = "SELECT * FROM beer_menu WHERE no=\"{$index_no}\"";
				$menu_tran_sql = "SELECT * FROM beer_menu_tran WHERE no=\"{$index_no}\"";
				$sql_result = $db_connect->query($menu_sql);
				$tran_sql_result = $db_connect->query($menu_tran_sql);

				if ($sql_result['brewery1'] == $tran_sql_result['brewery1']) {
				};
			};
		?>

		<div id="master">
			<?php
				print "<a href=\"update_frontend.php\">戻る</a>";
			?>
		</div>
	</body>
</html>
