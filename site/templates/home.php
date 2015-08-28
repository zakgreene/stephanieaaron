<?php snippet('header') ?>

<section id="intro">

    <?php snippet('site-title') ?>
    <div class="wrapper">

    <h3><?php echo $page->text()->html() ?></h3>

    <ul id="adjectives">
        <?php foreach($page->adjectives()->yaml() as $adj): ?>
        <li id="<?php echo str_replace(" ", "_", strtolower($adj['title'])) ?>"><?php echo $adj['title'] ?></li>
        <?php endforeach ?>
    </ul>

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