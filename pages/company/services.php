<section class="company__tab hidden" id="paslaugos">
    <div class="services-list">
        <div class="services-list__aside">
            <?php $cats = array(
                'Plaukų priežiūra',
                'Rankų priežiūra',
                'Pėdų priežiūra',
                'Veido priežiūra',
                'Kūno priežiūra'
            );
            foreach ($cats as $k => $c) { ?>
                <div class="checkbox-wrapper">
                    <div class="radio">
                        <input name="services" type="radio" id="s<?php echo $k; ?>" class="" value="1" />
                        <label for="s<?php echo $k; ?>"><?php echo $c; ?></label>
                    </div>
                    <div class="checkbox-children">
                        <div class="radio">
                            <input name="service[]" type="radio" id="s<?php echo $k; ?>1" class="" value="1" />
                            <label for="s<?php echo $k; ?>1">Moterims</label>
                        </div>
                        <div class="radio">
                            <input name="service[]" type="radio" id="s<?php echo $k; ?>2" class="" value="1" />
                            <label for="s<?php echo $k; ?>2">Vyrams</label>
                        </div>
                        <div class="radio">
                            <input name="service[]" type="radio" id="s<?php echo $k; ?>3" class="" value="1" />
                            <label for="s<?php echo $k; ?>3">Vaikams</label>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="services-list__blocks hidden">
            <h4 class="services-list__notice">Sužymėkite paslaugas atliekamos Jūsų įstaigoje ir jos atsiras <b>Serve Professionals</b> sistemoje</h4>
            <div class="services-list__block">
                <h4><span>Paprastas kirpimas</span> <span class="more-button">Plačiau</span></h4>
                <p class="more-description hidden">Galvos plovimas, modelinis kirpimas, dieninis sušukavimas.</p>
                <div class="services-list__features">
                    <div class="time-inputs-container">
                        <p class="inputs__before-text">Trukmė:</p>
                        <div class="time-inputs disabled">
                            <input type="number" name="hour" placeholder="00" min="0" max="23" length="2" disabled>
                            <p>:</p>
                            <input type="number" name="minute" placeholder="00" min="0" max="59" length="2" disabled>
                        </div>
                    </div>
                    <div class="discount-inputs">
                        <p class="inputs__before-text">Kaina:</p>
                        <input type="text" name="before-discount" placeholder="0€" disabled>
                        <span class="discount-inputs__after-icon"></span>
                        <p>Kaina po nuolaidos: </p>
                        <input type="text" name="after-discount" placeholder="0€" disabled>
                    </div>
                    <div class="periodicity-inputs">
                        <p>Periodiškumas: </p>
                        <div class="periodicity">
                            <input type="number" name="periodicity" placeholder="0" disabled>
                            <select class="company__select" disabled>
                                <option></option>
                                <option selected>sav.</option>
                                <option>d.</option>
                            </select>
                        </div>
                    </div>
                    <div class="checkbox">
                        <input name="feature" type="checkbox" id="feature-1" class="" value="1" />
                        <label for="feature-1"></label>
                    </div>
                </div>
                <button class="cyan small company__button-order">Galima rezervuoti online</button>
            </div>
            <div class="services-list__block">
                <h4><span>Paprastas kirpimas</span> <span class="more-button">Plačiau</span></h4>
                <p class="more-description hidden">Galvos plovimas, modelinis kirpimas, dieninis sušukavimas.</p>
                <div class="services-list__features">
                    <div class="time-inputs-container">
                        <p class="inputs__before-text">Trukmė:</p>
                        <div class="time-inputs disabled">
                            <input type="number" name="hour" placeholder="00" min="0" max="23" length="2" disabled>
                            <p>:</p>
                            <input type="number" name="minute" placeholder="00" min="0" max="59" length="2" disabled>
                        </div>
                    </div>
                    <div class="discount-inputs">
                        <p class="inputs__before-text">Kaina:</p>
                        <input type="text" name="before-discount" placeholder="0€" disabled>
                        <span class="discount-inputs__after-icon"></span>
                        <p>Kaina po nuolaidos: </p>
                        <input type="text" name="after-discount" placeholder="0€" disabled>
                    </div>
                    <div class="periodicity-inputs">
                        <p>Periodiškumas: </p>
                        <div class="periodicity">
                            <input type="number" name="periodicity" placeholder="0" disabled>
                            <select class="company__select" disabled>
                                <option></option>
                                <option selected>sav.</option>
                                <option>d.</option>
                            </select>
                        </div>
                    </div>
                    <div class="checkbox">
                        <input name="feature" type="checkbox" id="feature-2" class="" value="1" />
                        <label for="feature-2"></label>
                    </div>
                </div>
                <button class="cyan small company__button-order">Galima rezervuoti online</button>
            </div>
            <div class="services-list__block services-list__block--choices">
                <h4><span>Balayage / Ombre dažymas</span> <span class="more-button">Plačiau</span></h4>
                <span class="product-expand"></span>
                <p class="more-description hidden">
                    Konsultacija. Dažymui atlikti nenaudojamos jokios pagalbinės priemonės. Jų nereikia todėl, kad siekiama išgauti ypatingą sruogų formą, kuri primena natūraliai nušviesėjusias sruogas. Dažai ant plaukų tepami laisvai rankomis, švelniai braukiant per plaukus. Dažniausiai nėra naudojama ir folija, bet yra visokių technikų.
                </p>
                <p class="more-description hidden">
                    Plaukų sruogos dažomos laisvai, dažymo šepetėliu tapšnojant per pasirinktas plaukų sruogas, stengiamasi, kad viršuje jos būtų siauresnės, o į apačią išplatėtų. Dažoma taip, kad krentant plaukų sruogoms, dažytos vietos atrodytų kuo natūraliau - tarsi nubučiuotos saulės. Žinoma, tam, kad būtų tinkamai išgautas natūralus efektas Jums dažymą turėtų atlikti įgudusi plaukų stilistė.
                <p class="more-description hidden">
                    Plaukų dažymas balayage technika suteikia daugybę privalumų. Plaukai yra daug mažiau pažeidžiami, kadangi šviesinama tik dalis plaukų, bet to, parenkami tonai, kurie nenutolsta per daug nuo Jūsų natūralios plaukų spalvos. Dažniausiai tai būna keliais tonais šviesesni atspalviai. Žinoma, visada yra ir išimčių, kartais parenkamos labai kontrastingos spalvos, bet jos atrodo pakankamai natūraliai dėl pačios dažymo technikos. Dažymui naudojami tik profesionalūs dažai, kurie ne tik padeda išgauti norimą atspalvį, bet ir apsaugo plaukus nuo stipresnių pažeidimų. Plaukai išliks sveikai atrodantys ir gyvybingi.
                </p>
                <p class="more-description hidden">
                    Dažant plaukus balayage technika pas kirpėją lankysitės tikrai daug rečiau - juk priešingai nei pilnu sruogų dažymu nuo šaknų, šiuo atveju nesimatys kiek plaukai nuaugo. Jei Jūsų plaukų galai yra išplonėję, balayage dažymas Jums suteiks apimties. Kadangi šviesesni plaukų galai atrodys pilnesni bei puresni. Balayage technika gražiausiai atrodo ilgaplaukėms, bet puikiai tiks ir toms, kurios turi trumpesnius plaukus.
                </p>
                <p class="more-description hidden">
                    Paslaugos kaina gali keistis pagal sunaudotų dažų kiekį.
                </p>
                <div class="product-choice hidden">
                    <h4>Trumpi plaukai</h4>
                    <div class="services-list__features">
                        <div class="time-inputs-container">
                            <p class="inputs__before-text">Trukmė:</p>
                            <div class="time-inputs disabled">
                                <input type="number" name="hour" placeholder="00" min="0" max="23" length="2" disabled>
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" min="0" max="59" length="2" disabled>
                            </div>
                        </div>
                        <div class="discount-inputs">
                            <p class="inputs__before-text">Kaina:</p>
                            <input type="text" name="before-discount" placeholder="0€" disabled>
                            <span class="discount-inputs__after-icon"></span>
                            <p>Kaina po nuolaidos: </p>
                            <input type="text" name="after-discount" placeholder="0€" disabled>
                        </div>
                        <div class="periodicity-inputs">
                            <p>Periodiškumas: </p>
                            <div class="periodicity">
                                <input type="number" name="periodicity" placeholder="0" disabled>
                                <select class="company__select" disabled>
                                    <option></option>
                                    <option selected>sav.</option>
                                    <option>d.</option>
                                </select>
                            </div>
                        </div>
                        <div class="checkbox">
                            <input name="feature" type="checkbox" id="feature-3" class="" value="1" />
                            <label for="feature-3"></label>
                        </div>
                    </div>
                </div>
                <div class="product-choice hidden">
                    <h4>Vidutinio ilgio plaukai</h4>
                    <div class="services-list__features">
                        <div class="time-inputs-container">
                            <p class="inputs__before-text">Trukmė:</p>
                            <div class="time-inputs disabled">
                                <input type="number" name="hour" placeholder="00" min="0" max="23" length="2" disabled>
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" min="0" max="59" length="2" disabled>
                            </div>
                        </div>
                        <div class="discount-inputs">
                            <p class="inputs__before-text">Kaina:</p>
                            <input type="text" name="before-discount" placeholder="0€" disabled>
                            <span class="discount-inputs__after-icon"></span>
                            <p>Kaina po nuolaidos: </p>
                            <input type="text" name="after-discount" placeholder="0€" disabled>
                        </div>
                        <div class="periodicity-inputs">
                            <p>Periodiškumas: </p>
                            <div class="periodicity">
                                <input type="number" name="periodicity" placeholder="0" disabled>
                                <select class="company__select" disabled>
                                    <option></option>
                                    <option selected>sav.</option>
                                    <option>d.</option>
                                </select>
                            </div>
                        </div>
                        <div class="checkbox">
                            <input name="feature" type="checkbox" id="feature-4" class="" value="1" />
                            <label for="feature-4"></label>
                        </div>
                    </div>
                </div>
                <div class="product-choice hidden">
                    <h4>Ilgi plaukai</h4>
                    <div class="services-list__features">
                        <div class="time-inputs-container">
                            <p class="inputs__before-text">Trukmė:</p>
                            <div class="time-inputs disabled">
                                <input type="number" name="hour" placeholder="00" min="0" max="23" length="2" disabled>
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" min="0" max="59" length="2" disabled>
                            </div>
                        </div>
                        <div class="discount-inputs">
                            <p class="inputs__before-text">Kaina:</p>
                            <input type="text" name="before-discount" placeholder="0€" disabled>
                            <span class="discount-inputs__after-icon"></span>
                            <p>Kaina po nuolaidos: </p>
                            <input type="text" name="after-discount" placeholder="0€" disabled>
                        </div>
                        <div class="periodicity-inputs">
                            <p>Periodiškumas: </p>
                            <div class="periodicity">
                                <input type="number" name="periodicity" placeholder="0" disabled>
                                <select class="company__select" disabled>
                                    <option></option>
                                    <option selected>sav.</option>
                                    <option>d.</option>
                                </select>
                            </div>
                        </div>
                        <div class="checkbox">
                            <input name="feature" type="checkbox" id="feature-5" class="" value="1" />
                            <label for="feature-5"></label>
                        </div>
                    </div>
                </div>
                <button class="cyan small company__button-order">Galima rezervuoti online</button>
            </div>
        </div>
    </div>
    <div class="company__button-container">
        <button class="orange transparent">Atšaukti pakeitimus</button>
        <button class="orange">Saugoti pakeitimus</button>
    </div>
</section>