<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>


<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <?php foreach ($arResult as $item) {


                ?>
            <div class="footer__cell"><?=$item['TEXT']?></div>

            <?php } ?>
        </div>
    </div>
</footer>

