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
            <div class="summaryCart__heading">
                <h2>Twój koszyk</h2>
                <p>Składając zamówienie wyrażasz zgodę na prowadzenie cyklicznych dostaw karmy PsiBufet w formie subskrypcji. Przypomnienie o kolejnych dostawach otrzymasz drogą elektroniczną. Planem żywienia i dostawami możesz wygodnie zarządzać z Panelu Klienta.</p>
            </div>
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
                    <div class="info">
                        <h3>28 <small>x</small> 500g</h3>
                        <p>(wielkość opakowania)</p>
                    </div>
                    <div class="summary summary--items">
                        <h3 class="summary__title">Plan żywienia twojego psa:</h3>
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
                            <p>Karma:</p>
                            <p><span>5<small>20</small></span> zł / dzień</p>
                        </div>
                        <div class="summary__pos">
                            <p>Okres:</p>
                            <p>14 dni</p>
                        </div>
                        <div class="summary__pos">
                            <p>Dostawa:</p>
                            <p><span>0</span> zł</p>
                        </div>
                    </div>
                    <div class="total">
                        <p>Suma:</p>
                        <p class="price"><span>36<small>40</small></span> zł</p>
                    </div>
                </div>
                <div class="cartSummary__content contentShow contentShow--nextdelivery" data="02">
                    <div class="info">
                        <h3>28 <small>x</small> 500g</h3>
                        <p>(wielkość opakowania)</p>
                    </div>
                    <div class="summary">
                        <div class="summary__pos">
                            <p>Karma:</p>
                            <p><span>5<small>20</small></span> zł / dzień</p>
                        </div>
                        <div class="summary__pos">
                            <p>Okres:</p>
                            <p>14 dni</p>
                        </div>
                        <div class="summary__pos">
                            <p>Dostawa:</p>
                            <p><span>0</span> zł</p>
                        </div>
                        <div class="alert alert--success">
                            <p>Możesz w każdym momencie zmienić plan lub wstrzymać dostawy.</p>
                        </div>
                    </div>
                    <div class="total">
                        <p>Suma:</p>
                        <p class="price"><span>36<small>40</small></span> zł</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion summaryCoupon">
            <div class="accordion__heading">
                <h2>Rabat (opcjonalnie)</h2>
            </div>
            <div class="accordion__contentWrap">
                <div class="accordion__content">
                    <input type="text" class="input input--text" placeholder="Wpisz kod rabatowy"/>
                </div>
            </div>
        </div>
    </section>
    <div class="navbar-clone"></div>
    <div class="navbar">
        <a href="#" class="btn btn--back"><span>Wstecz</span></a>
        <a href="#" class="btn"><span>Przejdź do kasy</span></a>
    </div>
</main>

<?php include 'footer.php'; ?>