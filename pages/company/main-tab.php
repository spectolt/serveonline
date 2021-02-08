<section class="company__container group__tab" id="bendra-informacija">
    <div class="company__group hidden">
    </div>
    <div class="company__companies">
        <button class="js-create-company company__create-company">Nauja įmonė</button>
        <div class="company__items">
            <div class="company__item">
                <h3>1 Įmonės vadovas</h3>
                <div class="company__inputs-container company__inputs-companies">
                    <select class="company__select">
                        <option></option>
                        <option data-image="../img/icons/clinic.svg">Klinikos ir estetinė medicina</option>
                        <option data-image="../img/icons/odontology.svg">Odontologijos klinikos</option>
                        <option data-image="../img/icons/beauty.svg">Grožio salonai ir kirpyklos</option>
                        <option data-image="../img/icons/spa.svg">SPA ir masažo salonai</option>
                        <option data-image="../img/icons/sport.svg">Sportas ir reabilitacija</option>
                        <option data-image="../img/icons/vet.svg">Veterinarijos klinikos</option>
                    </select>
                    <div class="input-container input-container--company">
                        <input type="text" class="company-name" name="title" placeholder="Pavadinimas">
                        <span class="input-icon"></span>
                    </div>
                    <div class="input-container input-container--name">
                        <input type="text" name="name" placeholder="Vardas Pavardė">
                        <span class="input-icon"></span>
                    </div>
                    <div class="input-container input-container--phone">
                        <input type="text" name="phone" placeholder="+370 XXXXXXXX">
                        <span class="input-icon"></span>
                    </div>
                    <div class="input-container input-container--email">
                        <input type="text" name="email" placeholder="Elektroninis paštas">
                        <span class="input-icon"></span>
                    </div>
                    <h4>Teisės</h4>
                    <div class="radio">
                        <input name="rights1" type="radio" id="rights-company1" class="" value="1" checked />
                        <label for="rights-company1">Gali matyti tik savo įmonę</label>
                    </div>
                    <div class="radio">
                        <input name="rights1" type="radio" id="rights-group1" class="" value="1" />
                        <label for="rights-group1">Gali matyti grupę</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="company__button-container">
        <button class="orange transparent">Atšaukti pakeitimus</button>
        <button class="orange">Saugoti pakeitimus</button>
    </div>
</section>