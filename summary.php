<?php include 'header.php'; ?>

<main class="panel panel--summary">
    <section class="stepHeading">
        <div class="stepHeading__wrap">
            <h2 class="marker"><span>Super</span>, mamy to!</h2>
            <h4>Oto Twoje zamówienie</h4>
        </div>
    </section>
    <section class="summaryContent">
        <div class="summaryCart">
            <div class="summaryCart__content">
                <div class="cartSummary__content contentShow ready visible" data="01">
                    <h2 class="heading">Zawartość paczki</h2>
                    <div class="info">
                        <div class="info__pos">
                            <h3>600 g</h3>
                            <p>dziennej <br/>porcji</p>
                        </div>
                        <div class="info__pos">
                            <h3>14</h3>
                            <p>saszetek <br/>z jedzeniem</p>
                        </div>
                        <div class="info__pos">
                            <h3>2 tygodnie</h3>
                            <p>zapasu <br/>posiłków</p>
                        </div>
                    </div>
                    <div class="summary summary--items" style="display: none;" data-summary="1">
                        <div class="summary__pos summary__pos--heading">
                            <p>Smak</p>
                            <p>14 saszetek</p>
                        </div>
                        <div class="summary__pos">
                            <p>Wołowe Love</p>
                            <p>4 x 600g</p>
                        </div>
                        <div class="summary__pos">
                            <p>Jagnię Wcina</p>
                            <p>4 x 600g</p>
                        </div>
                        <div class="summary__pos">
                            <p>Indyczy Kąsek</p>
                            <p>4 x 600g</p>
                        </div>
                        <div class="summary__pos">
                            <p>Kurczę Pieczone</p>
                            <p>2 x 600g</p>
                        </div>
                    </div>
                    <div class="showInfo" data-info="summary">
                        <p>Zobacz wybrane smaki</p>
                    </div>
                    <div class="summary">
                        <div class="summary__pos summary__pos--heading discount">
                            <p>Podsumowanie</p>
                            <p class="value">Zniżka -20%</p>
                        </div>
                        <div class="summary__pos">
                            <p>Karma na 14 dni:</p>
                            <div class="priceWrap">
                                <p class="priceWrap__normal">
                                    <span class="value">5<small>20</small></span> zł
                                </p>
                                <p class="priceWrap__discount">
                                    <span class="value">4<small>11</small></span> zł / dzień
                                </p>
                            </div>
                        </div>
                        <div class="summary__pos summary__pos--discount">
                            <p>Rabat:</p>
                            <p class="price">- <span class="value">14<small>56</small></span> zł</p>
                        </div>
                        <div class="summary__pos">
                            <p>Dostawa:</p>
                            <p><span>ZA DARMO!</span></p>
                        </div>
                    </div>
                    <div class="total">
                        <p>Suma:</p>
                        <p class="price"><span class="value">36<small>40</small></span> zł</p>
                    </div>
                    <div class="deliveryInfo" style="display: none;">
                        <p>Druga dostawa <span>z rabatem 25%</span> dotrze do Ciebie 2 tygodnie po pierwszej paczce.</p>
                        <p>Możesz w każdej chwili zrezygnować z kolejnych dostaw lub zmienić zawartość paczki oraz termin dostawy.</p>
                    </div>
                    <div class="showInfo" data-info="delivery">
                        <p>Kolejne dostawy</p>
                    </div>
                </div>
                <div class="cartSummary__content contentShow contentShow--nextdelivery" data="02">
                    <h2 class="heading">Jedzienie na 4 tygodnie</h2>
                    <div class="info">
                        <h2>Zawartość paczki</h2>
                        <h3>28 <small>x</small> 500g</h3>
                    </div>
                    <div class="summary">
                        <div class="alert alert--success">
                            <p>Możesz w każdym momencie zmienić plan lub wstrzymać dostawy.</p>
                        </div>
                        <div class="summary__pos">
                            <p>Karma na 28 dni:</p>
                            <p class="price"><span class="value">5<small>20</small></span> zł / dzień</p>
                        </div>
                        <div class="summary__pos">
                            <p>Dostawa:</p>
                            <p><span>ZA DARMO!</span></p>
                        </div>
                    </div>
                    <div class="total">
                        <p>Suma:</p>
                        <p class="price"><span class="value">36<small>40</small></span> zł</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion summaryCoupon">
            <div class="accordion__heading">
                <h2>Rabat (opcjonalnie)</h2>
            </div>
            <div class="accordion__contentWrap">
                <div class="accordion__content inputname">
                    <input type="text" class="input input--text" placeholder="Wpisz kod rabatowy"/>
                </div>
                <div class="confirmCoupon">
                    <button class="btn btn--button"><span>Zrealizuj</span></button>
                </div>
            </div>
        </div>
    </section>
    <div class="navbar-clone"></div>
    <div class="navbar navbar--wide">
        <div class="navbar__wrap">
            <a href="#" class="btn btn--back"><span>Wstecz</span></a>
            <a href="#" class="btn"><span>Przejdź do kasy</span></a>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>