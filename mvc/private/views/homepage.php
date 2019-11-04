<?php $this->layout('standard_layout')?>
<?php $this->start( 'page_title' ) ?>
Home<?php $this->stop( 'page_title' ) ?>
<?php $this->start('css') ?>
<?= 'home' ?>
<?php $this->stop('css')?>

<main class="main">
    <div class="main__frames">

        <div class="frames__profile-img">
            <div class="profile-img__container">
                <img class="container__img" src="uploads/profilepic.jpg" alt="jochem">
             </div>
        </div>

        <div class="frames__about">
            <h1 class="about__title">Jochem de Wit</h1>
            <h3 class="about__subtitle">Fullstack Developer in opleiding</h3>
            <hr class="hr--small">
            <p class="about__text">Motivatie, enthousiasme en nieuwsgierigheid zorgen ervoor dat ik elke dag nieuwe dingen leer op het
                Mediacollege Amsterdam binnen het vakgebied van een media developer.<br><br>
                Naast front-end en back-end programmeren krijg ik ook les in project management en user experience design
                en hiermee wil ik graag verder in het bedrijfsleven.<br>
                <a href="<?php echo url('/over_mij') ?>" class="readmore">
                    <button class="readmore__button">Lees meer</button>
                </a>
            </p>
            <hr class="hr--small hr--disappear">
        </div>

        <div class="frames__projects">
            <h2 class="projects__title">Favoriete projecten</h2>
            <hr class="hr--small">
            <div class="projects__grid">
                <a href="/public/projecten/project/1">
                    <img src="images/the_wall.png" alt="TheWall" class="projects__img-thewall">
                </a>

                <div class="projects__text">
                    <a class="grid__title" href="/public/projecten/project/1">The Wall - WeAreSocial</a>
                    <p>- Social media platform<br>
                        - Groepsopdracht
                    </p>
                </div>
                <a href="/public/projecten/project/2">
                    <img src="images/predator_fishing.jpg" alt="Predator Fishing" class="projects__img-predatorfishing">
                </a>
                <div class="projects__text">
                    <a class="grid__title" href="/public/projecten/project/2">MyBand - Predator Fishing</a>
                    <p>- MVC (Model View Controller)<br>
                        - Solo opdracht
                    </p>
                </div>
            </div>
            <hr class="hr--small hr--disappear">
        </div>

        <div class="frames__skills">
            <h2 class="skills__title">Skills</h2>
            <hr class="hr--small">
            <div class="skills__grid">
                <div class="skills__part">
                    <h4>Front-end</h4>
                    <p>
                        - HTML<br>
                        - CSS<br>
                        - Javascript<br>
                    </p>
                </div>
                <div class="skills__part">
                    <h4>Back-end</h4>
                    <p>
                        - PHP<br>
                        - SQL<br>
                    </p>
                </div>
                <div class="skills__part">
                    <h4>User Experience Design</h4>
                </div>
                <div class="skills__part">
                    <h4>Project Management</h4>
                </div>
            </div>
        </div>
    </div>
</main>