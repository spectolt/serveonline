<?php require_once('header-without-about.php'); ?>

<?php 
    $pfp = array('../img/1.jpg', '../img/2.jpg', '../img/3.jpg', '../img/4.jpg', '../img/5.jpg');
?>

<?php
    $areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
    $icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
    $colors = array('#fec994', '#cce2ff', '#fed9c9', '#ffefd8', '#e2c4ae', '#c1e1d2')
?>

<main class="site-main site-main--aside">
    <?php require_once('product-sidebar.php'); ?>
    <div class="page-content">        
        <section class="breadcrumbs">
            <button class="breadcrumbs__change paragraph">Grožio salonai</button>
            <button class="breadcrumbs__cart"><span>2</span></button>
        </section>
        <div class="breadcrumbs__more">
                <ul>
                    <?php for($y=0;$y<6;$y++) { ?>
                        <li <?php if($y===2) {?> style="display:none" <?php } ?>>
                    <div class="breadcrumbs__area-img" style="background-color: <?php echo "$colors[$y]" ?>">
                            <img src=<?php echo "$icons[$y]" ?>>
                            </div>
                            <p><?php echo $areas[$y] ?></p></li>
                    <?php } ?>
                </ul>
            </div>
        <div class="page-content__wrapper">
            <section class="product">
                <div class="product__header">
                    <h1 class="title">Registruokis</h1>
                    <div class="product__nav">
                        <button class="product__nav-button product__nav-button--prev"></button>
                        <div>
                            <button class="product__nav-icon"></button>
                            <input type="text" name="date" class="product__nav-input js-datepicker" readonly/>
                            <span id="value"></span>
                        </div>
                        <button class="product__nav-button product__nav-button--next"></button>
                    </div>
                </div>
                <div class="product__search input-wrapper input-wrapper--briefcase">
                    <input type="text" name="search" id="search" placeholder="Įveskite paslaugos pavadinimą" />
                    <span class="product__search-arrow"></span>
                </div>
                <div class="product__list">
                    <?php for($y=0;$y<5;$y++) { ?>
                        <div class="product__block">
                            <div class="product__block-top">
                                <div class="product__block-person">
                                    <div class="product__block-photo" style="background-image: url(<?php echo "$pfp[$y]" ?>)">
                                        <div class="product__block-like-status hidden"></div>
                                    </div>                    
                                    <div class="product__block-info">
                                        <h2>Ramunė Varnaliauskienė</h2>
                                        <span>Dermatologė</span>
                                        <p>Klinika “Lazerinė praktika”<br/>
                                        <a href="#">M. Valančiaus g. 23, Kaunas</a><br/></p>
                                        <div class="product__block-distance"><b>15 min</b> (5,6 km)</div>
                                        
                                        <div class="product__block-info-actions">
                                            <button class="button small orange product__block-more">Plačiau</button>
                                            <button class="button small gray transparent product__block-like product__block-like--active">Mano</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="calendar-container">
                                <div class="product__nav product__nav--person">
                                <button class="product__nav-button product__nav-button--prev"></button>
                                <div>
                                    <span class="product__nav-icon"></span>
                                    <input type="text" name="date" class="product__nav-input" readonly/>
                                </div>
                                <button class="product__nav-button product__nav-button--next"></button>
                                </div>
                                <table class="calendar disable-scrollbars disable-scrollbars::-webkit-scrollbar">
                                    <thead>
                                        <tr>
                                            <th class="today">Pr<small>Lap30</small></th>
                                            <th>An<small>Gru01</small></th>
                                            <th class="active">Tr<small>Gru02</small></th>
                                            <th>Kt<small>Gru03</small></th>
                                            <th>Pn<small>Gru04</small></th>
                                            <th>Še<small>Gru05</small></th>
                                            <th>Se<small>Gru06</small></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i=0;$i<4;$i++) { ?>
                                        <tr>
                                        <td><?php if($i===3) { ?><p class="calendar__more-button">DAR</p><?php } else { ?> <p>09:15</p> <?php } ?></td>
                                            <td><p></p></td>
                                            <td class="calendar__selected-day"><p>09:15</p></td>
                                            <td><p>09:15</p></td>
                                            <td><p>09:15</p></td>
                                            <td><p>09:15</p></td>
                                            <td><p>09:15</p></td>
                                        </tr>
                                        </tbody>
                                        <?php } ?>
                                        
                                        <?php for($i=0;$i<3;$i++) { ?>
                                            <tbody class="calendar__more-times calendar__more-times--hidden">
                                        <tr>
                                        <td><p>09:15</p></td>
                                            <td><p></p></td>
                                            <td class="calendar__selected-day"><p>10:15</p></td>
                                            <td><p>08:15</p></td>
                                            <td><p>11:15</p></td>
                                            <td><p>12:15</p></td>
                                            <td><p>13:15</p></td>
                                        </tr>
                                        </tbody>
                                        <?php } ?>
                                    
                                </table>
                                        </div>
                            </div>
                            <?php if($y === 0) { ?>
                            <h3 class="product__block-recommend">Specialistas Jums rekomenduoja užsiregistruoti šiai procedūrai</h3>
                            <div class="product-action product__block-action">                        
                                <div class="product-action__info">
                                    <h4>Greitasis odos atjauninimas lazeriu</h4>    
                                    <div class="product-action__duration">1 val</div>
                                    <div class="product-action__price">45€<strike>60€</strike></div>
                                </div>
                                <button class="button cyan transparent small product-action__order">Užsakyti</button>
                            </div>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <div class="pagination">
                        <div class="pagination__list">
                            <a href="#" class="pagination__button pagination__button--first"></a>
                            <a href="#" class="pagination__button pagination__button--prev"></a>

                            <a href="#" class="pagination__button">1</a>
                            <a href="#" class="pagination__button">2</a>
                            <a href="#" class="pagination__button pagination__button--active">3</a>
                            <a href="#" class="pagination__button">4</a>
                            <a href="#" class="pagination__button">...</a>
                            <a href="#" class="pagination__button">10</a>
                            <a href="#" class="pagination__button">12</a>

                            <a href="#" class="pagination__button pagination__button--next"></a>
                            <a href="#" class="pagination__button pagination__button--last"></a>
                        </div>
                        <div class="pagination__info">
                            Rodomos eilutės nuo <b>1 - 22</b>  iš  <b>9678</b>
                        </div>
                        <div class="pagination__info">
                            Viso puslapių  <b>999</b>  
                        </div>
                    </div>
                </div>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </div>
</main>
<div id="test"></div>
<?php require_once('footer.php'); ?>