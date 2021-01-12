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
            7: Подготовительное задание к курсу
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
                            Задание 7: список пользователей
                        </h2>
                        <p style="font-weight: 600;padding-top:14px;"><a href = "/task_8.php" title="Редактор">Редактор</a>&nbsp;&nbsp;&nbsp;&nbsp;  </p>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                             <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php 
                      
                            $banned;
                            foreach ($result_personal as $per):
                            ($per[banned] == 1) ? $banned = 'banned' : $banned = '';
                            ?>
                            <div class="<?=$banned?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/<?=$per[img]?>.png" alt="<?=$per[alt_img]?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?=$per[name]?>
                                         <?=substr( $per[lastname], 0, 1);?>    
                                        <!--?=iconv('UTF-8', 'ASCII//IGNORE', $per[lastname][0]),PHP_EOL?>-->. (<?=$per[edu]?>)
                                        <!-- ?=substr("$per[lastname]",1,1)?>. (?=$per[edu]?>) -->

                                        <!-- кодировка $per[lastname][0] || echo $lastname{0}  --> 
                                        <small class="m-0 fw-300">
                                            <?=$per[prof]?>
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@<?=$per[twit]?>" class="text-info fs-sm" target="_blank">@<?=$per[twit]?></a> -
                                    <a href="https://wrapbootstrap.com/user/<?=$per[link]?>" class="text-info fs-sm" target="_blank" title="Contact <?=$per[name]?>"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <?endforeach?>

                            
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
