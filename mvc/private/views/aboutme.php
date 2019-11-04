<?php
$this->layout('standard_layout')?>
<?php $this->start( 'page_title' ) ?>
Over mij<?php $this->stop( 'page_title' ) ?>
<?php $this->start('css') ?>
<?= 'aboutme' ?>
<?php $this->stop('css')?>
<div class="title">
    <h2 class="title--text">Over Mij</h2>
</div>
<div class="overview">
    <div class="overview__aboutme">
        <h2 class="overview__title">Wie ben ik?</h2>
        <hr class="hr--big">
        <p class="overview__aboutme__text overview__text">Na mijn vmbo-t en koksopleiding afgerond te hebben ben ik
            begonnen met programmeren omdat ik de horeca lichamelijk te zwaar vond en altijd interesse heb gehad in ICT
            en (social) media. Toen besloot ik de opleiding Media Development te doen.<br><br>
            Op dit moment heb ik de basis van front-end en back-end development in de vingers, en weet ik hoe ik een
            goed werkend CMS (content management system) en MVC (model view controller) systeem kan maken. De komende
            tijd ga ik op en naast school aan de slag met Laravel, en krijg ik les in interactive design (UI/UX) en
            leer ik over cybersecurity, waarin ik erg geïnteresseerd ben.<br><br>
            Na deze opleiding wil ik graag de HBO-opleiding Informatica volgen aan de Hogeschool Leiden en wil ik mij
            specialiseren in forensisch ICT. </p>
    </div>
    <div class="overview__skills">
        <h2 class="overview__title">Vaardigheden</h2>
        <hr class="hr--big">
        <div class="overview__skills__content">
            <h4 class="overview__skills__content__title">Sociale vaardigheden:</h4>
            <div class="overview__skills__grid">
                <div>
                    <h6 class="overview__skills__content__subtitle">Presenteren</h6>
                    <p class="overview__text">Op het Mediacollege Amsterdam presenteer ik regelmatig mijn opdrachten en projecten voor de klas, maar
                        ook voor groter publiek in de aula. Ik vind het spannend om te presenteren, maar dat weerhoud mij er niet van.</p>
                </div>
                <div>
                    <h6 class="overview__skills__content__subtitle">Communicatie</h6>
                    <p class="overview__text">Bij groepsopdrachten en projecten zorg ik ervoor dat er duidelijke afspraken worden gemaakt met een taakverdeling en een planning.</p></div>
                <div>
                    <h6 class="overview__skills__content__subtitle">Mail</h6>
                    <p class="overview__text">Om mijn opleiding vloeiend te laten verlopen geef ik regelmatig feedback
                        aan docenten door middel van formele emails. Ook schrijf ik bijna dagelijks formele emails naar
                        docenten voor vragen en opmerkingen.</p>
                </div>
            </div>
            <h4 class="overview__skills__content__title">Programmeertalen:</h4>
            <div class="languages">
                <div class="languages__front-end">
                    <div class="languages__head">
                        <img class="languages__icon" src="images/frontend-icon.png" alt="front-end">
                        <h3 class="languages__title">Front-end</h3>
                    </div>
                    <div class="front-end__language">
                        <h4 class="language__name">- HTML</h4>
                        <p class="language__desc">Hypertext Markup language, de eerste taal waarmee ik code begon te schrijven.
                        </p>
                    </div>
                    <div class="front-end__language">
                        <h4 class="language__name">- CSS</h4>
                        <p class="language__desc">Cascading Style Sheets, de taal waarmee ik websites opmaak. Ik maak hierbij vaak gebruik van <u>SCSS</u> om efficiënter (en dus sneller) te werken.
                        </>
                    </div>
                    <div class="front-end__language">
                        <h4 class="language__name">- Javascript</h4>
                        <p class="language__desc">Ik gebruik javascript om interactieve onderdelen zoals modaal vensters en carrousels te maken op websites. Ook maak ik vaak gebruik van <u>jQuery</u>, en maak ik gebruik van Javascript voor <u>JSON</u>.
                        </p>
                    </div>
                </div>
                <div class="languages__back-end">
                    <div class="languages__head">
                        <img class="languages__icon" src="images/code-icon.png" alt="front-end">
                        <h3 class="languages__title">Back-end</h3>
                    </div>
                    <div class="front-end__language">
                        <h4 class="language__name">- PHP</h4>
                        <p class="language__desc">Hypertext preprocessor. PHP gebruik ik voor <u>MVC</u> (Model View Controller) systemen en <u>CMS</u> (Content Management System) panelen te maken. Ook gebruik ik PHP voor database connecties en inlog systemen. Persoonlijk vind ik PHP een van de leukste talen om mee te werken.
                        </p>
                    </div>
                    <div class="front-end__language">
                        <h4 class="language__name">- SQL</h4>
                        <p class="language__desc">Database management taal, hiermee kan ik databases aansturen.
                        </p>
                    </div>
                    <div class="front-end__language">
                        <h4 class="language__name">- Java</h4>
                        <p class="language__desc">Programmeertaal waarmee ik op school web-based applicaties leren schrijven.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
