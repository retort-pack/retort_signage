<!DOCTYPE html>
<head>
	<title>retort-pack</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/update_backend.css">
	
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
			update_backend.phpでっせ
		</div>
	</body>
</html>
