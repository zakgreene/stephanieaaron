<section id="methods" data-nav="about"><div class="wrapper">

	<header class="site-title"><div class="wrapper">&nbsp;
	</div></header>

	<header class="title">
	    <h2><?php echo $data->parent()->title()->html() ?></h2>
	    <h1><?php echo $data->title()->html() ?></h1>
    </header>
    
    <article>
    	<?php echo $data->text()->kirbytext() ?>
    </article>

    <ul id="methods-list">
    	<?php foreach($data->methods()->yaml() as $method): ?>
    	<li id="<?php echo strtolower($method['title']) ?>">
    		<h3><a href="#more"><?php echo $method['title'] ?></a></h3>

    		<div class="more">
    			<?php echo kirbytext($method['desc']) ?>
    		</div>
    	</li>
    	<?php endforeach ?>
    </ul>
    
</div></section>