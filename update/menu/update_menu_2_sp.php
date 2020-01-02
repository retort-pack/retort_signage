<!DOCTYPE html>
<head>
    <title>retort-pack</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/update_menu_2_sp.css">	
</head>

<!-- List of valiables.
    $update_sql -> For Update Data SQL.
    $sql_result -> exec SQL Result.
-->

<body>
    <?php
        require '../../common/connect_to_db.php';

        $update_sql = "
            UPDATE 
                beer_menu_tran 
            SET 
                brewery=\"{$_POST['brewery']}\",
                beername=\"{$_POST['beername']}\",
                value=\"{$_POST['value']}\"
            WHERE 
                no=\"{$_POST['no']}\";
        ";

        $db_connect->query($update_sql);
    ?>

    <div id="master">
        <div id="update_title">
            この内容で更新します。
        </div>

        <div id="update_summary">
            <?php
                print "<p>{$_POST['brewery']}</p>";
                print "<p>{$_POST['beername']}</p>";
                print "<p>{$_POST['value']}</p>";
            ?>
        </div>

        <input type="button" id="submit_btn" value="決定" onClick="location.href='./update_menu_3_sp.php'"><br><br> 
        <input type="button" id="cancel_btn" value="キャンセル" onClick="location.href='./update_menu_1_sp.php'">
    </div>

</body>

</html>
