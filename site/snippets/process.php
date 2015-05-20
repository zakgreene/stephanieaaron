<section id="process" data-nav="about"><div class="wrapper">

	<header class="site-title"><div class="wrapper">&nbsp;
	</div></header>

	<header class="title">
	    <h2><?php echo $data->parent()->title()->html() ?></h2>
	    <h1><?php echo $data->title()->html() ?></h1>
   </header>
    
    <?php echo $data->text()->kirbytext() ?>
    
</div></section>