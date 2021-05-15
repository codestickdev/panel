<?php include 'header.php'; ?>

<main class="panel panel--mainform">
    <section class="stepHeading stepHeading--small">
        <div class="stepHeading__wrap">
            <h2>Zdrowa dieta twojego psa zaczyna się tutaj!</h2>
            <p>Zanim dobierzemy idealną karmę dla Twojego psa, musimy się poznać. Powiedz nam trochę więcej o sobie i swoim pupilu.</p>
        </div>
    </section>

    <!-- Client name -->

    <section class="formClient formWrap">
        <form>
            <div class="inputWrapper inputWrapper--error">
                <div class="inputWrapper__notice" errormsg="Podaj swoje imię"></div>
                <input type="text" class="input input--text" placeholder="Twoje imię"/>
            </div>
            <div class="inputWrapper">
                <div class="inputWrapper__notice" errormsg="Podaj adres e-mail"></div>
                <input type="email" class="input input--text" placeholder="Adres e-mail"/>
            </div>
            <p class="formInfo">Podając dane w powyższym formularzu, zgadzasz się na otrzymywanie od nas informacji handlowych. Administratorem Twoich danych będzie Feedwell sp. z o. o. siedzibą w Warszawie i będą one wykorzystywane w celu wysyłki tychże informacji. Zgodę tą możesz w każdej chwili wycofać. Informacje o Twoich prawach z tym związanych i więcej szczegółów znajdziesz w w <a href="#">Polityce Prywatności</a>.</p>
            <button type="submit" class="btn btn--button"><span>Zatwierdź</span></button>
            <button type="submit" class="btn btn--button btn--clean"><span>Pomiń ten krok</span></button>
        </form>
    </section>
    <section class="formWrap__miska">
        <img src="./assets/img/miska_vec.png"/>
    </section>
</main>

<?php include 'footer.php'; ?>