<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>
<div class="news-list">

    <? if ($arResult["ITEMS"]): ?>
        <header id="header" class="header">
            <div class="container-fluid" style="padding: 0;">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">

                                <? foreach ($arResult["ITEMS"] as $cell => $arItem): ?>


                                    <div class="carousel-item <? if (!$cell): ?> active <? endif; ?>">
                                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="d-block w-100"
                                             alt="">
                                        <div class="content-main">
                                            <p class="content-main__title">
                                                <? echo $arItem["NAME"] ?>
                                            </p>
                                            <p class="content-main__text">
                                                <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                                                    <? echo $arItem["PREVIEW_TEXT"]; ?>
                                                <? endif; ?>
                                            </p>
                                            <? if ($arItem['PROPERTIES']['url']['VALUE']): ?>
                                                <a href="<?= $arItem['PROPERTIES']['url']['VALUE'] ?>"
                                                   class="content-main__text">
                                                    Подробнее...
                                                </a>
                                            <? endif; ?>
                                        </div>
                                    </div>


                                <? endforeach; ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <? endif; ?>
</div>
