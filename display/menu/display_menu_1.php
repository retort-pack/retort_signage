<!DOCTYPE html>
<head>
    <title>retort-pack</title>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="20;URL=../event/display_event_1.php">
    <link rel="stylesheet" type="text/css" href="./css/display_menu_1.css">
	
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
        require '../../common/connect_to_db.php';
    ?>

    <div id="master">
        <table>
            <tr>
                <th colspan="3">本日の樽生</th>
            </tr>

            <?php
                $menu_sql = 'SELECT * FROM beer_menu limit 4;';
                require '../../common/get_beer_menu.php';
            ?>
        </table>
    </div>

    <div id="telop_area">
        <?php
            $telop_sql = 'SELECT * FROM hideo_telop WHERE no=1;';
            $telop_result = $db_connect->query($telop_sql);
            $telop_info = $telop_result->fetch_assoc();
            print "<marquee scrolldelay=\"1\" scrollamount=\"40\">{$telop_info['message']}</marquee>";

            $sql_result->close();
            $db_connect->close();
        ?>
    </div>

</body>

</html>
