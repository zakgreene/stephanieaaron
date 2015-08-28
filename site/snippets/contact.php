<section id="contact"><div class="wrapper">

	<?php snippet('site-title') ?>

    <h1><?php echo $data->title()->html() ?></h1>
    
    <article>
    	<?php echo $data->text()->kirbytext() ?>
    </article>

    <ul>
    	<?php foreach($data->contacts()->yaml() as $contact): ?>
    	<li id="<?php echo strtolower($contact['title']) ?>"><?php if ($contact['link']): ?>
    			<a href="<?php echo $contact['link'] ?>" target="_blank"><?php echo $contact['title'] ?></a>
    		<?php else: ?><?php echo $contact['title'] ?><span><?php echo $contact['desc'] ?></span><?php endif ?></li>
    	<?php endforeach ?>
    </ul>
    
</div></section>