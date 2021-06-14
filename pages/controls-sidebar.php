<div class="site-aside-container">
    <aside class="site-aside site-aside--controls force-show-scrollbars">
        <div class="site-aside__block site-aside__block--logo site-aside__block--padding">
            <img src="../img/logo-sidebar.svg" alt="" />
        </div>
        <div class="site-aside__blocks">
            <div class="site-aside__block">
                <h3>Paslaugų gavėjai</h3>
                <div class="site-aside__item <?php if ($thisPage == "service-profiles") echo "site-aside__item--active site-aside__item--open"; ?>">
                        <a href="#">Paslaugų gavėjų profiliai</a>
                        <div class="site-aside__filters <?php if ($thisPage != "service-profiles") echo "hidden"; ?>">
                            <p>Registracijos data nuo</p>
                            <div class="site-aside__datepicker-container">
                                <input class="site-aside__datepicker" placeholder="Nuo">
                            </div>
                            <p>Registracijos data iki</p>
                            <div class="site-aside__datepicker-container">
                                <input class="site-aside__datepicker" placeholder="Iki">
                            </div>
                            <p>Šalis</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Lietuva</option>
                            </select>
                            <p>Paslaugų gavėjo miestas</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Vilnius</option>
                                <option>Kaunas</option>
                                <option>Klaipėda</option>
                            </select>
                            <p>Profilio sąsajos</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Įmonės administratorius</option>
                                <option>Specialistas</option>
                                <option>Darbuotojas</option>
                            </select>
                            <p>Pažymėti/Nepažymėti</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Pažymėti</option>
                                <option>Nepažymėti</option>
                            </select>
                            <p>Aktyvūs/Neaktyvūs</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Aktyvūs</option>
                                <option>Neaktyvūs</option>
                            </select>
                        </div>
                </div>
                <div class="site-aside__item <?php if ($thisPage == "reservations") echo "site-aside__item--active site-aside__item--open"; ?>">
                        <a href="#">Rezervacijos</a>
                        <div class="site-aside__filters <?php if ($thisPage != "reservations") echo "hidden"; ?>">
                            <p>Rezervacijos data nuo</p>
                            <div class="site-aside__datepicker-container">
                                <input class="site-aside__datepicker" placeholder="Nuo">
                            </div>
                            <p>Rezervacijos data iki</p>
                            <div class="site-aside__datepicker-container">
                                <input class="site-aside__datepicker" placeholder="Iki">
                            </div>
                            <p>Sritis</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option>Visi</option>
                                <option>Klinikos ir estetinė medicina</option>
                                <option>Odontologijos klinikos</option>
                                <option>Veterinarijos klinikos</option>
                                <option>Grožio salonai ir kirpyklos</option>
                                <option>SPA ir masažo salonai</option>
                                <option>Sportas ir reabilitacija</option>
                            </select>
                            <p>Šalis</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option>Lietuva</option>
                                <option>Latvija</option>
                            </select>
                            <p>Pasl. gavėjo miestas</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Vilnius</option>
                                <option>Kaunas</option>
                                <option>Klaipėda</option>
                            </select>
                            <p>Specialisto gavėjo miestas</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Vilnius</option>
                                <option>Kaunas</option>
                                <option>Klaipėda</option>
                            </select>
                            <p>Paslauga</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Visų pl. dažymas ir modeliavimas</option>
                                <option>Visų pl. dažymas ir modeliavimas</option>
                                <option>Visų pl. dažymas ir modeliavimas</option>
                            </select>
                            <p>Pasl. gavėjo tipas (G/N)</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Grįžęs klientas</option>
                                <option>Naujas klientas</option>
                            </select>
                            <p>Užsakymo būsena</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Patvirtintas</option>
                                <option>Atšauktas</option>
                                <option>Neatvyko</option>
                                <option>Redaguotas</option>
                            </select>
                        </div>
                    </div>
                    <div class="site-aside__item"><a href="#">Turi MANO sąrašą</a></div>
                    <div class="site-aside__item"><a href="#">Neturi MANO sąrašo</a></div>
            </div>
            <div class="site-aside__block">
                <h3>Specialistai</h3>
                    <div class="site-aside__item"><a href="#">Specialistų profiliai</a></div>
                    <div class="site-aside__item"><a href="#">Ataskaita specialistui</a></div>
                    <div class="site-aside__item <?php if ($thisPage == "company-profiles") echo "site-aside__item--active site-aside__item--open"; ?>">
                        <a href="#">Įmonių profiliai</a>
                        <div class="site-aside__filters <?php if ($thisPage != "company-profiles") echo "hidden"; ?>">
                            <p>Registracijos data nuo</p>
                            <div class="site-aside__datepicker-container">
                                <input class="site-aside__datepicker" placeholder="Nuo">
                            </div>
                            <p>Registracijos data iki</p>
                            <div class="site-aside__datepicker-container">
                                <input class="site-aside__datepicker" placeholder="Iki">
                            </div>
                            <p>Sritis</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Klinikos ir estetinė medicina</option>
                                <option>Odontologijos klinikos</option>
                                <option>Veterinarijos klinikos</option>
                                <option>Grožio salonai ir kirpyklos</option>
                                <option>SPA ir masažo salonai</option>
                                <option>Sportas ir reabilitacija</option>
                            </select>
                            <p>Šalis</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Lietuva</option>
                            </select>
                            <p>Įmonės miestas</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Vilnius</option>
                            </select>
                            <p>Pažymėti/Nepažymėti</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Pažymėti</option>
                                <option>Nepažymėti</option>
                            </select>
                            <p>Aktyvūs/Neaktyvūs</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Aktyvūs</option>
                                <option>Neaktyvūs</option>
                            </select>
                        </div>
                    </div>
                    <div class="site-aside__item <?php if ($thisPage == "company-report") echo "site-aside__item--active site-aside__item--open"; ?>">
                        <a href="#">Ataskaita įmonei</a>
                        <div class="site-aside__filters <?php if ($thisPage != "company-report") echo "hidden"; ?>">
                            <p>Data</p>
                            <div class="site-aside__datepicker-container">
                                <input class="site-aside__datepicker" placeholder="Nuo">
                            </div>
                            <p>Data</p>
                            <div class="site-aside__datepicker-container">
                                <input class="site-aside__datepicker" placeholder="Iki">
                            </div>
                            <p>Sritis</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Klinikos ir estetinė medicina</option>
                                <option>Odontologijos klinikos</option>
                                <option>Veterinarijos klinikos</option>
                                <option>Grožio salonai ir kirpyklos</option>
                                <option>SPA ir masažo salonai</option>
                                <option>Sportas ir reabilitacija</option>
                            </select>
                            <p>Šalis</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option>Lietuva</option>
                                <option>Visi</option>
                            </select>
                            <p>Miestas</p>
                            <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                                <option></option>
                                <option>Visi</option>
                                <option>Vilnius</option>
                            </select>
                        </div>
                    </div>
                    <div class="site-aside__item"><a href="#">Yra MANO sąraše</a></div>
                    <div class="site-aside__item"><a href="#">Nėra MANO sąraše</a></div>
            </div>
            <div class="site-aside__block">
                <h3>Ataskaitos</h3>
                <div class="site-aside__item <?php if ($thisPage == "report") echo "site-aside__item--active site-aside__item--open"; ?>">
                        <a href="#">Veiklos ataskaita specialistui</a>
                        <div class="site-aside__filters <?php if ($thisPage != "report") echo "hidden"; ?>">
                            <p>Data</p>
                            <div class="site-aside__datepicker-container">
                                <input class="site-aside__datepicker" placeholder="Nuo">
                            </div>
                            <p>Data</p>
                            <div class="site-aside__datepicker-container">
                                <input class="site-aside__datepicker" placeholder="Iki">
                            </div>
                            <p>Sritis</p>
                            <select data-placeholder="Pasirinkite" >
                                <option>Visi</option>
                                <option>Klinikos ir estetinė medicina</option>
                                <option>Odontologijos klinikos</option>
                                <option>Veterinarijos klinikos</option>
                                <option>Grožio salonai ir kirpyklos</option>
                                <option>SPA ir masažo salonai</option>
                                <option>Sportas ir reabilitacija</option>
                            </select>
                            <p>Šalis</p>
                            <select data-placeholder="Pasirinkite" >
                                <option>Lietuva</option>
                            </select>
                            <p>Miestas</p>
                            <select data-placeholder="Pasirinkite" >
                                <option></option>
                                <option>Visi</option>
                                <option>Vilnius</option>
                            </select>
                        </div>
                    </div>
                    <div class="site-aside__item"><a href="#">Paslaugų teikėjų mokėjimai</a></div>
            </div>
            <div class="site-aside__block">
                <h3>Nustatymai</h3>
                <div class="site-aside__item <?php if ($thisPage == "employee-profiles") echo "site-aside__item--active site-aside__item--open"; ?>">
                    <a href="#">Darbuotojų profiliai</a>
                    <div class="site-aside__filters <?php if ($thisPage != "employee-profiles") echo "hidden"; ?>">
                        <p>Įdarbinimo data</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Nuo">
                        </div>
                        <p>Įdarbinimo data</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Iki">
                        </div>
                        <p>Išdarbinimo data</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Nuo">
                        </div>
                        <p>Išdarbinimo data</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Iki">
                        </div>
                        <p>Būsena (A/N)</p>
                        <select data-placeholder="Pasirinkite" class="js-dropdown-placeholder">
                            <option></option>
                            <option>Aktyvus</option>
                            <option>Neaktyvus</option>
                        </select>
                    </div>
                </div>
                <div class="site-aside__item <?php if ($thisPage == "messages-sent") echo "site-aside__item--active site-aside__item--open"; ?>">
                    <a href="#">Išsiųstos SMS</a>
                    <div class="site-aside__filters <?php if ($thisPage != "messages-sent") echo "hidden"; ?>">
                        <p>Sukūrimo data</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Nuo">
                        </div>
                        <p>Sukūrimo data</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Iki">
                        </div>
                        <p>Siuntimo data</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Nuo">
                        </div>
                        <p>Siuntimo data</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Iki">
                        </div>
                        <p>Žinutės tipas</p>
                        <select class="js-dropdown-placeholder">
                            <option selected>Visi</option>
                            <option>Patvirtinimas</option>
                            <option>Priminimas</option>
                            <option>Reklama</option>
                        </select>
                        <p>Būsena</p>
                        <select class="js-dropdown-placeholder">
                            <option></option>
                            <option>Paruošta</option>
                            <option>Išsiųsta</option>
                            <option>Klaida</option>
                        </select>
                    </div>
                </div>
                <div class="site-aside__item <?php if ($thisPage == "messages-inbox") echo "site-aside__item--active site-aside__item--open"; ?>">
                    <a href="#">Gautos SMS</a>
                    <div class="site-aside__filters <?php if ($thisPage != "messages-inbox") echo "hidden"; ?>">
                        <p>Sukūrimo data</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Nuo">
                        </div>
                        <p>Sukūrimo data</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Iki">
                        </div>
                        <p>Siuntėjo tipas</p>
                        <select class="js-dropdown-placeholder">
                            <option></option>
                            <option>Paslaugų gavėjas</option>
                            <option>Specialistas</option>
                            <option>Įmonės savininkas</option>
                        </select>
                    </div>
                </div>
                <div class="site-aside__item <?php if ($thisPage == "messages-settings") echo "site-aside__item--active site-aside__item--open"; ?>">
                    <a href="#">Žinučių nustatymai</a>
                    <div class="site-aside__filters <?php if ($thisPage != "messages-settings") echo "hidden"; ?>">
                        <p>Sukūrimo data nuo</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Nuo">
                        </div>
                        <p>Sukūrimo data iki</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Iki">
                        </div>
                        <p>Žinutės tipas</p>
                        <select class="js-dropdown-placeholder">
                            <option selected>Visi</option>
                            <option>Automatinė notification</option>
                            <option>Automatinė SMS</option>
                            <option>Vienkartinė SMS</option>
                        </select>
                        <p>Žinutės tema</p>
                        <select class="js-dropdown-placeholder">
                            <option selected>Visi</option>
                            <option>Priminimas</option>
                            <option>Pasiūlymas</option>
                            <option>Reklama</option>
                        </select>
                        <p>Gavėjas</p>
                        <select class="js-dropdown-placeholder">
                            <option selected>Visi</option>
                            <option>Paslaugų gavėjas</option>
                            <option>Įmonės administratorius</option>
                            <option>Specialistas</option>
                            <option>Darbuotojas</option>
                        </select>
                    </div>
                </div>
                <div class="site-aside__item <?php if ($thisPage == "messages") echo "site-aside__item--active site-aside__item--open"; ?>">
                    <a href="#">Pranešimai</a>
                    <div class="site-aside__filters <?php if ($thisPage != "messages") echo "hidden"; ?>">
                        <p>Sukūrimo data</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Nuo">
                        </div>
                        <p>Sukūrimo data</p>
                        <div class="site-aside__datepicker-container">
                            <input class="site-aside__datepicker" placeholder="Iki">
                        </div>
                    </div>
                </div>
                <div class="site-aside__item <?php if ($thisPage == "services") echo "site-aside__item--active site-aside__item--open"; ?>">
                    <a href="#">Paslaugos</a>
                    <div class="site-aside__filters <?php if ($thisPage != "services") echo "hidden"; ?>">
                        <p>Rodyti paslaugas, kurios</p>
                        <select class="js-dropdown-placeholder">
                            <option></option>
                            <option>Dar nebuvo panaudotos</option>
                        </select>
                        <p>Paslaugų aprašymai</p>
                        <select class="js-dropdown-placeholder">
                            <option></option>
                            <option>Nėra</option>
                            <option>Yra</option>
                        </select>
                    </div>
                </div>
                <div class="site-aside__item <?php if ($thisPage == "areas") echo "site-aside__item--active"; ?>">
                    <a href="#">Sritys</a>
                </div>
                <div class="site-aside__item <?php if ($thisPage == "general-controls") echo "site-aside__item--active"; ?>">
                    <a href="#">Bendri nustatymai</a>
                </div>
            </div>
        </div>
        <button class="search-clean search-clean--controls">Valyti</button>
    </aside>
</div>