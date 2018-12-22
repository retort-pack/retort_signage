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

		<?php
			/*

			if ($sql_result = $db_connect->query($update_sql)) {
			*/

			print htmlspecialchars($post_data['no1_abv']);

		?>

		<div id="master">
			<?php
				print var_dump(count($_POST));
				if ($_POST['no7_brewery1']){
					print "{$_POST['no7_brewery1']}";
				} else{
					print "No7はありません。";
				}
				print "<a href=\"update_frontend.php\">戻る</a>"
			?>
		</div>
	</body>
</html>
