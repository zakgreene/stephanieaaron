<section id="bio" data-nav="about"><div class="wrapper">

	<header class="site-title"><div class="wrapper">&nbsp;
	</div></header>

    <header class="title">
        <h2><?php echo $data->parent()->title()->html() ?></h2>
        <h1><?php echo $data->title()->html() ?></h1>
    </header>

    <figure id="headshot">
    	<img src="<?php echo $data->image()->url() ?>" />
    </figure>

    <article id="bio-text">
    	<?php echo $data->text()->kirbytext() ?>

    	<a href="#more">Read More</a>

    	<div class="more">
    		<?php echo $data->more()->kirbytext() ?>
    	</div>

        <ul id="bio-links">
            <?php foreach($data->links()->yaml() as $link): ?>
            <li id="<?php echo str_replace(" ", "_", strtolower($link['title'])) ?>">
                <a href="<?php echo $link['link'] ?>" target="_blank"><?php echo $link['title'] ?></a>
            </li>
            <?php endforeach ?>
        </ul>
    </article>

    <aside>
    	<?php echo $data->sidebar()->kirbytext() ?>
    </aside>
</div></section>