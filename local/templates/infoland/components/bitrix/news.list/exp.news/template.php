<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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



//echo '<pre>';
//print_r($arResult)
?>


<div class="content">


    <section class='exp'>
                    <h3 class='h3 exp__title'><?=$arResult['NAME']?></h3>
                    <div class="exp__container-accordions">


                        <div class="exp-accordion" data-accordion>

                            <div class="exp-accordion__control" data-accordion-button>
                                <div class="exp-accordion__control-left">
                                    <svg class="svg exp-accordion__icon">
                                        <use xlink:href="svg/sprite.svg#exp-icon-1"></use>
                                    </svg>
                                    <h5 class="h5 exp-accordion__title">Лицензии МЧС</h5>
                                </div>
                                <div class="exp-accordion__control-right">
                                    <div class="exp-accordion__plus"></div>
                                </div>
                            </div>
                            
                            <div class="exp-accordion__content" data-accordion-content>
                                <ul class="exp-accordion__list">
                                    <li class="exp-accordion__item">
                                        <div class="exp-accordion__container-inner-left">
                                            <svg class="svg exp-accordion__icon-doc" >
                                                <use xlink:href="svg/sprite.svg#exp-icon-doc"></use>
                                            </svg>
                                            <div class="exp-accordion__container-text">
                                                <h6 class="h6 exp-accordion__subtitle">Лицензия на гос. тайну</h6>
                                                <p class="exp-accordion__paragraph">
                              <span class="exp-accordion__paragraph-gray">
                                Ответственный:
                              </span>
                                                    <a href="#" class="exp-accordion__link">Прибывалова Кристина</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="exp-accordion__container-inner-icons">
                                            <a href="#" download="download">
                                                <svg class="svg exp-accordion__icon-action" >
                                                    <use xlink:href="svg/sprite.svg#download"></use>
                                                </svg>
                                            </a>
                                            <a href="#">
                                                <svg class="svg exp-accordion__icon-action" >
                                                    <use xlink:href="svg/sprite.svg#eye-exp"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="exp-accordion__item">
                                        <div class="exp-accordion__container-inner-left">
                                            <svg class="svg exp-accordion__icon-doc" >
                                                <use xlink:href="svg/sprite.svg#exp-icon-doc"></use>
                                            </svg>
                                            <div class="exp-accordion__container-text">
                                                <h6 class="h6 exp-accordion__subtitle">Лицензия ФСБ</h6>
                                                <p class="exp-accordion__paragraph">
                              <span class="exp-accordion__paragraph-gray">
                                Ответственный:
                              </span>
                                                    <a href="#" class="exp-accordion__link">Прибывалова Кристина</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="exp-accordion__container-inner-icons">
                                            <a href="#" download="download">
                                                <svg class="svg exp-accordion__icon-action" >
                                                    <use xlink:href="svg/sprite.svg#download"></use>
                                                </svg>
                                            </a>
                                            <a href="#">
                                                <svg class="svg exp-accordion__icon-action" >
                                                    <use xlink:href="svg/sprite.svg#eye-exp"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>


                    </div>
                </section>


</div>




