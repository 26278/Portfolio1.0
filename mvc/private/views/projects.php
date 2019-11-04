<?php
$this->layout('standard_layout')?>
<?php $this->start( 'page_title' ) ?>
Projecten<?php $this->stop( 'page_title' ) ?>
<?php $this->start('css') ?>
<?= 'projects' ?>
<?php $this->stop('css')?>
<div class="title">
    <h2 class="title--text">Projecten</h2>
</div>
<h2 class="classify">Favoriete projecten</h2>
    <hr class="hr--big">

<div class="top-projects">
    <?php foreach($topProjects as $project): ?>
    <div class="top-projects__project">
        <img class="project__img" src="images/<?= $project['image'] ?>" alt="The Wall">
        <h3 class="project__title"><?= $project['title'] ?></h3>
        <p class="project__subtitle">"<?= $project['subtitle'] ?>"</p>
        <p class="project__desc"><?= $project['short_description'] ?>
        </p>
        <a href="<?= url('/projecten/project/' . $project['id']) ?>" class="readmore">
            <button class="readmore__button">Lees meer</button>
        </a>
    </div>
    <?php endforeach;?>
<!--    <div class="top-projects__project">-->
<!--        <img class="project__img" src="images/the_wall.png" alt="The Wall">-->
<!--        <h3 class="project__title">Project The Wall</h3>-->
<!--        <p class="project__subtitle">"We Are Social"</p>-->
<!--        <p class="project__desc">Een social media platform met log-in systeem, upload-functie, mogelijkheid om uploads te bekijken, uploads-->
<!--            te beoordelen met een like en uploads te verwijderen.-->
<!--        </p>-->
<!--        <a href="#" class="project__readmore">-->
<!--            <button class="readmore__button">Lees meer</button>-->
<!--        </a>-->
<!--    </div>-->
<!--    <div class="top-projects__project">-->
<!--        <img class="project__img" src="images/the_wall.png"" alt="The Wall">-->
<!--        <h3 class="project__title">Project The Wall</h3>-->
<!--        <p class="project__subtitle">"We Are Social"</p>-->
<!--        <p class="project__desc">Een social media platform met log-in systeem, upload-functie, mogelijkheid om uploads te bekijken, uploads-->
<!--            te beoordelen met een like en uploads te verwijderen.-->
<!--        </p>-->
<!--        <a href="#" class="project__readmore">-->
<!--            <button class="readmore__button">Lees meer</button>-->
<!--        </a>-->
<!--    </div>-->
</div>
<h2 class="classify">Andere projecten</h2>
    <hr class="hr--big">
<div class="other-projects">
    <?php foreach($otherProjects as $project): ?>
        <div class="top-projects__project">
            <img class="project__img" src="images/<?= $project['image'] ?>" alt="The Wall">
            <h3 class="project__title"><?= $project['title'] ?></h3>
            <p class="project__subtitle">"<?= $project['subtitle'] ?>"</p>
            <p class="project__desc"><?= $project['short_description'] ?>
            </p>
            <a href="<?= url('/projecten/project/' . $project['id']) ?>" class="readmore">
                <button class="readmore__button">Lees meer</button>
            </a>
        </div>
    <?php endforeach;?>

</div>

<!--        <div class="projects__project">-->
<!--            <img class="projects__project__img" src="images/the_wall.png" alt="blog img">-->
<!--            <p class="projects__project__title">Project The Wall - WeAreSocial</p>-->
<!--            <p class="projects__project__subtitle">Social media platform</p>-->
<!--            <a href="#" class="projects__project__readmore">-->
<!--                <button class="projects__project__readmore__button">Lees meer</button>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="projects__project">-->
<!--            <img  class="projects__project__img" src="images/the_wall.png" alt="blog img">-->
<!--            <p class="projects__project__title">Project The Wall - WeAreSocial</p>-->
<!--            <p class="projects__project__subtitle">Social media platform</p>-->
<!--            <a href="#" class="projects__project__readmore">-->
<!--                <button class="projects__project__readmore__button">Lees meer</button>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!---->

<?php //foreach($projects as $project): ?>
<!--    <div class="project">-->
<!--        <img class="project--img" src="images/--><?//= $project['image']?><!--" alt="">-->
<!--        <p class="project--title">--><?//= $project['title'] ?><!--</p>-->
<!--        <p class="project--subtitle">--><?//= $project['subtitle'] ?><!--<p/>-->
<!--        <p class="project__desc">--><?//= $project['short_description'] ?><!--</p>-->
<!--        <a href="#" class="project--readmore">-->
<!--            <button>Read more...</button>-->
<!--        </a>-->
<!---->
<!--    </div>-->
<!---->
<?php //endforeach;?>

<?//= url('/uploads/' . $project['img'])?>

<?php //foreach($projects as $project): ?>
<!--    <div class="projects__project">-->
<!--        <img class="projects__project__img" src="images/--><?//= $project['image']?><!--" alt="blog img">-->
<!--        <p class="projects__project__title">--><?//= $project['title'] ?><!--</p>-->
<!--        <p class="projects__project__subtitle">'--><?//= $project['subtitle'] ?><!--'</p>-->
<!--        <p class="project__desc">--><?//= $project['short_description'] ?><!--</p>-->
<!--        <a href="#" class="projects__project__readmore">-->
<!--            <button class="projects__project__readmore__button">Lees meer</button>-->
<!--        </a>-->
<!--    </div>-->
<?php //endforeach;?>
