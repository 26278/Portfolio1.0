<?php $this->layout('standard_layout')?>
<?php $this->start( 'page_title' ) ?>
Home<?php $this->stop( 'page_title' ) ?>

        <main class="main">
            <div class="main__top">
                <div class="main__frame">
                    <img class="main__frame__img" src="uploads/profilepic.jpg" alt="jochem">
                </div>
                <div class="main__about">
                    <h1 class="main__title">Jochem de Wit</h1>
                    <h3 class="main__subtitle">Becoming a Fullstack Developer</h3>
                    <hr class="hr__small">
                    <p class="main__text">Motivatie, enthousiasme en nieuwsgierigheid zorgen ervoor dat ik elke dag nieuwe dingen leer op het
                        Mediacollege Amsterdam binnen het vakgebied van een media developer.<br><br>
                        Naast front-end en back-end programmeren krijg ik ook les in project management en user experience design,
                        en hiermee wil ik graag verder in het bedrijfsleven.<br>
                        <a href="" class="link">Lees meer…</a>
                    </p>
                    <hr class="hr__small hr__disappear">
                </div>
            </div>
            <hr class="hr__big hr__appear">
            <div class="main__bottom">
                <div class="main__projects">
                    <h2 class="main__projects--title">Projects</h2>
                    <hr class="hr__small">
                    <div class="main__projects__grid">
                        <img src="images/the_wall.png" alt="TheWall" class="main__projects__img--thewall">
                        <div class="main__projects__text">
                            <h4 class="main__projects__text--title">The Wall - WeAreSocial</h4>
                            <p>- Social media platform<br>
                                - Groepsopdracht
                            </p>
                        </div>
                    </div>
<!--                    <hr class="hr__small">-->
                    <div class="main__projects__grid">
                        <img src="images/pred-fish.png" alt="TheWall" class="main__projects__img--predatorfishing">
                        <div class="main__projects__text">
                            <h4 class="main__projects__text--title">MyBand - Predator Fishing</h4>
                            <p>- MVC (Model View Controller)<br>
                                - Solo opdracht
                            </p>
                        </div>
                    </div>
                    <hr class="hr__small">
                </div>
                <div class="main__skills">
                    <h2 class="main__skills--title">Skills</h2>
                    <hr class="hr__small">
                    <div class="main__skills__part">
                        <h4>Front-end</h4>
                        <p>
                            - HTML<br>
                            - CSS<br>
                            - Javascript<br>
                        </p>
                    </div>
                    <div class="main__skills__part">
                        <h4>Back-end</h4>
                        <p>
                            - PHP<br>
                            - SQL<br>
                        </p>
                    </div>
                    <div class="main__skills__part">
                        <h4>User Experience Design</h4>
                    </div>
                    <div class="main__skills__part">
                        <h4>Project Management</h4>
                    </div>
                    <hr class="hr__small">
                </div>
            </div>
        </main>