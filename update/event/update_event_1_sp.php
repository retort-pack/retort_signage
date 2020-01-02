<!DOCTYPE html>
<head>
    <title>retort-pack</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/update_event_1_sp.css">
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
        <form action="./update_event_2_sp.php" method="POST">
            <div id="event_menu">
                <p>本日のおすすめ</p>
                <input type="text" name="event_menu">
            </div>

            <div id="event_message">
                <p>説明文</p>
                <input type="text" name="event_message">
            </div>

            <div id="event_value">
                <p>値段</p>
                <input type="text" name="event_value">
            </div>

            <input type="submit" id="submit_btn" value="この内容で更新する">
        </form>

        <!--
            <input type="button" value="最初へ戻る" onClick="location.href='index.html'">
        -->
    </div>

</body>

</html>
