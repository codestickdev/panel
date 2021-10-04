<?php include 'header.php'; ?>

<main class="panel panel--summary">
    <section class="stepHeading">
        <div class="stepHeading__wrap">
            <h2 class="marker"><span>Super, mamy to!</span></h2>
            <h4>Sprawdź zawartość koszyka</h4>
        </div>
    </section>
    <section class="summaryContent">
        <div class="summaryCart">
            <div class="summaryCart__content">
                <div class="switchTabs">
                    <div class="tab selected" data="01">
                        <h4>Pierwsza dostawa</h4>
                    </div>
                    <div class="tab" data="02">
                        <h4>Kolejne dostawy</h4>
                    </div>
                </div>
                <div class="cartSummary__content contentShow ready visible" data="01">
                    <h2 class="heading">Jedzienie na 2 tygodnie</h2>
                    <div class="info">
                        <h2>Zawartość paczki</h2>
                        <h3>28 <small>x</small> 500g</h3>
                    </div>
                    <div class="summary summary--items">
                        <div class="summary__pos">
                            <p><b>4x</b></p>
                            <p>Wołowe Love</p>
                        </div>
                        <div class="summary__pos">
                            <p><b>4x</b></p>
                            <p>Jagnię Wcina</p>
                        </div>
                        <div class="summary__pos">
                            <p><b>10x</b></p>
                            <p>Indyczy Kąsek</p>
                        </div>
                        <div class="summary__pos">
                            <p><b>10x</b></p>
                            <p>Kurczę Pieczone</p>
                        </div>
                        <div class="alert alert--success">
                            <p>Możesz w każdym momencie zmienić plan lub wstrzymać dostawy.</p>
                        </div>
                    </div>
                    <div class="summary">
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