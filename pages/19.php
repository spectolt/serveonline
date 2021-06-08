<?php $thisCat = "company"; ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside">
    <section class="page-content page-content--company hasUiDatepicker">
        <div class="page-content__wrapper">
            <section class="statistics">
                <div class="statistics__header">
                    <div class="statistics__top">
                        <div class="statistics__photo" style="background-image: url(../img/1.jpg)">
                        </div>
                        <div class="statistics__name">
                            <h2>Vardas Pavarde</h2>
                            <h3>Plaukų stilistas</h3>
                            <p>UAB grožio salonas</p>
                            <p>Vilnius, Naugarduko g. 24-1</p>
                        </div>
                    </div>
                    <div class="statistics__date">
                        <p class="statistics__day statistics__day--from">Nuo <input class="statistics__datepicker"></p>
                        <p class="statistics__day statistics__day--to">Iki <input class="statistics__datepicker"></p>
                    </div>
                </div>
                <div class="stat-grid">
                    <div class="stat-grid__item stat-grid__clients stat-grid__clients--comeback">
                        <div class="stat-grid__top">
                            <h3>68 <span class="up">0.6%</span></h3>
                            <h3>1200€ <span class="down">0.6%</span></h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Grįžusių klientų</b></h3>
                            <h3>registracijų</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item stat-grid__clients stat-grid__clients--new">
                        <div class="stat-grid__top">
                            <h3>168 <span class="up">0.6%</span></h3>
                            <h3>1000€ <span class="down">0.6%</span></h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Naujų klientų</b></h3>
                            <h3>registracijų</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item stat-grid__clients stat-grid__clients--all">
                        <div class="stat-grid__top">
                            <div class="stat-grid__client-plot"></div>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <div class="stat-grid__bottom-left">
                                <h3><b>Bendrai klientų</b></h3>
                                <h3>registracijų</h3>
                            </div>
                            <div class="stat-grid__bottom-right">
                                <h3>168 <span class="up">0.6%</span></h3>
                                <h3>1000€ <span class="down">0.6%</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="stat-grid__item">
                        <div class="stat-grid__top">
                            <h3>2000</h3>
                            <h3 class="right-align"><span class="up">0.6%</span></h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Profilio peržiūrų</b></h3>
                            <h3>specialisto</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item">
                        <div class="stat-grid__top">
                            <h3>13</h3>
                            <h3 class="right-align"><span class="up">0.6%</span></h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Nepavyko registruotis</b></h3>
                            <h3>Iš krepselio</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item">
                        <div class="stat-grid__top">
                            <h3>13</h3>
                            <h3 class="right-align"><span class="up">0.6%</span></h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Pasinaudojo <br> rekomendacija</b></h3>
                        </div>
                    </div>
                    <div class="stat-grid__item">
                        <div class="stat-grid__top">
                            <h3>34</h3>
                            <h3 class="right-align"><span class="up">0.6%</span></h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Atšaukė registraciją</b></h3>
                        </div>
                    </div>
                    <div class="stat-grid__item center-align">
                        <div class="stat-grid__top">
                            <h3>3</h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3>Pažymėjo<b>Mano</b></h3>
                        </div>
                    </div>
                    <div class="stat-grid__item center-align">
                        <div class="stat-grid__top">
                            <h3>38 d.</h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Registracijos dažnumas</b></h3>
                            <h3>Vidutiniškai</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item center-align">
                        <div class="stat-grid__top">
                            <h3>38</h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Pakartotinai registravosi</b></h3>
                            <h3>per paskutinius 12 mėn.</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item center-align">
                        <div class="stat-grid__top">
                            <h3>38 €</h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Vidutinė kaina</b></h3>
                            <h3>registracijos</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item stat-grid__clients stat-grid__clients--unique">
                        <h3>Unikalių klientų nuo: <span>2021 05 24</span></h3>
                        <hr>
                        <div class="stat-grid__bottom">
                            <div class="stat-grid__client-donut stat-grid__client-donut--comeback"></div>
                            <div class="stat-grid__client-donut stat-grid__client-donut--cities"></div>
                            <div class="stat-grid__client-donut stat-grid__client-donut--gender"></div>
                        </div>
                    </div>
                </div>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>