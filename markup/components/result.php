<div class="result">
    <div class="epages__title epages__title--icon-right">
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
        <div class="epages__section clearfix result__bg">
            <ul class="list-unstyled result__list<?php if($arResult['COLS']) {?> result__list--half clearfix<?php } ?>">
                <li class="result__item">Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
                <li class="result__item">Expedita hic molestias nesciunt nisi quo reiciendis.</li>
                <li class="result__item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto
                    delectus fuga fugiat hic id ipsa vero. Architecto, beatae provident.
                </li>
                <li class="result__item">Consequuntur error inventore itaque ratione rerum tenetur!</li>
                <li class="result__item">Aut dicta, doloremque doloribus illum nemo sit.</li>
            </ul>
            <?php if($arResult['BTN']) { ?>
                <div>
                    <a href="#modal" data-toggle="modal" class="form__submit btn-block">Заказать аудит</a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>