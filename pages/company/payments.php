<section class="company__tab hidden" id="mokejimo-planai">
    <div class="company__info company__payment">
        <div class="company__payment-top">
            <div class="company__payment-inputs">
                Specialistų skaičius
                <input type="number" name="specialists" value="0" min="0" max="999" size="3">
                <div class="number-button-container">
                    <button class="number-up"></button>
                    <button class="number-down"></button>
                </div>
            </div>
            <div class="company__payment-price">
                <h3>Kaina: <span>60€</span>/mėn.</h3>
            </div>
        </div>
        <div class="company__payment-plans">
            <?php $number = array("5", "15", "25", "40", "60", "80", "100", "200");
            foreach ($number as $k => $c) { ?>
                <div class="payment-plan">
                    <input type="radio" id="plan<?php echo $k ?>" name="plan">
                    <label class="payment-plan__label" for="plan<?php echo $k ?>"><p>Pasiūlymai verslui <b>iki <?php echo $c ?></b> specialistų</p></label>
                    <div class="payment-plan__info">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Mini</th>
                                    <th>Basic</th>
                                    <th>Pro</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h3 class="payment-plan__main-functions">Pagrindinės funkcijos</h3>
                                    </td>
                                    <td></td>
                                    <td class="coming-soon">
                                        <p>Greitai bus</p>
                                    </td>
                                    <td class="coming-soon">
                                        <p>Greitai bus</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Paslaugų gavėjui:</h4>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        <p>Priminimai apie rezervacijas („Notifications“).</p>
                                    </td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        <p>Galimybė išsaugoti rezervacija savo telefono kalendoriuje.</p>
                                    </td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        <p>Rezervacijų istorija.</p>
                                    </td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Paslaugų teikėjui:</h4>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        <p>Fotosesija (objekto interjeras, darbuotojai – tik naujai prisijungusiems).</p>
                                    </td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        <p>Integracija su SERVE PROFESSIONALS sistema.</p>
                                    </td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        <p>Pranešimai apie rezervacijas („Notifications“).</p>
                                    </td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        <p>Veiklos ataskaitos.</p>
                                    </td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        <p>Paslaugų gavėjų administravimas verslui.</p>
                                    </td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        <p>Paslaugų gavėjų administravimas specialistui.</p>
                                    </td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        <p>SERVE ONLINE registracijos knyga (Mobile WEB).</p>
                                    </td>
                                    <td class="unchecked"></td>
                                    <td class="checked"></td>
                                    <td class="checked"></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        <p>Reitingai, atsiliepimų valdymas.</p>
                                    </td>
                                    <td class="unchecked"></td>
                                    <td class="unchecked"></td>
                                    <td class="checked"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="payment-plan__price"><span><b>40€</b>/mėn</span><br />iki 5 specialistų</td>
                                    <td class="payment-plan__price"><span><b>60€</b>/mėn</span><br />iki 5 specialistų</td>
                                    <td class="payment-plan__price"><span><b>75€</b>/mėn</span><br />iki 5 specialistų</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="payment-plan__price"><span><b>10€</b>/mėn</span><br />už papildomą specialistą</td>
                                    <td class="payment-plan__price"><span><b>10€</b>/mėn</span><br />už papildomą specialistą</td>
                                    <td class="payment-plan__price"><span><b>10€</b>/mėn</span><br />už papildomą specialistą</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>