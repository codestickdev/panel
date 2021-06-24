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
                        <input type="text" class="input input--text" placeholder="Imię"/>
                        <input type="text" class="input input--text" placeholder="Nazwisko"/>
                        <input type="email" class="input input--text" placeholder="Adres e-mail"/>
                        <input type="phone" class="input input--text" placeholder="Telefon"/>
                        <input type="password" class="input input--password" placeholder="Hasło"/>
                        <div class="singleCheckbox">
                            <input type="checkbox" class="checkboxEngine" name="daneOsobowecheckbox"/>
                            <label for="daneOsobowecheckbox">Chcę otrzymać fakturę</label>
                        </div>
                        <div class="invoice">
                            <h3 class="invoice__heading">Dane do faktury</h3>
                            <input type="text" class="input input--text" placeholder="Nazwa firmy"/>
                            <input type="text" class="input input--text" placeholder="Numer NIP"/>
                            <input type="text" class="input input--text" placeholder="Ulica i numer lokalu"/>
                            <input type="text" class="input input--text" placeholder="Kod pocztowy"/>
                            <input type="text" class="input input--text" placeholder="Miasto"/>
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
                        <input type="text" class="input input--text" placeholder="Ulica i numer lokalu"/>
                        <input type="text" class="input input--text" placeholder="Kod pocztowy"/>
                        <input type="text" class="input input--text" placeholder="Miasto"/>
                        <div class="btn btn--nextStepForm btn--arrowDown"><span>Dalej</span></div>
                    </div>
                </div>
            </div>
            <div class="cart__accordion accordion">
                <div class="accordion__heading">
                    <h2>Kurier</h2>
                </div>
                <div class="accordion__contentWrap">
                    <div class="accordion__content">
                        <div class="courierSelect">
                            <div class="courierSelect__option courierSelect__option--best">
                                <input type="radio" class="radioEngine" name="courierSelect"/>
                                <div class="checkbox">
                                    <div></div>
                                </div>
                                <div class="content">
                                    <h3>Dostawa pod drzwi</h3>
                                    <p>Przesyłka rano na Twojej wycieraczce.<br/>Brak możliwości opłaty przy odbiorze.</p>
                                </div>
                                <div class="logo">
                                    <img src="assets/img/couriers/goodspeed_logo.svg"/>
                                </div>
                            </div>
                            <div class="courierSelect__option">
                                <input type="radio" class="radioEngine" name="courierSelect"/>
                                <div class="checkbox">
                                    <div></div>
                                </div>
                                <div class="content">
                                    <h3>Przesyłka kurierska</h3>
                                    <p>Standardowa przesyłka kurierska.</p>
                                </div>
                                <div class="logo">
                                    <img src="assets/img/couriers/dhl_logo.svg"/>
                                </div>
                            </div>
                            <div class="courierSelect__option">
                                <input type="radio" class="radioEngine" name="courierSelect"/>
                                <div class="checkbox">
                                    <div></div>
                                </div>
                                <div class="content">
                                    <h3>Odbiór w sklepie</h3>
                                    <p>Odbierz w punkcie DHL, min. Żabka, InMedio, Shell, Relay.</p>
                                </div>
                                <div class="logo">
                                    <img src="assets/img/couriers/zabka_logo.svg"/>
                                </div>
                            </div>
                        </div>
                        <input type="text" class="input input--text" placeholder="Wiadomość dla kuriera (kod do klatki)"/>
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
                        <div class="calendar">
                            <div class="calendar__nav">
                                <div class="arrow arrow--left"><img src="assets/img/arrow_red.svg"/></div>
                                <div class="monthName">Marzec 2021</div>
                                <div class="arrow arrow--right"><img src="assets/img/arrow_red.svg"/></div>
                            </div>
                            <div class="calendar__content">
                                <table border="1">
                                    <thead>
                                        <tr>
                                            <th>Pn.</th>
                                            <th>Wt.</th>
                                            <th>Śr.</th>
                                            <th>Czw.</th>
                                            <th>Pt.</th>
                                            <th>Sob.</th>
                                            <th>Ndz.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="notAvailable">1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td class="notAvailable">5</td>
                                            <td class="notAvailable">6</td>
                                            <td class="notAvailable">7</td>
                                        </tr>
                                        <tr>
                                            <td class="notAvailable">8</td>
                                            <td>9</td>
                                            <td class="checked">10</td>
                                            <td>11</td>
                                            <td class="notAvailable">12</td>
                                            <td class="notAvailable">13</td>
                                            <td class="notAvailable">14</td>
                                        </tr>
                                        <tr>
                                            <td class="notAvailable">15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td class="notAvailable">19</td>
                                            <td class="notAvailable">20</td>
                                            <td class="notAvailable">21</td>
                                        </tr>
                                        <tr>
                                            <td class="notAvailable">22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td class="notAvailable">26</td>
                                            <td class="notAvailable">27</td>
                                            <td class="notAvailable">28</td>
                                        </tr>
                                        <tr>
                                            <td class="notAvailable">29</td>
                                            <td>30</td>
                                            <td>31</td>
                                            <td class="nextMonth">1</td>
                                            <td class="nextMonth">2</td>
                                            <td class="nextMonth">3</td>
                                            <td class="nextMonth">4</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4 class="calendar__selectedDate">Wybrana data: <span>10.04.2021 (środa)</span></h4>
                        <div class="btn btn--nextStepForm btn--arrowDown"><span>Dalej</span></div>
                    </div>
                </div>
            </div>
            <div class="cart__accordion accordion">
                <div class="accordion__heading">
                    <h2>Płatność</h2>
                </div>
                <div class="accordion__contentWrap">
                    <div class="accordion__content accordion__content--switch contentShow ready visible" data="01">
                        <div class="paymentSelect">
                            <h3>Cykliczna płatność kartą
                                <img src="./assets/img/mastercard_logo.svg"/>
                                <img src="./assets/img/visa_logo.svg"/>
                            </h3>
                            <p>Podepnij kartę, aby zaoszczędzić swój czas i nie myśleć o obowiązkach.</p>
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
                                <p>Bez zobowiązań: anuluj w dowolnym momencie bez opłat.</p>
                            </div>
                            <div class="paymentFeatures__position">
                                <p>Bezpieczny proces płatności wspiera.<img src="./assets/img/stripe_logo.svg"/></p>
                            </div>
                        </div>
                        <div class="btn btn--nextStepForm btn--arrowDown"><span>Dalej</span></div>
                    </div>
                </div>
            </div>
            <div class="cart__accordion accordion">
                <div class="accordion__heading">
                    <h2>Podsumowanie</h2>
                </div>
                <div class="accordion__contentWrap">
                    <div class="accordion__content">
                        <div class="summaryInfo">
                            <div class="summaryInfo__box">
                                <h3>Dane osobowe:</h3>
                                <p>Adam Link</p>
                                <p>adam.link@gmail.com</p>
                                <p>+48 700 880 788</p>
                            </div>
                            <div class="summaryInfo__box">
                                <h3>Dane do wysyłki:</h3>
                                <p>Adam Link</p>
                                <p>ul. Filtrowa 77/81</p>
                                <p>02-032 Warszawa</p>
                            </div>
                            <div class="summaryInfo__box">
                                <h3>Dostawa:</h3>
                                <p>10.03.2021</p>
                                <p>Kurier Goodspeed</p>
                            </div>
                            <div class="summaryInfo__box">
                                <h3>Dane osobowe:</h3>
                                <p>Cykliczna płatność kartą</p>
                                <p>Do zapłaty: <span>36<small>40</small></span> zł</p>
                            </div>
                        </div>
                        <div class="summaryAcceptance">
                            <div class="summaryAcceptance__wrap">
                                <div class="singleCheckbox error">
                                    <input type="checkbox" class="checkboxEngine" name="acceptance1"/>
                                    <label for="acceptance1">Akceptuję <a href="#">regulamin serwisu Psibufet</a>*.</label>
                                    <div class="singleCheckbox__error" error-msg="Pole wymagane."></div>
                                </div>
                                <p class="info">*Pole wymagane</p>
                            </div>
                        </div>
                        <div class="btn btn--nextStepForm"><span>Kup i zapłać</span></div>
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
                <div class="switchTabs">
                    <div class="tab selected" data="01">
                        <h4>Pierwsza dostawa</h4>
                    </div>
                    <div class="tab" data="02">
                        <h4>Kolejne dostawy</h4>
                    </div>
                </div>
                <div class="cartSummary__content contentShow ready visible" data="01" price="46.72">
                    <div class="info">
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
                <div class="cartSummary__content contentShow" data="02" price="46.72">
                    <div class="info">
                        <h3>14 dni z karmą PsiBufet</h3>
                    </div>
                    <div class="summary">
                        <div class="summary__pos">
                            <p>Karmy:</p>
                            <p><span class="value">6<small>90</small></span> zł / dzień</p>
                        </div>
                        <div class="summary__pos">
                            <p>Okres:</p>
                            <p>14 dni</p>
                        </div>
                        <div class="summary__pos">
                            <p>Dostawa:</p>
                            <p><span>10</span> zł</p>
                        </div>
                        <div class="summary__pos">
                            <p>Płatność:</p>
                            <p><span>0</span> zł</p>
                        </div>
                    </div>
                    <div class="total">
                        <p>Suma:</p>
                        <p class="price"><span class="value">46<small>72</small></span> zł</p>
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