<section id="contact"><div class="wrapper">

	<header class="site-title"><div class="wrapper"><a href="#intro"></a>
    	<h1><?php echo $site->author() ?></h1>
    	<h2><?php echo $site->practice() ?></h2>
	</div></header>

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