<?php
$this->layout('standard_layout')?>
<?php $this->start( 'page_title' ) ?>
    Blog<?php $this->stop( 'page_title' ) ?>
<?php $this->start('css') ?>
<?= 'blog' ?>
<?php $this->stop('css')?>
<div class="title">
    <h2 class="title--text">Blog</h2>
</div>
<main class="main">
    <div class="blogpost">
        <img class="blogpost__img" src="images/beurs1.jpg" alt="Beurs">
        <div class="blogpost__text">
            <h3 class="text__title">Inspiratiedag Energie & Duurzaamheid 2019</h3>
            <p class="text__date">Donderdag 17 oktober 2019</p>
            <p class="text__text">06:00 de wekker, potje koffie zetten, broodje mee, thermoskan mee, en hup, naar Alkmaar. Daar is namelijk de beurs over duurzaamheid,  Van 12:30 heb ik gepraat met werknemers die bedrijven vertegenwoordigen die  </p>
        </div>
        <div class="blogpost__text">
            <p class="text__text">staan voor duurzaamheid, of die duurzame producten verkopen.
                Zo heb ik onder andere gepraat met het bedrijf Vix. Vix is een soort cryptovaluta munt die regionaal is en ervoor zorgt dat de locale economie in en rondom Alkmaar versterkt word en inwoners en ondernemers binnen Alkmaar met elkaar verbonden worden. Ook heb ik gepraat met het bedrijf</p>
        </div>
        <div class="blogpost__text">
            <p class="text__text">Blue Hart Energy B.V., een bedrijf die duurzame verwarming en koeling maakt met gebruik van een duurzame pomp die overtollige warmte scheid van machines.
                Dit bedrijf was voor mij persoonlijk niet interessant, maar toevallig had deze beste meneer een website nodig. Misschien word dit het volgende project op mijn portfolio!</p>
        </div>

    </div>
    <div class="overview">
        <h3 class="overview__title">Overzicht</h3>
        <hr class="hr--big">
        <div class="overview__post">
            <h4 class="post__title">Inspiratiedag Energie & Duurzaamheid 2019</h4>
            <p class="post__date">Donderdag 17 oktober 2019</p>
        </div>
        <hr class="hr--big">
    </div>
</main>