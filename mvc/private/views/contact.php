<?php
$this->layout('standard_layout')?>
<?php $this->start( 'page_title' ) ?>
Contact<?php $this->stop( 'page_title' ) ?>
<?php $this->start('css') ?>
<?= 'contact' ?>
<?php $this->stop('css')?>
<div class="title">
    <h2 class="title--text">Contact</h2>
</div>
<main class="main">

    <div class="main__container">
        <div class="contactgegevens">
            <h3 class="contactgegevens__title">Contactgegevens</h3>
            <hr class="hr--big">
            <div class="contactgegevens__row">
                <img class="row__icon" src="images/person_icon.png" alt="Naam">
                <p class="row__content">Jochem de Wit</p>
            </div>
            <div class="contactgegevens__row">
                <img class="row__icon" src="images/home_icon.png" alt="Adres">
                <p class="row__content">Mediacollege Amsterdam,<br> Contactweg 36</p>
            </div>
            <div class="contactgegevens__row">
                <img class="row__icon" src="images/mail_icon.png" alt="Mail">
                <p class="row__content">jochemdewit49@gmail.com</p>
            </div>
        </div>
    </div>

    <div class="main__container">
        <div class="contactform">
            <form class="contactform__form"  action="" method="post">
                <h3 class="form__title">Contactformulier</h3>
                <hr class="hr--big hr__form">
                <div class="contactform__row">
                    <p class="form__name">Naam:</p>
                    <input class="form__input-small" type="text" placeholder="John Doe">
                </div>
                <div class="contactform__row">
                    <p class="form__name">E-mail:</p>
                    <input class="form__input-small" type="text" placeholder="JohnDoe123@gmail.com">
                </div>
                <p class="form__message">Bericht:</p>
                <textarea name="mail" class="form__input-big" placeholder="Typ hier uw bericht..."></textarea>
                <input type="submit" class="form__submit">
            </form>
        </div>
    </div>

</main>