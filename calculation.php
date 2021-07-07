<?php include 'header.php'; ?>

<main class="panel panel--calculation">
    <section class="stepHeading">
        <div class="stepHeading__wrap">
            <h2 class="marker"><span>Psieliczone!</span></h2>
            <h4 class="marker marker--small">Sprawdź rekomendowane karmy</h4>
        </div>
    </section>
    <section class="calculationDoglist">
        <div class="calculationDoglist__wrap">
            <h2>Na podstawie uzupełnionego formularza wyliczyliśmy, że...</h2>
            <div class="dogList">
                <div class="dogList__dog">
                    <h3><span class="name">Reksio</span> potrzebuje <span class="value">1200 kcal <small>/ dzień</small></span></h3>
                </div>
                <div class="dogList__dog">
                    <h3><span class="name">Rex</span> potrzebuje <span class="value">400 kcal <small>/ dzień</small></span></h3>
                </div>
                <a href="#food" class="calculationDoglist__more">Zobacz karmy</a>
            </div>
        </div>
    </section>
    <section class="calculationFeatures">
        <div class="calculationFeatures__wrap">
            <div class="calculationFeatures__feature">
                <img src="./assets/img/features1_vec.svg"/>
                <p>Jakość<br/>Human-Grade</p>
            </div>
            <div class="calculationFeatures__feature">
                <img src="./assets/img/features2_vec.svg"/>
                <p>Zero ulepszaczy</p>
            </div>
            <div class="calculationFeatures__feature">
                <img src="./assets/img/features3_vec.svg"/>
                <p>Bezzbożowe,<br/>monobiałkowe</p>
            </div>
        </div>
    </section>
    <section class="calculationRecommended" id="food">
        <div class="calculationRecommended__wrap">
            <h2 class="marker marker--medium marker--green"><span>Rekomendowane</span></h2>
        </div>
        <div class="calculationRecommended__list">
            <div class="calculationRecommended__item">
                <div class="foodTile foodTile--added">
                    <div class="foodTile__flag">
                        <p>W planie</p>
                    </div>
                    <div class="foodTile__gallery">
                        <img src="./assets/img/foodTile_image_wolowina.png"/>
                    </div>
                    <div class="foodTile__name" style="background-color: #4769B2;">
                        <h3>Wołowe Love</h3>
                        <img src="./assets/img/foodTile_icon_wolowina.svg"/>
                    </div>
                    <div class="foodTile__content">
                        <p class="desc">Połączenie krwistej wołowiny, czerwonej soczewicy, słodkiego buraka oraz szpinaku.</p>
                        <p class="openFoodModal" data="data_wolowe">Skład</p>
                    </div>
                    <div class="foodTile__status">
                        <img class="notadded" src="./assets/img/foodModal__notadded.svg"/>
                        <img class="added" src="./assets/img/foodModal__added.svg"/>
                    </div>
                </div>
            </div>
            <div class="calculationRecommended__item">
                <div class="foodTile foodTile--added">
                    <div class="foodTile__flag">
                        <p>W planie</p>
                    </div>
                    <div class="foodTile__gallery">
                        <img src="./assets/img/foodTile_image_indyk.png"/>
                    </div>
                    <div class="foodTile__name" style="background-color: #ED7433;">
                        <h3>Indyczy kąsek</h3>
                        <img src="./assets/img/foodTile_icon_indyk.svg"/>
                    </div>
                    <div class="foodTile__content">
                        <p class="desc">Wyjątkowa mieszanka chudego mięsa z indyka, szpinaku, soczystej dyni oraz marchewki.</p>
                        <p class="openFoodModal" data="data_indyk">Skład</p>
                    </div>
                    <div class="foodTile__status">
                        <img class="notadded" src="./assets/img/foodModal__notadded.svg"/>
                        <img class="added" src="./assets/img/foodModal__added.svg"/>
                    </div>
                </div>
            </div>
            <div class="calculationRecommended__item">
                <div class="foodTile foodTile--added">
                    <div class="foodTile__flag">
                        <p>W planie</p>
                    </div>
                    <div class="foodTile__gallery">
                        <img src="./assets/img/foodTile_image_kurczak.png"/>
                    </div>
                    <div class="foodTile__name" style="background-color: #4EACB6;">
                        <h3>Kurczę Pieczone</h3>
                        <img src="./assets/img/foodTile_icon_kurczak.svg"/>
                    </div>
                    <div class="foodTile__content">
                        <p class="desc">Kompozycja delikatnego mięsa z kurczaka, jabłka, słodkich batatów oraz zielonego groszku.</p>
                        <p class="openFoodModal" data="data_kurczak">Skład</p>
                    </div>
                    <div class="foodTile__status">
                        <img class="notadded" src="./assets/img/foodModal__notadded.svg"/>
                        <img class="added" src="./assets/img/foodModal__added.svg"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="calculationNotRecommended">
        <div class="calculationNotRecommended__wrap">
            <h2 class="marker marker--medium"><span>Nierekomendowane</span></h2>
        </div>
        <div class="calculationNotRecommended__list">
            <div class="calculationRecommended__item">
                <div class="foodTile">
                    <div class="foodTile__flag">
                        <p>Poza planem</p>
                    </div>
                    <div class="foodTile__gallery">
                        <img src="./assets/img/foodTile_image_jagnie.png"/>
                    </div>
                    <div class="foodTile__name" style="background-color: #F7BE45;">
                        <h3>Jagnię Wcina</h3>
                        <img src="./assets/img/foodTile_icon_jagnie.svg"/>
                    </div>
                    <div class="foodTile__content">
                        <p class="desc">Pyszna jagnięcina, słodka dynia, krucha marchew, a także zielony groszek.</p>
                        <p class="openFoodModal" data="data_jagnie">Skład</p>
                    </div>
                    <div class="foodTile__status">
                        <img class="notadded" src="./assets/img/foodModal__notadded.svg"/>
                        <img class="added" src="./assets/img/foodModal__added.svg"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="calculationFaq">
        <div class="calculationFaq__wrap container">
            <h2>Masz pytania?</h2>
            <div class="calculationFaq__list">
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
            <a href="#" class="btn"><span>Wybierz plan</span></a>
        </div>
    </div>
    <?php include 'foodModals.php'; ?>
</main>

<?php include 'footer.php'; ?>