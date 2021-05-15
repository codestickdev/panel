<?php include 'header.php'; ?>

<main class="panel panel--mainform-dog">
    <section class="stepHeading stepHeading--small">
        <div class="stepHeading__wrap">
            <h2>Jak wabi się twój pies?</h2>
        </div>
    </section>

    <section class="formDog__name formWrap">
        <form>
            <div class="inputWrapper">
                <div class="inputWrapper__notice" errormsg="Podaj imię psa"></div>
                <input type="text" class="input input--text" placeholder="Imię psa"/>
            </div>
            <div class="addfield">Dodaj kolejnego psa</div>
        </form>
    </section>
    
    <section class="formWrap__miska">
        <img src="./assets/img/miska_vec.png"/>
    </section>
    <div class="navbar-clone"></div>
    <div class="navbar navbar--wide">
        <div class="navbar__wrap">
            <a href="#" class="btn btn--back"><span>Wstecz</span></a>
            <a href="#" class="btn"><span>Dalej</span></a>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>