<?php $thisCat = "company"; ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside">
    <section class="page-content page-content--company hasUiDatepicker">
        <div class="page-content__wrapper">
            <section class="statistics statistics--company">
                <div class="statistics__header">
                    <div class="statistics__top">
                        <div class="statistics__name">
                            <h2>UAB Grožio salonas</h2>
                            <p>Vilnius, Naugarduko g. 24-1</p>
                        </div>
                    </div>
                    <div class="statistics__date">
                        <p class="statistics__day statistics__day--from">Nuo <input class="statistics__datepicker"></p>
                        <p class="statistics__day statistics__day--to">Iki <input class="statistics__datepicker"></p>
                    </div>
                </div>
                <div class="stat-grid">
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
                                <h2>168 <span class="up">0.6%</span></h2>
                                <h2>1000€ <span class="down">0.6%</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="stat-grid__item stat-grid__clients stat-grid__clients--comeback">
                        <div class="stat-grid__top">
                            <h2>68 <span class="up">0.6%</span></h2>
                            <h2>1200€ <span class="down">0.6%</span></h2>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Grįžusių klientų</b></h3>
                            <h3>registracijų</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item stat-grid__clients stat-grid__clients--new">
                        <div class="stat-grid__top">
                            <h2>168 <span class="up">0.6%</span></h2>
                            <h2>1000€ <span class="down">0.6%</span></h2>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Naujų klientų</b></h3>
                            <h3>registracijų</h3>
                        </div>
                    </div>

                    <div class="stat-grid__item">
                        <div class="stat-grid__top">
                            <h2>2000</h2>
                            <h3 class="right-align"><span class="up">0.6%</span></h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Profilio peržiūrų</b></h3>
                            <h3>Įmonės</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item">
                        <div class="stat-grid__top">
                            <h2>13</h2>
                            <h3 class="right-align"><span class="up">0.6%</span></h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Nepavyko registruotis</b></h3>
                            <h3>Iš krepšelio</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item">
                        <div class="stat-grid__top">
                            <h2>13</h2>
                            <h3 class="right-align"><span class="up">0.6%</span></h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Pasinaudojo rekomendacija</b></h3>
                        </div>
                    </div>
                    <div class="stat-grid__item">
                        <div class="stat-grid__top">
                            <h2>34</h2>
                            <h3 class="right-align"><span class="up">0.6%</span></h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Atšaukė registraciją</b></h3>
                        </div>
                    </div>
                    <div class="stat-grid__item">
                        <div class="stat-grid__top">
                            <h2>3</h2>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3>Pažymėjo <b>Mano</b></h3>
                        </div>
                    </div>
                    <div class="stat-grid__item">
                        <div class="stat-grid__top">
                            <h2>38 d.</h2>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Registracijos dažnumas</b></h3>
                            <h3>Vidutiniškai</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item">
                        <div class="stat-grid__top">
                            <h2>38</h2>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Pakartotinai registravosi</b></h3>
                            <h3>per paskutinius 12 mėn.</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item">
                        <div class="stat-grid__top">
                            <h2>38 €</h2>
                            <h3 class="right-align"><span class="up">0.6%</span></h3>
                        </div>
                        <hr>
                        <div class="stat-grid__bottom">
                            <h3><b>Vidutinė kaina</b></h3>
                            <h3>registracijos</h3>
                        </div>
                    </div>
                    <div class="stat-grid__item stat-grid__clients stat-grid__clients--unique">
                        <h3 class="centered">Unikalių klientų nuo: <span>2021 05 24</span></h3>
                        <hr>
                        <div class="stat-grid__bottom">
                            <div class="stat-grid__client-donut stat-grid__client-donut--test"></div>
                        </div>
                    </div>
                </div>
                <?php for ($i = 0; $i < 10; $i++) { ?>
                    <div class="statistics__list-item">
                        <div class="statistics__client-photo" style="background-image: url(../img/1.jpg)">
                        </div>
                        <div class="statistics__client">
                            <div class="statistics__client-item">
                                <h3>Grįžusių klientų<br><span>registracijų</span></h3>
                                <h2 class="number">5</h2>
                            </div>
                            <div class="statistics__client-item">
                                <h3>Naujų klientų<br><span>registracijų</span></h3>
                                <h2 class="number">37</h2>
                            </div>
                            <div class="statistics__client-item">
                                <h3>Bendrai kleintų <br><span>registracijų</span></h3>
                                <h2 class="number">37</h2>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="statistics__button-container">
                    <button class="darkblue transparent button--icon button--send">Siųsti ataskaitą el. paštu</button>
                    <button class="darkblue transparent button--icon button--print">Spausdinti</button>
                </div>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>