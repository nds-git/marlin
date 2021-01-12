<?php
    include_once './m/db.php';
    $id = $_GET[id];

    $query_edit  = "SELECT * FROM `personal` WHERE `id`= '$id'";
    $result_edit_personal = mysqli_query( $db, $query_edit );
    if ( !$result_edit_personal ) echo "Произошла ошибка: "  .  mysqli_error();
     
    $res = mysqli_fetch_assoc($result_edit_personal);
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>
            Подготовительные задания к курсу
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
                            Редактирование в основной таблице
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <h5 class="frame-heading">
                               <?=$res["name"]?>  <?=$res["lastname"]?> 
                            </h5>
                            <div class="frame-wrap">
                                <table class="table m-0">
                                <tbody>
                                    <form action="./c/ed.php" method="POST">
                                    <tr>
                                    <td scope="row" style="float: left;">Имя *: 
                                        <input type="text" size="40" name = "name" value="<?=$res['name']?>">
                                    </td>
                                    <td style="float: left;">Фамилия *: 
                                        <input type="text" size="40" name = "lastname"
                                                                     value="<?=$res['lastname']?>" /></td>
                                    <td scope="row" style="float: left;">Картинка: 
                                        <input type="text" size="40" name = "img" value="<?=$res['img']?>">
                                    </td>
                                    <td scope="row" style="float: left;">Имя картинки : 
                                        <input type="text" size="40" name = "alt_img" value="<?=$res['alt_img']?>">
                                    </td>   
                                    <td style="float: left;">Специализация: 
                                        <input type="text" size="40" name = "edu"
                                                                     value="<?=$res['edu']?>" /></td>
                                    <td style="float: left;">Должность:
                                        <input type="text" size="40" name = "prof"
                                                                     value = "<?=$res['prof']?>" /></td>
                                    <td style="float: left;">Твиттер: 
                                        <input type="text" size="40" name = "twit"
                                                                     value ="<?=$res['twit']?>" /></td>
                                    <td style="float: left;">Ссылка: 
                                        <input type="text" size="40" name = "link"
                                                                     value = "<?=$res['link']?>" /></td>
                                    <td style="float: left;">Активность * : 
                                      <select name="banned">
                                        <option disabled>(0-активен,1 - не активен)</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                      </select>
                                    </td>
                                    <td style="float: left;">
                                        <input type="hidden" name="id" value="ымымы">
                                        <input type="submit" name = "safe" value="Сохранить" class="submit  btn-warning" />
                                    </form>
                                    <form action="./c/del.php?id=<?=$res['id']?>" method="POST">
                                         <input type="submit" name = "delete" value="Удалить" class="submit btn-danger" />
                                    </form>
                                    </td> 
                                  </tr>
                                </tbody>
                                </table>
                                <p style="font-weight: 600;"><a href = "/task_8.php" title="вернуться">Вернуться</a></p>
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