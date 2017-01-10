<?php /** @var array $arResult */ ?>
<div class="advantages">
    <div class="epages__title epages__title--icon-<?= $arResult['TITLE_DIRECTION']; ?>">
        <div class="container text-center">
            <div class="epages__icon">
                <svg class="icon">
                    <use xlink:href="#icon"></use>
                </svg>
            </div>
            <?= $arResult['TITLE']; ?>
        </div>
    </div>
    <div class="container">
        <div class="clearfix epages__section">
            <div class="row">
                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div class="advantages__wrap col-xs-6 col-sm-4">
                        <div class="advantages__item">
                            <div class="advantages__item-icon">
                                <svg class="icon">
                                    <use xlink:href="#icon"></use>
                                </svg>
                            </div>
                            <div class="advantages__item-text text-uppercase">Преимущество</div>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
</div>