<?php $this->layout( 'standard_layout' ) ?>

<?php $this->start( 'page_title' ) ?>
<?= 'Projecten - ' . $project['title'] ?>
<?php $this->stop( 'page_title' ) ?>
<?php $this->start('css') ?>
<?= 'project' ?>
<?php $this->stop('css')?>

<main class="main">
    <div class="image">
        <img class="image__img" src="/images/<?= $project['image'] ?>" alt="<?= $project['alt'] ?>">
        <a href="<?= $project['url'] ?>" class="readmore" target="_blank">
            <button class="readmore__button">Live weergave</button>
        </a>
        <a href="<?= $project['github'] ?>" class="readmore" target="_blank">
            <button class="readmore__button">Bekijk op GitHub</button>
        </a>
    </div>
<div class="project">
    <h3 class="project__title"><?= $project['title'] ?></h3>
    <h3 class="project__subtitle">'<?= $project['subtitle'] ?>'</h3>
    <p class="project__classification"><?= $project['classification'] ?></p>
    <hr class="hr--big">
    <p class="project__desc"><?= $project['description'] ?></p>
</div>
<div class="languages">
    <h3 class="languages__title">Gebruikte programmeertalen</h3>
    <hr class="hr--big">
    <div class="languages__list">
        <?= $project['languages'] ?>
    </div>
</div>
</main>