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
	$update_sql -> SQL.
	$data_no -> Post Data index no.
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
			}
		?>

		<div id="master">
			<?php
				// for ($data_no=1; $data_no<=7; $data_no++){
					print "SELECT * from beer_menu where beername1=\"{$_POST['no1_beername1']}\"";
				// }
				print "<a href=\"update_frontend.php\">戻る</a>"
			?>
		</div>
	</body>
</html>
