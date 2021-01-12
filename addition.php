<?php
 include_once './m/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>
            Добавить пользователя
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
                            Добавить к основной таблице
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <h5 class="frame-heading">
                               Имя и Фамилия - обязательна 
                            </h5>
                            <div class="frame-wrap">
                                <table class="table m-0">
                                <tbody>
                                    <form action="./c/add.php" method="POST">
                                    <tr>
                                    <td scope="row" style="float: left;">Имя *: 
                                        <input type="text" size="40" name = "name" value="Пётр">
                                    </td>
                                    <td style="float: left;">Фамилия *: 
                                        <input type="text" size="40" name = "lastname"
                                                                     value="Первый" /></td>
                                    <td scope="row" style="float: left;">картинка: 
                                        <input type="text" size="40" name = "img" value="josh">
                                    </td>
                                    <td scope="row" style="float: left;">Имя картинки : 
                                        <input type="text" size="40" name = "alt_img" value="alt_img">
                                    </td>                                     
                                    <td style="float: left;">Специализация: 
                                        <input type="text" size="40" name = "edu"
                                                                     value="PHP developer" /></td>
                                    <td style="float: left;">Должность:
                                        <input type="text" size="40" name = "prof"
                                                                     value = "Senior" /></td>
                                    <td style="float: left;">Твиттер: 
                                        <input type="text" size="40" name = "twit"
                                                                     value ="petruha" /></td>
                                    <td style="float: left;">Ссылка: 
                                        <input type="text" size="40" name = "link"
                                                                     value = "@ptruh" /></td>
                                    <td style="float: left;">Активность * : 
                                      <select name="banned">
                                        <option disabled>(0-активен,1 - не активен)</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                      </select>
                                    </td>
                                    <td style="float: left;">
                                        <input type="submit" name = "add" value="Добавить" class="submit  btn-warning" />
                                    </td>
                                    </tr>
                                    </form>
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
