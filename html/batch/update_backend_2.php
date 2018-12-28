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
			require './connect_to_db.php';

			for ($index_no=1; $index_no<=7; $index_no++){
				$menu_sql = "SELECT * FROM beer_menu WHERE no=\"{$index_no}\"";
				print "SELECT * FROM beer_menu WHERE no=\"{$index_no}\"<br>";
		/*
				$menu_tran_sql = "SELECT * FROM beer_menu_tran WHERE no=\"{$index_no}\"";
				$sql_result = $db_connect->query($menu_sql);
				$tran_sql_result = $db_connect->query($menu_tran_sql);

				if ($sql_result['brewery1'] != $tran_sql_result['brewery1'] or
				    $sql_result['brewery2'] != $tran_sql_result['brewery2'] or
				    $sql_result['beername1'] != $tran_sql_result['beername1'] or
				    $sql_result['beername2'] != $tran_sql_result['beername2'] or
				    $sql_result['locality'] != $tran_sql_result['locality'] or
				    $sql_result['style1'] != $tran_sql_result['style1'] or
				    $sql_result['style2'] != $tran_sql_result['style2'] or
				    $sql_result['abv'] != $tran_sql_result['abv']) {

					$update_sql = "UPDATE beer_menu SET 
							brewery1=\"{$tran_sql_result['brewery1']}\",
							brewery2=\"{$tran_sql_result['brewery2']}\",
							beername1=\"{$tran_sql_result['beername1']}\",
							beername2=\"{$tran_sql_result['beername2']}\",
							locality=\"{$tran_sql_result['locality']}\",
							style1=\"{$tran_sql_result['style1']}\",
							style2=\"{$tran_sql_result['style2']}\",
							abv=\"{$tran_sql_result['abv']}\"
							WHERE no=\"{$index_no}\"
					";
					$db_connect->query($update_sql);
				};
			*/
			};
			$sql_result->close();
			$tran_sql_result->close();
			$db_connect->close();
		?>

		<div id="master">
				<a href="update_frontend.php">戻る</a>"
		</div>
	</body>
</html>
