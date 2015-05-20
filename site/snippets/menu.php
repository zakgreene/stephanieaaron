<nav>

    <ul class="menu">
        <?php foreach($pages->visible() as $p): ?>
        <li>
            <a <?php e($p->isOpen(), ' class="active"') ?> href="#<?php echo $p->uri() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
    </ul>

</nav>
