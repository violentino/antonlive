<? use Bitrix\Main\Page\Asset;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$asset = Asset::getInstance();
?>






<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about">
                    <a href="#" class="about__title about__title_two">
                        Подписался >
                    </a>
                    <p class="about__text">
                        <span class="about__span-second">Copyright © 2020 Все права наши</span> <span class="about__span">ШО ШО ШО</span> <span class="about__span-second">by Евгений</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php $asset->addJs('/local/templates/main/js/jquery-3.3.1.min.js'); ?>
<?php $asset->addJs('/local/templates/main/js/main.js'); ?>
<?php $asset->addJs('/local/templates/main/js/bootstrap.min.js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>
</html>