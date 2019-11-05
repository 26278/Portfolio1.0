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
