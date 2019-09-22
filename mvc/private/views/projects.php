<?php
 $this->layout('standard_layout')?>
<?php $this->start( 'page_title' ) ?>
Projects<?php $this->stop( 'page_title' ) ?>
<div class="title">
    <h2 class="title--text">Projects</h2>
</div>

<?php foreach($projects as $project): ?>
    <div class="project">
        <img class="project--img" src="<?= url('/images/the_wall.png')?>" alt="">
        <p class="project--title"><?= $project['title'] ?></p>
        <p class="project--subtitle">Social media platform<p/>
        <a href="#" class="project--readmore">
            <button>Read more...</button>
        </a>

    </div>

<?php endforeach;?>

<?//= url('/uploads/' . $project['img'])?>