<!DOCTYPE html>
<head>
    <title>retort-pack</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
</head>

<body>
    <?php
        require '../../common/connect_to_db.php';
/*
        print "{$_POST['member_name']}";
        $_SESSION[‘member_name’] = {$_POST['member_name']};
        session_start();
*/
    ?>
    <div id="master">
        
        <img src="./image/retort-pack-logo_black.png" id="retort-logo">
        <div id="main-content">
            <ul>
                <li><a href="./display/menu/display_menu_1.php"><h4>一覧画面</h4></a></li>
                <li><a href="./update/menu/update_menu_1_sp.php"><h4>メニュー更新</h4></a></li>
                <li><a href="./update/telop/update_telop_1_sp.php"><h4>テロップ更新</h4></a></li>
                <li><a href="./update/event/update_event_1_sp.php"><h4>イベント更新</h4></a></li>
            </ul>
        </div>
    </div>
</body>

</html>
