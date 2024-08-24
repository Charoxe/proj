<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>




<div class="main-content-field__head main-content-field__head--flex main-content-field__head--solo">
    <h1>
        Справочник
    </h1>
    <div class="tabs tabs--normal" data-tabs="handbook-tabs">
        <button class="button-tab active" data-tab="handbook-tab-1"> Инфолэнд </button>
        <button class="button-tab" data-tab="handbook-tab-2"> Контрагенты </button>
    </div>
</div>

<div class="main-content-field__body">
    <div class="main-content-field__content main-content-field__content--solo">
        <div class="tabs-contents" data-tabs-contents="handbook-tabs">



            <div class="tab-content" data-tab-content="handbook-tab-1">
                <div class="primer">
                    <div class="primer__inner">
                        <div class="primer__row">
                            <form class="search-form-input search-form-input--white primer__search" method="get">
                                <div class="search-form-input__field">
                                    <div class="input-wrapper search-form-input__input-wrapper">
                                        <div class="input-container">
                                            <input type="text" class="input" name="search_query" placeholder="Введите ФИО сотрудника" value="<?= $_GET['search_query'] ?>">
                                        </div>
                                    </div>

                                    <button type="submit" class="search-form-input__button button button--flat">
                                        <svg class="svg logo__icon" >
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#glass"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="handbook">
                    <?php if ($arResult['USERS']): ?>

                    <div class="handbook__inner">

                        <?php foreach ($arResult['USERS'] as $user):?>
                        <div class="handbook__row">
                           <div class="card-user-handbook"> <!-- data-modal-target="#modal-card-employee">-->
                                <div class="card-user-handbook__inner">
                                    <div class="card-user-handbook__cell card-user-handbook__cell--user">



                                        <a href="#" class="card-user-mini" data-id="<?= $user['ID'] ?>">
                                            <div class="card-user-mini__inner">
                                                <div class="card-user-mini__avatar">

                                                    <img src="<?= $user['PHOTO'] ?>" alt="<?= $user['NAME'] ?>">

                                                </div>

                                                <div class="card-user-mini__info">
                                                    <div class="card-user-mini__name"><?= $user['NAME'] ?> <?= $user['LASTNAME'] ?></div>
                                                </div>
                                            </div>
                                        </a>



                                    </div>


                                    <div class="card-user-handbook__cell card-user-handbook__cell--status"><?= $user['PROFESSION'] ?></div>
                                    <div class="card-user-handbook__cell card-user-handbook__cell--tel">
                                        <a href="tel:<?= $user['PHONE'] ?>"><?= $user['PHONE'] ?></a>
                                    </div>
                                    <div class="card-user-handbook__cell card-user-handbook__cell--email">
                                        <a href="<?= $user['EMAIL'] ?>"><?= $user['EMAIL'] ?></a>
                                    </div>
                                </div>
                            </div>                        </div>
                        <?php endforeach; ?>



                    </div>
                </div>

                    <?php endif; ?>

                <div class="loading">
                    <div class="loading__icon">
                        <svg class="svg loading" >
                            <use xlink:href="svg/sprite.svg#loading"></use>
                        </svg>
                    </div>
                </div>
            </div>





<!--            <div class="tab-content" data-tab-content="handbook-tab-2">-->
<!--                <div class="primer">-->
<!--                    <div class="primer__inner">-->
<!--                        <div class="primer__row">-->
<!--                            <form class="search-form-input search-form-input--white primer__search">-->
<!--                                <div class="search-form-input__field">-->
<!--                                    <div class="input-wrapper search-form-input__input-wrapper">-->
<!--                                        <div class="input-container">-->
<!--                                            <input type="text" class="input" placeholder="Введите ФИО сотрудника">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <button type="submit" class="search-form-input__button button button--flat">-->
<!--                                        <svg class="svg logo__icon" >-->
<!--                                            <use xlink:href="svg/sprite.svg#glass"></use>-->
<!--                                        </svg>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                        <div class="primer__row" data-primer>-->
<!--                            <div class="primer__letters">-->
<!--                                <div class="primer__letters-line active" data-primer-letter="ru">-->
<!--                                    <a href="#" class="primer__letter">А</a>-->
<!--                                    <a href="#" class="primer__letter">Б</a>-->
<!--                                    <a href="#" class="primer__letter">В</a>-->
<!--                                    <a href="#" class="primer__letter">Г</a>-->
<!--                                    <a href="#" class="primer__letter">Д</a>-->
<!--                                    <a href="#" class="primer__letter">Е</a>-->
<!--                                    <a href="#" class="primer__letter">Ж</a>-->
<!--                                    <a href="#" class="primer__letter">З</a>-->
<!--                                    <a href="#" class="primer__letter">И</a>-->
<!--                                    <a href="#" class="primer__letter">К</a>-->
<!--                                    <a href="#" class="primer__letter">Л</a>-->
<!--                                    <a href="#" class="primer__letter">М</a>-->
<!--                                    <a href="#" class="primer__letter">Н</a>-->
<!--                                    <a href="#" class="primer__letter">О</a>-->
<!--                                    <a href="#" class="primer__letter">П</a>-->
<!--                                    <a href="#" class="primer__letter">Р</a>-->
<!--                                    <a href="#" class="primer__letter">С</a>-->
<!--                                    <a href="#" class="primer__letter">Т</a>-->
<!--                                    <a href="#" class="primer__letter">У</a>-->
<!--                                    <a href="#" class="primer__letter">Ф</a>-->
<!--                                    <a href="#" class="primer__letter">Х</a>-->
<!--                                    <a href="#" class="primer__letter">Ц</a>-->
<!--                                    <a href="#" class="primer__letter">Ч</a>-->
<!--                                    <a href="#" class="primer__letter">Ш</a>-->
<!--                                    <a href="#" class="primer__letter">Э</a>-->
<!--                                    <a href="#" class="primer__letter">Ю</a>-->
<!--                                    <a href="#" class="primer__letter">Я</a>-->
<!--                                </div>-->
<!--                                <div class="primer__letters-line" data-primer-letter="en">-->
<!--                                    <a href="#" class="primer__letter">A</a>-->
<!--                                    <a href="#" class="primer__letter">B</a>-->
<!--                                    <a href="#" class="primer__letter">C</a>-->
<!--                                    <a href="#" class="primer__letter">D</a>-->
<!--                                    <a href="#" class="primer__letter">E</a>-->
<!--                                    <a href="#" class="primer__letter">F</a>-->
<!--                                    <a href="#" class="primer__letter">G</a>-->
<!--                                    <a href="#" class="primer__letter">H</a>-->
<!--                                    <a href="#" class="primer__letter">I</a>-->
<!--                                    <a href="#" class="primer__letter">J</a>-->
<!--                                    <a href="#" class="primer__letter">K</a>-->
<!--                                    <a href="#" class="primer__letter">L</a>-->
<!--                                    <a href="#" class="primer__letter">M</a>-->
<!--                                    <a href="#" class="primer__letter">N</a>-->
<!--                                    <a href="#" class="primer__letter">O</a>-->
<!--                                    <a href="#" class="primer__letter">P</a>-->
<!--                                    <a href="#" class="primer__letter">Q</a>-->
<!--                                    <a href="#" class="primer__letter">R</a>-->
<!--                                    <a href="#" class="primer__letter">S</a>-->
<!--                                    <a href="#" class="primer__letter">T</a>-->
<!--                                    <a href="#" class="primer__letter">U</a>-->
<!--                                    <a href="#" class="primer__letter">V</a>-->
<!--                                    <a href="#" class="primer__letter">W</a>-->
<!--                                    <a href="#" class="primer__letter">X</a>-->
<!--                                    <a href="#" class="primer__letter">Y</a>-->
<!--                                    <a href="#" class="primer__letter">Z</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <button type="button" class="primer__letters-switch" data-primer-switch="en">-->
<!--                                A - Z-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="handbook">-->
<!--                    <div class="handbook__inner">-->
<!--                        <div class="handbook__row">-->
<!--                            <div class="card-user-handbook" data-modal-target="#modal-card-employee">-->
<!--                                <div class="card-user-handbook__inner">-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--user">-->
<!--                                        <a href="#" class="card-user-mini ">-->
<!--                                            <div class="card-user-mini__inner">-->
<!---->
<!--                                                <div class="card-user-mini__info">-->
<!--                                                    <div class="card-user-mini__name">Амиров Алексей</div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--status">ООО «Oberon»</div>-->
<!---->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--status">Инженер</div>-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--tel">-->
<!--                                        <a href="tel:+7 (985) 492-88-15">+7 (985) 492-88-15</a>-->
<!--                                    </div>-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--email">-->
<!--                                        <a href="mailto:amirov@infoland.ru">amirov@infoland.ru</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>                        </div>-->
<!--                        <div class="handbook__row">-->
<!--                            <div class="card-user-handbook" data-modal-target="#modal-card-employee">-->
<!--                                <div class="card-user-handbook__inner">-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--user">-->
<!--                                        <a href="#" class="card-user-mini ">-->
<!--                                            <div class="card-user-mini__inner">-->
<!---->
<!--                                                <div class="card-user-mini__info">-->
<!--                                                    <div class="card-user-mini__name">Прибылова Кристина</div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--status">ООО «Oberon»</div>-->
<!---->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--status">Заместитель директора</div>-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--tel">-->
<!--                                        <a href="tel:+7 (985) 492-88-15">+7 (985) 492-88-15</a>-->
<!--                                    </div>-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--email">-->
<!--                                        <a href="mailto:amirov@infoland.ru">amirov@infoland.ru</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>                        </div>-->
<!--                        <div class="handbook__row">-->
<!--                            <div class="card-user-handbook" data-modal-target="#modal-card-employee">-->
<!--                                <div class="card-user-handbook__inner">-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--user">-->
<!--                                        <a href="#" class="card-user-mini ">-->
<!--                                            <div class="card-user-mini__inner">-->
<!---->
<!--                                                <div class="card-user-mini__info">-->
<!--                                                    <div class="card-user-mini__name">Игнатьев Андрей</div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--status">ООО «Oberon»</div>-->
<!---->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--status">Главный инженер</div>-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--tel">-->
<!--                                        <a href="tel:+7 (985) 492-88-15">+7 (985) 492-88-15</a>-->
<!--                                    </div>-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--email">-->
<!--                                        <a href="mailto:amirov@infoland.ru">amirov@infoland.ru</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>                        </div>-->
<!--                        <div class="handbook__row">-->
<!--                            <div class="card-user-handbook" data-modal-target="#modal-card-employee">-->
<!--                                <div class="card-user-handbook__inner">-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--user">-->
<!--                                        <a href="#" class="card-user-mini ">-->
<!--                                            <div class="card-user-mini__inner">-->
<!---->
<!--                                                <div class="card-user-mini__info">-->
<!--                                                    <div class="card-user-mini__name">Амиров Алексей</div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--status">ООО «Oberon»</div>-->
<!---->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--status">Инженер</div>-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--tel">-->
<!--                                        <a href="tel:+7 (985) 492-88-15">+7 (985) 492-88-15</a>-->
<!--                                    </div>-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--email">-->
<!--                                        <a href="mailto:amirov@infoland.ru">amirov@infoland.ru</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>                        </div>-->
<!--                        <div class="handbook__row">-->
<!--                            <div class="card-user-handbook" data-modal-target="#modal-card-employee">-->
<!--                                <div class="card-user-handbook__inner">-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--user">-->
<!--                                        <a href="#" class="card-user-mini ">-->
<!--                                            <div class="card-user-mini__inner">-->
<!---->
<!--                                                <div class="card-user-mini__info">-->
<!--                                                    <div class="card-user-mini__name">Батьков Александр</div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--status">ООО «Oberon»</div>-->
<!---->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--status">Технолог</div>-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--tel">-->
<!--                                        <a href="tel:+7 (985) 492-88-15">+7 (985) 492-88-15</a>-->
<!--                                    </div>-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--email">-->
<!--                                        <a href="mailto:amirov@infoland.ru">amirov@infoland.ru</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>                        </div>-->
<!--                        <div class="handbook__row">-->
<!--                            <div class="card-user-handbook" data-modal-target="#modal-card-employee">-->
<!--                                <div class="card-user-handbook__inner">-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--user">-->
<!--                                        <a href="#" class="card-user-mini ">-->
<!--                                            <div class="card-user-mini__inner">-->
<!---->
<!--                                                <div class="card-user-mini__info">-->
<!--                                                    <div class="card-user-mini__name">Зюзин Андрей</div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--status">ООО «Oberon»</div>-->
<!---->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--status">Главный бухгалтер</div>-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--tel">-->
<!--                                        <a href="tel:+7 (985) 492-88-15">+7 (985) 492-88-15</a>-->
<!--                                    </div>-->
<!--                                    <div class="card-user-handbook__cell card-user-handbook__cell--email">-->
<!--                                        <a href="mailto:amirov@infoland.ru">amirov@infoland.ru</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="loading">-->
<!--                    <div class="loading__icon">-->
<!--                        <svg class="svg loading" >-->
<!--                            <use xlink:href="svg/sprite.svg#loading"></use>-->
<!--                        </svg>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>

    </div>


</div>
