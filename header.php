<!DOCTYPE html>
    <head>
        <title>Panel - PsiBufet.pl</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css"/>

        <!-- Slick -->
        <link rel="stylesheet" type="text/css" href="plugins/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css"/>

        <!-- Select dropdown -->
        <link rel="stylesheet" type="text/css" href="plugins/select-dropdown/select-dropdown.css"/>

        <!-- jQuery UI -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    </head>
    <body>
    <div class="promocode">
        <p>Masz <span class="amount">wczytywanie</span><span class="type"></span><span class="na"> na pierwsze zamówienie</span>!</p>
    </div>
    <header class="panelHeader">
        <div class="panelHeader__wrap container">
            <div class="panelHeader__logo">
                <img src="./assets/img/logopb.svg"/>
            </div>
            <div class="panelHeader__current">
                <p><span class="nameOfStep">Koszyk</span> (<span class="current">4</span>/<span class="from">4</span>)</p>
            </div>
            <div class="panelHeader__steps">
                <div class="step">
                    <img src="./assets/img/steps/step1.svg"/>
                    <p>Ja</p>
                </div>
                <div class="step">
                    <img src="./assets/img/steps/step2.svg"/>
                    <p>Mój pies</p>
                </div>
                <div class="step">
                    <img src="./assets/img/steps/step3.svg"/>
                    <p>Mój PsiBufet</p>
                </div>
                <div class="step step--current">
                    <img src="./assets/img/steps/step4.svg"/>
                    <p>Koszyk</p>
                </div>
            </div>
            <div class="panelHeader__progress">
                <div class="panelHeader__status" style="width: 50%;"></div>
                <div class="pos pos--done"></div>
                <div class="pos pos--done"></div>
                <div class="pos pos--done"></div>
                <div class="pos pos--current"></div>
            </div>
        </div>
    </header>