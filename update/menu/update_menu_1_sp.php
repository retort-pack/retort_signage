<!DOCTYPE html>
<head>
    <title>retort-pack</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/update_menu_1_sp.css">
	
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
        <form action="./update_menu_2_sp.php" method="POST">
            <div id="no">
                <p>NO</p>
                <select name="no">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>

            <div id="brewery">
                <p>メーカー</p>
                <input type="text" name="brewery">
            </div>

            <div id="beername">
                <p>ビールの名前</p>
                <input type="text" name="beername">
            </div>

            <div id="value">
                <p>値段</p>
                <input type="text" name="value">
            </div>

            <input type="submit" id="submit_btn" value="この内容で更新する">
</form>

    </div>
    <!--
    <input type="button" value="最初へ戻る" onClick="location.href='update_menu_2_sp.php'">
        -->

</body>

</html>
