<?php
$this->layout('standard_layout')?>
<?php $this->start( 'page_title' ) ?>
Projecten<?php $this->stop( 'page_title' ) ?>
<div class="title">
    <h2 class="title--text">Projecten</h2>
</div>
<h2 class="classify">Top projecten</h2>
    <hr class="hr__big">
<div class="top-projects">
    <div class="projects__project">
        <img class="projects__project__img" src="images/the_wall.png" alt="blog img">
        <p class="projects__project__title">Project The Wall - WeAreSocial</p>
        <p class="projects__project__subtitle">Social media platform</p>
        <a href="#" class="projects__project__readmore">
            <button class="projects__project__readmore__button">Lees meer</button>
        </a>
    </div>
    <div class="projects__project">
        <img class="projects__project__img" src="images/the_wall.png" alt="blog img">
        <p class="projects__project__title">Project The Wall - WeAreSocial</p>
        <p class="projects__project__subtitle">Social media platform</p>
        <a href="#" class="projects__project__readmore">
            <button class="projects__project__readmore__button">Lees meer</button>
        </a>
    </div>
    <div class="projects__project">
        <img  class="projects__project__img" src="images/the_wall.png" alt="blog img">
        <p class="projects__project__title">Project The Wall - WeAreSocial</p>
        <p class="projects__project__subtitle">Social media platform</p>
        <a href="#" class="projects__project__readmore">
            <button class="projects__project__readmore__button">Lees meer</button>
        </a>
    </div>
</div>
<h2 class="classify">Andere projecten</h2>
    <hr class="hr__big">

    <div class="top-projects">
        <div class="projects__project">
            <img class="projects__project__img" src="images/the_wall.png" alt="blog img">
            <p class="projects__project__title">Project The Wall - WeAreSocial</p>
            <p class="projects__project__subtitle">Social media platform</p>
            <a href="#" class="projects__project__readmore">
                <button class="projects__project__readmore__button">Lees meer</button>
            </a>
        </div>
        <div class="projects__project">
            <img class="projects__project__img" src="images/the_wall.png" alt="blog img">
            <p class="projects__project__title">Project The Wall - WeAreSocial</p>
            <p class="projects__project__subtitle">Social media platform</p>
            <a href="#" class="projects__project__readmore">
                <button class="projects__project__readmore__button">Lees meer</button>
            </a>
        </div>
        <div class="projects__project">
            <img  class="projects__project__img" src="images/the_wall.png" alt="blog img">
            <p class="projects__project__title">Project The Wall - WeAreSocial</p>
            <p class="projects__project__subtitle">Social media platform</p>
            <a href="#" class="projects__project__readmore">
                <button class="projects__project__readmore__button">Lees meer</button>
            </a>
        </div>
    </div>


<?php //foreach($projects as $project): ?>
<!--    <div class="project">-->
<!--        <img class="project--img" src="--><?//= url('/images/the_wall.png')?><!--" alt="">-->
<!--        <p class="project--title">--><?//= $project['title'] ?><!--</p>-->
<!--        <p class="project--subtitle">Social media platform<p/>-->
<!--        <a href="#" class="project--readmore">-->
<!--            <button>Read more...</button>-->
<!--        </a>-->
<!---->
<!--    </div>-->
<!---->
<?php //endforeach;?>

<?//= url('/uploads/' . $project['img'])?>