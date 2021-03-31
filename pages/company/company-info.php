<section class="company__tab" id="imones-bendra-informacija">
    <div class="company__inputs-container">
        <div class="input-container input-container--street">
            <input type="text" name="address" placeholder="Gatvė, namo nr. - buto nr.">
            <span class="input-icon"></span>
        </div>
        <div class="input-container input-container--city">
            <select class="select-input company__select-city">
                <option></option>
                <option>Vilnius</option>
                <option>Kaunas</option>
            </select>
            <span class="input-icon"></span>
        </div>
        <div class="input-container input-container--address">
            <input type="text" name="coordinates" placeholder="Koordinatės">
            <span class="input-icon"></span>
        </div>
        <div class="input-container input-container--neighborhood">
            <select class="select-input company__select-neighborhood">
                <option></option>
                <option>Centras</option>
            </select>
            <span class="input-icon"></span>
        </div>
        <div class="input-container input-container--phone">
            <input type="text" name="phone" placeholder="+370 XXXXXXXX">
            <span class="input-icon"></span>
        </div>
        <div class="input-container">
            <input type="text" name="email" placeholder="Elektroninis paštas">
            <span class="input-icon"></span>
        </div>
    </div>
    <div class="company__info">
        <div class="company__about">
            <h3>Filosofija</h3>
            <ul class="languages">
                <li class="paragraph active"><a href="#">LT</a></li>
                <li class="paragraph"><a href="#">EN</a></li>
                <li class="paragraph"><a href="#">RU</a></li>
            </ul>
            <textarea type="text" name="about-description" placeholder="Filosofija" rows="1"></textarea>
            <h3 class="company__signature">Parašas:</h3>
            <input type="text" name="signature" placeholder="Vardas">
        </div>
        <div class="company__about company__about--about-us">
            <h3>Apie mus</h3>
            <ul class="languages">
                <li class="paragraph active"><a href="#">LT</a></li>
                <li class="paragraph"><a href="#">EN</a></li>
                <li class="paragraph"><a href="#">RU</a></li>
            </ul>
            <textarea type="text" name="about-description" placeholder="Apie" rows="1"></textarea>
        </div>
        <div class="company__work-hours">
            <h3>Darbo laikas</h3>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Nuo</th>
                        <th>Iki</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pirmadienis</td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Antradienis</td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Trečiadienis</td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Ketvirtadienis</td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Penktadienis</td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Šeštadienis</td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Sekmadienis</td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                        <td>
                            <div class="company__time time-inputs">
                                <input type="number" name="hour" placeholder="00" max="23" length="2">
                                <p>:</p>
                                <input type="number" name="minute" placeholder="00" max="59" length="2">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="company__offer">
            <h3>Paskutinės minutės pasiūlymas</h3>
            <div class="checkbox">
                <input name="offer" type="checkbox" id="offer" />
                <label for="offer">
                    <div class="company__offer-info">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Nuolaida:</p>
                                    </td>
                                    <td>
                                        <div class="percent">
                                            <input type="number" name="discount" value="10" max="99" length="2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Iki darbo pabaigos likus:</p>
                                    </td>
                                    <td>
                                        <div class="hours">
                                            <input type="number" name="time-left" value="1" max="9" length="1">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </label>
            </div>
        </div>
        <div class="company__social-media">
            <h3>Socialiniai tinklai</h3>
            <div class="checkbox">
                <input name="social-media" type="checkbox" id="facebook" />
                <label for="facebook">
                    <input name="facebook-address" type="text" placeholder="Adresas">
                </label>
            </div>
            <div class="checkbox">
                <input name="social-media" type="checkbox" id="instagram" />
                <label for="instagram">
                    <input name="instagram-address" type="text" placeholder="Adresas">
                </label>
            </div>
            <div class="checkbox">
                <input name="social-media" type="checkbox" id="linkedin" />
                <label for="linkedin">
                    <input name="linkedin-address" type="text" placeholder="Adresas">
                </label>
            </div>
            <div class="checkbox">
                <input name="social-media" type="checkbox" id="youtube" />
                <label for="youtube">
                    <input name="youtube-address" type="text" placeholder="Adresas">
                </label>
            </div>
        </div>
    </div>
    <div class="company__button-container">
        <button class="orange transparent">Atšaukti</button>
        <button class="orange">Saugoti</button>
    </div>
</section>