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
			};
		?>

		<div id="master">
			<?php
				print_r ($_POST);
				/*	$menu_sql = "UPDATE beer_menu SET 
						brewery1=\"{$_POST['no{$data_no}_brewery1']}\",
						brewery2=\"{$_POST['no{$data_no}_brewery2']}\",
						beername1=\"{$_POST['no{$data_no}_brewery1']}\",
						beername2=\"{$_POST['no{$data_no}_brewery2']}\",
						locality=\"{$_POST['no{$data_no}_locality']}\",
						style1=\"{$_POST['no{$data_no}_style1']}\",
						style2=\"{$_POST['no{$data_no}_style2']}\",
						abv=\"{$_POST['no{$data_no}_abv']}\"
						WHERE no={$data_no});
					$sql_result = $db_connect->query($menu_sql); */
				print "<a href=\"update_frontend.php\">戻る</a>";
			?>
		</div>
	</body>
</html>
