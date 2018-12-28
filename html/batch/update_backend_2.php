<!DOCTYPE html>
<head>
	<title>retort-pack</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/update_backend_2.css">
	
</head>

<!-- List of valiables.
	$menu_sql -> For Get Data SQL.
	$update_sql -> For Update Data SQL.
	$data_no -> Post Data index no. // ****WILL BE DELETE**** //
	$post_data -> Post Data Pointer.
Get Post Data 
	$noX_brewery1
	$noX_brewery2
	$noX_beername1
	$noX_beername2
	$noX_locality 
	$noX_style1
	$noX_style2
	$noX_abv
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
			};
		?>

		<div id="master">
			<?php
				print "<a href=\"update_frontend.php\">戻る</a>";
			?>
		</div>
	</body>
</html>
