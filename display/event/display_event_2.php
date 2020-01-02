<!DOCTYPE html>
<head>
    <title>retort-pack</title>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5;URL=../menu/display_menu_1.php">
    <link rel="stylesheet" type="text/css" href="./css/display_event.css">
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
        $event_sql = 'SELECT * from hideo_event;';
        $sql_result = $db_connect->query($event_sql);
        $event_info = $sql_result->fetch_assoc();
    ?>
    <div id="master">
        <div id="page_head">
            <B>ピックアップ！！</B>
        </div>

        <div id="page_body_1">
            <?php
                print "<B>{$event_info['menu']}</B>";
            ?>
        </div>

        <div id="page_body_2">
            <?php
                print "<B>{$event_info['message']}</B>";
            ?>
        </div>

        <div id="page_foot">
            <?php
                print "<B>{$event_info['value']}</B>";
            ?>
        </div>
 
    </div>

</body>

</html>
