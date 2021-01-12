<?php
    include_once './m/db.php';
    $query_personal  = "SELECT * FROM `personal`";
    $result_personal = mysqli_query( $db, $query_personal );
    if ( !$result_personal ) echo "Произошла ошибка: "  .  mysqli_error();
    
    $db->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>
            8: Редактор списка пользователей
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Редактирование пользователей
                        </h2>
                        <p><a href="addition.php" class="btn btn-info" style="margin: 20px;">Добавить</a></p>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <h5 class="frame-heading">
                                Обычная таблица
                            </h5>
                            <div class="frame-wrap">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($result_personal as $per):?>
                                        <tr>
                                            <th scope="row"><?=$per[id]?></th>
                                            <td><?=$per["name"]?></td>
                                            <td><?=$per['lastname']?></td>
                                            <td>@<?=$per['twit']?></td> <!-- собачку нужно проверять на первый символ -->
                                            <td>
                                            <a href="edit.php?id=<?=$per['id']?>" class="btn btn-warning">Изменить</a>
                                            <form action="./c/del.php?id=<?=$per['id']?>" method="POST" class="btn btn-danger" >
                                                <input type="submit" name = "delete" value="Удалить"  />
                                            </form>
                                            </td>
                                        </tr>
                                    <?endforeach?>
                                    </tbody>
                                </table>
                                <p style="font-weight: 600;"><a href = "/task_7.php" title="вернуться">Вернуться</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>