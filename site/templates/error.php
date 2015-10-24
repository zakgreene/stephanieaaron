<?php snippet('header') ?>

<section id="intro">

    <div id="screen"></div>

    <?php snippet('site-title') ?>
    <div class="wrapper">

    <h3><?php echo page('home')->text()->html() ?></h3>

    <?php if (page('home')->files()->find('tools.png')): ?>
    <img id="tools" src="<?php echo page('home')->files()->find('tools.png')->url() ?>" />
    <?php endif ?>

    <?php if (page('home')->files()->find('world.png')): ?>
    <img id="world" src="<?php echo page('home')->files()->find('world.png')->url() ?>" />
    <?php endif ?>

    <ul id="adjectives" class="cycle-slideshow"
        data-cycle-slides="> li"
        data-cycle-speed="100"
        data-cycle-timeout="<?php echo page('home')->people_speed()->int() - 300 ?>"
        >
        <?php foreach(page('home')->adjectives()->yaml() as $adj): ?>
        <li id="<?php echo str_replace(" ", "_", strtolower($adj['title'])) ?>"><?php echo $adj['title'] ?></li>
        <?php endforeach ?>
    </ul>

    <div id="people" class="cycle-slideshow"
        data-cycle-speed="300"
        data-cycle-timeout="<?php echo page('home')->people_speed()->int() - 300 ?>"
        >
        <?php foreach(page('home')->files()->filterBy('filename', '*=', 'person') as $person): ?>
        <img src="<?php echo $person->url() ?>" />
        <?php endforeach ?>
    </div>

</div></section>

<?php foreach($pages->visible() as $section): ?>
    <?php snippet($section->uid(), array('data' => $section)) ?>

    <?php if($section->hasVisibleChildren()): ?>
        <a name="<?php echo $section->uid() ?>"></a>
        <?php foreach($section->children()->visible() as $subsection): ?>
            <?php snippet($subsection->uid(), array('data' => $subsection)) ?>
        <?php endforeach ?>
    <?php endif ?>
<?php endforeach ?>

<?php snippet('footer') ?>