<?php include 'header.php'; ?>

<main class="panel panel--cart">
    <section class="cart container">
        <div class="cart__column">
            <div class="cart__accordion accordion">
                <div class="accordion__heading">
                    <h2>Twoje konto</h2>
                </div>
                <div class="accordion__contentWrap">
                    <div class="accordion__content">
                        <div class="inputWrapper inputname">
                            <input type="text" class="input input--text" placeholder="Imię"/>
                        </div>
                        <div class="inputWrapper inputname">
                            <input type="text" class="input input--text" placeholder="Nazwisko"/>
                        </div>
                        <div class="inputWrapper inputname">
                            <input type="email" class="input input--text" placeholder="Adres e-mail"/>
                        </div>
                        <div class="inputWrapper inputname">
                            <input type="phone" class="input input--text" placeholder="Telefon"/>
                        </div>
                        <div class="accordion__inputWrap inputname">
                            <input type="password" class="input input--password" placeholder="Hasło"/>
                            <div class="passToggle">
                                <img class="off" src="./assets/img/pass_on.svg"/>
                                <img class="on" src="./assets/img/pass_off.svg"/>
                            </div>
                        </div>
                        <div class="singleCheckbox">
                            <input type="checkbox" class="checkboxEngine" name="daneOsobowecheckbox"/>
                            <label for="daneOsobowecheckbox">Chcę otrzymać fakturę</label>
                        </div>
                        <div class="invoice">
                            <h3 class="invoice__heading">Dane do faktury</h3>
                            <div class="inputWrapper inputname">
                                <input type="text" class="input input--text" placeholder="Nazwa firmy"/>
                            </div>
                            <div class="inputWrapper inputname">
                                <input type="text" class="input input--text" placeholder="Numer NIP"/>
                            </div>
                            <div class="inputWrapper inputname">
                                <input type="text" class="input input--text" placeholder="Ulica i numer lokalu"/>
                            </div>
                            <div class="inputWrapper inputname">
                                <input type="text" class="input input--text" placeholder="Kod pocztowy"/>
                            </div>
                            <div class="inputWrapper inputname">
                                <input type="text" class="input input--text" placeholder="Miasto"/>
                            </div>
                        </div>
                        <div class="btn btn--nextStepForm btn--arrowDown"><span>Dalej</span></div>
                    </div>
                </div>
            </div>
            <div class="cart__accordion accordion">
                <div class="accordion__heading">
                    <h2>Adres</h2>
                </div>
                <div class="accordion__contentWrap">
                    <div class="accordion__content">
                        <div class="inputWrapper inputname">
                            <input type="text" class="input input--text" placeholder="Ulica i numer lokalu"/>
                        </div>
                        <div class="inputWrapper inputname">
                            <input type="text" class="input input--text" placeholder="Kod pocztowy"/>
                        </div>
                        <div class="inputWrapper inputname">
                            <input type="text" class="input input--text" placeholder="Miasto"/>
                        </div>
                        <div class="btn btn--nextStepForm btn--arrowDown"><span>Dalej</span></div>
                    </div>
                </div>
            </div>
            <div class="cart__accordion accordion courierTab">
                <div class="accordion__heading">
                    <h2>Forma dostawy</h2>
                </div>
                <div class="accordion__contentWrap">
                    <p class="courierSelect__title">Jak mamy dostarczyć Twoje zamówienie?</p>
                    <div class="accordion__content">
                        <div class="courierSelect">
                            <div class="courierSelect__option courierSelect__option--best">
                                <input type="radio" class="radioEngine" name="courierSelect"/>
                                <div class="checkbox">
                                    <div></div>
                                </div>
                                <div class="content">
                                    <h3>Wieczorem do rąk własnych</h3>
                                    <p>Otrzymasz idealnie zamrożoną karmę w dniu wysyłki.</p>
                                    <p class="delivery">Dostawa: poniedziałek - piątek w godz. 18 - 22</p>
                                </div>
                            </div>
                            <div class="courierSelect__option">
                                <input type="radio" class="radioEngine" name="courierSelect"/>
                                <div class="checkbox">
                                    <div></div>
                                </div>
                                <div class="content">
                                    <h3>Rano pod Twoimi drzwiami</h3>
                                    <p>Podaj kod do domofonu aby kurier Cię nie obudził.</p>
                                    <p class="delivery">Dostawa: wtorek - sobota w nocy</p>
                                </div>
                            </div>
                            <div class="courierSelect__option">
                                <input type="radio" class="radioEngine" name="courierSelect"/>
                                <div class="checkbox">
                                    <div></div>
                                </div>
                                <div class="content">
                                    <h3>Tradycyjnym kurierem</h3>
                                    <p>Otrzymasz idealnie zamrożoną karmę w dniu wysyłki.</p>
                                    <p class="delivery">Dostawa: wtorek - czwartek</p>
                                </div>
                            </div>
                            <div class="courierSelect__option">
                                <input type="radio" class="radioEngine" name="courierSelect" value="pickup"/>
                                <div class="checkbox">
                                    <div></div>
                                </div>
                                <div class="content">
                                    <h3>odbiór w punkcie</h3>
                                    <p>Odbierz paczkę tak szybko jak to możliwe.</p>
                                    <p class="delivery">Dostawa: czwartek, do punktu odbioru.</p>
                                </div>
                            </div>
                        </div>
                        <div class="inputWrapper inputname">
                            <input type="text" class="input input--text" placeholder="Wiadomość dla kuriera (kod do klatki)"/>
                        </div>
                        <div class="inputWrapper pickup">
                            <p class="btn btn--pickup btn--clean"><span>Wybierz punkt odbioru</span></p>
                        </div>
                        <div class="btn btn--nextStepForm btn--arrowDown"><span>Dalej</span></div>
                    </div>
                </div>
            </div>
            <div class="cart__accordion accordion">
                <div class="accordion__heading">
                    <h2>Data dostawy</h2>
                </div>
                <div class="accordion__contentWrap">
                    <div class="accordion__content">
                        <div class="deliveryCalendar"></div>
                        <h4 class="calendar__selectedDate">Wybrana data: <span><span class="deliveryDate">10.04.2021</span> (<span class="deliveryDay">środa</span>)</span></h4>
                        <div class="btn btn--nextStepForm btn--arrowDown"><span>Dalej</span></div>
                    </div>
                </div>
            </div>
            <div class="cart__accordion accordion">
                <div class="accordion__heading">
                    <h2>Płatność</h2>
                </div>
                <div class="accordion__contentWrap">
                    <div class="accordion__content">
                        <div class="paymentSelect">
                            <h3>Zapłać bezpiecznie kartą
                                <img src="./assets/img/mastercard_logo.svg"/>
                                <img src="./assets/img/visa_logo.svg"/>
                            </h3>
                            <div class="paymentSelect__option">
                                <div class="paymentField">
                                    <input type="number" class="cardNumber" placeholder="Numer karty"/>
                                    <input type="number" class="cardExpire" placeholder="MM/RR" maxlength="5"/>
                                    <input type="number" class="cardCVC" placeholder="Kod CVC" maxlength="3"/>
                                </div>
                            </div>
                        </div>
                        <div class="paymentFeatures">
                            <div class="paymentFeatures__position">
                                <img src="./assets/img/paymentInfo_01.svg"/>
                                <p>Bez zobowiązań: Anuluj w dowolnym momencie bez opłat.</p>
                            </div>
                            <div class="paymentFeatures__position">
                                <img src="./assets/img/paymentInfo_02.svg"/>
                                <p>Twoje dane są bezpieczne. Nie zapisujemy numerów kart.</p>
                            </div>
                            <div class="paymentFeatures__position">
                                <img src="./assets/img/paymentInfo_03.svg"/>
                                <p>Gwarancja czystej miski lub zwrot pieniędzy.</p>
                            </div>
                        </div>
                        <div class="summaryAcceptance">
                            <div class="summaryAcceptance__wrap">
                                <div class="singleCheckbox error">
                                    <input type="checkbox" class="checkboxEngine" name="acceptance1"/>
                                    <label for="acceptance1">Akceptuję <a href="#">regulamin serwisu Psibufet</a>.*</label>
                                    <div class="singleCheckbox__error" error-msg="Pole wymagane."></div>
                                </div>
                                <p class="info">* Pole wymagane</p>
                            </div>
                        </div>
                        <div class="btn btn--placeOrder place-order disabled"><span>Zapłać bezpiecznie</span></div>
                        <div class="placeOrderLoader">
                            <div class="placeOrderLoader__wrap">
                                <img src="./assets/img/spinner.svg"/>
                                <p>Trwa przekierowanie...</p>
                            </div>
                        </div>
                        <div class="summarySafety">
                            <p>Dla Twojego bezpieczeństwa nastąpi weryfikacja 3D Secure.</p>
                            <img src="./assets/img/summarySafety.svg"/>
                        </div>
                        <p class="summaryText summaryText--bold">Składając zamówienie wyrażasz zgodę na prowadzenie cyklicznych dostaw karmy PsiBufet w formie subskrypcji. Przypomnienie o kolejnych dostawach otrzymasz drogą elektroniczną. Planem żywienia i dostawami możesz wygodnie zarządzać z Panelu Klienta.</p>
                        <p class="summaryText">Administratorem Twoich danych osobowych przetwarzanych w związku z udzielanymi zgodami jest Feedwell sp. z o.o. z siedzibą w Warszawie i będą one przetwarzane w celu prowadzenia komunikacji marketingowej za pośrednictwem wybranych kanałów. Zgody te możesz w każdej chwili wycofać. Informacje o Twoich prawach z tym związanych i więcej szczegółów znajdziesz w Polityce Prywatności.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart__column cart__column--summary">
            <div class="cartSummary">
                <div class="cartSummary__heading">
                    <h2>Twój koszyk</h2>
                </div>
                <div class="cartSummary__content contentShow ready visible" data="01" price="46.72">
                    <div class="info" style="margin: 0 auto 20px;">
                        <h3>14 dni z karmą PsiBufet</h3>
                    </div>
                    <div class="summary">
                        <div class="summary__pos">
                            <p>Karmy:</p>
                            <p><span class="value">5<small>20</small></span> zł / dzień</p>
                        </div>
                        <div class="summary__pos">
                            <p>Okres:</p>
                            <p>14 dni</p>
                        </div>
                        <div class="summary__pos">
                            <p>Dostawa:</p>
                            <p><span>0</span> zł</p>
                        </div>
                        <div class="summary__pos">
                            <p>Płatność:</p>
                            <p><span>0</span> zł</p>
                        </div>
                    </div>
                    <div class="total">
                        <p>Suma:</p>
                        <p class="price"><span class="value">36<small>40</small></span> zł</p>
                    </div>
                </div>
            </div>
            <div class="dontForget">
                <div class="dontForget__heading">
                    <h2>Warto pamiętać</h2>
                </div>
                <div class="dontForget__list">
                    <p>Żadnych zobowiązań. Możesz w każdym momencie zmienić plan lub wstrzymać dostawy.</p>
                    <p>Gwarancja czystej miski lub zwrot pieniędzy.</p>
                </div>
            </div>
            <div class="googleReview">
                <div class="googleReview__wrap">
                    <div class="googleReview__logo">
                        <img src="assets/img/googleLogo.svg"/>
                    </div>
                    <div class="googleReview__stars">
                        <img src="assets/img/googleStar_ico.svg" class="star"/>
                        <img src="assets/img/googleStar_ico.svg" class="star"/>
                        <img src="assets/img/googleStar_ico.svg" class="star"/>
                        <img src="assets/img/googleStar_ico.svg" class="star"/>
                        <img src="assets/img/googleStar_ico.svg" class="star"/>
                    </div>
                    <div class="googleReview__text">
                        <p>4.9 / 5 wg Opinii klientów</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cartValue" price="36.72">
        <div class="cartValue__wrap">
            <div class="cartValue__heading">
                <p>Wartość koszyka <span class="value">36<small>72</small></span> zł</p>
            </div>
            <div class="cartValue__content">
                <div class="closebtn"></div>
                <div class="cartValue__items">
                    <div class="cartValue__pos">
                        <p>Karma:</p>
                        <p class="data price"><span class="value">5<small>20</small></span> zł / dzień</p>
                    </div>
                    <div class="cartValue__pos">
                        <p>Okres:</p>
                        <p class="data">14 dni</p>
                    </div>
                    <div class="cartValue__pos">
                        <p>Dostawa:</p>
                        <p class="data">0 zł</p>
                    </div>
                    <div class="cartValue__pos cartValue__pos--discount">
                        <p>Rabat:</p>
                        <p class="data">-50%</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>