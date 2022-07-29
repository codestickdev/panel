<?php include 'header.php'; ?>

<main class="panel panel--piesonalizacja">
    <section class="stepHeading">
        <div class="stepHeading__wrap">
            <h2 class="marker"><span>Psieliczone</span></h2>
            <h4>Sprawdź rekomendowane smaki oraz plan.</h4>
        </div>
    </section>

    <section class="piesoCalc">
        <div class="piesoCalc__wrap container">
            <div class="piesoCalc__heading">
                <h2>Na podstawie podanych inforamcji wyliczyliśmy, że...</h2>
            </div>
            <div class="piesoCalc__info">
                <h3><span class="dog">Azor</span>potrzebuje<span class="portion">125 g</span>PsiBufet dziennie</h3>
            </div>
        </div>
    </section>

    <section class="piesoHints">
        <div class="piesoHints__wrap container">
            <div class="piesoHints__heading">
                <h2 class="marker marker--medium">PsiBufet dla <span>Twojego</span> psa</h2>
            </div>
            <div class="piesoHints__info">
                <!-- Pozycje od 1 do 16 w folderze /parts - kolejność zgodna z tym co w figmie -->
                <?php include('./parts/piesonalizacja/_infobox_01.php'); ?>
                <?php include('./parts/piesonalizacja/_infobox_05.php'); ?>
                <?php include('./parts/piesonalizacja/_infobox_08.php'); ?>
            </div>
        </div>
    </section>

    <section class="piesoMenu">
        <div class="piesoMenu__wrap container">
            <div class="piesoMenu__heading">
                <h2 class="marker marker--medium">Smaki <span>przygotowane</span> dla Ciebie</h2>
            </div>
            <div class="piesoMenu__list">
                <div class="foodOption foodOption--indyczykasek foodOption--selected">
                    <input type="checkbox" name="foodOption" value="indyczykasek"/>
                    <div class="foodOption__image">
                        <img src="./assets/img/piesonalizacja/smak_indyczykasek.png"/>
                    </div>
                    <div class="foodOption__content">
                        <div class="checkbox">
                            <div class="checkbox__checkbox"></div>
                        </div>
                        <h3>Indyczy kąsek</h3>
                        <p>Wyjątkowa mieszanka chudego mięsa z indyka, szpinaku, soczystej dyni oraz marchewki.</p>
                        <p class="info openFoodModal" data="data_indyk">Skład</p>
                    </div>
                </div>
                <div class="foodOption foodOption--kurczepieczone foodOption--selected">
                    <input type="checkbox" name="foodOption" value="kurczepieczone"/>
                    <div class="foodOption__image">
                        <img src="./assets/img/piesonalizacja/smak_kurczepieczone.png"/>
                    </div>
                    <div class="foodOption__content">
                        <div class="checkbox">
                            <div class="checkbox__checkbox"></div>
                        </div>
                        <h3>Kurczę pieczone</h3>
                        <p>Kompozycja delikatnego mięsa z kurczaka, jabłka, słodkich batatów oraz zielonego groszku.</p>
                        <p class="info openFoodModal" data="data_kurczak">Skład</p>
                    </div>
                </div>
                <div class="foodOption foodOption--wolowelove">
                    <input type="checkbox" name="foodOption" value="wolowelove"/>
                    <div class="foodOption__image">
                        <img src="./assets/img/piesonalizacja/smak_wolowelove.png"/>
                    </div>
                    <div class="foodOption__content">
                        <div class="checkbox">
                            <div class="checkbox__checkbox"></div>
                        </div>
                        <h3>Wołowe love</h3>
                        <p>Połączenie krwistej wołowiny, czerwonej soczewicy, słodkiego buraka oraz szpinaku.</p>
                        <p class="info openFoodModal" data="data_wolowe">Skład</p>
                    </div>
                </div>

                <!-- not recommended -->
                <hr/>

                <div class="foodOption foodOption--jagniewcina foodOption--notrecommend">
                    <input type="checkbox" name="foodOption" value="jagniewcina"/>
                    <div class="foodOption__image">
                        <img src="./assets/img/piesonalizacja/smak_jagniewcina.png"/>
                    </div>
                    <div class="foodOption__content">
                        <div class="checkbox">
                            <div class="checkbox__checkbox"></div>
                        </div>
                        <h3>Jagnię wcina</h3>
                        <p>Pyszna jagnięcina, słodka dynia, krucha marchew, a także zielony groszek.</p>
                        <p class="info openFoodModal" data="data_jagnie">Skład</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="piesoPlan">
        <div class="piesoPlan__wrap container">
            <div class="piesoPlan__heading">
                <h2 class="marker marker--medium">Twój <span>plan</span></h2>
            </div>
            <div class="piesoPlan__list">
                <div class="foodPlan foodPlan--best foodPlan--selected">
                    <input type="radio" name="foodPlan" value="100psibufet" checked/>
                    <div class="foodPlan__title">
                        <h3>100% PsiBufet</h3>
                        <div class="checkbox">
                            <div class="checkbox__checkbox"></div>
                        </div>
                    </div>
                    <div class="foodPlan__info">
                        <div class="image">
                            <img src="./assets/img/piesonalizacja/plan_01.png"/>
                        </div>
                        <div class="info">
                            <h2 class="discount"><span class="discount__wrap"><span>7<small>90</small></span> zł</span> / dzień</h2>
                            <h3 class="price"><span class="price__wrap"><span class="price__price">6<small>45</small></span>zł</span>/ dzień</h3>
                            <h4 class="portion">Porcja: <span>125</span> g / dzień</h4>
                        </div>
                    </div>
                    <div class="foodPlan__desc">
                        <p>PsiBufet pokryje pełne zapotrzebowanie kaloryczne Twojego psa <br/>(z uwzględnieniem miejsca na smakołyki).</p>
                    </div>
                </div>
                <div class="foodPlan">
                    <input type="radio" name="foodPlan" value="mix"/>
                    <div class="foodPlan__title">
                        <h3>Plan MIX</h3>
                        <div class="checkbox">
                            <div class="checkbox__checkbox"></div>
                        </div>
                    </div>
                    <div class="foodPlan__info">
                        <div class="image">
                            <img src="./assets/img/piesonalizacja/plan_02.png"/>
                        </div>
                        <div class="info">
                            <h3 class="price"><span class="price__wrap"><span class="price__price">2<small>94</small></span>zł</span>/ dzień</h3>
                            <h4 class="portion">Porcja: <span>125</span> g / dzień</h4>
                        </div>
                    </div>
                    <div class="foodPlan__desc">
                        <p>PsiBufet pokryje 50% zapotrzebowania kalorycznego Twojego psa <br/>(z uwzględnieniem miejsca na smakołyki).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="piesoInfo container">
        <div class="piesoInfo__wrap">
            <div class="wrap">
                <h2>Wylizana miska lub zwrot pieniędzy</h2>
                <p><b>Jesteśmy pewni, że Twój pies pokocha PsiBufet</b>, dlatego na nasze jedzenie dajemy <b>Gwarancję Czystej Miski</b>.</p>
                <p class="more">Zobacz więcej</p>
            </div>
            <div class="piesoInfo__content">
                <p><b>Piesek nie chce jeść? Nie szkodzi!</b> Wystarczy, że odeślesz nam porcje, które nie zostały zjedzone, a my zwrócimy środki na Twoje konto.</p>
                <p class="less">Zobacz mniej</p>
            </div>
        </div>
    </section>

    <section class="psibufetFaq">
        <div class="psibufetFaq__wrap container">
            <h2>Masz pytania?</h2>
            <div class="psibufetFaq__list">
                <div class="question question--close">
                    <div class="question__heading">
                        <p class="title">Jak karma będzie dostarczona?</p>
                    </div>
                    <div class="question__answer">
                        <p>Karmy PsiBufet dostarczamy do klientów raz w tygodniu, bezpośrednio po przygotowaniu. Na terenie Warszawy i okolic diety PsiBufet dowożone są jeszcze tego samego dnia. Jeśli mieszkasz w innym mieście, to nasza karma dotrze do Ciebie transportem zapewniającym ciąg chłodniczy od nadania aż pod Twoje drzwi.</p>
                    </div>
                </div>
                <div class="question question--close">
                    <div class="question__heading">
                        <p class="title">Jak mam ją przechowywać?</p>
                    </div>
                    <div class="question__answer">
                        <p>Karmy PsiBufet dostarczamy do klientów raz w tygodniu, bezpośrednio po przygotowaniu. Na terenie Warszawy i okolic diety PsiBufet dowożone są jeszcze tego samego dnia. Jeśli mieszkasz w innym mieście, to nasza karma dotrze do Ciebie transportem zapewniającym ciąg chłodniczy od nadania aż pod Twoje drzwi.</p>
                    </div>
                </div>
                <div class="question question--close">
                    <div class="question__heading">
                        <p class="title">Ile karmy mam podawać?</p>
                    </div>
                    <div class="question__answer">
                        <p>Karmy PsiBufet dostarczamy do klientów raz w tygodniu, bezpośrednio po przygotowaniu. Na terenie Warszawy i okolic diety PsiBufet dowożone są jeszcze tego samego dnia. Jeśli mieszkasz w innym mieście, to nasza karma dotrze do Ciebie transportem zapewniającym ciąg chłodniczy od nadania aż pod Twoje drzwi.</p>
                    </div>
                </div>
                <div class="question question--close">
                    <div class="question__heading">
                        <p class="title">Czy PsiBufet to jedzenie surowe?</p>
                    </div>
                    <div class="question__answer">
                        <p>Karmy PsiBufet dostarczamy do klientów raz w tygodniu, bezpośrednio po przygotowaniu. Na terenie Warszawy i okolic diety PsiBufet dowożone są jeszcze tego samego dnia. Jeśli mieszkasz w innym mieście, to nasza karma dotrze do Ciebie transportem zapewniającym ciąg chłodniczy od nadania aż pod Twoje drzwi.</p>
                    </div>
                </div>
                <div class="question question--close">
                    <div class="question__heading">
                        <p class="title">Co jeśli mój pies nie chce jeść karmy PsiBufet?</p>
                    </div>
                    <div class="question__answer">
                        <p>Karmy PsiBufet dostarczamy do klientów raz w tygodniu, bezpośrednio po przygotowaniu. Na terenie Warszawy i okolic diety PsiBufet dowożone są jeszcze tego samego dnia. Jeśli mieszkasz w innym mieście, to nasza karma dotrze do Ciebie transportem zapewniającym ciąg chłodniczy od nadania aż pod Twoje drzwi.</p>
                    </div>
                </div>
                <div class="question question--close">
                    <div class="question__heading">
                        <p class="title">Jak działają cykliczne dostawy?</p>
                    </div>
                    <div class="question__answer">
                        <p>Karmy PsiBufet dostarczamy do klientów raz w tygodniu, bezpośrednio po przygotowaniu. Na terenie Warszawy i okolic diety PsiBufet dowożone są jeszcze tego samego dnia. Jeśli mieszkasz w innym mieście, to nasza karma dotrze do Ciebie transportem zapewniającym ciąg chłodniczy od nadania aż pod Twoje drzwi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="navbar-clone"></div>
    <div class="navbar navbar--wide">
        <div class="navbar__wrap">
            <a href="#" class="btn btn--back"><span>Wstecz</span></a>
            <a href="#" class="btn"><span>Dalej</span></a>
        </div>
    </div>
    <?php include 'foodModals.php'; ?>
</main>

<?php include 'footer.php'; ?>