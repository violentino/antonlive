<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
    <section id="news" class="news">
        <section class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="news-title">
                        Новости
                    </div>
                </div>
            </div>

            <? foreach ($arResult["ITEMS"] as $cell => $arItem): ?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-card">
                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                 class="news-card__img d-none d-lg-block">
                            <div class="news-content">
                                <div class="news-content__lables">
                                    <p class="news-content__text">
                                        <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                                            <span
                                                class="news-date-time"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
                                        <? endif ?>
                                    </p>
                                    <label for="#" class="news-content__text">политика</label>
                                    <label for="#" class="news-content__text">экономика</label>
                                    <label for="#" class="news-content__text">социум</label>
                                </div>
                                <p class="news-content__sectext">
                                    <? echo $arItem["NAME"] ?>
                                </p>
                                <p class="news-content__sectext">
                                    <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                                        <? echo $arItem["PREVIEW_TEXT"]; ?>
                                    <? endif; ?>
                                </p>
                                <a href="<?= $arItem['PROPERTIES']['url']['VALUE'] ?>" class="news-content__link">
                                    Подробнее...
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <? endforeach; ?>
            <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                <br /><?=$arResult["NAV_STRING"]?>
            <?endif;?>
            <!--            <div class="row">-->
            <!--                <div class="col-lg-12">-->
            <!--                    <ul id="pagination-digg">-->
            <!--                        <li class="previous-off"><</li>-->
            <!--                        <li class="active">1</li>-->
            <!--                        <li><a href="?page=2">2</a></li>-->
            <!--                        <li>...</li>-->
            <!--                        <li><a href="?page=4">10</a></li>-->
            <!--                        <li><a href="?page=4">11</a></li>-->
            <!--                        <li>...</li>-->
            <!--                        <li><a href="?page=6">24</a></li>-->
            <!--                        <li><a href="?page=7">25</a></li>-->
            <!--                        <li class="next"><a href="?page=2">></a></li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--            </div>-->
        </section>
        <? endif; ?>
</div>