<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
<head>
    <? $APPLICATION->ShowHead(); ?>

    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="/favicon.ico"/>

    <title><? $APPLICATION->ShowTitle() ?></title>

    <?php $asset = Asset::getInstance(); ?>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- bootstrap reboot css -->
    <?php $asset->addCss('/local/templates/main/css/bootstrap-reboot.min.css'); ?>
    <!-- bootstrap min css -->
    <?php $asset->addCss('/local/templates/main/css/bootstrap.min.css'); ?>
    <!-- css style	 -->
    <?php $asset->addCss('/local/templates/main/css/main.css'); ?>
    <?php $asset->addCss('/local/templates/main/css/media.css'); ?>
    <!-- fonts style -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<body>
<!-------------------- header---------------------->
<div class="header-main" id="header-main">
    <div class="container">
        <div class="row list-first">
            <div class="col-lg-3">
                <a href="index.html" class="logo">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/favikon.jpg" alt="антон">
                    <span>Anton</span>live
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="list">
                    <ul class="list-menu">
                        <li class="list-menu__item">
                            <input type="text" placeholder="поиск...">
                            <div class="search"></div>
                        </li>
                        <li class="list-menu__item">
                            <a href="#" class="list-menu__link">
                                <?$APPLICATION->IncludeFile(
                                        SITE_DIR."include/item_home.php",
                                        array(),
                                        array ("MODE" => "text"
                                        )
                                );?>
                            </a>
                        </li>
                        <li class="list-menu__item">
                            <a href="#" class="list-menu__link">
                                Рубрики
                            </a>
                        </li>
                        <li class="list-menu__item">
                            <a href="#" class="list-menu__link">
                                О нас
                            </a>
                        </li>
                        <li class="list-menu__item">
                            <a href="#" class="list-menu__link">
                                Команда
                            </a>
                        </li>
                        <li class="list-menu__item">
                            <a href="#" class="list-menu__link">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!------------------ header end --------------------->


