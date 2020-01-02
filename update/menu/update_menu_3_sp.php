<!DOCTYPE html>
<head>
    <title>retort-pack</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/update_menu_3_sp.css">
</head>

<!-- List of valiables.
    $menu_sql -> For Get Data SQL.
    $menu_tran_sql -> For Get Data SQL.
    $update_sql -> For Update Data SQL.
    $sql_result -> $menu_sql Result.
    $tran_sql_result -> $menu_tran_sql Result.
    $index_no -> Database index No.
    $get_data -> Get data from $sql_result.
    $get_tran_data -> Get data from $tran_sql_result.
-->

<body>
    <?php
        require '../../common/connect_to_db.php';
        $menu_sql = "SELECT * FROM beer_menu;";
        $menu_tran_sql = "SELECT * FROM beer_menu_tran;";
        $sql_result = $db_connect->query($menu_sql);
        $tran_sql_result = $db_connect->query($menu_tran_sql);

        for ($index_no=1; $index_no<=8; $index_no++){
            $get_data = $sql_result->fetch_assoc();
            $get_tran_data = $tran_sql_result->fetch_assoc();

            if ("{$get_data['brewery']}" != "{$get_tran_data['brewery']}" or
                "{$get_data['beername']}" != "{$get_tran_data['beername']}" or
                "{$get_data['value']}" != "{$get_tran_data['value']}") { 

                $update_sql = "
                    UPDATE 
                        beer_menu 
                    SET 
                        brewery=\"{$get_tran_data['brewery']}\",
                        beername=\"{$get_tran_data['beername']}\",
                        value=\"{$get_tran_data['value']}\"
                    WHERE 
                        no=\"{$index_no}\"
                ";
                $db_connect->query($update_sql);
            };
        };

        $sql_result->close();
        $tran_sql_result->close();
        $db_connect->close();
    ?>

    <div id="master">
        <div id="complete-msg">
            更新が完了しました。
        </div>
        <input type="button" id="back_btn" value="最初に戻る" onClick="location.href='../../index.html'">
    </div>

</body>

</html>
