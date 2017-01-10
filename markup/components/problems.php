<div class="problems graph-bg">
    <div class="epages__title epages__title--icon-right">
        <div class="container text-center">
            <div class="epages__icon">
                <svg class="icon">
                    <use xlink:href="#icon"></use>
                </svg>
            </div>
            Распространенные проблемы e-commerce
        </div>
    </div>
    <div class="container problems__container">
        <div class="row">
            <?php for ($i = 0; $i < 6; $i++) { ?>
                <div class="col-xs-12 col-sm-6">
                    <div class="problems__item">
                        <div class="problems__item-icon">
                            <svg class="icon">
                                <use xlink:href="#icon"></use>
                            </svg>
                        </div>
                        <div class="problems__item-divider">
                            <div class="problems__item-line"></div>
                        </div>
                        <div class="problems__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                            aperiam consequatur distinctio facilis mollitia, nobis odit placeat ratione suscipit ut.
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="text-center problems__btn-wrap">
            <a href="#modal" data-toggle="modal" class="problems__btn">Решить проблемы</a>
        </div>
    </div>
</div>