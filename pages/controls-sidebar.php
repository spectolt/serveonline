<div class="site-aside-container">
    <aside class="site-aside site-aside--controls force-show-scrollbars">
        <div class="site-aside__block site-aside__block--logo site-aside__block--padding">
            <img src="../img/logo-sidebar.svg" alt="" />
        </div>
        <div class="site-aside__blocks">
            <div class="site-aside__block">
                <h3>Paslaugų gavėjai</h3>
                <ul>
                    <li><a href="#">Paslaugų gavėjų profiliai</a></li>
                    <li><a href="#">Rezervacijos</a></li>
                    <li><a href="#">Turi MANO sąrašą</a></li>
                    <li><a href="#">Neturi MANO sąrašo</a></li>
                </ul>
            </div>
            <div class="site-aside__block">
                <h3>Specialistai</h3>
                <ul>
                    <li><a href="#">Specialistų profiliai</a></li>
                    <li><a href="#">Įmonių profiliai</a></li>
                    <li><a href="#">Ataskaita specialistui</a></li>
                    <li><a href="#">Yra MANO sąraše</a></li>
                    <li><a href="#">Nėra MANO sąraše</a></li>
                </ul>
            </div>
            <div class="site-aside__block">
                <h3>Nustatymai</h3>
                <div class="site-aside__item">
                    <a href="#">Darbuotojų profiliai</a>
                </div>
                <div class="site-aside__item">
                    <a href="#">Išsiųstos SMS</a>
                </div>
                <div class="site-aside__item">
                    <a href="#">Gautos SMS</a>
                </div>
                <div class="site-aside__item">
                    <a href="#">Žinučių nustatymai</a>
                </div>
                <div class="site-aside__item">
                    <a href="#">Pranešimai</a>
                </div>
                <div class="site-aside__item <?php if ($thisPage == "services") echo "site-aside__item--active"; ?>">
                    <a href="#">Paslaugos</a>
                    <div class="site-aside__filters <?php if ($thisPage != "services") echo "hidden"; ?>">
                        <p>Rodyti paslaugas</p>
                        <select>
                            <option>Nepanaudotas</option>
                        </select>
                        <p>Paslaugų aprašymai</p>
                        <select>
                            <option>Nėra</option>
                        </select>
                    </div>
                </div>
                <div class="site-aside__item <?php if ($thisPage == "areas") echo "site-aside__item--active"; ?>">
                    <a href="#">Sritys</a>
                </div>
            </div>
        </div>
    </aside>
</div>