<section class="company__tab hidden" id="produktai">
    <div class="company__info company__photos">
        <button class="button orange small upload-image">Įkelti gamintojo logotipą (iki 16)</button>
        <p>Logotipo vietą pakeiskite traukdami ją pele</p>
        <ul class="sortable">
            <?php for ($i = 0; $i < 16; $i++) { ?>
                <li class=<?php if ($i == 0 || $i == 1) echo "hide-after" ?>>
                    <?php if ($i == 0) { ?>
                        <div class="company__photo company__photo--logo">
                            <img src="../img/matrix.png">
                            <button class="darkblue small photo-rotate"></button>
                            <button class="darkblue small photo-remove"></button>
                        </div>
                    <?php } ?>
                    <?php if ($i == 1) { ?>
                        <div class="company__photo company__photo--logo">
                            <img src="../img/ysl-logo.png">
                            <button class="darkblue small photo-rotate"></button>
                            <button class="darkblue small photo-remove"></button>
                        </div>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="company__button-container">
        <button class="orange transparent">Atšaukti pakeitimus</button>
        <button class="orange">Saugoti pakeitimus</button>
    </div>
</section>