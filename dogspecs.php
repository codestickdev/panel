<?php include 'header.php'; ?>

<main class="panel panel--dogspecs">
    <section class="stepHeading stepHeading--small">
        <div class="stepHeading__wrap">
            <h2><span class="dogname">Reksio</span> to:</h2>
        </div>
    </section>

    <!-- Dog gender -->

    <section class="formDog__gender">
        <form>
            <div class="groupCheckbox">
                <div class="groupCheckbox__option">
                    <input type="radio" class="option radioEngine" name="gender" value="male"/>
                    <label>Chłopak</label>
                </div>
                <div class="groupCheckbox__option">
                    <input type="radio" class="option radioEngine" name="gender" value="female"/>
                    <label>Dziewczyna</label>
                </div>
            </div>
        </form>
    </section>

    <div class="devdivider"></div>

    <!-- Dog age -->

    <section class="formDog__age">
        <form>
            <div class="dogAge">
                <h2 class="formDog__name">Reksio</h2>
                <div class="dogAge__inputs">
                    <span>ma</span>
                    <input type="text" class="input input--text input--small"/>
                    <span>lat i</span>
                    <input type="text" class="input input--text input--small"/>
                    <span>miesięcy</span>
                </div>
            </div>
            <div class="dogAge">
                <h2 class="formDog__name">Marcel</h2>
                <div class="dogAge__inputs">
                    <span>ma</span>
                    <input type="text" class="input input--text input--small"/>
                    <span>lat i</span>
                    <input type="text" class="input input--text input--small"/>
                    <span>miesięcy</span>
                </div>
            </div>
        </form>
    </section>

    <div class="devdivider"></div>

    <!-- Dog sterylizacja -->

    <section class="formDog__sterylization">
        <form>
            <div class="dogSterylization">
                <h2 class="formDog__name">Reksio</h2>
                <div class="groupCheckbox">
                    <div class="groupCheckbox__option">
                        <input type="radio" class="option radioEngine" name="sterylization_reksio" value="true"/>
                        <label>Jest</label>
                    </div>
                    <div class="groupCheckbox__option">
                        <input type="radio" class="option radioEngine" name="sterylization_reksio" value="false"/>
                        <label>Nie jest</label>
                    </div>
                </div>
            </div>
            <div class="dogSterylization">
                <h2 class="formDog__name">Marcel</h2>
                <div class="groupCheckbox">
                    <div class="groupCheckbox__option">
                        <input type="radio" class="option radioEngine" name="sterylization_marcel" value="true"/>
                        <label>Jest</label>
                    </div>
                    <div class="groupCheckbox__option">
                        <input type="radio" class="option radioEngine" name="sterylization_marcel" value="false"/>
                        <label>Nie jest</label>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <div class="devdivider"></div>

    <!-- Dog rasa -->

    <section class="formDog__breed">
        <form>
            <div class="dogBreed">
                <h2 class="formDog__name">Reksio</h2>
                <div class="dogBreed__list">
                    <span>Jest</span>
                    <select>
                        <option value="kundel">Kundelkiem</option>
                        <option value="rasowy">Psem rasowym</option>
                        <option value="mieszaniec">Mieszanką dwóch ras</option>
                    </select>
                </div>
                <div class="dogBreed__inputs rasowy">
                    <input type="text" class="input input--text" placeholder="wpisz rasę psa"/>
                </div>
                <div class="dogBreed__inputs mieszaniec">
                    <input type="text" class="input input--text" placeholder="wpisz rasę psa"/>
                    <span>i</span>
                    <input type="text" class="input input--text" placeholder="wpisz rasę psa"/>
                </div>
            </div>
            <div class="dogBreed">
                <h2 class="formDog__name">Marcel</h2>
                <div class="dogBreed__list">
                    <span>Jest</span>
                    <select>
                        <option value="kundel">Kundelkiem</option>
                        <option value="rasowy">Psem rasowym</option>
                        <option value="mieszaniec">Mieszanką dwóch ras</option>
                    </select>
                </div>
                <div class="dogBreed__inputs rasowy">
                    <input type="text" class="input input--text" placeholder="wpisz rasę psa"/>
                </div>
                <div class="dogBreed__inputs mieszaniec">
                    <input type="text" class="input input--text" placeholder="wpisz rasę psa"/>
                    <span>i</span>
                    <input type="text" class="input input--text" placeholder="wpisz rasę psa"/>
                </div>
            </div>
        </form>
    </section>

    <div class="devdivider"></div>

    <!-- Dog sylwetka -->

    <section class="formDog__figure">
        <form>
            <div class="dogSelector dogSelector--options-4">
                <h2 class="formDog__name">Reksio</h2>
                <div class="dogSelector__wrap">
                    <div class="dogSelector__options">
                        <div class="dogSelector__option" optiontitle="Wychudzona" optiondesc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.">
                            <input type="radio" class="option radioEngine" name="figure_reksio" value="1"/>
                            <img src="./assets/img/sylwetka1.svg"/>
                        </div>
                        <div class="dogSelector__option default" optiontitle="Idealna" optiondesc="Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.">
                            <input type="radio" class="option radioEngine" name="figure_reksio" value="2"/>
                            <img src="./assets/img/sylwetka2.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Nadwaga" optiondesc="Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.">
                            <input type="radio" class="option radioEngine" name="figure_reksio" value="3"/>
                            <img src="./assets/img/sylwetka3.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Otyła" optiondesc="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.">
                            <input type="radio" class="option radioEngine" name="figure_reksio" value="4"/>
                            <img src="./assets/img/sylwetka4.svg"/>
                        </div>
                    </div>
                    <div class="dogSelector__desc">
                        <div class="arrow"></div>
                        <h3>Wybierz sylwetkę</h3>
                        <p>Zaznacz odpowiednią dla Twojej odpowiedzi opcję aby móc przejść dalej.</p>
                    </div>
                </div>
                <div class="dogSelector__divider"></div>
            </div>
            <div class="dogSelector dogSelector--options-4">
                <h2 class="formDog__name">Marcel</h2>
                <div class="dogSelector__wrap">
                    <div class="dogSelector__options">
                        <div class="dogSelector__option" optiontitle="Wychudzona" optiondesc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.">
                            <input type="radio" class="option radioEngine" name="figure_marcel" value="1"/>
                            <img src="./assets/img/sylwetka1.svg"/>
                        </div>
                        <div class="dogSelector__option default" optiontitle="Idealna" optiondesc="Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.">
                            <input type="radio" class="option radioEngine" name="figure_marcel" value="2"/>
                            <img src="./assets/img/sylwetka2.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Nadwaga" optiondesc="Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.">
                            <input type="radio" class="option radioEngine" name="figure_marcel" value="3"/>
                            <img src="./assets/img/sylwetka3.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Otyła" optiondesc="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.">
                            <input type="radio" class="option radioEngine" name="figure_marcel" value="4"/>
                            <img src="./assets/img/sylwetka4.svg"/>
                        </div>
                    </div>
                    <div class="dogSelector__desc">
                        <div class="arrow"></div>
                        <h3>Wybierz sylwetkę</h3>
                        <p>Zaznacz odpowiednią dla Twojej odpowiedzi opcję aby móc przejść dalej.</p>
                    </div>
                </div>
                <div class="dogSelector__divider"></div>
            </div>
        </form>
    </section>

    <div class="devdivider"></div>

     <!-- Dog Waga -->

     <section class="formDog__weight">
        <form>
            <div class="dogSlide">
                <h2 class="formDog__name">Reksio</h2>
                <div class="dogSlide__input">
                    <span>Waży</span>
                    <input type="text" class="input input--text input--small" value="1" />
                    <span>kg</span>
                </div>
                <div class="dogSlide__list">
                    <div class="dogSlide__dog active" rangefrom="1" rangeto="6"></div>
                    <div class="dogSlide__dog" rangefrom="7" rangeto="14"></div>
                    <div class="dogSlide__dog" rangefrom="15" rangeto="22"></div>
                    <div class="dogSlide__dog" rangefrom="23" rangeto="30"></div>
                    <div class="dogSlide__dog" rangefrom="31" rangeto="38"></div>
                    <div class="dogSlide__dog" rangefrom="39" rangeto="46"></div>
                    <div class="dogSlide__dog" rangefrom="47" rangeto="50"></div>
                </div>
                <div class="dogSlide__slider">
                    <p class="dogRange__before">0 kg</p>
                    <div class="dogRange"></div>
                    <p class="dogRange__after">50 kg+</p>
                </div>
                <div class="dogSlide__divider"></div>
            </div>
            <div class="dogSlide dogSlide--error">
                <h2 class="formDog__name">Marcel</h2>
                <div class="dogSlide__notice" errormsg="Podaj wagę swojego psa."></div>
                <div class="dogSlide__input dogSlide__input--error" errormsg="Podaj wagę swojego psa.">
                    <span>Waży</span>
                    <input type="text" class="input input--text input--small" value="1" />
                    <span>kg</span>
                </div>
                <div class="dogSlide__list">
                    <div class="dogSlide__dog active" rangefrom="1" rangeto="6"></div>
                    <div class="dogSlide__dog" rangefrom="7" rangeto="14"></div>
                    <div class="dogSlide__dog" rangefrom="15" rangeto="22"></div>
                    <div class="dogSlide__dog" rangefrom="23" rangeto="30"></div>
                    <div class="dogSlide__dog" rangefrom="31" rangeto="38"></div>
                    <div class="dogSlide__dog" rangefrom="39" rangeto="46"></div>
                    <div class="dogSlide__dog" rangefrom="47" rangeto="50"></div>
                </div>
                <div class="dogSlide__slider">
                    <p class="dogRange__before">0 kg</p>
                    <div class="dogRange"></div>
                    <p class="dogRange__after">50 kg+</p>
                </div>
                <div class="dogSlide__divider"></div>
            </div>
        </form>
    </section>

    <div class="devdivider"></div>

    <!-- Dog apetyt -->

    <section class="formDog__appetite">
        <form>
            <div class="dogSelector dogSelector--options-4">
                <h2 class="formDog__name">Reksio</h2>
                <div class="dogSelector__wrap">
                    <div class="dogSelector__options">
                        <div class="dogSelector__option" optiontitle="Je bardzo mało" optiondesc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.">
                            <input type="radio" class="option radioEngine" name="appetite_reksio" value="1"/>
                            <img src="./assets/img/apetyt1.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Je niechętnie" optiondesc="Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.">
                            <input type="radio" class="option radioEngine" name="appetite_reksio" value="2"/>
                            <img src="./assets/img/apetyt2.svg"/>
                        </div>
                        <div class="dogSelector__option default" optiontitle="je chętnie" optiondesc="Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.">
                            <input type="radio" class="option radioEngine" name="appetite_reksio" value="3"/>
                            <img src="./assets/img/apetyt3.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="je bardzo dużo" optiondesc="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.">
                            <input type="radio" class="option radioEngine" name="appetite_reksio" value="4"/>
                            <img src="./assets/img/apetyt4.svg"/>
                        </div>
                    </div>
                    <div class="dogSelector__desc">
                        <div class="arrow"></div>
                        <h3>Wybierz pozycję</h3>
                        <p>Zaznacz odpowiednią dla Twojej odpowiedzi pozycję aby móc przejść dalej.</p>
                    </div>
                </div>
                <div class="dogSelector__divider"></div>
            </div>
            <div class="dogSelector dogSelector--options-4">
                <h2 class="formDog__name">Marcel</h2>
                <div class="dogSelector__wrap">
                    <div class="dogSelector__options">
                        <div class="dogSelector__option" optiontitle="Je bardzo mało" optiondesc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.">
                            <input type="radio" class="option radioEngine" name="appetite_marcel" value="1"/>
                            <img src="./assets/img/apetyt1.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Je niechętnie" optiondesc="Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.">
                            <input type="radio" class="option radioEngine" name="appetite_marcel" value="2"/>
                            <img src="./assets/img/apetyt2.svg"/>
                        </div>
                        <div class="dogSelector__option default" optiontitle="je chętnie" optiondesc="Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.">
                            <input type="radio" class="option radioEngine" name="appetite_marcel" value="3"/>
                            <img src="./assets/img/apetyt3.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="je bardzo dużo" optiondesc="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.">
                            <input type="radio" class="option radioEngine" name="appetite_marcel" value="4"/>
                            <img src="./assets/img/apetyt4.svg"/>
                        </div>
                    </div>
                    <div class="dogSelector__desc">
                        <div class="arrow"></div>
                        <h3>Wybierz sylwetkę</h3>
                        <p>Zaznacz odpowiednią dla Twojej odpowiedzi opcję aby móc przejść dalej.</p>
                    </div>
                </div>
                <div class="dogSelector__divider"></div>
            </div>
        </form>
    </section>

    <div class="devdivider"></div>

    <!-- Dog smakołyki -->

    <section class="formDog__treats">
        <form>
            <div class="dogSelector dogSelector--options-3">
                <h2 class="formDog__name">Reksio</h2>
                <div class="dogSelector__wrap">
                    <div class="dogSelector__options">
                        <div class="dogSelector__option" optiontitle="Mało" optiondesc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.">
                            <input type="radio" class="option radioEngine" name="treats_reksio" value="1"/>
                            <img src="./assets/img/snack1.svg"/>
                        </div>
                        <div class="dogSelector__option default" optiontitle="Trochę" optiondesc="Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.">
                            <input type="radio" class="option radioEngine" name="treats_reksio" value="2"/>
                            <img src="./assets/img/snack2.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Dużo" optiondesc="Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.">
                            <input type="radio" class="option radioEngine" name="treats_reksio" value="3"/>
                            <img src="./assets/img/snack3.svg"/>
                        </div>
                    </div>
                    <div class="dogSelector__desc">
                        <div class="arrow"></div>
                        <h3>Wybierz pozycję</h3>
                        <p>Zaznacz odpowiednią dla Twojej odpowiedzi pozycję aby móc przejść dalej.</p>
                    </div>
                </div>
                <div class="dogSelector__divider"></div>
            </div>
            <div class="dogSelector dogSelector--options-3">
                <h2 class="formDog__name">Marcel</h2>
                <div class="dogSelector__wrap">
                    <div class="dogSelector__options">
                        <div class="dogSelector__option" optiontitle="Mało" optiondesc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.">
                            <input type="radio" class="option radioEngine" name="treats_marcel" value="1"/>
                            <img src="./assets/img/snack1.svg"/>
                        </div>
                        <div class="dogSelector__option default" optiontitle="Trochę" optiondesc="Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.">
                            <input type="radio" class="option radioEngine" name="treats_marcel" value="2"/>
                            <img src="./assets/img/snack2.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Dużo" optiondesc="Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.">
                            <input type="radio" class="option radioEngine" name="treats_marcel" value="3"/>
                            <img src="./assets/img/snack3.svg"/>
                        </div>
                    </div>
                    <div class="dogSelector__desc">
                        <div class="arrow"></div>
                        <h3>Wybierz sylwetkę</h3>
                        <p>Zaznacz odpowiednią dla Twojej odpowiedzi opcję aby móc przejść dalej.</p>
                    </div>
                </div>
                <div class="dogSelector__divider"></div>
            </div>
        </form>
    </section>

    <div class="devdivider"></div>

    <!-- Dog aktywność -->

    <section class="formDog__activity">
        <form>
            <div class="dogSelector dogSelector--options-5">
                <h2 class="formDog__name">Reksio</h2>
                <div class="dogSelector__wrap">
                    <div class="dogSelector__options">
                        <div class="dogSelector__option" optiontitle="Opcja1" optiondesc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.">
                            <input type="radio" class="option radioEngine" name="activity_reksio" value="1"/>
                            <img src="./assets/img/aktywnosc1.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Opcja2" optiondesc="Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.">
                            <input type="radio" class="option radioEngine" name="activity_reksio" value="2"/>
                            <img src="./assets/img/aktywnosc2.svg"/>
                        </div>
                        <div class="dogSelector__option default" optiontitle="Opcja3" optiondesc="Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.">
                            <input type="radio" class="option radioEngine" name="activity_reksio" value="3"/>
                            <img src="./assets/img/aktywnosc3.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Opcja4" optiondesc="Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.">
                            <input type="radio" class="option radioEngine" name="activity_reksio" value="3"/>
                            <img src="./assets/img/aktywnosc4.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Opcja5" optiondesc="Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.">
                            <input type="radio" class="option radioEngine" name="activity_reksio" value="3"/>
                            <img src="./assets/img/aktywnosc5.svg"/>
                        </div>
                    </div>
                    <div class="dogSelector__desc">
                        <div class="arrow"></div>
                        <h3>Wybierz pozycję</h3>
                        <p>Zaznacz odpowiednią dla Twojej odpowiedzi pozycję aby móc przejść dalej.</p>
                    </div>
                </div>
                <div class="dogSelector__divider"></div>
            </div>
            <div class="dogSelector dogSelector--options-5">
                <h2 class="formDog__name">Marcel</h2>
                <div class="dogSelector__wrap">
                    <div class="dogSelector__options">
                        <div class="dogSelector__option" optiontitle="Opcja1" optiondesc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.">
                            <input type="radio" class="option radioEngine" name="activity_marcel" value="1"/>
                            <img src="./assets/img/aktywnosc1.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Opcja2" optiondesc="Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.">
                            <input type="radio" class="option radioEngine" name="activity_marcel" value="2"/>
                            <img src="./assets/img/aktywnosc2.svg"/>
                        </div>
                        <div class="dogSelector__option default" optiontitle="Opcja3" optiondesc="Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.">
                            <input type="radio" class="option radioEngine" name="activity_marcel" value="3"/>
                            <img src="./assets/img/aktywnosc3.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Opcja4" optiondesc="Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.">
                            <input type="radio" class="option radioEngine" name="activity_marcel" value="3"/>
                            <img src="./assets/img/aktywnosc4.svg"/>
                        </div>
                        <div class="dogSelector__option" optiontitle="Opcja5" optiondesc="Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.">
                            <input type="radio" class="option radioEngine" name="activity_marcel" value="3"/>
                            <img src="./assets/img/aktywnosc5.svg"/>
                        </div>
                    </div>
                    <div class="dogSelector__desc">
                        <div class="arrow"></div>
                        <h3>Wybierz pozycję</h3>
                        <p>Zaznacz odpowiednią dla Twojej odpowiedzi pozycję aby móc przejść dalej.</p>
                    </div>
                </div>
                <div class="dogSelector__divider"></div>
            </div>
        </form>
    </section>

    <div class="devdivider"></div>

    <!-- Dog alergia -->

    <section class="formDog__allergy">
        <form>
            <div class="dogAllergy">
                <h2 class="formDog__name">Reksio</h2>
                <div class="groupCheckbox">
                    <div class="groupCheckbox__option">
                        <input type="radio" class="option radioEngine" name="allergy_reksio" />
                        <label>Nie ma alergii</label>
                    </div>
                    <div class="groupCheckbox__option groupCheckbox__option--bad" data="more">
                        <input type="radio" class="option radioEngine" name="allergy_reksio" />
                        <label>Ma alergię na</label>
                    </div>
                </div>
                <div class="groupOptions">
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="allergyOption_reksio_kurczak" />
                        <p>Kurczaka</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="allergyOption_reksio_indyk" />
                        <p>Indyka</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="allergyOption_reksio_wolowina" />
                        <p>Wołowinę</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="allergyOption_reksio_jagniecina" />
                        <p>Jagnięcine</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="allergyOption_reksio_ryba" />
                        <p>Rybę</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="allergyOption_reksio_wieprzowina" />
                        <p>Wieprzowinę</p>
                    </div>
                </div>
            </div>
            <div class="dogAllergy">
                <h2 class="formDog__name">Marcel</h2>
                <div class="groupCheckbox">
                    <div class="groupCheckbox__option">
                        <input type="radio" class="option radioEngine" name="allergy_marcel" />
                        <label>Nie ma alergii</label>
                    </div>
                    <div class="groupCheckbox__option groupCheckbox__option--bad" data="more">
                        <input type="radio" class="option radioEngine" name="allergy_marcel" />
                        <label>Ma alergię na</label>
                    </div>
                </div>
                <div class="groupOptions">
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="allergyOption_marcel_kurczak" />
                        <p>Kurczaka</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="allergyOption_marcel_indyk" />
                        <p>Indyka</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="allergyOption_marcel_wolowina" />
                        <p>Wołowinę</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="allergyOption_marcel_jagniecina" />
                        <p>Jagnięcine</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="allergyOption_marcel_ryba" />
                        <p>Rybę</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="allergyOption_marcel_wieprzowina" />
                        <p>Wieprzowinę</p>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <div class="devdivider"></div>

    <!-- Dog zdrowie -->

    <section class="formDog__health">
        <form>
            <div class="dogHealth">
                <h2 class="formDog__name">Reksio</h2>
                <div class="groupCheckbox">
                    <div class="groupCheckbox__option">
                        <input type="radio" class="option radioEngine" name="health_reksio" />
                        <label>Nie ma problemów</label>
                    </div>
                    <div class="groupCheckbox__option groupCheckbox__option--bad" data="more">
                        <input type="radio" class="option radioEngine" name="health_reksio" />
                        <label>Cierpi na</label>
                    </div>
                </div>
                <div class="groupOptions">
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_1" />
                        <p>Zapalenie trzuski</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_2" />
                        <p>Cukrzyca</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_3" />
                        <p>Skóra i sierść</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_4" />
                        <p>Wątroba</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_5" />
                        <p>Stawy</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_6" />
                        <p>Nowotwór</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_7" />
                        <p>Nadwaga / otyłość</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_8" />
                        <p>Wrażliwy żołądek</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_9" />
                        <p>Serce</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_10" />
                        <p>Padaczka</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_11" />
                        <p>Serce</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_12" />
                        <p>Nieswoiste zapalenie jelit (IBD)</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_13" />
                        <p>Nerki</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_14" />
                        <p>Kamienie nerkowe</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_15" />
                        <p>Nietolerancja pokarmowa</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_16" />
                        <p>Rekonwalescencja</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_17" />
                        <p>Zaburzenia wchłaniania jelitowego</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_reksio_18" />
                        <p>Hiperlipidemia</p>
                    </div>
                </div>
            </div>
            <div class="dogHealth">
                <h2 class="formDog__name">Marcel</h2>
                <div class="groupCheckbox">
                    <div class="groupCheckbox__option">
                        <input type="radio" class="option radioEngine" name="health_marcel" />
                        <label>Nie ma problemów</label>
                    </div>
                    <div class="groupCheckbox__option">
                        <input type="radio" class="option radioEngine" name="health_marcel" />
                        <label>Cierpi na</label>
                    </div>
                </div>
                <div class="groupOptions">
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_1" />
                        <p>Zapalenie trzuski</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_2" />
                        <p>Cukrzyca</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_3" />
                        <p>Skóra i sierść</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_4" />
                        <p>Wątroba</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_5" />
                        <p>Stawy</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_6" />
                        <p>Nowotwór</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_7" />
                        <p>Nadwaga / otyłość</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_8" />
                        <p>Wrażliwy żołądek</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_9" />
                        <p>Serce</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_10" />
                        <p>Padaczka</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_11" />
                        <p>Serce</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_12" />
                        <p>Nieswoiste zapalenie jelit (IBD)</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_13" />
                        <p>Nerki</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_14" />
                        <p>Kamienie nerkowe</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_15" />
                        <p>Nietolerancja pokarmowa</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_16" />
                        <p>Rekonwalescencja</p>
                    </div>
                    <div class="groupOptions__option">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_17" />
                        <p>Zaburzenia wchłaniania jelitowego</p>
                    </div>
                    <div class="groupOptions__option groupOptions__option--bad">
                        <div class="checkField"></div>
                        <input type="checkbox" class="checkbox checkboxEngine" name="healthOption_marcel_18" />
                        <p>Hiperlipidemia</p>
                    </div>
                </div>
                <div class="notice notice--bad">
                    <p>Niestety, ale żadna z diet PsiBufet nie spełnia wymagań dla psów z zapaleniem trzustki. Dieta dla psa z tym schorzeniem wymaga obniżonej zawartości tłuszczu. Skonsultuj się z weterynarzem,aby odpowiednio dobrać karmę dla swojego pupila.</p>
                </div>
                <div class="notice">
                    <p>Nawet w przypadku cukrzycy Twój pies nadal może cieszyć się karmą PsiBufet. Wszystkie nasze posiłki są idealne dla psów, ponieważ mają niską zawartość węglowodanów, zwłaszcza prostych. Zawierają natomiast węglowodany przyswajalne złożone oraz strukturalne (m.in. z buraka, grochu, soczewicy, jabłka), które regulują podaż glukozy.</p>
                </div>
            </div>
        </form>
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