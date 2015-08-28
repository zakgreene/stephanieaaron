<section id="clients"><div class="wrapper">

	<?php snippet('site-title') ?>

    <h1><?php echo $data->title()->html() ?></h1>
    
    <div id="intro-text">
    	<?php echo $data->text()->kirbytext() ?>
    </div>

    <div class="columns">

    	<div class="col">
			<?php echo $data->column_1()->kirbytext() ?>
		</div>

    	<div class="col">
			<?php echo $data->column_2()->kirbytext() ?>
		</div>

    	<div class="col">
			<?php echo $data->column_3()->kirbytext() ?>
		</div>

    </div>
    
</div></section>