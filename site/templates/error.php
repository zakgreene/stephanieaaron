<?php snippet('header') ?>

<section id="intro"><div class="wrapper">

    <header class="site-title"><div class="wrapper">&nbsp;
    </div></header>

    <h1><?php echo $page->text()->html() ?></h1>

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